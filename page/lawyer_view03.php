<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer_view03.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "이세진 파트너 변호사";
$gr_id ='member';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<section class="member-view">
	<section class="member-view-header lawyer_view03">
		<div class="txt-wrap">
			<h1><strong>이세진</strong> 파트너 변호사</h1>
			<ul>
				<li>대한변호사협회 등록</li>
				<li>이혼전문변호사 / 민사전문변호사</li>
			</ul>
		</div>
	</section>
	<section class="member-view-detail">
		<div class="member-view-box">
			<h1>학력</h1>
			<ul>
				<li>고려대학교 법과대학 졸업</li>
				<li>법학전문석사</li>
				<li>변호사시험 합격</li>
			</ul>
			<h1>경력</h1>
			<ul>
				<li>前 법무법인 현재</li>
				<li>前 법률사무소 지음</li>
				<li>前 대한변호사협회 대의원</li>
				<li>前 대법원 국선변호인</li>
				<li>前 공동법률사무소 동주</li>
				<li>現 법무법인 동주</li>
				<li>대한변호사협회 [이혼] 전문변호사</li>
				<li>대한변호사협회 [민사법] 전문변호사</li>
				<li>네이버지식in전문상담위원</li>
				<li>대한장애인론볼연맹 이사</li>
				<li>김포시 통진읍 마을 변호사 (공익활동)</li>
				<li>일산서부경찰서 법률자문변호사 </li>
				<li>서울창신초등학교 고문변호사</li>
				<li>수원지방검찰청 피해자 국선변호사</li>
			</ul>
		</div>
		<div class="member-view-case">
			<div class="member-view-case-wrap">
				<h1>이세진 파트너 변호사의 성공사례</h1>
				<?php
				include_once('lawyer_view_case.php');
				?>
			</div>
		</div>
	</section>
	<section class="lawyer-view-rolling-wrap">
		<section class="lawyer-view-rolling">
			<div class="lawyer-view-rolling-slide"><img src="/images/sub/lawyer_view_rolling03_1.jpg" alt=""></div>
			<div class="lawyer-view-rolling-slide"><img src="/images/sub/lawyer_view_rolling03_2.jpg" alt=""></div>
			<div class="lawyer-view-rolling-slide"><img src="/images/sub/lawyer_view_rolling03_3.jpg" alt=""></div>
		</section>
	</section>
</section>

<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<script src="/js/slick.js"></script>
<script>
	$(".lawyer-view-rolling").slick({
		infinite: true,
		dots: false,
		slide: 'div',	
		slidesToShow: 2,
		slidesToScroll: 1,
		arrows: true,
		autoplay: false,
		speed: 300,
		//variableWidth: true,
		  responsive: [
			{
			  breakpoint: 640,
			  settings: {
				infinite: true,
				arrows: true,
				dots: false,
				slidesToShow: 1,
				slidesToScroll: 1,
			  }
			}
		  ]
	});
</script>

<?php
include_once('../_footer.php');
?>