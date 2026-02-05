<?php
/**
 * 게시글 상세 동적 사이트맵 (네이버·구글용)
 * bbs/board.php?bo_table=xxx&wr_id=yyy 형태 URL 출력
 * 호출: /sitemap_posts.php 또는 /sitemap_posts.php?bo_table=case (특정 게시판만)
 *
 * SEO 방어: 오류 URL 미포함 — g5_board에 있는 게시판만 대상, 원글만 포함. (그누보드: 원글은 wr_parent=wr_id 로 저장됨)
 */
define('_GNUBOARD_', true);
ob_start();
define('G5_SET_TIME_LIMIT', 60);
@set_time_limit(60);

$g5_path = array(
    'path' => str_replace('\\', '/', dirname(__FILE__)),
    'url'  => ''
);
if (isset($_SERVER['HTTP_HOST'])) {
    $scheme = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $port   = (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != '80' && $_SERVER['SERVER_PORT'] != '443') ? ':' . $_SERVER['SERVER_PORT'] : '';
    $g5_path['url'] = $scheme . '://' . $_SERVER['HTTP_HOST'] . $port . preg_replace('#/[^/]*$#', '', $_SERVER['SCRIPT_NAME']);
}

include_once($g5_path['path'] . '/config.php');
$dbconfig_file = G5_DATA_PATH . '/' . G5_DBCONFIG_FILE;
if (!file_exists($dbconfig_file)) {
    ob_end_clean();
    header('Content-Type: text/plain; charset=utf-8');
    echo 'DB config not found';
    exit;
}
include_once($dbconfig_file);
include_once(G5_LIB_PATH . '/hook.lib.php');
include_once(G5_LIB_PATH . '/get_data.lib.php');
include_once(G5_LIB_PATH . '/common.lib.php');
$connect_db = sql_connect(G5_MYSQL_HOST, G5_MYSQL_USER, G5_MYSQL_PASSWORD);
if (!$connect_db) {
    ob_end_clean();
    header('Content-Type: text/plain; charset=utf-8');
    echo 'DB connect error';
    exit;
}
sql_select_db(G5_MYSQL_DB, $connect_db);
$g5['connect_db'] = $connect_db;
sql_set_charset(G5_DB_CHARSET, $connect_db);
if (defined('G5_MYSQL_SET_MODE') && G5_MYSQL_SET_MODE) {
    sql_query("SET SESSION sql_mode = ''");
}

$base_url = 'https://trafficdrinking-law-dongju.com';
if (defined('G5_URL') && G5_URL !== '') {
    $base_url = rtrim(G5_URL, '/');
}
$bbs_url = $base_url . '/' . G5_BBS_DIR;

$max_urls = 50000; // 사이트맵 1개당 최대 URL 수
$only_bo_table = isset($_GET['bo_table']) ? preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['bo_table']) : '';
$debug = isset($_GET['debug']) && $_GET['debug'] === '1';

// DB에서 게시판 목록 조회
$board_list = array();
$sql_boards = " SELECT bo_table FROM " . $g5['board_table'] . " WHERE 1=1 ";
if ($only_bo_table !== '') {
    $sql_boards .= " AND bo_table = '" . $only_bo_table . "' ";
}
$sql_boards .= " ORDER BY bo_table ";
$result_boards = sql_query($sql_boards);
if ($result_boards) {
    while ($row = sql_fetch_array($result_boards)) {
        $board_list[] = $row['bo_table'];
    }
}
// DB에서 0개면 sitemap_pages 기준 게시판 ID 폴백
if (empty($board_list)) {
    $fallback_boards = array('case', 'review', 'column', 'media', 'online');
    if ($only_bo_table !== '' && in_array($only_bo_table, $fallback_boards, true)) {
        $board_list = array($only_bo_table);
    } else {
        $board_list = $fallback_boards;
    }
}

if ($debug) {
    $debug_lines = array();
    $grand_total = 0;
    foreach ($board_list as $bo_table) {
        $write_table = $g5['write_prefix'] . $bo_table;
        $cnt_res = sql_fetch(" SELECT COUNT(*) as cnt FROM {$write_table} WHERE wr_parent = wr_id ");
        $cnt = $cnt_res ? (int)$cnt_res['cnt'] : -1;
        if ($cnt < 0) {
            $debug_lines[] = "board: {$bo_table}, table: {$write_table}, error: query_fail";
        } else {
            $debug_lines[] = "board: {$bo_table}, table: {$write_table}, posts: {$cnt}";
            $grand_total += $cnt;
        }
    }
    ob_end_clean();
    header('Content-Type: text/plain; charset=utf-8');
    echo "DB: " . G5_MYSQL_DB . "\n";
    echo "board_table: " . $g5['board_table'] . "\n";
    echo "write_prefix: " . $g5['write_prefix'] . "\n";
    echo "boards_used: " . count($board_list) . " (" . implode(', ', $board_list) . ")\n";
    echo "total_posts: " . $grand_total . "\n\n";
    echo implode("\n", $debug_lines);
    exit;
}

ob_end_clean();
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
echo '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . "\n";
echo '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9' . "\n";
echo '                          http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";

$total = 0;
foreach ($board_list as $bo_table) {
    $write_table = $g5['write_prefix'] . $bo_table;
    $sql = " SELECT wr_id, wr_datetime FROM {$write_table}
             WHERE wr_parent = wr_id
             ORDER BY wr_id DESC ";
    if ($max_urls > 0) {
        $sql .= " LIMIT " . (int) ($max_urls - $total) . " ";
    }
    $res = sql_query($sql);
    if (!$res) {
        continue;
    }
    while ($row = sql_fetch_array($res)) {
        $loc = $bbs_url . '/board.php?bo_table=' . $bo_table . '&wr_id=' . (int) $row['wr_id'];
        $lastmod = date('Y-m-d', strtotime($row['wr_datetime']));
        echo "  <url>\n";
        echo "    <loc>" . htmlspecialchars($loc, ENT_XML1, 'UTF-8') . "</loc>\n";
        echo "    <lastmod>" . $lastmod . "</lastmod>\n";
        echo "    <changefreq>monthly</changefreq>\n";
        echo "    <priority>0.6</priority>\n";
        echo "  </url>\n";
        $total++;
        if ($max_urls > 0 && $total >= $max_urls) {
            break 2;
        }
    }
}

echo '</urlset>';
