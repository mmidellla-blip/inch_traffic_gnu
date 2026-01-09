<?php
define('G5_CAPTCHA', true);
include_once('./_common.php');
include_once(G5_LIB_PATH.'/naver_captcha.lib.php');

header('Content-Type: application/json; charset=utf-8');

$naver_captcha_input = isset($_POST['naver_captcha_input']) ? trim($_POST['naver_captcha_input']) : '';
$naver_captcha_key = isset($_POST['naver_captcha_key']) ? trim($_POST['naver_captcha_key']) : '';

$result = array('success' => false, 'message' => '');

if (empty($naver_captcha_input)) {
    $result['message'] = '자동등록방지 문자를 입력해주세요.';
    echo json_encode($result);
    exit;
}

if (empty($naver_captcha_key)) {
    $result['message'] = '자동등록방지 오류가 발생했습니다. 페이지를 새로고침해주세요.';
    echo json_encode($result);
    exit;
}

// 네이버 캡차 검증
error_log("==========================================");
error_log("=== AJAX 네이버 캡차 검증 시작 ===");
error_log("입력값: '" . $naver_captcha_input . "' (길이: " . strlen($naver_captcha_input) . ")");
error_log("키: " . substr($naver_captcha_key, 0, 30) . "... (전체 길이: " . strlen($naver_captcha_key) . ")");
error_log("POST 데이터 전체: " . print_r($_POST, true));

$verify_result = naver_captcha_verify($naver_captcha_input, $naver_captcha_key);

error_log("--- AJAX 검증 최종 결과 ---");
error_log("검증 결과: " . var_export($verify_result, true));
error_log("검증 결과 타입: " . gettype($verify_result));
error_log("검증 결과 === true: " . ($verify_result === true ? 'YES' : 'NO'));

if ($verify_result === true) {
    $result['success'] = true;
    $result['message'] = '검증 성공';
    error_log("SUCCESS: AJAX 검증 성공!");
    
    // AJAX 검증 성공 시 세션에 검증 완료 플래그 저장 (서버 측 중복 검증 방지)
    // 네이버 캡차는 한 번 검증하면 키가 무효화되므로 서버 측에서 다시 검증하면 실패함
    set_session('naver_captcha_verified_' . $naver_captcha_key, true);
    error_log("세션에 검증 완료 플래그 저장: naver_captcha_verified_" . substr($naver_captcha_key, 0, 20) . "...");
} else {
    $result['success'] = false;
    $result['message'] = '자동등록방지 문자가 틀렸습니다. 다시 입력해주세요.';
    error_log("ERROR: AJAX 검증 실패");
}
error_log("==========================================");

echo json_encode($result);
exit;