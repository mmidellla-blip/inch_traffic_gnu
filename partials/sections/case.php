<?php
if (!defined('_GNUBOARD_')) {
    exit;
}
$dj_base = rtrim(defined('LANDING_LIVE_URL') ? LANDING_LIVE_URL : 'https://trafficdrinking-law-dongju.com', '/');
$case_board = htmlspecialchars($dj_base . '/bbs/board.php?bo_table=case&me_code=3010', ENT_QUOTES, 'UTF-8');
?>
<!-- main-case -->
<section class="section main-case">
	<header class="section-head svc-title">
		<h2 class="title-h2 svc-main-heading">음주운전 변호사 업무사례</h2>
		<p class="title-sub">10년 넘는 경력의 20인 이상 전문가들이 축적한 사례입니다.</p>
	</header>
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<a href="<?php echo $case_board; ?>" target="_blank" rel="noopener noreferrer" class="swiper-slide"><img src="/images/main/main-case/main-case-01.jpg" alt="교통음주대표사례01" width="300" height="400" loading="lazy"></a>
			<a href="<?php echo $case_board; ?>" target="_blank" rel="noopener noreferrer" class="swiper-slide"><img src="/images/main/main-case/main-case-02.jpg" alt="교통음주대표사례02" width="300" height="400" loading="lazy"></a>
			<a href="<?php echo $case_board; ?>" target="_blank" rel="noopener noreferrer" class="swiper-slide"><img src="/images/main/main-case/main-case-03.jpg" alt="교통음주대표사례03" width="300" height="400" loading="lazy"></a>
			<a href="<?php echo $case_board; ?>" target="_blank" rel="noopener noreferrer" class="swiper-slide"><img src="/images/main/main-case/main-case-04.jpg" alt="교통음주대표사례04" width="300" height="400" loading="lazy"></a>
			<a href="<?php echo $case_board; ?>" target="_blank" rel="noopener noreferrer" class="swiper-slide"><img src="/images/main/main-case/main-case-05.jpg" alt="교통음주대표사례05" width="300" height="400" loading="lazy"></a>
			<a href="<?php echo $case_board; ?>" target="_blank" rel="noopener noreferrer" class="swiper-slide"><img src="/images/main/main-case/main-case-06.jpg" alt="교통음주대표사례06" width="300" height="400" loading="lazy"></a>
			<a href="<?php echo $case_board; ?>" target="_blank" rel="noopener noreferrer" class="swiper-slide"><img src="/images/main/main-case/main-case-07.jpg" alt="교통음주대표사례07" width="300" height="400" loading="lazy"></a>
			<a href="<?php echo $case_board; ?>" target="_blank" rel="noopener noreferrer" class="swiper-slide"><img src="/images/main/main-case/main-case-08.jpg" alt="교통음주대표사례08" width="300" height="400" loading="lazy"></a>
		</div>
	</div>
	<div class="case-link"><a href="<?php echo $case_board; ?>" target="_blank" rel="noopener noreferrer">더 많은 성공사례 알아보기</a></div>
</section>
<!--//main-case -->
