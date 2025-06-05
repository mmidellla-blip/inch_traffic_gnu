<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer_view16.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "김유진 파트너 변호사";
$gr_id ='member';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<section class="member-view">
	<section class="member-view-header lawyer_view18">
		<div class="txt-wrap">
			<h1><strong>김유진</strong> 변호사</h1>
			<ul>

			</ul>
		</div>
	</section>
	<section class="member-view-detail">
		<div class="member-view-box">
			<h1>학력</h1>
			<ul>
				<li>연세대학교 철학과, 심리학과 졸업</li>
				<li>법학전문석사</li>
				<li>변호사시험 합격</li>
			</ul>
			<h1>경력</h1>
			<ul>
				<li>前 법률사무소 에이엘</li>
				<li>現 법무법인 동주</li>
			</ul>
		</div>
		<div class="member-view-case">
			<div class="member-view-case-wrap">
				<h1>김유진 변호사의 성공사례</h1>
				<?php
				include_once('lawyer_view_case.php');
				?>
			</div>
		</div>
	</section>
<!--<section class="lawyer-view-rolling-wrap">
		<section class="lawyer-view-rolling">
			<div class="lawyer-view-rolling-slide"><img src="/images/sub/lawyer_view_rolling17_1.jpg" alt=""></div>
			<div class="lawyer-view-rolling-slide"><img src="/images/sub/lawyer_view_rolling17_2.jpg" alt=""></div>
			<div class="lawyer-view-rolling-slide"><img src="/images/sub/lawyer_view_rolling17_3.jpg" alt=""></div>
			<div class="lawyer-view-rolling-slide"><img src="/images/sub/lawyer_view_rolling17_4.jpg" alt=""></div>
			<div class="lawyer-view-rolling-slide"><img src="/images/sub/lawyer_view_rolling17_5.jpg" alt=""></div>						
		</section>
	</section>	-->
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