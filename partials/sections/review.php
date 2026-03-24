<?php
if (!defined('_GNUBOARD_')) {
    exit;
}
$dj = defined('LANDING_LIVE_URL') ? rtrim(LANDING_LIVE_URL, '/') : 'https://trafficdrinking-law-dongju.com';
$u = static function ($path) use ($dj) {
	return htmlspecialchars($dj . $path, ENT_QUOTES, 'UTF-8');
};
$e = static function ($s) {
	return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
};
$review_items = array(
	array(
		'path' => '/bbs/board.php?bo_table=review&me_code=2010&wr_id=50',
		'cate' => '형사·합의',
		'subject' => '음주운전뺑소니합의 덕분에 집행유예 선처 성공한 의뢰인 후기',
		'excerpt' => '전문은 공식 사이트에서 확인하실 수 있습니다.',
	),
	array(
		'path' => '/bbs/board.php?bo_table=review&me_code=2010&wr_id=47',
		'cate' => '면허구제',
		'subject' => '음주운전행정소송에서 면허구제 성공한 의뢰인 후기입니다',
		'excerpt' => '전문은 공식 사이트에서 확인하실 수 있습니다.',
	),
	array(
		'path' => '/bbs/board.php?bo_table=review&me_code=2010&wr_id=45',
		'cate' => '형사·기소유예',
		'subject' => '숙취음주운전으로 적발되었지만 기소유예로 구제받은 의뢰인 후기를 소개합니다',
		'excerpt' => '전문은 공식 사이트에서 확인하실 수 있습니다.',
	),
);
?>
<!-- main-review -->
<section class="section main-review">
	<div class="inner">
		<section class="main-conts-tit-wrap">
		<header>
			<h2 class="title-h2 svc-main-heading">의뢰인의 진짜 후기가 입증하는 동주의 실력</h2>
			<p class="title-sub">동주는 의뢰인에게 이익이 될 때만 수임을 제안 드립니다. 그리고 결과로 입증합니다.</p>
		</header>
		</section>
		<div class="main-review-list">
			<?php foreach ($review_items as $i => $row) { ?>
			<div class="main-review-slide">
				<a href="<?php echo $u($row['path']); ?>" target="_blank" rel="noopener noreferrer">
					<div class="thumb">
						<img src="/images/main/mainvisual/main-03-lawyer0<?php echo (int) ($i + 1); ?>.jpg" alt="<?php echo $e($row['subject']); ?>" width="350" height="220" loading="lazy">
					</div>
					<div class="conts-wrap">
						<div class="cate"><?php echo $e($row['cate']); ?></div>
						<span class="subject"><?php echo $e($row['subject']); ?></span>
						<div class="bo-content"><p><?php echo $e($row['excerpt']); ?></p></div>
					</div>
				</a>
			</div>
			<?php } ?>
		</div>
		<a href="<?php echo $u('/bbs/board.php?bo_table=review&me_code=2010'); ?>" class="view-more" target="_blank" rel="noopener noreferrer">View more<img src="/images/main/case_more.png" alt="음주운전 상담 후기 더보기" width="10" height="10" loading="lazy"></a>
	</div>
</section>
<!--//main-review -->
