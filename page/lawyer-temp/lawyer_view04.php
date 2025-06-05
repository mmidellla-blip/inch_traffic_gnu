<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer_view04.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "오서진 파트너 변호사";
$gr_id ='member';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<section class="member-view">
	<section class="member-view-header lawyer_view04">
		<div class="txt-wrap">
			<h1><strong>오서진</strong> 파트너 변호사</h1>
			<ul>
				<li>대한변호사협회 등록</li>
				<li>행정법전문변호사</li>
			</ul>
		</div>
	</section>
	<section class="member-view-detail">
		<div class="member-view-box">
			<h1>학력</h1>
			<ul>
				<li>연세대학교 법과대학 졸업</li>
				<li>법학전문석사</li>
				<li>변호사시험 합격</li>
			</ul>
			<h1>경력</h1>
			<ul>
				<li>前 법무법인 명문</li>
				<li>前 서울중앙지방법원 외부조정센터 조정위원</li>
				<li>前 인천광역시교권보호위원회 위원</li>
				<li>前 인천광역시교육청 변호사</li>
				<li>現 법무법인 동주</li>
				<li>現 인천광역시교육청 소청심사위원회 위원</li>
				<li>現 인천광역시상담지원자문위원회 위원</li>
				<li>現 인천광역시학교안전공제회보상심사위원회 위원</li>
				<li>現 인천광역시교육청 사립학교 징계심의위원회 위원</li>
				<li>現 인천광역시 미추홀구 인사위원회 위원</li>
				<li>대한변호사협회 [행정법] 전문변호사</li>
			</ul>
		</div>
		<div class="member-view-case">
			<div class="member-view-case-wrap">
				<h1>오서진 파트너 변호사의 성공사례</h1>
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