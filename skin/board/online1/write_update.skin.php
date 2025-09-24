
<script type='text/javascript' src='//wcs.naver.net/wcslog.js'></script>
<script type='text/javascript'>
    if(window.wcs){
    if(!wcs_add) var wcs_add = {};
    wcs_add['wa'] = 's_59bf2b5a701';
    var _conv = {};
    	_conv.type = 'lead';    	
    wcs.trans(_conv);
    }
</script>


<?php 

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if($w==""){
// include_once(G5_LIB_PATH.'/icode.sms.lib.php'); 
include_once(G5_LIB_PATH.'/icode.lms.lib.php'); 
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');
if (!chk_captcha()) {
    alert('자동등록방지 숫자가 틀렸습니다.');
}

define('LMS_BODY_BYTE_LIMIT',    1200); // 아이코드 LMS 본문(내용) EUC-KR 기준 바이트 한도
define('LMS_SUBJECT_BYTE_LIMIT',   40); // 아이코드 LMS 제목 EUC-KR 기준 바이트 한도

function to_euckr_bytes(string $utf8): string {
    $utf8 = str_replace("\r\n", "\n", $utf8); // 개행 정규화
    $euckr = @iconv('UTF-8', 'EUC-KR//IGNORE', $utf8);
    return $euckr === false ? '' : $euckr;
}
function euckr_len(string $utf8): int {
    return strlen(to_euckr_bytes($utf8));
}
function clamp_subject_for_lms(string $subject, int $limit = LMS_SUBJECT_BYTE_LIMIT): string {
    if ($subject === '') return '';
    if (euckr_len($subject) <= $limit) return $subject;

    // 여유 있게 문자 단위로 줄여감
    $lo = 0;
    $hi = mb_strlen($subject, 'UTF-8');
    $best = '';
    while ($lo <= $hi) {
        $mid = intdiv($lo + $hi, 2);
        $cand = mb_substr($subject, 0, $mid, 'UTF-8');
        if (euckr_len($cand) <= $limit) {
            $best = $cand;
            $lo = $mid + 1;
        } else {
            $hi = $mid - 1;
        }
    }
    return $best;
}
function split_lms_body_chunks(string $bodyUtf8, int $usableBytesPerPart): array {
    if ($bodyUtf8 === '') return [''];

    $chunks = [];
    $cur = '';
    $n = mb_strlen($bodyUtf8, 'UTF-8');

    for ($i = 0; $i < $n; $i++) {
        $ch = mb_substr($bodyUtf8, $i, 1, 'UTF-8');
        $cand = $cur . $ch;
        if (euckr_len($cand) <= $usableBytesPerPart) {
            $cur = $cand;
        } else {
            if ($cur !== '') $chunks[] = $cur;
            // 현재 글자 하나가 너무 길어도(거의 없음) 다음 루프로 넘김
            if (euckr_len($ch) <= $usableBytesPerPart) {
                $cur = $ch;
            } else {
                // 변환 불가/이상 문자면 스킵
                $cur = '';
            }
        }
    }
    if ($cur !== '') $chunks[] = $cur;

    return $chunks;
}

function send_lms_multipart_with_icode($recv_number, $send_number, $subject, $body, array $opts = []): bool
{
    global $config;

    $subject = clamp_subject_for_lms($subject, LMS_SUBJECT_BYTE_LIMIT);

    // 먼저 본문을 2,000바이트로 분할
    $parts = split_lms_body_chunks($body, LMS_BODY_BYTE_LIMIT);

    // 파트 인덱스 꼬리표 옵션
    $useIndexSuffix = !empty($opts['index_suffix']);
    if ($useIndexSuffix) {
        $total = count($parts);
        foreach ($parts as $i => &$p) {
            $tag = " [" . ($i+1) . "/$total]";
            // 꼬리표까지 합쳐 2,000바이트 이하가 되도록 뒤에서 줄임
            while (euckr_len($p . $tag) > LMS_BODY_BYTE_LIMIT && $p !== '') {
                $p = mb_substr($p, 0, mb_strlen($p, 'UTF-8') - 1, 'UTF-8');
            }
            $p .= $tag;
        }
        unset($p);
    }

    // 수신자 배열 (네 코드와 동일)
    $strDest = array();
    $strDest[0] = $recv_number;
    $idx = 0;
    $total = count($parts);
    
    // 각 파트를 큐에 적재 (Add 여러 번 → 마지막에 Send 한 번)
    foreach ($parts as $contentUtf8) {
        $idx++;
        $subjectEucKr = to_euckr_bytes($subject);
        $contentEucKr = to_euckr_bytes($contentUtf8);

        // 연결
        $SMS = new LMS; // 아이코드 LMS 객체
        $SMS->SMS_con(
            $config['cf_icode_server_ip'],
            $config['cf_icode_id'],
            $config['cf_icode_pw'],
            '1' 
        );
        $res = $SMS->Add(
            $strDest,
            $send_number,
            $config['cf_icode_id'],
            $subjectEucKr."[".$idx."/".$total."]", // 제목
            "",            // 예약 일시
            $contentEucKr, // 본문
            "",            
            "1"            
        );
        $sendResult = $SMS->Send(); 
        usleep(500010); // 1초 대기 (너무 빠르면 icode 서버가 에러를 뱉음)
    }
    
    return (bool)$sendResult;
}

function html_to_text($html) {
    $html = str_ireplace(['<br>', '<br/>', '<br />'], "\n", $html);
    $html = preg_replace('/<\/p>/i', "\n", $html);
    $text = html_entity_decode($html, ENT_QUOTES, 'UTF-8');
    $text = strip_tags($text);
    $text = str_replace('&nbsp;',' ',$text);
    return trim($text);
}

$fileCheck = 'X';
if (!empty($_FILES['bf_file']['name'][0])) {
    $fileCheck = 'O';
}
if (!empty($_FILES['bf_file']['name'][1])) {
    $fileCheck = 'O';
}
if (!empty($_FILES['bf_file']['name'][2])) {
    $fileCheck = 'O';
}

 // 문의글 등록시 관리자에게 전송 
  $send_hp_mb = "010-3488-8359"; // 보내는 전화번호 
  $recv_hp_mb = "010-3488-8359"; //  받는 전화번호 
  $send_hp = str_replace("-","",$send_hp_mb); // - 제거 
  $recv_hp = str_replace("-","",$recv_hp_mb); // - 제거 
  $send_number =  "$send_hp"; 
  $recv_number = "$recv_hp"; 

  $send_number = "01034888359"; 
  $recv_number = "01034888359"; 
  $sms_content ="[교통음주] ".$wr_8." / ".$wr_name." / ".$wr_1." / ".$wr_email." 님의 상담신청\n 상담분야 : ".$wr_5."\n 파일첨부 : ".$fileCheck."\n 제목 : ".$wr_subject."\n 내용 : ".$wr_content;  // 문자 내용           
  $sms_content = html_to_text($sms_content);

  $ok = send_lms_multipart_with_icode(
    $recv_number,
    $send_number,
    $wr_subject,               // 제목(40바이트 이내 자동 조정)
    $sms_content,             // 긴 본문(UTF-8)
    ['index_suffix' => true]  // 각 파트 끝에 [1/N] 꼬리표
);
}

