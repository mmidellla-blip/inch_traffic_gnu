<?php
/**
 * 서버( Apache / Nginx ) ErrorDocument 진입점
 *
 * .htaccess: ErrorDocument 404 /error.php?code=404
 * 사용자에게는 안내 HTML 출력, 검색엔진에는 404/403/503 전달 (200 금지)
 *
 * 최소 부트스트랩만 사용 (DB·세션 불필요)
 */
if (!defined('_GNUBOARD_')) {
    define('_GNUBOARD_', true);
}
$code = isset($_GET['code']) ? (int) $_GET['code'] : 404;
if (!in_array($code, array(404, 403, 503), true)) {
    $code = 404;
}

$doc_root = str_replace('\\', '/', __DIR__);
define('G5_PATH', $doc_root);
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
define('G5_URL', $protocol . '://' . $host);
define('G5_DATA_PATH', $doc_root . '/data');

if (!headers_sent()) {
    http_response_code($code);
    if ($code === 503 && isset($_GET['retry']) && (int) $_GET['retry'] > 0) {
        header('Retry-After: ' . (int) $_GET['retry']);
    }
}

$request_uri = isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '');
if ($code === 404 && $request_uri !== '' && strpos($request_uri, 'error.php') === false) {
    $log_dir = G5_DATA_PATH . '/log';
    if (!is_dir($log_dir)) {
        @mkdir($log_dir, 0755, true);
    }
    $line = date('Y-m-d H:i:s') . "\t" . $request_uri . "\t" . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '-') . "\t" . (isset($_SERVER['HTTP_USER_AGENT']) ? substr($_SERVER['HTTP_USER_AGENT'], 0, 200) : '-') . "\n";
    @file_put_contents($log_dir . '/404.log', $line, FILE_APPEND | LOCK_EX);
}

$messages = array(
    404 => array('title' => '페이지를 찾을 수 없습니다', 'message' => '요청하신 페이지를 찾을 수 없습니다. 주소가 잘못되었거나 삭제되었을 수 있습니다.'),
    403 => array('title' => '접근 권한이 없습니다', 'message' => '이 페이지에 접근할 수 있는 권한이 없습니다. 로그인 후 이용해 주세요.'),
    503 => array('title' => '서비스 이용이 어렵습니다', 'message' => '일시적으로 이용이 어렵습니다. 잠시 후 다시 이용해 주세요.'),
);
$m = isset($messages[$code]) ? $messages[$code] : $messages[404];

$GLOBALS['error_response'] = array(
    'code'    => $code,
    'title'   => $m['title'],
    'message' => $m['message'],
);
include __DIR__ . '/error_page.php';
