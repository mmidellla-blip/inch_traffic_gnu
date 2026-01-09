<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

/**
 * 네이버 이미지 캡차 API 라이브러리
 * https://developers.naver.com/docs/captcha/
 */

// 네이버 캡차 API 설정
define('NAVER_CAPTCHA_API_URL', 'https://openapi.naver.com/v1/captcha');

/**
 * 네이버 캡차 키 발급
 * @return array 캡차 키 정보
 */
function naver_captcha_get_key() {
    // data/dbconfig.php에서 정의된 상수 사용
    if (!defined('NAVER_CAPTCHA_CLIENT_ID') || !defined('NAVER_CAPTCHA_CLIENT_SECRET')) {
        return array('error' => '네이버 API 키가 설정되지 않았습니다. data/dbconfig.php 파일을 확인하세요.');
    }
    
    $client_id = NAVER_CAPTCHA_CLIENT_ID;
    $client_secret = NAVER_CAPTCHA_CLIENT_SECRET;
    
    if (empty($client_id) || empty($client_secret)) {
        return array('error' => '네이버 API 키가 설정되지 않았습니다.');
    }
    
    $url = NAVER_CAPTCHA_API_URL . '/nkey?code=0';
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'X-Naver-Client-Id: ' . $client_id,
        'X-Naver-Client-Secret: ' . $client_secret
    ));
    
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($http_code == 200) {
        $result = json_decode($response, true);
        if (isset($result['key'])) {
            // 세션에 캡차 키 저장
            set_session('naver_captcha_key', $result['key']);
            return $result;
        }
    }
    
    return array('error' => '캡차 키 발급에 실패했습니다.');
}

/**
 * 네이버 캡차 HTML 출력
 * @return string 캡차 HTML
 */
function naver_captcha_html() {
    // data/dbconfig.php에서 정의된 상수 사용
    if (!defined('NAVER_CAPTCHA_CLIENT_ID') || !defined('NAVER_CAPTCHA_CLIENT_SECRET')) {
        return '<div class="captcha-error">네이버 캡차 API 키가 설정되지 않았습니다. data/dbconfig.php 파일을 확인하세요.</div>';
    }
    
    $key_result = naver_captcha_get_key();
    
    if (isset($key_result['error'])) {
        return '<div class="captcha-error">' . $key_result['error'] . '</div>';
    }
    
    $captcha_key = $key_result['key'];
    $image_url = NAVER_CAPTCHA_API_URL . '/ncaptcha.bin?key=' . $captcha_key;
    
    $html = '<div class="naver-captcha-wrap">';
    $html .= '<div class="captcha-title">아래 이미지 속 문자를 입력해주세요.</div>';
    $html .= '<div class="captcha-image-wrap">';
    $html .= '<img id="naver_captcha_img" src="' . $image_url . '" alt="캡차 이미지" onclick="naver_captcha_refresh();" />';
    $html .= '<button type="button" class="captcha-refresh-btn" onclick="naver_captcha_refresh();">↻ 새로고침</button>';
    $html .= '</div>';
    $html .= '<div class="captcha-input-wrap">';
    $html .= '<input type="text" name="naver_captcha_input" id="naver_captcha_input" class="captcha-input" placeholder="자동입력 방지문자" required  />';
    $html .= '<input type="hidden" name="naver_captcha_key" id="naver_captcha_key" value="' . $captcha_key . '" />';
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}

/**
 * 네이버 캡차 JavaScript
 * @return string 캡차 JavaScript
 */
function naver_captcha_js() {
    $js = '
    function naver_captcha_refresh() {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "' . G5_BBS_URL . '/naver_captcha_key.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var result = JSON.parse(xhr.responseText);
                if (result.key) {
                    document.getElementById("naver_captcha_key").value = result.key;
                    document.getElementById("naver_captcha_img").src = "' . NAVER_CAPTCHA_API_URL . '/ncaptcha.bin?key=" + result.key + "&t=" + new Date().getTime();
                    document.getElementById("naver_captcha_input").value = "";
                } else {
                    alert("캡차 새로고침에 실패했습니다.");
                }
            }
        };
        xhr.send();
    }
    ';
    
    return $js;
}

/**
 * 네이버 캡차 검증
 * @param string $user_input 사용자 입력값
 * @param string $captcha_key 캡차 키
 * @return bool 검증 결과
 */
