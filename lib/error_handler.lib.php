<?php
/**
 * HTTP 상태 코드 기반 공통 오류 처리 (SEO·웹표준)
 *
 * - 사용자에게는 안내 페이지(HTML) 출력
 * - 검색엔진에는 올바른 HTTP Status Code 전달 (오류 페이지에서 200 반환 금지)
 * - 오류 페이지: noindex, canonical 미설정
 *
 * 사용처: 존재하지 않는 콘텐츠(404), 권한 없음(403), 점검/종료(503), 영구이전(301)
 */
if (!defined('_GNUBOARD_')) exit;

/**
 * 404 Not Found — 존재하지 않는 콘텐츠/URL/삭제된 글
 * @param string $message 사용자에게 보여줄 메시지
 * @param string|null $request_uri 로그용 요청 URI (null이면 $_SERVER['REQUEST_URI'] 사용)
 */
function send_error_404($message = '요청하신 페이지를 찾을 수 없습니다.', $request_uri = null) {
    if (!headers_sent()) {
        http_response_code(404);
    }
    $uri = $request_uri !== null ? $request_uri : (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '');
    log_error_404($uri);
    $GLOBALS['error_response'] = array(
        'code'    => 404,
        'message' => $message,
        'title'   => '페이지를 찾을 수 없습니다',
    );
    include_once(G5_PATH . '/error_page.php');
    exit;
}

/**
 * 403 Forbidden — 로그인 필요 등 권한 없음 (리다이렉트 없이 403 + 안내 페이지)
 * @param string $message 사용자에게 보여줄 메시지
 * @param string|null $login_url 로그인 페이지 URL (있으면 안내 문구에 링크)
 */
function send_error_403($message = '이 페이지에 접근할 수 있는 권한이 없습니다.', $login_url = null) {
    if (!headers_sent()) {
        http_response_code(403);
    }
    $GLOBALS['error_response'] = array(
        'code'      => 403,
        'message'   => $message,
        'title'     => '접근 권한이 없습니다',
        'login_url' => $login_url,
    );
    include_once(G5_PATH . '/error_page.php');
    exit;
}

/**
 * 503 Service Unavailable — 점검 중 또는 서비스 종료
 * @param string $message 사용자에게 보여줄 메시지
 * @param int $retry_after Retry-After 헤더 값(초). 0이면 헤더 생략
 */
function send_error_503($message = '일시적으로 이용이 어렵습니다. 잠시 후 다시 이용해 주세요.', $retry_after = 3600) {
    if (!headers_sent()) {
        http_response_code(503);
        if ($retry_after > 0) {
            header('Retry-After: ' . (int) $retry_after);
        }
    }
    $GLOBALS['error_response'] = array(
        'code'         => 503,
        'message'      => $message,
        'title'        => '서비스 이용이 어렵습니다',
        'retry_after'  => $retry_after,
    );
    include_once(G5_PATH . '/error_page.php');
    exit;
}

/**
 * 301 Moved Permanently — 영구 이전 (체인 리다이렉트 금지, 한 번만 이동)
 * @param string $new_url 절대 URL (동일 도메인 권장)
 */
function send_redirect_301($new_url) {
    $new_url = trim($new_url);
    if ($new_url === '') {
        return;
    }
    if (!headers_sent()) {
        header('Location: ' . $new_url, true, 301);
    }
    exit;
}

/**
 * 404 발생 URL 로그 (검색엔진/크롤러 대응·분석용)
 * @param string $request_uri
 */
function log_error_404($request_uri) {
    $log_dir = defined('G5_DATA_PATH') ? G5_DATA_PATH . '/log' : dirname(G5_PATH) . '/data/log';
    if (!is_dir($log_dir)) {
        @mkdir($log_dir, 0755, true);
    }
    $log_file = $log_dir . '/404.log';
    $line = date('Y-m-d H:i:s') . "\t" . ($request_uri ?: '-') . "\t" . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '-') . "\t" . (isset($_SERVER['HTTP_USER_AGENT']) ? substr($_SERVER['HTTP_USER_AGENT'], 0, 200) : '-') . "\n";
    @file_put_contents($log_file, $line, FILE_APPEND | LOCK_EX);
}
