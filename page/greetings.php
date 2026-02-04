<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/greetings.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "인사말";
$gr_id ='intro';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<!-- sub-conts-wrap -->
<section class="sub-conts-wrap">
	<h1 class="sub-conts-title"><span>음주운전 변호사</span></h1>
	<section class="greetings-wrap">
		<div class="txt-wrap">
			<h2 class="svc-greeting-title">안녕하십니까? <br>법무법인 동주의 교통음주 분야를 이끌고 있는<br>대표 변호사 이세환입니다.</h2>

			<p>
				초기에 대응할수록 사건 결과가 천차만별로 달라지는 분야가 존재합니다.
				<br>
				음주운전 관련 사안이 이에 해당하죠.
				
				<br><br>

				하지만 예상치 못하게 적발된 음주운전에 경찰조사는 어떻게 준비해야 하는지, 어떤 양형자료를 준비해야 하는지 막막하게 느껴지기 마련입니다.

				<br><br>

				초기에 잘만 대응하면 집행유예가 나올 사안도 벌금형으로, 실형이 선고될 사건도 집행유예로 마무리할 수 있습니다.

				<br><br>

				경찰조사 전에 연락주시면 경우에 따라서 불송치 결정(증거불충분)으로 끝낼 수도 있죠.

				<br><br>

				물론 이런 결과를 받아내기 위해선 사건을 하나씩 뜯어보며 분석할 줄 알고, 적용할 수 있는 최신 판례를 꿰고 있으며, 의뢰인의 상황에 맞는 최적의 양형사유를 찾을 수 있는 전문가의 조력이 필요합니다.

				<br><br>

				10년 이상 경력의 음주·형사전문변호사인 저는 수많은 음주운전 사안을 직접 처리해왔습니다.

				<br><br>

				제가 대표 변호사로 이끌고 있는 법무법인 동주에서는 의뢰인분들께서 "하루라도 빨리" 그리고 "조금 더 쉽게" 일상을 되찾을 수 있도록 형사부터 행정까지 한 번에 조력해드리고 있죠.

				<br><br>

				어떤 변호사를 만나는지에 따라서 결과가 천차만별로 달라진다는 것을 잘 알고 있기에, 동주의 전문가들은 사명감을 가지고 사력을 다해 임합니다.

				<br><br>

				여러분의 선택이 틀리지 않았음을 법무법인 동주를 통해 확인해보십시오.
				
				<br><br>

				감사합니다.

				<br><br>

				<em>법무법인 동주 대표변호사 <strong>이세환</strong></em>
			</p>
		</div>
		<div class="img-wrap"><img src="/images/sub/greetings.jpg" alt="법무법인 동주 대표변호사 인사말"></div>
	</section>
</section>
<!-- sub-conts-wrap -->

<?php
include_once('../_footer.php');
?>