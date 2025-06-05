<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer_view01.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "이세환 대표 변호사";
$gr_id ='member';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<section class="member-view">
	<section class="member-view-header lawyer_view01">
		<div class="txt-wrap">
			<h1><strong>이세환</strong> 대표 변호사</h1>
			<ul>
				<li>대한변호사협회 등록</li>
				<li>형사∙학교폭력 전문 변호사</li>
			</ul>
		</div>
	</section>
	<section class="member-view-detail">
		<div class="member-view-box">
			<h1>학력</h1>
			<ul>
				<li>연세대학교 법과대학 졸업</li>
				<li>연세대학교 법학전문박사과정(형사법)</li>
				<li>변호사시험 합격</li>
				<li>경력사항</li>
				<li>前 법률사무소 기린 (서초동)</li>
				<li>前 법무법인 더쌤 (서울사무소)</li>
				<li>前 법률사무소 지음</li>
				<li>前 공동법률사무소 동주</li>
				<li>前 대법원 국선변호인</li>
				<li>現 법무법인 동주</li>
			</ul>
			<h1>경력</h1>
			<ul>
				<li>대한변호사협회 [형사법] 전문변호사</li>
				<li>대한변호사협회 [학교폭력] 전문변호사</li>
				<li>네이버지식in전문상담위원 (형사소송분야)</li>
				<li>대한변호사협회 대의원</li>
				<li>대한치과협회 법률지원변호사</li>
				<li>평택시 청북면 마을변호사 (공익활동)</li>
				<li>경기도 수원교육지원청 자문변호사</li>
				<li>수원 한일전산고등학교 고문변호사</li>
				<li>수원 한봄고등학교 학교폭력대책자치위원회 외부위원</li>
				<li>flick contents Lab (성범죄 피해자를 위한 게임제작 업체) 자문변호사</li>
				<li>수원남부경찰서 수사민원상담변호사</li>
				<li>수원지방검찰청 피해자 국선변호사</li>
				<li>화성오산교육청 학교폭력대책 심의위원(특별소위원회전문위원)</li>
			</ul>
		</div>
		<div class="member-view-case">
			<div class="member-view-case-wrap">
				<h1>이세환 대표 변호사의 성공사례</h1>
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