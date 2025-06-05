<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer_view09.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "이소정 변호사";
$gr_id ='member';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<section class="member-view">
	<section class="member-view-header lawyer_view09">
		<div class="txt-wrap">
			<h1><strong>이소정</strong>  변호사</h1>
		</div>
	</section>
	<section class="member-view-detail">
		<div class="member-view-box">
			<h1>학력</h1>
			<ul>
				<li>연세대학교 사학과 졸업</li>
				<li>교직이수 인하대학교 법학전문대학원 졸업</li>
				<li>변호사시험 합격</li>
			</ul>
			<h1>경력</h1>
			<ul>
				<li>현 법무법인 동주</li>
				<li>전 서울남부지방법원 실무수습</li>
				<li>중등학교 정교사(2급)역사 교원자격증</li>
			</ul>
		</div>
		<div class="member-view-case">
			<div class="member-view-case-wrap">
				<h1>이소정 변호사의 성공사례</h1>
				<?php
				include_once('lawyer_view_case.php');
				?>
			</div>
		</div>
	</section>
</section>

<?php
include_once('../_footer.php');
?>