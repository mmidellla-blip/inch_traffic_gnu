<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer_view12.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "김동윤 행정사 / 상담실장";
$gr_id ='member';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<section class="member-view">
	<section class="member-view-header lawyer_view12">
		<div class="txt-wrap">
			<h1><strong>김동윤</strong> 행정사 / 상담실장</h1>
		</div>
	</section>
	<section class="member-view-detail">
		<div class="member-view-box">
			<h1>학력</h1>
			<ul>
				<li>행정사시험 합격</li>
				<li>학교폭력예방상담사 자격 취득</li>
				<li>공정거래위원회 제18회 가맹거래사시험 합격</li>
				<li>국민권익위원회 국민참여모니터단 위촉</li>
			</ul>
			<h1>경력</h1>
			<ul>
				<li>前 법무법인 고구려(청목)</li>
				<li>前 대전시 정책리딩그룹 위원</li>
				<li>前 법률사무소 지음</li>
				<li>前 공동법률사무소 동주</li>
				<li>現 법무법인 동주</li>
				<li>안산시 주민참여예산위원회 위원</li>
				<li>경기도 주민참여예산위원회 위원</li>
				<li>고용노동부 고용노동혁신 국민자문단 위원</li>
				<li>행정안전부 예산바로쓰기 국민감시단 위원</li>
				<li>경기도교육청 경기교육주민참여협의회 행정제도개선분과 위원</li>
				<li>경기도청 경기도 도로 모니터링단</li>
				<li>경기남부경찰청 누리캅스 위원</li>
				<li>경기도 청년참여기구 청년위원</li>
			</ul>
		</div>
	</section>
</section>

<?php
include_once('../_footer.php');
?>