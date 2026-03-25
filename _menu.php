<script>
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
// jQuery 체크 및 별칭 설정
if(typeof jQuery !== 'undefined' && typeof window.$ === 'undefined') {
    window.$ = jQuery;
}
</script>
<script src="<?php echo G5_JS_URL ?>/common.js?ver=<?php echo G5_JS_VER; ?>"></script>
<?php
if (defined('_INDEX_') && (!defined('LANDING_STATIC') || !LANDING_STATIC)) {
	include G5_BBS_PATH . '/newwin.inc.php';
}
$dj_site = defined('LANDING_LIVE_URL') ? rtrim(LANDING_LIVE_URL, '/') : 'https://trafficdrinking-law-dongju.com';
$dj_e = static function ($path) use ($dj_site) {
	return htmlspecialchars($dj_site . $path, ENT_QUOTES, 'UTF-8');
};
?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JZW7QT');</script>
<!-- End Google Tag Manager -->
<header id="header">
	<section class="hader-inner">
		<p class="logo">
			<a href="/" class="logo-link">
				<span class="logo-visual">
					<img src="/images/common/logo.png" alt="법무법인동주 음주운전변호사 음주운전전문변호사" class="logo-off" width="200" height="60">
					<img src="/images/common/logo_on.png" alt="법무법인동주 음주운전변호사 음주운전전문변호사" class="logo-on" width="200" height="60">
				</span>
				<span class="logo-tagline">인천음주운전변호사</span>
			</a>
		</p>
		<nav class="gnb">
			<ul id="gnb-1depth">
				<li class="gnb-1depth-li" style="z-index:999">
					<a href="<?php echo $dj_e('/page/greetings.php?me_code=1010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">동주소개</a>
					<ul class="gnb-2depth">
						<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/greetings.php?me_code=1010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">대표인사말</a></li>
						<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/differentiation.php?me_code=1020'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">동주만의 차별화</a></li>
						<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/location.php?me_code=1030'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">오시는 길</a></li>
					</ul>
				</li>
				<li class="gnb-1depth-li" style="z-index:998">
					<a href="<?php echo $dj_e('/page/lawyer.php?me_code=2010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">변호사 구성원</a>
					<ul class="gnb-2depth">
						<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/lawyer.php?me_code=2010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">음주운전 변호사</a></li>
					</ul>
				</li>
				<li class="gnb-1depth-li" style="z-index:997">
					<a href="<?php echo $dj_e('/bbs/board.php?bo_table=case&me_code=3010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">성공사례</a>
					<ul class="gnb-2depth">
						<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/bbs/board.php?bo_table=case&me_code=3010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">성공사례</a></li>
						<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/bbs/board.php?bo_table=review&me_code=3020'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">고객후기</a></li>
					</ul>
				</li>
				<li class="gnb-1depth-li" style="z-index:996">
					<a href="<?php echo $dj_e('/bbs/board.php?bo_table=column&me_code=4010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">동주 매거진</a>
					<ul class="gnb-2depth">
						<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/bbs/board.php?bo_table=column&me_code=4010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">칼럼</a></li>
						<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/bbs/board.php?bo_table=media&me_code=4020'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">언론보도</a></li>
					</ul>
				</li>
				<li class="gnb-1depth-li" style="z-index:995">
					<a href="<?php echo $dj_e('/page/drunken01.php'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">업무분야</a>
					<ul class="gnb-2depth">
						<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/drunken01.php'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">음주운전 형사절차</a></li>
						<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/drunken02.php'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">음주운전 행정절차</a></li>
					</ul>
				</li>
				<li class="gnb-1depth-li" style="z-index:994">
					<a href="<?php echo $dj_e('/bbs/board.php?bo_table=online&me_code=6010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">온라인 상담</a>
					<ul class="gnb-2depth">
						<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/bbs/board.php?bo_table=online&me_code=6010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">온라인 상담</a></li>
					</ul>
				</li>
				<li class="gnb-1depth-li" style="z-index:993">
					<a href="<?php echo $dj_e('/page/self_test.php?me_code=7010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">음주진단</a>
					<ul class="gnb-2depth">
						<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/self_test.php?me_code=7010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">음주진단</a></li>
					</ul>
				</li>
			</ul>
		</nav>

		<div class="menu-btn">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</section>
	<div class="gnb-bg"></div>
	<div class="nav-full">
		<ul id="full-gnb-1depth">
			<li class="full-gnb-1depth-li" style="z-index:999">
				<a href="<?php echo $dj_e('/page/greetings.php?me_code=1010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">동주소개</a>
				<ul class="gnb-2depth">
					<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/greetings.php?me_code=1010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">대표인사말</a></li>
					<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/differentiation.php?me_code=1020'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">동주만의 차별화</a></li>
					<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/location.php?me_code=1030'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">오시는 길</a></li>
				</ul>
			</li>
			<li class="full-gnb-1depth-li" style="z-index:998">
				<a href="<?php echo $dj_e('/page/lawyer.php?me_code=2010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">변호사 구성원</a>
				<ul class="gnb-2depth">
					<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/lawyer.php?me_code=2010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">음주운전 변호사</a></li>
				</ul>
			</li>
			<li class="full-gnb-1depth-li" style="z-index:997">
				<a href="<?php echo $dj_e('/bbs/board.php?bo_table=case&me_code=3010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">성공사례</a>
				<ul class="gnb-2depth">
					<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/bbs/board.php?bo_table=case&me_code=3010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">성공사례</a></li>
					<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/bbs/board.php?bo_table=review&me_code=3020'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">고객후기</a></li>
				</ul>
			</li>
			<li class="full-gnb-1depth-li" style="z-index:996">
				<a href="<?php echo $dj_e('/bbs/board.php?bo_table=column&me_code=4010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">동주 매거진</a>
				<ul class="gnb-2depth">
					<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/bbs/board.php?bo_table=column&me_code=4010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">칼럼</a></li>
					<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/bbs/board.php?bo_table=media&me_code=4020'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">언론보도</a></li>
				</ul>
			</li>
			<li class="full-gnb-1depth-li" style="z-index:995">
				<a href="<?php echo $dj_e('/page/drunken01.php'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">업무분야</a>
				<ul class="gnb-2depth">
					<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/drunken01.php'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">음주운전 형사절차</a></li>
					<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/drunken02.php'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">음주운전 행정절차</a></li>
				</ul>
			</li>
			<li class="full-gnb-1depth-li" style="z-index:994">
				<a href="<?php echo $dj_e('/bbs/board.php?bo_table=online&me_code=6010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">온라인 상담</a>
				<ul class="gnb-2depth">
					<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/bbs/board.php?bo_table=online&me_code=6010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">온라인 상담</a></li>
				</ul>
			</li>
			<li class="full-gnb-1depth-li" style="z-index:993">
				<a href="<?php echo $dj_e('/page/self_test.php?me_code=7010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-1depth-a">음주진단</a>
				<ul class="gnb-2depth">
					<li class="gnb-2depth-li"><a href="<?php echo $dj_e('/page/self_test.php?me_code=7010'); ?>" target="_blank" rel="noopener noreferrer" class="gnb-2depth-a">음주진단</a></li>
				</ul>
			</li>
		</ul>
		<div class="close-btn">
			<span></span>
			<span></span>
		</div>
	</div>
