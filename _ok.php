<?php include('_common.php');

$wr_1=$_POST['h_tel'];
$wr_5=$_POST['wr_5'];
$ca_name=$_POST['h_cate'];
//$wr_subject=cut_str($_POST['h_name'],1,'**')."님의 메인 빠른 상담 신청";
$wr_subject="신속 상담 신청";
$wr_6 = $_POST['gclid_field'];
$wr_content=$_POST['wr_content'];
$wr_name=$_POST['h_name'];
$wr_place=$_POST['h_place'];
$sql_password = " , wr_password = '".get_encrypt_string($_POST['h_tel'])."' ";
$sql_ip = '';

$wr_name = preg_replace("/\s+/","",$wr_name);
$wr_name = str_replace('-',"",$wr_name);
$wr_name = str_replace('_',"",$wr_name);
$wr_name = str_replace('.',"",$wr_name);

/*
$wr_name = trim(preg_replace('/[^\x{1100}-\x{11FF}\x{3130}-\x{318F}\x{AC00}-\x{D7AF}\s]/u', "", $wr_name));
if( empty($wr_name) ) die;
*/
if(!preg_match("/^[0-9]/i", $wr_1)) die;

if (!$is_admin)
	$sql_ip = " , wr_ip = '{$_SERVER['REMOTE_ADDR']}' ";

if (!isset($_POST['h_tel']) || !trim($_POST['h_tel'])){
	 alert('연락처를 입력하여 주십시오.');
}
/*
if (!isset($_POST['h_name']) || !trim($_POST['h_name'])){
	 alert('이름을 입력하여 주십시오.');
}
*/

if (isset($_SESSION['ss_datetime'])) {
	if ($_SESSION['ss_datetime'] >= (G5_SERVER_TIME - $config['cf_delay_sec']) && !$is_admin)
		alert('너무 빠른 시간내에 상담을 연속해서 신청할 수 없습니다.');
	set_session("ss_datetime", G5_SERVER_TIME);
}

$write_table="g5_write_online";
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
                     wr_6 = '{$wr_6}',
                     wr_5 = '{$wr_5}'
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
	$ca_name = $ca_name;
  $mail_wr_cglid = $wr_6;

    ob_start();
    include_once ('./bbs/write_update_mail.php');
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

include_once(G5_LIB_PATH.'/icode.sms.lib.php'); 
// 문의글 등록시 관리자에게 전송 
$send_hp_mb = "010-3488-8359"; // 보내는 전화번호 
$recv_hp_mb = "010-3488-8359"; //  받는 전화번호 
$send_hp = str_replace("-","",$send_hp_mb); // - 제거 
$recv_hp = str_replace("-","",$recv_hp_mb); // - 제거 
$send_number =  "$send_hp"; 
$recv_number = "$recv_hp"; 

$send_number = "01034888359"; 
$phoneNums = "010-3488-8359,010-6452-2103,010-9772-4546"; // 수신번호
$phoneNums = str_replace("-", "", $phoneNums); // - 제거
$phoneNums = array_filter(
    array_map('trim', explode(',', $phoneNums))
);

    
$sms_content ="[교통음주] ".$wr_name." / ".$wr_1." / ".$wr_email." 님의 상담신청";  // 문자 내용      

foreach ($phoneNums as $index => $phone) {
    $SMS = new SMS; // SMS 연결 

    $SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], $config['cf_icode_server_port']); 
    $SMS->Add($phone, $send_number, $config['cf_icode_id'], iconv("utf-8", "euc-kr", stripslashes($sms_content)), ""); 
    $SMS->Send(); 
}


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
