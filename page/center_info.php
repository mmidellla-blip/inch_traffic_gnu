<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/center_info.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "오시는 길";
$gr_id ='center';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>


<!-- sub-conts-wrap -->
<section class="sub-conts-wrap">
	<h1 class="sub-conts-title"><span><?php echo $g5['title']; ?></span></h1>
	<section class="center-info-wrap">
		<h1>법무법인 동주 <strong>분야별 연구센터 바로가기</strong></h1>
		<ul>
			<li>
				<a href="https://criminal-law-dongju.com" target="_blank">
					<img src="/images/sub/center_info01.jpg" alt="형사연구센터">
					<span>형사연구센터</span>
				</a>
			</li>
			<li>
				<a href="https://sexcrimecenter-dongju.com" target="_blank">
					<img src="/images/sub/center_info09.jpg" alt="성범죄연구센터">
					<span>성범죄연구센터</span>
				</a>
			</li>
			<li>
				<a href="https://student-tomolaw.com" target="_blank">
					<img src="/images/sub/center_info02.jpg" alt="청소년연구센터">
					<span>청소년연구센터<br>내일Law</span>
				</a>
			</li>
			<li>
				<a href="https://trafficdrinking-law-dongju.com/" target="_blank">
					<img src="/images/sub/center_info05.jpg" alt="교통음주연구센터">
					<span>교통음주연구센터</span>
				</a>
			</li>
			<li>
				<a href="https://fraudembezzlement-dongju.com" target="_blank">
					<img src="/images/sub/center_info07.jpg" alt="사기횡령연구센터">
					<span>사기횡령연구센터</span>
				</a>
			</li>
			<li>
				<a href="https://dongju-criminal-victim.com" target="_blank">
					<img src="/images/sub/center_info06.jpg" alt="고소대리센터">
					<span>고소대리센터</span>
				</a>
			</li>
			<li>
				<a href="https://foreign-law-dongju.com" target="_blank">
					<img src="/images/sub/center_info04.jpg" alt="외국인상담센터">
					<span>외국인상담센터</span>
				</a>
			</li>
			<li>
				<a href="https://divorce-law-dongju.com" target="_blank">
					<img src="/images/sub/center_info03.jpg" alt="이혼/상속연구센터">
					<span>이혼/상속연구센터</span>
				</a>
			</li>
			<li>
				<a href="https://oneclick-law-dongju.com" target="_blank">
					<img src="/images/sub/center_info08.jpg" alt="원클릭소송센터">
					<span>원클릭소송센터</span>
				</a>
			</li>
		</ul>
	</section>
</section>
<!-- //sub-conts-wrap -->

<?php
include_once('../_footer.php');
?>
