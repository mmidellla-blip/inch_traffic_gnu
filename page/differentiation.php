<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/differentiation.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "동주만의 차별화";
$gr_id ='intro';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<!-- sub-conts-wrap -->
<section class="sub-conts-wrap">
	<h1 class="sub-conts-title"><span><?php echo $g5['title']; ?></span></h1>
	<section class="differentiation-wrap">
		<section class="differentiation-box">
			<div class="img-wrap"><img src="/images/sub/differentiation01.png" alt=""></div>
			<div class="txt-wrap">
				<h1>행정법전문변호사, 행정사 모두 있는 로펌</h1>
				<p>행정심판 뿐 아니라 행정소송까지 원스톱 집중전담 <br>법률 솔루션 구축</p>
			</div>
		</section>
		<section class="differentiation-box">
			<div class="img-wrap"><img src="/images/sub/differentiation02.png" alt=""></div>
			<div class="txt-wrap">
				<h1>다양한 성공사례</h1>
				<p>인천광역시교육청 소청심사위원회 위원, 경기도청 경기도 도로 모니터링단 출신 행정사 등<br>행정심판,행정소송 다수의 성공사례</p>
			</div>
		</section>
		<section class="differentiation-box">
			<div class="img-wrap"><img src="/images/sub/differentiation03.png" alt=""></div>
			<div class="txt-wrap">
				<h1>높은 상담 만족도</h1>
				<p>노련함과 포괄적 경험을 갖춘 믿을 수 있는 변호사의 상담은 의뢰인들의 만족으로 이어집니다. 어디에서도 알려주지 않는 전략, 동주에는 있습니다.</p>
			</div>
		</section>
		<section class="differentiation-box">
			<div class="img-wrap"><img src="/images/sub/differentiation04.png" alt=""></div>
			<div class="txt-wrap">
				<h1>든든하고 믿을 수 있는 커리어</h1>
				<p>다수의 형사전문변호사, 부장검사 출신 변호사, 국정원 출신 변호사, 대한변호사협회 대의원, SKY법대출신 변호사, 경찰서 수사민원상담변호사 등 의뢰인 뒤에 든든한 변호사들이 있습니다.</p>
			</div>
		</section>
	</section>
</section>
<!-- //sub-conts-wrap -->

<?php
include_once('../_footer.php');
?>