</header>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JZW7QT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
	if($gr_id!='self'){
		define("__ONLY_NUM", "onKeyUp=\"if(typeof jQuery!=='undefined')jQuery(this).val(jQuery(this).val().replace(/[^0-9]/gi, ''));\"");
?>
<!--footer-online -->
<section class="footer-online">
	<form action="<?php echo defined('DJ_FORM_ACTION') ? DJ_FORM_ACTION : (G5_URL . '/_ok.php'); ?>" method="post">
		<input type="hidden" name="wr_1" id="wr_1" value="<?php echo isset($write['wr_1']) ? htmlspecialchars((string) $write['wr_1'], ENT_QUOTES, 'UTF-8') : ''; ?>">
		<input type="hidden" id="secret" name="secret" value="secret">
		<dl>
			<dt>실시간 전화</dt>
			<dd>1522-3394</dd>
		</dl>
		<section class="footer-online-wrap">
			<p>신속상담신청</p>
			<ul class="input-wrap">
				<li>
					<input class="sec07_input" type="tel" name="h_tel" id="h_tel" placeholder="연락처 입력" required pattern="[0-9]*" inputmode="numeric" />
				</li>
				<!-- <li><input class="sec07_input" type="text" name="h_tel" id="h_tel" placeholder="연락처 입력" required <?=__ONLY_NUM?> /></li> -->
				<li><input class="sec07_input" type="text" name="h_place" id="h_place" placeholder="지역 입력" required /></li>
				<li>
					<select class="sec07_input" name="wr_5" id="wr_5" required>
						<option value="" disabled selected>상담분야 선택</option>
						<option value="음주 행정심판">음주 행정심판</option>
						<option value="음주 형사처벌">음주 형사처벌</option>
						<option value="일반 교통범죄">일반 교통범죄</option>
					</select>
				</li>
				<li><input type="checkbox" id="chk" required/><label for="chk">개인정보 수집동의</label><a href="#">자세히 보기</a></li>
			</ul>
			<section class="footerPop">
				<strong>개인정보보호를 위한 이용자 동의 사항</strong>
				<section class="pop-inner">
					1. 개인정보의 수집 및 이용 목적 : 문의에 대한 답변<br>
					2. 수집항목 : 연락처, 이메일<br>
					3. 개인정보의 보유 및 이용기간 :  이용목적이 달성된 때까지 보유합니다.
				</section>
				<a href="#" class="pop-close"></a>
			</section>
			<p class="btn-wrap"><button type="submit" id="submit_btn">상담신청</button></p>
		</section>
	</form>
</section>
<!--//!--footer-online -->
<?php }?>

