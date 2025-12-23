<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer_view16.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');


$gr_id ='lawyer';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
$sql = "select * from g5_write_member where wr_id=".$wr_id." ";
$result = sql_query($sql);
$row = sql_fetch_array($result);
$row['file'] = get_file("member", $wr_id);
$wr_2_arr = explode("\r\n", $row['wr_2']);
$wr_3_arr = explode("\r\n", $row['wr_3']);
$wr_4_arr = explode("\r\n", $row['wr_4']);
$wr_5_arr = explode("\r\n", $row['wr_5']);
$wr_6_arr = explode("\r\n", $row['wr_6']);
$wr_7_arr = explode("\r\n", $row['wr_7']);
$wr_8_arr = explode("\r\n", $row['wr_8']);
$wr_9_arr = explode("\r\n", $row['wr_9']);
$wr_10_arr = explode("\r\n", $row['wr_10']);
$wr_11_arr = explode("\r\n", $row['wr_11']);
$wr_12_arr = explode("\r\n", $row['wr_12']);
$g5['title'] = $row['wr_subject'];
?>

<section class="member-view">
	<section class="quick-menu">
		<ul>
			<li><a href="/page/self_test.php?me_code=7010" target="_blank"><img src="/images/common/quick_icon_self.png" alt="">음주진단</a></li>
			<li><a href="tel:1522-3394" target="_blank"><img src="/images/common/quick_icon01.png" alt="">전화상담</a></li>
			<li><a href="https://pf.kakao.com/_Rpbxmxb/chat" target="_blank"><img src="/images/common/quick_icon02.png" alt="">카톡상담</a></li>
			<li><a href="/bbs/board.php?bo_table=online&me_code=6010"><img src="/images/common/quick_icon03.png" alt="">온라인 상담</a></li>
			<li><a href="/page/location.php?me_code=1040"><img src="/images/common/quick_icon04.png" alt="">오시는 길</a></li>
		</ul>
	</section>
	<section class="member-view-header lawyer_view">
		<div class="txt-wrap">
			<h2><strong><?=$row['wr_subject'];?> </strong> </h2>
			<ul>
				<?php if($row['wr_8'] != "") { ?>
				<!-- <li>대한변호사협회 등록</li> -->
				<li><?=$row['wr_8'];?></li>
				<?php } ?>
				<?php if($row['wr_9'] != "") { ?>
				<li><?=$row['wr_9'];?></li>
				<?php } ?>
			</ul>
		</div>
	</section>
	<section class="member-view-detail">
		<div class="member-view-box">
			
			<?php if($row['wr_3'] != "") { ?>
			<h3>학력</h3>
			<ul>
				
			<?php
			$v_img_count = count($row['file']);
			$v_img_count = $v_img_count - 1;
			$j = 0;
			
			for($j=0; $j<count($wr_3_arr); $j++) {
				echo "<li>".$wr_3_arr[$j]."</li>";
			} ?>
			</ul>
			<?php } ?>

			<h3>경력</h3>
			<ul>
				<?php
					//경력
					for($j=0; $j<count($wr_4_arr); $j++) {
						echo "<li>".$wr_4_arr[$j]."</li>";
					}
				?>
			</ul>
			<?php if($row['wr_5'] != "") { ?>
			<h3>저서 및 연구</h3>
			<ul>
							
			<?php
			$v_img_count = count($row['file']);
			$v_img_count = $v_img_count - 1;
			$j = 0;
						
			for($j=0; $j<count($wr_5_arr); $j++) {
			echo "<li>".$wr_5_arr[$j]."</li>";
			} ?>
			</ul>
			<?php } ?>
			
			<?php if($row['wr_10'] != "") { ?>
			<h3>언론 및 강연</h3>
			<ul>
				
			<?php
			$v_img_count = count($row['file']);
			$v_img_count = $v_img_count - 1;
			$j = 0;
			
			for($j=0; $j<count($wr_10_arr); $j++) {
				echo "<li>".$wr_10_arr[$j]."</li>";
			} ?>
			</ul>
			<?php } ?>
		
	
			<?php if($row['wr_6'] != "") { ?>
			<h3>인터뷰</h3>
			<ul>
				
			<?php
			$v_img_count = count($row['file']);
			$v_img_count = $v_img_count - 1;
			$j = 0;
			
			for ( $i=8; $i < 12; $i++) { ?>
				<?php if(!$row['file'][$i]){ break;}?>
				<li class="member-column">
					<a href="<?=$wr_6_arr[$j];?>"><img src="<?=$row['file'][$i]['path'];?>/<?=$row['file'][$i]['file'];?>"></a>
				</li>
			
			
			<?php $j++;} ?>
			</ul>
			<?php } ?>
			
		</div>
		<div class="member-view-case">
			<div class="member-view-case-wrap">
				<h3>동주의 성공사례</h3>
				<?php
				include_once('lawyer_view_case.php');
				?>
			</div>
		</div>
	</section>
	
	
	<section class="lawyer-view-rolling-wrap">
		<section class="lawyer-view-rolling">
			<?php
			 $v_img_count = count($row['file']);
			$v_img_count = $v_img_count - 1;
			 for ( $i=2; $i < 6; $i++) { ?>
			
			<div class="lawyer-view-rolling-slide">
				<img src="<?=$row['file'][$i]['path'];?>/<?=$row['file'][$i]['file'];?>">
			</div>
			<?php if($row['file'][$i] == ""){ break;}?>
			<?php } ?>
			
			
		</section>
	</section>

	
	
</section>
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<script src="/js/slick.js"></script>
<script>
	$(".lawyer-view-rolling").slick({
		infinite: true,
		dots: false,
		slide: 'div',	
		slidesToShow: 2,
		slidesToScroll: 1,
		arrows: true,
		autoplay: false,
		speed: 300,
		//variableWidth: true,
		  responsive: [
			{
			  breakpoint: 640,
			  settings: {
				infinite: true,
				arrows: true,
				dots: false,
				slidesToShow: 1,
				slidesToScroll: 1,
			  }
			}
		  ]
	});
</script>
<script type="text/JavaScript">
 jQuery('.member-view-header.lawyer_view').css({"background":"url(<?=$row['file'][1]['path'];?>/<?=$row['file'][1]['file'];?>) no-repeat center bottom"});
 jQuery('.member-view-header.lawyer_view').css({"background-size":"cover"});
 jQuery('.member-view-header.lawyer_view').css({"background-position":"44% bottom"});
 
</script>

<?php
include_once('../_footer.php');
?>