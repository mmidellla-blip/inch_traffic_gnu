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
		'path' => '/bbs/board.php?bo_table=review&wr_id=50',
		'thumb' => '/img/review1.png',
		'cate' => '형사·합의',
		'subject' => '음주운전뺑소니합의 덕분에 집행유예 선처 성공한 의뢰인 후기',
		'excerpt' => "이번 후기의 주인공인 의뢰인 조 씨는 평범한 가장으로, 가족을 위해 성실하게 사회생활을 이어오셨죠.\n과거 음주운전으로 두 차례 처벌받은 전력이 있었지만, 마지막 적발 이후로는 음주를 자제했다고 합니다.\n그런데 음주운전 뺑소니가 발생한 사건 당일, 조 씨는 회식에 참석하게 되었습니다.\n평소 회식이 예정된 날이면, 재범 방지를 위해 자동차 대신 대중교통을 이용해 출퇴근을 했는데요.",
	),
	array(
		'path' => '/bbs/board.php?bo_table=review&wr_id=47',
		'thumb' => '/img/review2.jpg',
		'cate' => '면허구제',
		'subject' => '음주운전행정소송에서 면허구제 성공한 의뢰인 후기입니다',
		'excerpt' => "후기를 남겨주신 의뢰인 박 씨는 40대 중반으로, 가족의 생계를 책임지는 가장이었습니다.\n박 씨는 술자리를 포함한 각종 모임을 즐기는 성향으로, 음주운전 적발 당일에도 술자리에 참석했죠.\n술자리가 마무리되고 대리기사를 호출했지만, 금요일 심야 시간대라서 그런지 기사는 배정되지 않았습니다.\n주말 출근이 예정되어 있던 박 씨는 '더 이상 시간을 지체할 수 없다. 이미 너무 늦었다'라고 판단했다고 하는데요.",
	),
	array(
		'path' => '/bbs/board.php?bo_table=review&wr_id=45',
		'thumb' => '/img/review3.png',
		'cate' => '형사·기소유예',
		'subject' => '숙취음주운전으로 적발되었지만 기소유예로 구제받은 의뢰인 후기를 소개합니다',
		'excerpt' => "이번 카톡후기를 남겨주신 의뢰인 박 씨는 사회 초년생으로, 오랜 취준생활 끝에 어렵게 원하는 기업을 들어가게 되었다고 합니다.\n문제는, 취업을 축하하기 위해 모인 술자리 다음날에 발생하고 맙니다.\n전날밤, 대리기사를 이용하여 무사히 귀가한 박 씨는 곧바로 잠자리에 들었습니다.\n그리고, 다음 날 아침 숙취를 느끼지 못한 박 씨는 크게 문제가 없을 거라 판단하여 직접 운전대를 잡았다고 합니다.",
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
						<img src="<?php echo $e($row['thumb']); ?>" alt="<?php echo $e($row['subject']); ?>" width="350" height="220" loading="lazy">
					</div>
					<div class="conts-wrap">
						<div class="cate"><?php echo $e($row['cate']); ?></div>
						<span class="subject"><?php echo $e($row['subject']); ?></span>
						<div class="bo-content"><p><?php echo nl2br($e($row['excerpt'])); ?></p></div>
					</div>
				</a>
			</div>
			<?php } ?>
		</div>
		<a href="<?php echo $u('/bbs/board.php?bo_table=review&me_code=3020'); ?>" class="view-more" target="_blank" rel="noopener noreferrer">View more<img src="/images/main/case_more.png" alt="음주운전 상담 후기 더보기" width="10" height="10" loading="lazy" title=""></a>
	</div>
</section>
<!--//main-review -->
