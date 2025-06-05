<?php 

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if($w==""){
include_once(G5_LIB_PATH.'/icode.sms.lib.php'); 



 // 문의글 등록시 관리자에게 전송 
  $send_hp_mb = "010-3488-8359"; // 보내는 전화번호 
  $recv_hp_mb = "010-3488-8359"; //  받는 전화번호 
  $send_hp = str_replace("-","",$send_hp_mb); // - 제거 
  $recv_hp = str_replace("-","",$recv_hp_mb); // - 제거 
  $send_number =  "$send_hp"; 
  $recv_number = "$recv_hp"; 

  $send_number = "01034888359"; 
  $recv_number = "01034888359"; 
  $sms_content ="[교통음주] ".$wr_name." / ".$wr_1." / ".$wr_email." 님의 상담신청";  // 문자 내용           
  $SMS = new SMS; // SMS 연결 
      
      $SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], $config['cf_icode_server_port']); 
     $SMS->Add($recv_number, $send_number, $config['cf_icode_id'], iconv("utf-8", "euc-kr", stripslashes($sms_content)), ""); 
      $SMS->Send(); 
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