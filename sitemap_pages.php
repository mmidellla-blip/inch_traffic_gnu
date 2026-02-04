<?php
/**
 * 정적/핵심 페이지 사이트맵 (lastmod = filemtime 자동 반영)
 * 네이버·구글용. 페이지 파일 수정 시 lastmod가 자동으로 갱신됩니다.
 */
$base_dir = str_replace('\\', '/', dirname(__FILE__));
$base_url = 'https://trafficdrinking-law-dongju.com';
if (isset($_SERVER['HTTP_HOST'])) {
    $scheme = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $port   = (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != '80' && $_SERVER['SERVER_PORT'] != '443') ? ':' . $_SERVER['SERVER_PORT'] : '';
    $base_url = $scheme . '://' . $_SERVER['HTTP_HOST'] . $port . preg_replace('#/[^/]*$#', '', $_SERVER['SCRIPT_NAME']);
}

// [ URL, 파일 경로(상대, lastmod용), changefreq, priority ]
// 파일 경로가 비어 있으면 현재일로 lastmod (예: 게시판 목록은 board.php 수정일)
$pages = array(
    array('/' , $base_dir . '/index.php', 'weekly', '1.0'),
    array('/page/greetings.php?me_code=1010', $base_dir . '/page/greetings.php', 'monthly', '0.9'),
    array('/page/lawyer.php?me_code=1020', $base_dir . '/page/lawyer.php', 'monthly', '0.9'),
    array('/page/differentiation.php?me_code=1030', $base_dir . '/page/differentiation.php', 'monthly', '0.9'),
    array('/page/location.php?me_code=1040', $base_dir . '/page/location.php', 'monthly', '0.9'),
    array('/page/center_info.php?me_code=2010', $base_dir . '/page/center_info.php', 'monthly', '0.8'),
    array('/bbs/board.php?bo_table=case&me_code=3010', $base_dir . '/bbs/board.php', 'weekly', '0.8'),
    array('/bbs/board.php?bo_table=review&me_code=3020', $base_dir . '/bbs/board.php', 'weekly', '0.8'),
    array('/bbs/board.php?bo_table=column&me_code=4010', $base_dir . '/bbs/board.php', 'weekly', '0.8'),
    array('/bbs/board.php?bo_table=media&me_code=4020', $base_dir . '/bbs/board.php', 'weekly', '0.8'),
    array('/page/drunken01.php?me_code=5010', $base_dir . '/page/drunken01.php', 'monthly', '0.7'),
    array('/page/drunken02.php?me_code=5040', $base_dir . '/page/drunken02.php', 'monthly', '0.7'),
    array('/bbs/board.php?bo_table=online&me_code=6010', $base_dir . '/bbs/board.php', 'weekly', '0.8'),
    array('/page/self_test.php?me_code=7010', $base_dir . '/page/self_test.php', 'monthly', '0.8'),
);

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
echo '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . "\n";
echo '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9' . "\n";
echo '                          http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";

foreach ($pages as $p) {
    list($path, $file, $changefreq, $priority) = $p;
    $loc = rtrim($base_url, '/') . ($path === '/' ? '' : $path);
    if ($file !== '' && file_exists($file)) {
        $lastmod = date('Y-m-d', filemtime($file));
    } else {
        $lastmod = date('Y-m-d');
    }
    echo "  <url>\n";
    echo "    <loc>" . htmlspecialchars($loc, ENT_XML1, 'UTF-8') . "</loc>\n";
    echo "    <lastmod>" . $lastmod . "</lastmod>\n";
    echo "    <changefreq>" . htmlspecialchars($changefreq, ENT_XML1, 'UTF-8') . "</changefreq>\n";
    echo "    <priority>" . htmlspecialchars($priority, ENT_XML1, 'UTF-8') . "</priority>\n";
    echo "  </url>\n";
}

echo '</urlset>';
