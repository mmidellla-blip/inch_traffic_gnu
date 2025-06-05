<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer_view14.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "이형수 고문위원";
$gr_id ='member';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<section class="member-view">
	<section class="member-view-header lawyer_view14">
		<div class="txt-wrap">
			<h1><strong>이형수</strong> 고문위원</h1>
		</div>
	</section>
	<section class="member-view-detail">
		<div class="member-view-box">
			<h1>학력</h1>
			<ul>
				<li>서울고등학교 졸업</li>
				<li>서울대학교 경영대 졸업</li>
				<li>연세대학교 경영전문대학원 최고경영자과정 수료</li>
			</ul>
			<h1>경력</h1>
			<ul>
				<li>前 외환은행 Global Market 및 Treasury 자금시장본부장</li>
				<li>前 외환선물(주) 대표이사</li>
				<li>現 법무법인 동주</li>
			</ul>
		</div>
	</section>
</section>

<?php
include_once('../_footer.php');
?>