function naver_captcha_verify($user_input, $captcha_key = '') {
    if (empty($user_input)) {
        return false;
    }
    
    // data/dbconfig.php에서 정의된 상수 사용
    if (!defined('NAVER_CAPTCHA_CLIENT_ID') || !defined('NAVER_CAPTCHA_CLIENT_SECRET')) {
        return false;
    }
    
    $client_id = NAVER_CAPTCHA_CLIENT_ID;
    $client_secret = NAVER_CAPTCHA_CLIENT_SECRET;
    
    if (empty($client_id) || empty($client_secret)) {
        return false;
    }
    
    // 세션에서 캡차 키 가져오기
    if (empty($captcha_key)) {
        $captcha_key = get_session('naver_captcha_key');
    }
    
    if (empty($captcha_key)) {
        return false;
    }
    
    // 네이버 캡차 검증 API URL
    // 네이버 캡차 API 문서에 따르면:
    // - 키 발급: GET /v1/captcha/nkey?code=0
    // - 검증: GET /v1/captcha/nkey?code=1&key={캡차키}&value={사용자입력값}
    // 주의: code=0이면 키 발급, code=1이면 검증
    $url = NAVER_CAPTCHA_API_URL . '/nkey?code=1&key=' . urlencode($captcha_key) . '&value=' . urlencode($user_input);
    
    error_log("검증 API URL 구성 확인:");
    error_log("  - code 파라미터: 1 (검증 요청)");
    error_log("  - key 파라미터: " . substr($captcha_key, 0, 20) . "...");
    error_log("  - value 파라미터: " . urlencode($user_input) . " (원본: " . $user_input . ")");
    error_log("  - 최종 URL: " . $url);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'X-Naver-Client-Id: ' . $client_id,
        'X-Naver-Client-Secret: ' . $client_secret
    ));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_error = curl_error($ch);
    curl_close($ch);
    
    // CURL 오류 확인
    if ($curl_error) {
        error_log("네이버 캡차 검증 CURL 오류: " . $curl_error);
        return false;
    }
    
    // 디버깅을 위한 상세 로깅
    error_log("==========================================");
    error_log("=== 네이버 캡차 검증 시작 ===");
    error_log("요청 URL: " . $url);
    error_log("사용자 입력값: '" . $user_input . "' (길이: " . strlen($user_input) . ")");
    error_log("캡차 키: " . substr($captcha_key, 0, 30) . "... (전체 길이: " . strlen($captcha_key) . ")");
    error_log("Client ID: " . substr($client_id, 0, 10) . "...");
    error_log("HTTP 응답 코드: " . $http_code);
    error_log("CURL 오류: " . ($curl_error ? $curl_error : '없음'));
    error_log("응답 원본: " . $response);
    error_log("응답 길이: " . strlen($response));
    
    // 네이버 캡차 API는 HTTP 200 또는 403 모두 정상 응답일 수 있음
    // 문서 예제에서 403 Forbidden이지만 {"result":true} 응답이 올 수 있음
    if ($http_code == 200 || $http_code == 403) {
        $result = json_decode($response, true);
        
        // JSON 디코드 오류 확인
        if (json_last_error() !== JSON_ERROR_NONE) {
            error_log("네이버 캡차 JSON 파싱 오류: " . json_last_error_msg() . " - 응답: " . $response);
            return false;
        }
        
        error_log("--- JSON 파싱 결과 ---");
        error_log("파싱된 결과 타입: " . gettype($result));
        error_log("파싱된 결과 내용: " . print_r($result, true));
        error_log("JSON 파싱 오류: " . (json_last_error() !== JSON_ERROR_NONE ? json_last_error_msg() : '없음'));
        
        // 네이버 캡차 API 응답 확인
        // 네이버 캡차 API는 검증 성공 시 {"result": true} 형식으로 응답
        
        // 응답이 빈 문자열이거나 null인 경우 - 실패로 처리
        if (empty($result) || $result === null) {
            error_log("ERROR: 네이버 캡차 응답이 비어있음 - 실패로 처리");
            error_log("응답 원본: " . $response);
            error_log("==========================================");
            return false;
        }
        
        // result 키가 있는 경우
        if (isset($result['result'])) {
            $result_value = $result['result'];
            error_log("--- result 키 확인 ---");
            error_log("result 값: " . var_export($result_value, true));
            error_log("result 타입: " . gettype($result_value));
            error_log("result === true: " . ($result_value === true ? 'YES' : 'NO'));
            error_log("result === 1: " . ($result_value === 1 ? 'YES' : 'NO'));
            error_log("result === 'true': " . ($result_value === 'true' ? 'YES' : 'NO'));
            error_log("result === '1': " . ($result_value === '1' ? 'YES' : 'NO'));
            
            // boolean true 또는 문자열 "true", 숫자 1 등 확인
            if ($result_value === true || $result_value === 1 || $result_value === 'true' || $result_value === '1') {
                // 검증 성공 후에만 세션에서 캡차 키 삭제
                set_session('naver_captcha_key', '');
                error_log("SUCCESS: 네이버 캡차 검증 성공!");
                error_log("==========================================");
                return true;
            } else {
                // 검증 실패 로깅
                error_log("ERROR: 네이버 캡차 검증 실패");
                error_log("result 값이 true가 아님: " . var_export($result_value, true));
                if (isset($result['errorMessage'])) {
                    error_log("에러 메시지: " . $result['errorMessage']);
                }
                error_log("전체 응답: " . $response);
                error_log("==========================================");
                return false;
            }
        } 
        // success 키가 있는 경우 (일부 API는 success 키 사용)
        else if (isset($result['success'])) {
            $success_value = $result['success'];
            error_log("--- success 키 확인 ---");
            error_log("success 값: " . var_export($success_value, true));
            error_log("success 타입: " . gettype($success_value));
            
            if ($success_value === true || $success_value === 1 || $success_value === 'true' || $success_value === '1') {
                set_session('naver_captcha_key', '');
                error_log("SUCCESS: 네이버 캡차 검증 성공 (success 키)!");
                error_log("==========================================");
                return true;
            } else {
                error_log("ERROR: 네이버 캡차 검증 실패 (success 키)");
                error_log("==========================================");
                return false;
            }
        }
        // error 키가 있는 경우
        else if (isset($result['error']) || isset($result['errorCode']) || isset($result['errorMessage'])) {
            // 에러 응답
            error_log("--- API 에러 응답 ---");
            if (isset($result['error'])) {
                error_log("error: " . print_r($result['error'], true));
            }
            if (isset($result['errorCode'])) {
                error_log("errorCode: " . $result['errorCode']);
            }
            if (isset($result['errorMessage'])) {
                error_log("errorMessage: " . $result['errorMessage']);
            }
            error_log("전체 응답: " . $response);
            error_log("==========================================");
            return false;
        } 
        // 응답이 있지만 예상한 키가 없는 경우
        else {
            // 응답 형식 오류 - 로그에 전체 응답 기록
            error_log("--- 응답 형식 오류 ---");
            error_log("ERROR: result/success/error 키가 모두 없음");
            error_log("전체 응답 원본: " . $response);
            error_log("응답 구조: " . print_r($result, true));
            error_log("응답의 모든 키: " . implode(', ', array_keys($result)));
            
            // key 키가 있는 경우 - 키 발급 응답으로 오는 경우 (잘못된 API 호출)
            if (isset($result['key'])) {
                error_log("WARNING: 검증 API 호출했는데 키 발급 응답이 옴!");
                error_log("  - 응답에 'key' 키가 있음: " . $result['key']);
                error_log("  - 이것은 검증 API가 아닌 키 발급 API 응답입니다.");
                error_log("  - 네이버 캡차 API가 검증 요청을 키 발급 요청으로 잘못 처리했습니다.");
                error_log("  - 가능한 원인:");
                error_log("    1. code 파라미터가 '0'으로 전달됨");
                error_log("    2. 네이버 API가 code 값을 무시하고 키 발급으로 처리");
                error_log("    3. 네이버 캡차 API 문서와 실제 동작이 다름");
                error_log("  - 해결 방법: 네이버 캡차 API 문서를 확인하여 올바른 검증 방법 확인 필요");
            }
            
            error_log("==========================================");
            return false;
        }
    } else {
        // HTTP 오류 로깅
        error_log("--- HTTP 오류 ---");
        error_log("ERROR: HTTP 응답 코드가 200이 아님");
        error_log("HTTP 코드: " . $http_code);
        error_log("응답 내용: " . $response);
        error_log("CURL 오류: " . ($curl_error ? $curl_error : '없음'));
        error_log("==========================================");
        return false;
    }
}

/**
 * 네이버 캡차 검증 JavaScript
 * @return string 검증 JavaScript
 */
function naver_captcha_verify_js() {
    $js = '
    // 네이버 캡차 검증
    var naver_captcha_input = document.getElementById("naver_captcha_input");
    var naver_captcha_key = document.getElementById("naver_captcha_key");
    
    if (!naver_captcha_input || !naver_captcha_key) {
        return true; // 캡차가 없으면 통과
    }
    
    if (!naver_captcha_input.value) {
        alert("자동등록방지 문자를 입력해주세요.");
        naver_captcha_input.focus();
        return false;
    }
    ';
    
    return $js;
}