if($w=="r"){
include_once(G5_LIB_PATH.'/icode.sms.lib.php'); 



 // 문의글 등록시 관리자에게 전송 
  $send_hp_mb = "010-3488-8359"; // 보내는 전화번호 
  $recv_hp_mb = $wr_1; //  받는 전화번호 
  $send_hp = str_replace("-","",$send_hp_mb); // - 제거 
  $recv_hp = str_replace("-","",$recv_hp_mb); // - 제거 
  $send_number =  "01034888359"; 
  $recv_number = "$recv_hp"; 

 
  $sms_content =$wr_name." 님이 답글이 등록되었습니다.";  // 문자 내용      
  $SMS = new SMS; // SMS 연결 
      
      $SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], $config['cf_icode_server_port']); 
     $SMS->Add($recv_number, $send_number, $config['cf_icode_id'], iconv("utf-8", "euc-kr", stripslashes($sms_content)), ""); 
      $SMS->Send(); 
}

//----------------------------------------------------------
// SMS 문자전송 끝
//----------------------------------------------------------



if($w==""){
	$_SESSION['LOGGER']="ODR";	//20200518 LOGGER
	alert("상담이 정상적으로 접수되었습니다. 영업시간[평일 09:00~19:00] 외 상담신청은 응대가 늦어질 수 있으니 조금만 기다려 주십시오. 감사합니다.", '/bbs/write.php?bo_table='.$bo_table);
}

?>