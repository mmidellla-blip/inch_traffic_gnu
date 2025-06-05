<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer_view16.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "김윤서 파트너 변호사";
$gr_id ='member';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<section class="member-view">
	<section class="member-view-header lawyer_view17">
		<div class="txt-wrap">
			<h1><strong>김윤서</strong> 파트너 변호사</h1>
			<ul>
				<li>형사법 / 학교폭력 / 기업심의</li>
			</ul>
		</div>
	</section>
	<section class="member-view-detail">
		<div class="member-view-box">
		<h1>학력</h1>
			<ul>
				<li>숙명여자대학교 법과대학 최우수졸업(수석졸업)</li>
				<li>고려대학교 법학과 (석사) 졸업 형사법 전공</li>
				<li>고려대학교 법학과 (박사) 수료 형사법 전공</li>
				<li>변호사시험합격</li>
			</ul>
			<h1>경력</h1>
			<ul>
				<li>전 법무법인 마음대해 변호사</li>
				<li>전 안양시청의회(안양시의회) 입법 전문위원</li>
				<li>전 한국법제연구원</li>
				<li>전 고려대학교 법학연구원 (형사법)</li>
                <br> 
				<li>현 안양시 산업진흥원 기업심사평가위원</li>
				<li>현 IBK기업은행 미래성장성 기업심의전문평가위원</li>
				<li>전 헌법재판소 경찰청 실무실습</li>
                <br> 
				<li>저술활동 : 심신장애와 형사책임능력에 관한 연구 (논문)</li>
			</ul>
		</div>
		<div class="member-view-case">
			<div class="member-view-case-wrap">
				<h1>김윤진 변호사의 성공사례</h1>
				<?php
				include_once('lawyer_view_case.php');
				?>
			</div>
		</div>
	</section>
	<section class="lawyer-view-rolling-wrap">
		<section class="lawyer-view-rolling">
			<div class="lawyer-view-rolling-slide"><img src="/images/sub/lawyer_view_rolling17_1.jpg" alt=""></div>
			<div class="lawyer-view-rolling-slide"><img src="/images/sub/lawyer_view_rolling17_2.jpg" alt=""></div>
			<div class="lawyer-view-rolling-slide"><img src="/images/sub/lawyer_view_rolling17_3.jpg" alt=""></div>
			<div class="lawyer-view-rolling-slide"><img src="/images/sub/lawyer_view_rolling17_4.jpg" alt=""></div>
			<div class="lawyer-view-rolling-slide"><img src="/images/sub/lawyer_view_rolling17_5.jpg" alt=""></div>						
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