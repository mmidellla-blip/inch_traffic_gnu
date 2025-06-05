<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer_view15.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "오상기 고문";
$gr_id ='member';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<section class="member-view">
	<section class="member-view-header lawyer_view15">
		<div class="txt-wrap">
			<h1><strong>오상기</strong> 고문</h1>
		</div>
	</section>
	<section class="member-view-detail">
		<div class="member-view-box">
			<h1>경력</h1>
			<ul>
				<li>前 인천광역시 남동구 선거관리위원회 부위원장</li>
				<li>前 인천학술진흥재단 이사</li>
				<li>前 인천광역시교육청 규제완화위원회 위원</li>
				<li>前 인천광역시 남동경찰서 행정발전위원회 위원</li>
				<li>前 법률사무소 송향 고문</li>
				<li>現 인천광역시 학원연합회 고문</li>
				<li>現 인천광역시의회 시정자문위원</li>
				<li>現 인천광역시 동부교육지원청 교육행정서비스헌장 심의위원회 위원</li>
				<li>現 인천광역시 자원봉사센터 이사</li>
			</ul>
		</div>
	</section>
</section>

<?php
include_once('../_footer.php');
?>