<script>
$(function(){
	$(window).on("load resize", function(){
		var displayWidth = $(window).width();
		if ( displayWidth < 1024) {
			$(".gnb").off("mouseenter");
			$(".gnb").off("mouseleave");
			$(".menu-btn").off("click");
			
			var leftCheck=[];
				leftCheck[0]=0, leftCheck[1]=0;

			leftStart();
		
			$('.menu-btn').on({
				click: function(e){
					e.preventDefault();
					LeftMenuFn();
				}
			});
			function LeftMenuFn(){
				if(leftCheck[1]==1){
					leftOpen();
				}else if(leftCheck[0]==1){
					leftClose();
				}
			}
			function leftStart(){
				leftCheck[1]=1;
			}
			function leftOpen(){
				leftCheck[0]=1, leftCheck[1]=0;
				$('.menu-btn').addClass('on');
				$("#header").addClass("on");
				$('.gnb').fadeIn(300);
			}
			function leftClose(){
				leftCheck[0]=0, leftCheck[1]=1;
				$('.menu-btn').removeClass('on');
				$("#header").removeClass("on");
				$('.gnb').fadeOut(300);
			}

			$(".gnb-1depth-li>a").unbind("click").bind("click",function(e){
				e.preventDefault();
				var menu = $(this).parent();
				menu.toggleClass('on').children('ul').slideDown(500);
				menu.siblings().removeClass('on');

				$('.gnb-1depth-li').not('.on').children('ul').slideUp(300);
			});

		} else {
			$(".m-nav-btn").off("click");
			$(".gnb-1depth-li>a").off("click");
			// menu
			$('.menu-btn').click(function(e){
				e.preventDefault();
				$(this).toggleClass("on",300);
				$(".gnb-2depth").removeAttr("style");
				$(".gnb-2depth").toggleClass("on",300);
				$("#header .gnb-bg").removeAttr("style");
				$("#header .gnb-bg").toggleClass("menu",300);
				$("#header").toggleClass("on");
			});

			$(".gnb").mouseenter(function(){
				$("#header").addClass("on");
				$(this).find(".gnb-2depth").stop().animate({height:"400px",paddingTop:"20px"},300);
				$("#header .gnb-bg").stop().animate({height:"400px"},300).addClass("on");
			});
			$(".gnb").mouseleave(function(){
				$("#header").removeClass("on");
				$(this).find(".gnb-2depth").stop().animate({height:0,paddingTop:0},300);
				$("#header .gnb-bg").stop().animate({height:0},300).removeClass("on");
			});
			$(".gnb-1depth-li>a").click(function(e){
				e.stopPropagation();
			});

		}
		return false;
	});

	$(".quick-top").on("click", function() {
		$("html, body").animate({scrollTop:0}, '500');
		return false;
	});
	
	$(".location-tab li").on("click",function() {
		var tabnum = $(this).index();
		$(".location-tab li").removeClass("on");
		$(this).addClass("on");
		$(".location-detail>section").removeClass("on");
		$(".location-detail>section").eq(tabnum).addClass("on");
		return false;
	});
	
	$(".business-tab li").on("click",function() {
		var tabnum = $(this).index();
		$(".business-tab li").removeClass("on");
		$(this).addClass("on");
		$(".business-detail-outer>section").removeClass("on");
		$(".business-detail-outer>section").eq(tabnum).addClass("on");
		return false;
	});

	// 푸터온라인 개인정보동의 모달팝업
	$(".footer-online .input-wrap li:last-child a").click(function(e){
		e.preventDefault();
		$(".footerPop").show();
		});
		$(".footerPop .pop-close").click(function(e){
		e.preventDefault();
		$(".footerPop").hide();
	});

	$(".business-faq h1").unbind("click").bind("click",function(e){
		e.preventDefault();
		var menu1 = $(this);
		menu1.toggleClass('on').next('p').slideDown(0);
		menu1.siblings().removeClass('on');

		$(".business-faq h1").not('.on').next('p').slideUp(0);
	});
});
$(document).ready(function() {
		$(".business-tab.crime a").click(function(){ 
				$(".business-tab.crime li").removeClass("on");
				$(this).parent("li").addClass("on");
				$('html,body').animate({scrollTop:$(this.hash).offset().top-120}, 500);
		});
});
</script>