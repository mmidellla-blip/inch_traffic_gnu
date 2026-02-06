<!-- Enliple Tracker Start -->
<script type="text/javascript">
(function(a,g,e,n,t){a.enp=a.enp||function(){(a.enp.q=a.enp.q||[]).push(arguments)};n=g.createElement(e);n.defer=!0;n.src="<a href="">https://cdn.megadata.co.kr/dist/prod/enp_tracker_self_hosted.min.js";t=g.getElementsByTagName(e)[0];t[removed].insertBefore(n,t)})(window,document,"script");
enp('create', 'conversion', 'truemate', { device: 'B', convType: 'etd', productName: 'counsel'}); // 디바이스 타입  W:웹, M: 모바일, B: 반응형
enp('send', 'conversion', 'truemate', { device: 'B', convType: 'etc', productName: 'counsel'});
</script>
<!-- Enliple Tracker End -->



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


<?php include('_common.php');

$wr_1 = isset($_POST['h_tel']) ? trim((string)$_POST['h_tel']) : '';
// 차단 번호: 숫자만 비교 (010-3326-2212 / 01033262212 동일 처리)
$wr_1_digits = preg_replace('/\D/', '', $wr_1);
$blocked_phones = ['01033323333', '01033262212'];
if ($wr_1_digits !== '' && in_array($wr_1_digits, $blocked_phones, true)) {
    error_log('[상담신청 차단] 연락처: ' . $wr_1);
    exit;
}
$wr_3=$_POST['wr_3'];
$wr_4=$_POST['wr_4'];
$wr_5=$_POST['wr_5'];
$wr_6=$_POST['wr_6'];
$wr_7=$_POST['wr_7'];
$wr_8=$_POST['wr_8'];
$ca_name=$_POST['h_cate'];

/*$wr_subject=cut_str($_POST['h_name'],1,'**')."님의 자가 진단 신청"; */
$wr_subject=$_POST['h_name']."님의 자가 진단 신청"; 
$wr_content=$_POST['wr_content'];
$wr_name=$_POST['h_name'];
$sql_password = " , wr_password = '".get_encrypt_string($_POST['h_tel'])."' ";
$sql_ip = '';
$wr_name = preg_replace("/\s+/","",$wr_name);
$wr_name = str_replace('-',"",$wr_name);
$wr_name = str_replace('_',"",$wr_name);
$wr_name = str_replace('.',"",$wr_name);
if( isset($wr_name) && !preg_replace("/[a-zA-Z0-9]/",'', $wr_name) ) die;
if (!$is_admin)
	$sql_ip = " , wr_ip = '{$_SERVER['REMOTE_ADDR']}' ";

$uip = $_SERVER['REMOTE_ADDR'];
$minutes = date('Y-m-d H:i:s', strtotime('-5 minutes'));
$sql = "select count(*) as cnt from g5_write_selftest where wr_datetime >= '$minutes' and (wr_1 = '$wr_1' OR wr_ip = '$$uip') ";
$row = sql_fetch($sql);

if ($row['cnt'] > 1) {
    // 30분 이내에 이미 신청한 경우
    alert("5분 이내에 2건 이상 신청한 기록이 있습니다. 나중에 다시 시도해주세요.");
    exit;
}

if (isset($_SESSION['ss_datetime'])) {
	if ($_SESSION['ss_datetime'] >= (G5_SERVER_TIME - $config['cf_delay_sec']) && !$is_admin)
		alert('너무 빠른 시간내에 상담을 연속해서 신청할 수 없습니다.');
	set_session("ss_datetime", G5_SERVER_TIME);
}

$write_table="{$g5['write_prefix']}selftest";
$wr_num = get_next_num($write_table);

$sql = " insert {$write_table}
                set ca_name = '{$ca_name}',
					wr_num = '{$wr_num}',
                     wr_option = 'secret',
					 wr_reply = '',
					 wr_comment = 0,
                     wr_subject = '{$wr_subject}',
                     wr_content = '{$wr_content}',
                     wr_name = '{$wr_name}',
					 wr_datetime = '".G5_TIME_YMDHIS."',
                     wr_last = '".G5_TIME_YMDHIS."',
                     wr_1 = '{$wr_1}',
                     wr_2 = '접수완료',
                     wr_3 = '{$wr_3}',
                     wr_4 = '{$wr_4}',
                     wr_5 = '{$wr_5}',
                     wr_6 = '{$wr_6}',
                     wr_7 = '{$wr_7}',
                     wr_8 = '{$wr_8}'
                                     
					 {$sql_ip}
                     {$sql_password}";
$result=sql_query($sql);
$wr_id = sql_insert_id();

// 부모 아이디에 UPDATE
sql_query(" update $write_table set wr_parent = '$wr_id' where wr_id = '$wr_id' ");

