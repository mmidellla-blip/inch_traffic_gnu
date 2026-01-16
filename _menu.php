<script>
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
// jQuery 체크 및 별칭 설정
if(typeof jQuery !== 'undefined' && typeof window.$ === 'undefined') {
    window.$ = jQuery;
}
</script>
<script src="<?php echo G5_JS_URL ?>/common.js?ver=<?php echo G5_JS_VER; ?>"></script>
<?php
if(defined('_INDEX_')) { // index에서만 실행
	include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
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
			<a href="/">
				<img src="/images/common/logo.png" alt="법무법인동주 음주운전변호사 음주운전전문변호사" class="logo-off" width="200" height="60">
				<img src="/images/common/logo_on.png" alt="법무법인동주 음주운전변호사 음주운전전문변호사" class="logo-on" width="200" height="60">
			</a>
		</p>
		<nav class="gnb">
			<ul id="gnb-1depth">
				<?php
				$sql = " select *
							from {$g5['menu_table']}
							where me_use = '1'
							  and length(me_code) = '2'
							order by me_order, me_id ";
				$result = sql_query($sql, false);
				$gnb_zindex = 999; // gnb-1depth-li z-index 값 설정용
				$menu_datas = array();

				for ($i=0; $row=sql_fetch_array($result); $i++) {
					$menu_datas[$i] = $row;

					$sql2 = " select *
								from {$g5['menu_table']}
								where me_use = '1'
								  and length(me_code) = '4'
								  and substring(me_code, 1, 2) = '{$row['me_code']}'
								order by me_order, me_id ";
					$result2 = sql_query($sql2);
					for ($k=0; $row2=sql_fetch_array($result2); $k++) {
						$menu_datas[$i]['sub'][$k] = $row2;
					}
				}
				$i = 0;
				foreach( $menu_datas as $row ){
					if( empty($row) ) continue; 
				?>
				<li class="gnb-1depth-li" style="z-index:<?php echo $gnb_zindex--; ?>">
					<a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb-1depth-a"><?php echo $row['me_name'] ?></a>
					<?php
					$k = 0;
					foreach( (array) $row['sub'] as $row2 ){

						if( empty($row2) ) continue; 

						if($k == 0)
							echo '<ul class="gnb-2depth">'.PHP_EOL;
					?>
						<li class="gnb-2depth-li"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb-2depth-a"><?php echo $row2['me_name'] ?></a></li>
					<?php
					$k++;
					}   //end foreach $row2

					if($k > 0)
						echo '</ul>'.PHP_EOL;
					?>
				</li>
				<?php
				$i++;
				}   //end foreach $row

				if ($i == 0) {  ?>
					<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
				<?php } ?>
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
			<?php
			$sql = " select *
						from {$g5['menu_table']}
						where me_use = '1'
						  and length(me_code) = '2'
						order by me_order, me_id ";
			$result = sql_query($sql, false);
			$gnb_zindex = 999; // gnb-1depth-li z-index 값 설정용
			$menu_datas = array();

			for ($i=0; $row=sql_fetch_array($result); $i++) {
				$menu_datas[$i] = $row;

				$sql2 = " select *
							from {$g5['menu_table']}
							where me_use = '1'
							  and length(me_code) = '4'
							  and substring(me_code, 1, 2) = '{$row['me_code']}'
							order by me_order, me_id ";
				$result2 = sql_query($sql2);
				for ($k=0; $row2=sql_fetch_array($result2); $k++) {
					$menu_datas[$i]['sub'][$k] = $row2;
				}
			}
			$i = 0;
			foreach( $menu_datas as $row ){
				if( empty($row) ) continue; 
			?>
			<li class="full-gnb-1depth-li" style="z-index:<?php echo $gnb_zindex--; ?>">
				<a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb-1depth-a"><?php echo $row['me_name'] ?></a>
				<?php
				$k = 0;
				foreach( (array) $row['sub'] as $row2 ){

					if( empty($row2) ) continue; 

					if($k == 0)
						echo '<ul class="gnb-2depth">'.PHP_EOL;
				?>
					<li class="gnb-2depth-li"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb-2depth-a"><?php echo $row2['me_name'] ?></a></li>
				<?php
				$k++;
				}   //end foreach $row2

				if($k > 0)
					echo '</ul>'.PHP_EOL;
				?>
			</li>
			<?php
			$i++;
			}   //end foreach $row

			if ($i == 0) {  ?>
				<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
			<?php } ?>
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
	<form action="<?php echo G5_URL ?>/_ok.php" method="post">
		<input type="hidden" name="wr_1" id="wr_1" value="<?php echo $write['wr_1'];?>">
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
					<select CLASS="sec07_input" name="wr_5" id="wr_5" required>
						<option value="" disabled selected>상담분야 선택</option>
						<option value="음주 행정심판">음주 행정심판</option>
						<option value="음주 형사처벌">음주 형사처벌</option>
						<option value="일반 교통범죄">일반 교통범죄</option>
					</select>
				</li>
				<li><input type="checkbox" id="chk" required/><label for="chk">개인정보 수집동의</label><a href="#">자세히 보기</a></li>
			</ul>
			<section class="footerPop">
				<h2>개인정보보호를 위한 이용자 동의 사항</h2>
				<section class="pop-inner">
					1. 개인정보의 수집 및 이용 목적 : 문의에 대한 답변<br>
					2. 수집항목 : 연락처, 이메일<br>
					3. 개인정보의 보유 및 이용기간 :  이용목적이 달성된 때까지 보유합니다.
				</section>
				<a href="#" class="pop-close"></a>
			</section>
			<p class="btn-wrap"><button id='submit_btn'>상담신청</button></p>
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