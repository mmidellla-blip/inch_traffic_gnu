

<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
if($w=="r"){
include_once(G5_LIB_PATH.'/icode.sms.lib.php'); 



 // 문의글 등록시 관리자에게 전송 
  $send_hp_mb = "010-4433-4492"; // 보내는 전화번호 
  $recv_hp_mb = $wr_1; //  받는 전화번호 
  $send_hp = str_replace("-","",$send_hp_mb); // - 제거 
  $recv_hp = str_replace("-","",$recv_hp_mb); // - 제거 
  $send_number =  "01044334492"; 
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
	alert("빠른 상담이 정상적으로 접수되었습니다.", '/bbs/write.php?bo_table='.$bo_table);
}


?>
