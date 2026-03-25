<?php
/**
 * partials/sections/quick-menu.php
 *
 * 퀵메뉴 — 공식 사이트(LANDING_LIVE_URL)로 연결
 */
if (!defined('_GNUBOARD_')) {
	exit;
}
$dj_base = rtrim(defined('LANDING_LIVE_URL') ? LANDING_LIVE_URL : 'https://trafficdrinking-law-dongju.com', '/');
$u = static function ($path) use ($dj_base) {
	return htmlspecialchars($dj_base . $path, ENT_QUOTES, 'UTF-8');
};
?>
<section class="quick-menu">
	<!-- PC용 퀵메뉴 -->
	<ul class="quick-menu-pc">
		<li><a href="<?php echo $u('/page/self_test.php?me_code=7010'); ?>" target="_blank" rel="noopener noreferrer" onmousedown="javascript:try{NA_Check();}catch(e){}"><img src="/images/common/quick_icon_self.png" alt="음주진단 자가진단" width="20" height="20">음주진단</a></li>
		<li><a href="tel:1522-3394" target="_blank" onmousedown="javascript:try{NA_Call();}catch(e){}"><img src="/images/common/quick_icon01.png" alt="전화상담 1522-3394" width="20" height="20">전화상담</a></li>
		<li><a href="https://pf.kakao.com/_Rpbxmxb/chat" target="_blank" rel="noopener noreferrer" onmousedown="javascript:try{NA_Katalk();}catch(e){}"><img src="/images/common/quick_icon02.png" alt="카카오톡 음주운전 상담" width="20" height="20">카톡상담</a></li>
		<li><a href="<?php echo $u('/bbs/board.php?bo_table=online&me_code=6010'); ?>" target="_blank" rel="noopener noreferrer"><img src="/images/common/quick_icon03.png" alt="온라인 상담 신청" width="20" height="20">온라인 상담</a></li>
		<li><a href="<?php echo $u('/page/location.php?me_code=1040'); ?>" target="_blank" rel="noopener noreferrer"><img src="/images/common/quick_icon04.png" alt="법무법인 동주 오시는 길" width="20" height="20">오시는 길</a></li>
	</ul>
	<!-- 모바일용 퀵메뉴 -->
	<ul class="quick-menu-mo">
		<li><a href="<?php echo $u('/page/self_test.php?me_code=7010'); ?>" target="_blank" rel="noopener noreferrer"><img src="/images/common/quick_icon_self.png" alt="음주진단 자가진단">음주진단</a></li>
		<li><a href="tel:1522-3394"><img src="/images/common/quick_icon01.png" alt="전화상담 1522-3394">전화상담</a></li>
		<li><a href="https://pf.kakao.com/_Rpbxmxb/chat" target="_blank" rel="noopener noreferrer"><img src="/images/common/quick_icon02.png" alt="카카오톡 음주운전 상담">카톡상담</a></li>
		<li><a href="<?php echo $u('/bbs/board.php?bo_table=online&me_code=6010'); ?>" target="_blank" rel="noopener noreferrer"><img src="/images/common/quick_icon03.png" alt="온라인 상담 신청">온라인 상담</a></li>
		<li><a href="<?php echo $u('/page/location.php?me_code=1040'); ?>" target="_blank" rel="noopener noreferrer"><img src="/images/common/quick_icon04.png" alt="법무법인 동주 오시는 길">오시는 길</a></li>
	</ul>
</section>
