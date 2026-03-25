<?php
if (!defined('_GNUBOARD_')) {
	exit;
}
$dj_base = rtrim(defined('LANDING_LIVE_URL') ? LANDING_LIVE_URL : 'https://trafficdrinking-law-dongju.com', '/');
$dj_h = htmlspecialchars($dj_base, ENT_QUOTES, 'UTF-8');
$e = static function ($s) {
	return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
};

/**
 * 공식 사이트 lawyer 슬라이더와 동일 순서·문구·이미지(data/file/member)
 * https://trafficdrinking-law-dongju.com/page/lawyer.php?me_code=1020
 */
$members_static = array(
	array(
		'name' => '박동진', 'headline' => '변호사',
		'label' => "서울중앙지검 부장검사 출신\n음주운전 재판 책임 변호사",
		'img' => '/data/file/member/2072958247_fynVPXmb_b764896c08daf26849be71dca80d50d0d88e7d77.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=32',
		'lines' => array('·음주운전 재판 전반', '·음주운전 교통사고 및 뺑소니'),
	),
	array(
		'name' => '이세환', 'headline' => '변호사',
		'label' => "형사전문변호사\n음주운전 사건 총괄 변호사",
		'img' => '/data/file/member/2072958247_3mFfhHaj_916371b2b4b209dcee8a18d3d584b80a6806ad19.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=1',
		'lines' => array('·음주운전 재판 전반', '·음주운전 교통사고 및 뺑소니', '·음주운전 수사 대응'),
	),
	array(
		'name' => '조원진', 'headline' => '변호사',
		'label' => "형사전문변호사\n군인·공무원 음주운전 책임 변호사",
		'img' => '/data/file/member/2072958247_d2kQaDtH_8b40d23325103a661b006e327f97a8f777f2e4ac.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=2',
		'lines' => array('·음주운전 재판 전반', '·음주운전 교통사고 및 뺑소니', '·군인·공무원 음주운전 사건 전반'),
	),
	array(
		'name' => '이세진', 'headline' => '변호사',
		'label' => "형사사건특정변호사\n음주사고 손해배상 책임 변호사",
		'img' => '/data/file/member/2072958247_WxBK8twV_940b1de71c6bbd3949c07bfbd2e99b68f9fe7cc7.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=3',
		'lines' => array('·음주운전 재판 전반', '·음주운전 교통사고 형사합의', '·음주운전 사고 손해배상 방어'),
	),
	array(
		'name' => '오서진', 'headline' => '변호사',
		'label' => "행정법전문변호사\n음주 행정심판소송 책임 변호사",
		'img' => '/data/file/member/2072958247_fejinYmF_8dcccfa937d95577902f0efd7f9f33d2958ecb5d.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=4',
		'lines' => array('·음주운전 재판 전반', '·음주운전 면허취소 구제', '·음주운전 행정소송'),
	),
	array(
		'name' => '김윤서', 'headline' => '변호사',
		'label' => "형사전문변호사\n음주운전 교통사고 책임 변호사",
		'img' => '/data/file/member/2072958247_DKvId4qC_c7b2c335855c9a5b366c325120d96b5dcdae4b1f.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=5',
		'lines' => array('·음주운전 재판 전반', '·음주운전 교통사고 및 뺑소니', '·음주운전 수사 대응'),
	),
	array(
		'name' => '권희영', 'headline' => '변호사',
		'label' => '음주운전 면허취소 구제',
		'img' => '/data/file/member/2072958247_QvJF3ekw_da0a455e054b5b4bc3def1d6fcccd80a074192ee.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=26',
		'lines' => array('·숙취운전 사건', '·음주운전 재범 면허구제', '·음주운전 수사 대응'),
	),
	array(
		'name' => '박기화', 'headline' => '변호사',
		'label' => '음주운전 교통사고 대응',
		'img' => '/data/file/member/2072958247_Pj7NG3Ih_394b38768adeea970cdd4a7d1ea776a148cbc511.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=40',
		'lines' => array('·무면허 음주운전 사건', '·음주운전 교통사고 대응', '·음주운전 수사 대응'),
	),
	array(
		'name' => '김지아', 'headline' => '변호사',
		'label' => '음주운전 면허취소 구제',
		'img' => '/data/file/member/2072958247_M47QLdYj_99e128ee075ba808455234ec6f2bf9aba7cf983b.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=33',
		'lines' => array('·숙취운전 사건', '·음주운전 초범 면허구제', '·음주운전 수사 대응'),
	),
	array(
		'name' => '김민정', 'headline' => '변호사',
		'label' => '음주운전 재범, 사고, 도주',
		'img' => '/data/file/member/2072958247_NPIkvGZ5_bd21090aa300474ce24ceb3781520ab93946976d.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=8',
		'lines' => array('·음주운전 재범 사건', '·사고 및 도주 초기 대응', '·음주운전 무죄 조력'),
	),
	array(
		'name' => '기정환', 'headline' => '변호사',
		'label' => '음주운전 재범, 사고, 도주',
		'img' => '/data/file/member/2072958247_KDgN7fnP_401521b8a629f58f8839e29669d317cddd27f124.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=27',
		'lines' => array('·음주운전 뺑소니 사건', '·사고 및 도주 초기 대응', '·음주운전 위드마크 전반'),
	),
	array(
		'name' => '이정원', 'headline' => '변호사',
		'label' => '',
		'img' => '/data/file/member/2072958247_5Iez8wyk_4e2d0791d61d445f3cd67ea1a9e125665b36012d.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=48',
		'lines' => array(),
	),
	array(
		'name' => '조선정', 'headline' => '변호사',
		'label' => '음주운전 면허취소 구제',
		'img' => '/data/file/member/2072958247_Hcg72lyp_0ec4f76019f78bbb5f3200e91611cda2b8f05cd1.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=22',
		'lines' => array('·음주운전 재범 사건', '·음주운전 생계형 면허구제', '·음주운전 위드마크 전반'),
	),
	array(
		'name' => '정주은', 'headline' => '변호사',
		'label' => '무면허, 음주사고',
		'img' => '/data/file/member/2072958247_3Lhan61F_89185352afa63f308e2352a803f2651b3e588192.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=23',
		'lines' => array('·무면허 음주운전 사건', '·음주운전 항소 조력', '·음주운전 수사 대응'),
	),
	array(
		'name' => '권효경', 'headline' => '변호사',
		'label' => '음주운전 재범, 사고, 도주',
		'img' => '/data/file/member/2072958247_mXS7PbGI_a2e67a28b4de8b6010380f1253b408e9bf6cd9da.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=25',
		'lines' => array('·음주운전 재범 사건', '·음주운전 무죄 조력', '·음주운전 수사 대응'),
	),
	array(
		'name' => '지현주', 'headline' => '변호사',
		'label' => "형사전문변호사\n음주운전 면허취소 구제",
		'img' => '/data/file/member/2072958247_a5moHqfU_665cab6d6e2039920a342a500301ab1d16e9a1cc.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=28',
		'lines' => array('·음주운전 사고 면허구제', '·음주운전 항소 조력', '·공무원 음주운전 사건'),
	),
	array(
		'name' => '김용진', 'headline' => '변호사',
		'label' => '음주운전 재범, 사고, 도주',
		'img' => '/data/file/member/2072958247_tzVxIO4s_4257e8103079bec5267be00cd2ee0987f27157fb.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=31',
		'lines' => array('·음주운전 뺑소니 사건', '·음주운전 교통사고 대응', '·공기업 및 대기업 음주운전 사건'),
	),
	array(
		'name' => '이인아', 'headline' => '변호사',
		'label' => '무면허, 음주사고',
		'img' => '/data/file/member/2072958247_ig5lhKEr_7acf7d58687ca74e93541ff8d42f23d6c5dcd8dc.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=35',
		'lines' => array('·무면허 음주운전 사건', '·주차장 음주운전 사건', '·음주운전 무죄 조력'),
	),
	array(
		'name' => '김민선', 'headline' => '변호사',
		'label' => "형사전문변호사\n음주운전 면허취소 구제",
		'img' => '/data/file/member/2072958247_c39hXCQe_3f05f1907997eef6cf75fbb4ca9294a4c3c54507.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=36',
		'lines' => array('·음주운전 사고 면허구제', '·음주운전 무죄 조력', '·공무원 음주운전 사건'),
	),
	array(
		'name' => '강유정', 'headline' => '변호사',
		'label' => "음주운전 면허취소 구제\n군검사 출신",
		'img' => '/data/file/member/2072958247_yEImY7be_97af1b677374b602daea0303c68ad356f5a2a41c.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=37',
		'lines' => array('·주차장 음주운전 사건', '·음주운전 재범 면허구제', '·공기업 및 대기업 음주운전 사건'),
	),
	array(
		'name' => '백다슬', 'headline' => '변호사',
		'label' => '음주운전 교통사고 대응',
		'img' => '/data/file/member/2072958247_6t5QMawT_d111c4562effd3d001e33bdcae93afa55d2d1f69.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=38',
		'lines' => array('·음주운전 뺑소니 사건', '·음주운전 교통사고 대응', '·음주운전 사고 면허구제'),
	),
	array(
		'name' => '박은경', 'headline' => '변호사',
		'label' => '',
		'img' => '/data/file/member/2072958247_eFKLqEMS_b3a4ab0d6e5aea9cbb71e8212a7fc334aa8d2210.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=42',
		'lines' => array(),
	),
	array(
		'name' => '천현진', 'headline' => '변호사',
		'label' => '',
		'img' => '/data/file/member/2072958247_UOjXMv28_37d7110957f36a5066dcf81177eb879140db3277.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=47',
		'lines' => array(),
	),
	array(
		'name' => '한채영', 'headline' => '변호사',
		'label' => '',
		'img' => '/data/file/member/2072958247_xVtp1MHE_1637a280aa8151d888dfecf33e0eb8cd6d268635.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=49',
		'lines' => array(),
	),
	array(
		'name' => '나은지', 'headline' => '변호사',
		'label' => '',
		'img' => '/data/file/member/30710200_0cqEBOyT_849f2e18786b79ad91938c78c9d8af87c0203f7c.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=50',
		'lines' => array(),
	),
	array(
		'name' => '박연경', 'headline' => '변호사',
		'label' => '군검사 출신',
		'img' => '/data/file/member/2728313271_1IyGJ2PA_c2e228ef06e0afe426c0b3f62ee6a4c7b26497c9.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=53',
		'lines' => array(),
	),
	array(
		'name' => '조선익', 'headline' => '수석 행정사',
		'label' => "음주 전담 행정사\n면허정지·취소구제",
		'img' => '/data/file/member/1026007660_GA2jIO40_9e13db6188a2a43b28963c03009c82a1503e732b.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=14',
		'lines' => array('·음주운전 초범 재범 면허구제', '·단순 및 사고 적발 면허구제', '·생계형 이의신청, 행정심판 전반'),
	),
	array(
		'name' => '김동윤', 'headline' => '상담실장(행정사)',
		'label' => "음주 전담 행정사\n면허정지·취소구제",
		'img' => '/data/file/member/2072958247_fWTIltbp_1753cca286c9140002a3463ac150bdafa62ea660.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=46',
		'lines' => array('·음주운전 초범 재범 면허구제', '·단순 및 사고 적발 면허구제', '·생계형 이의신청, 행정심판 전반'),
	),
	array(
		'name' => '김태희', 'headline' => '행정사',
		'label' => "음주 전담 행정사\n면허정지·취소구제",
		'img' => '/data/file/member/2072958247_EvNDncLg_4ddf3eb21482930310a5c9f8c1c1e981e558d7e1.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=29',
		'lines' => array('·음주운전 초범 재범 면허구제', '·단순 및 사고 적발 면허구제', '·생계형 이의신청, 행정심판 전반'),
	),
	array(
		'name' => '박상우', 'headline' => '행정사',
		'label' => '',
		'img' => '/data/file/member/2072958247_LFxwsjMS_b69c5aa1cc0951ce18445f524dc39274ff4363fb.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=43',
		'lines' => array('前서울서부경찰서 경제팀', '前서울서부경찰서 강력팀', '前일산고양경찰서 여청계(여청수사팀) 수사관'),
	),
	array(
		'name' => '허준', 'headline' => '행정사',
		'label' => '',
		'img' => '/data/file/member/2072958247_WHnJvqDy_40f0debcf423752491afe4786649968fb370a2f4.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=44',
		'lines' => array(),
	),
	array(
		'name' => '황병렬', 'headline' => '자문위원(행정사)',
		'label' => '',
		'img' => '/data/file/member/2072958247_Mp4FnYxU_b07fd3769e6f908c92244fdf9eefd7b37fc128ac.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=45',
		'lines' => array(),
	),
	array(
		'name' => '이형수', 'headline' => '고문위원',
		'label' => '',
		'img' => '/data/file/member/1026007660_8ERW0SVh_95ec01927a63cee520a10d89dcabd99338096074.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=15',
		'lines' => array('서울대 경영대 졸업', '前외환은행자금시장 본부장', '前외환선물㈜ 대표이사'),
	),
	array(
		'name' => '오상기', 'headline' => '고문위원',
		'label' => '',
		'img' => '/data/file/member/1026007660_ZcJto2aI_bc2ddbc65b0c19ad41930bcb7279d9197069b73f.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=16',
		'lines' => array('前인천광역시의회 시정자문위원', '前선거관리위원회 부위원장'),
	),
	array(
		'name' => '변인화', 'headline' => '전문위원',
		'label' => '',
		'img' => '/data/file/member/1026007660_esuAS8Jz_93b50ead730bd6d9cad615e5f9258a7e273f82d3.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=17',
		'lines' => array('서울대학교 졸업', '前 학교운영위원회 교사대표', '前 중고등 교사'),
	),
	array(
		'name' => '손흥종', 'headline' => '상담실장(행정사)',
		'label' => '',
		'img' => '/data/file/member/2072958247_RYdfaGzv_0a5271460ecc7521719fb64b1ee4e6ffad0df903.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=41',
		'lines' => array('성균관대학교 법대 졸업'),
	),
	array(
		'name' => '정재선', 'headline' => '상담실장(행정사)',
		'label' => '',
		'img' => '/data/file/member/30710200_O0h126BG_73e4015dea14ef6bc23ddc329dc738878c0ff402.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=52',
		'lines' => array(),
	),
);
?>
<!-- 메인페이지 : 구성원 (공식 사이트 lawyer 슬라이더와 동일) -->
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
					<?php foreach ($members_static as $m) {
						$label = isset($m['label']) ? $m['label'] : '';
						$lines = isset($m['lines']) && is_array($m['lines']) ? $m['lines'] : array();
						?>
						<div class="slider-item">
							<a href="<?php echo $dj_h . $e(isset($m['url']) ? $m['url'] : '/'); ?>">
								<div class="img-wrap">
									<img src="<?php echo $e($dj_base . $m['img']); ?>" alt="<?php echo $e($m['name']); ?> 프로필" width="300" height="360" loading="lazy">
									<?php if ($label !== '') { ?>
									<span class="label"><?php echo nl2br($e($label)); ?></span>
									<?php } ?>
								</div>
								<div class="txt-wrap">
									<span class="member-card-txt"><strong><?php echo $e($m['name']); ?></strong> <?php echo $e(isset($m['headline']) ? $m['headline'] : '변호사'); ?><?php
									foreach ($lines as $line) {
										echo '<br>' . $e($line);
									}
									?></span>
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
