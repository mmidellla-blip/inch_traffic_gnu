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
$media_items = array(
	array(
		'path' => '/bbs/board.php?bo_table=media&wr_id=7',
		'thumb' => '/images/sub/media1.jpg',
		'subject' => '[비욘드포스트] 음주운전 뺑소니, 의도한 도주 없이도 발생할 수 있다',
		'excerpt' => "최근 음주운전 단속을 피하다가 경찰관을 승합차로 치어 다치게 한 40대 남성 A씨가 징역형과 집행유예를 선고받았다.\n\n인천 지방법원 형사 15부 B판사는 지난 22일 특수 공무집행 방해치상 혐의로 기소된 A씨에게 징역 1년 6개월과 집행유예 2년을 선고했다.",
		'thumb_alt' => '[비욘드포스트] 음주운전 뺑소니 관련 보도',
	),
	array(
		'path' => '/bbs/board.php?bo_table=media&wr_id=9',
		'thumb' => '/images/sub/media2.jpg',
		'subject' => '[미디어파인] 음주운전 교통사고, 재범은 물론 초범도 책임 커 [조원진 변호사 칼럼]',
		'excerpt' => "코로나19와 오미크론의 영향으로 예전 같진 않지만 연말연시가 되면서 망년회, 신년회 등 모임이 늘어나고 있다.\n이러한 만남이 늘어날수록 음주운전 위험은 점점 커지기 마련이다.",
		'thumb_alt' => '[미디어파인] 조원진 변호사 칼럼',
	),
	array(
		'path' => '/bbs/board.php?bo_table=media&wr_id=20&page=1',
		'thumb' => '/images/sub/media3.jpg',
		'subject' => '[비욘드 포스트] 음주운전 행정심판으로 면허 취소 구제 받는 방법',
		'excerpt' => "음주운전으로 인한 문제가 사회적 문제로 대두되고 있다. 이러한 상황 때문에 음주운전에 대한 처벌이 점점 더 강화되고 있고, 따라서 음주운전으로 인한 면허 취소 처분을 받은 운전자들이 자신의 권리를 보호받기 위해 '음주운전 행정심판'에 주목하고 있다.",
		'thumb_alt' => '[비욘드 포스트] 음주운전 행정심판 보도',
	),
);
?>
<!-- main-media -->
<section class="section main-media">
	<div class="inner">
		<section class="main-conts-tit-wrap">
			<header class="section-head svc-title">
				<h2 class="title-h2">법무법인 동주의 실력과 전문성</h2>
				<p class="title-sub">다양한 언론사로부터 인정받고 있습니다.</p>
			</header>
		</section>
		<div class="main-media-list">
			<?php foreach ($media_items as $i => $row) { ?>
			<div class="main-media-slide">
				<a href="<?php echo $u($row['path']); ?>" target="_blank" rel="noopener noreferrer">
					<div class="thumb">
						<img src="<?php echo $e($row['thumb']); ?>" alt="<?php echo $e($row['thumb_alt']); ?>" width="380" height="240" loading="lazy">
						<span class="icon"><img src="/images/main/thumb_icon.png" alt="" width="50" height="50" loading="lazy"></span>
					</div>
					<div class="conts-wrap">
						<span class="subject"><?php echo $e($row['subject']); ?></span>
						<div class="bo-content"><p><?php echo nl2br($e($row['excerpt'])); ?></p></div>
					</div>
				</a>
			</div>
			<?php } ?>
		</div>
		<a href="<?php echo $u('/bbs/board.php?bo_table=media&me_code=4020'); ?>" class="view-more" target="_blank" rel="noopener noreferrer">View more<img src="/images/main/case_more_w.png" alt="미디어 보도자료 더보기" width="10" height="10" loading="lazy"></a>
	</div>
</section>
<!--//main-media -->