// 메일발송 사용
//if ($config['cf_email_use'] && $board['bo_use_email']) {

    // 관리자의 정보를 얻고
    $super_admin = get_admin('super');
    $group_admin = get_admin('group');
    $board_admin = get_admin('board');

    $wr_subject = get_text(stripslashes($wr_subject));

    $tmp_html = 0;
    if (strstr($html, 'html1'))
        $tmp_html = 1;
    else if (strstr($html, 'html2'))
        $tmp_html = 2;

    $wr_content = conv_content(conv_unescape_nl(stripslashes($wr_content)), $tmp_html);
 
    include_once(G5_LIB_PATH.'/mailer.lib.php');

    //$link_url = get_pretty_url($bo_table, $wr_id, $qstr);

    // 관리자에게 보내는 메일 내용 추가 항목 : 연락처, 이메일
	
	//$mail_wr_email = $_POST["wr_email"];
	$mail_wr_tel = $wr_1;
	//	if(!$mail_wr_email) { $mail_wr_email = "philo423@daum.net";}  // 임시 이메일. 이게 안된다
	$ca_name = $ca_name;
    $mail_wr_3 = $wr_3;
	$mail_wr_4 = $wr_4;
	$mail_wr_5 = $wr_5;
	$mail_wr_6 = $wr_6;
	$mail_wr_7 = $wr_7;
	

						
    ob_start();
    include_once ('./bbs/write_update_mail2.php');
    $content = ob_get_contents();
    ob_end_clean();

    $array_email = array();
    // 게시판관리자에게 보내는 메일
    if ($config['cf_email_wr_board_admin']) $array_email[] = $board_admin['mb_email'];
    // 게시판그룹관리자에게 보내는 메일
    if ($config['cf_email_wr_group_admin']) $array_email[] = $group_admin['mb_email'];
    // 최고관리자에게 보내는 메일
    if ($config['cf_email_wr_super_admin']) $array_email[] = $super_admin['mb_email'];

     // 중복된 메일 주소는 제거
    $unique_email = array_unique($array_email);
    $unique_email = array_values($unique_email);
    for ($i=0; $i<count($unique_email); $i++) {
        mailer($wr_name, $unique_email[$i], $unique_email[$i], $wr_subject, $content, 1);
    }
//}




function lmsSend($sHp, $rHp, $msg) {
    global $g5, $config;
    $rtn = "";
    try {
        $send_hp = str_replace("-","",$sHp); // - 제거 
        $recv_hp = str_replace("-","",$rHp); // - 제거 
        $strDest = array(); 
        $strDest[0] = $recv_hp; 
        $SMS = new LMS; // SMS 연결 
        $SMS->SMS_con($config['cf_icode_server_ip'], 
                                    $config['cf_icode_id'], 
                                    $config['cf_icode_pw'], 
                                    '1'); 
        $SMS->Add($strDest, 
                            $send_hp, 
                            $config['cf_icode_id'],
                            "",
                            "", 
                            iconv("utf-8", "euc-kr", $msg), 
                            "",
                            "1"); 
//                            iconv("utf-8", "euc-kr", stripslashes($msg)), 
// 메세지에서 특수문자를 제거하여 발송하려면 stripslashes를 추가하세요
        $SMS->Send(); 
        $rtn = true;
    }
    catch(Exception $e) {
        alert("처리중 문제가 발생했습니다.".$e->getMessage());
        $rtn = false;
    }
    return $rtn;
}
include_once(G5_LIB_PATH.'/icode.lms.lib.php'); 
 
$sHp = "01034888359"; // 발송번호
$phoneNums = "010-3488-8359"; // 수신번호
$phoneNums = str_replace("-", "", $phoneNums); // - 제거
$msg = "[음주진단] ".$wr_name." / ".$wr_1." / ".$wr_6." / ".$wr_7." / ".$wr_3." / ".$wr_4." / ".$wr_5." / ".$wr_8." ";  // 문자 내용    

if(strpos($wr_1,"010")!==false){

    // JANDI Webhook URL
    $webhook_url = "https://wh.jandi.com/connect-api/webhook/26797910/0dc66ef5a0c8f2ce358362b58556987c";

    // 보낼 데이터 구성
    $data = [
        "body" => $msg,
        "connectColor" => "#00C473"
    ];

    // JSON으로 변환
    $json_data = json_encode($data, JSON_UNESCAPED_UNICODE);

    // CURL로 전송
    $ch = curl_init($webhook_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
}
$phoneNums = array_filter(
    array_map('trim', explode(',', $phoneNums))
);

foreach ($phoneNums as $index => $phone) {
    lmsSend($sHp, $phone, $msg);
}

/*
include_once(G5_LIB_PATH.'/icode.sms.lib.php'); 
// 문의글 등록시 관리자에게 전송 
  $send_hp_mb = "010-4433-4492"; // 보내는 전화번호 
  $recv_hp_mb = "010-4433-4492"; //  받는 전화번호 
  $send_hp = str_replace("-","",$send_hp_mb); // - 제거 
  $recv_hp = str_replace("-","",$recv_hp_mb); // - 제거 
  $send_number =  "$send_hp"; 
  $recv_number = "$recv_hp"; 

  $send_number = "01044334492"; 
  $recv_number = "01044334492"; 
      $sms_content ="[자가진단] ".$wr_name." / ".$wr_1." / ".$wr_6." / ".$wr_7." / ".$wr_3." / ".$wr_4." / ".$wr_5." / ".$wr_8." ";  // 문자 내용      
      $SMS = new SMS; // SMS 연결 
      
      $SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], $config['cf_icode_server_port']); 
      $SMS->Add($recv_number, $send_number, $config['cf_icode_id'], iconv("utf-8", "euc-kr", stripslashes($sms_content)), ""); 
      $SMS->Send(); 
*/

//----------------------------------------------------------
// SMS 문자전송 끝
//----------------------------------------------------------







if($result) {

	
	$_SESSION['LOGGER']="ODR";	//20200518 LOGGER

	alert("상담이 정상적으로 접수되었습니다. 영업시간[평일 09:00~19:00] 외 상담신청은 응대가 늦어질 수 있으니 조금만 기다려 주십시오. 감사합니다.", "/");
	
}
else {
	alert("상담접수 오류 \n 관리자에게 문의해주세요.");
}
?>
