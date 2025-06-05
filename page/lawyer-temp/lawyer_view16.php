<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer_view16.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "변인화 전문위원";
$gr_id ='member';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<section class="member-view">
	<section class="member-view-header lawyer_view16">
		<div class="txt-wrap">
			<h1><strong>변인화</strong> 전문위원</h1>
		</div>
	</section>
	<section class="member-view-detail">
		<div class="member-view-box">
			<h1>학력</h1>
			<ul>
				<li>경기여자고등학교 졸업 서울대학교 가정대학 의류학과 졸업</li>
			</ul>
			<h1>경력</h1>
			<ul>
				<li>前 중앙여자중고등학교 교사</li>
				<li>前 학부모회 담당 교사</li>
				<li>前 학교운영위원회 교사대표 위원 역임</li>
				<li>前 학생생활지도부(현 학교폭력담당) 및 선도위원</li>
				<li>前 학교 생활, 학업 및 학생 진로 상담교사</li>
			</ul>
		</div>
	</section>
</section>

<?php
include_once('../_footer.php');
?>