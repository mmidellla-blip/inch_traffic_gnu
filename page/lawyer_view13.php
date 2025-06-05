<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer_view13.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "조선익 수석전문심리위원 / 행정사";
$gr_id ='member';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<section class="member-view">
	<section class="member-view-header lawyer_view13">
		<div class="txt-wrap">
			<h1><strong>조선익</strong> 수석전문심리위원 / 행정사</h1>
		</div>
	</section>
	<section class="member-view-detail">
		<div class="member-view-box">
			<h1>학력</h1>
			<ul>
				<li>한양대학교 행정대학원 졸업(석사)</li>
				<li>국방대학교 안보과정 수료</li>
				<li>건강보험심사평가원 CEO과정 수료</li>
			</ul>
			<h1>경력</h1>
			<ul>
				<li>예비역 육군대령(의무행정병과)</li>
				<li>前 육군 전역(의가사) 심사위원장</li>
				<li>前 국무총리실 "피해보상위원회" 총괄팀장</li>
				<li>前 대한 병원행정사협회 군진회장</li>
				<li>前 태창운수(주) 상무이사</li>
				<li>現 법무법인 동주 수석전문위원(행정)</li>
			</ul>
		</div>
	</section>
</section>

<?php
include_once('../_footer.php');
?>