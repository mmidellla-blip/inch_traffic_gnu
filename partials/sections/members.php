<?php
if (!defined('_GNUBOARD_')) {
    exit;
}
$dj = defined('LANDING_LIVE_URL') ? LANDING_LIVE_URL : 'https://trafficdrinking-law-dongju.com';
$dj_h = htmlspecialchars($dj, ENT_QUOTES, 'UTF-8');
$members_static = array(
	array('name' => '박동진', 'role' => '대표변호사', 'label' => '음주운전 재판', 'img' => '/images/main/mainvisual/main-03-lawyer01.jpg'),
	array('name' => '이세환', 'role' => '대표변호사', 'label' => '형사전문', 'img' => '/images/main/mainvisual/main-03-lawyer02.jpg'),
	array('name' => '조원진', 'role' => '파트너변호사', 'label' => '형사전문', 'img' => '/images/main/mainvisual/main-03-lawyer03.jpg'),
	array('name' => '오서진', 'role' => '파트너변호사', 'label' => '행정·면허구제', 'img' => '/images/main/mainvisual/main-03-lawyer01.jpg'),
);
?>
<!-- 메인페이지 : 구성원 (정적 껍데기 → 공식 사이트 링크) -->
<section class="section main-members">
	<div class="inner">
		<section class="member-list">
			<div class="tit">
				<header class="section-head svc-title">
					<h2 class="title-h2 svc-main-heading">음주운전 변호사 · 교통사고 변호사</h2>
					<p class="title-sub">서울·수원·인천을 아우르는 음주운전·교통사고 전문 변호사들이 TF로 구성됩니다.</p>
				</header>
			</div>
			<div class="slider-container">
				<button class="slider-nav prev" aria-label="Previous Slide"><</button>
				<button class="slider-nav next" aria-label="Next Slide">></button>
				<div class="slider-wrapper">
					<?php foreach ($members_static as $m) { ?>
						<div class="slider-item">
							<a href="<?php echo $dj_h; ?>/">
								<div class="img-wrap">
									<img src="<?php echo htmlspecialchars($m['img'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($m['name'], ENT_QUOTES, 'UTF-8'); ?> 음주운전 전문 변호사 프로필" width="300" height="360" loading="lazy">
									<?php if ($m['label'] !== '') { ?>
									<span class="label"><?php echo htmlspecialchars($m['label'], ENT_QUOTES, 'UTF-8'); ?></span>
									<?php } ?>
								</div>
								<div class="txt-wrap">
									<span><strong><?php echo htmlspecialchars($m['name'], ENT_QUOTES, 'UTF-8'); ?></strong> <?php echo htmlspecialchars($m['role'], ENT_QUOTES, 'UTF-8'); ?></span>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>
	</div>
</section>
<!-- // 메인페이지 : 구성원 -->
