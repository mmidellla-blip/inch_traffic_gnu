<?php include_once(G5_PATH.'/head.sub.php'); ?>

<!-- 우클릭&드래그 금지 -->
<script type="text/javascript">
   document.oncontextmenu = function(){return false;}
</script>

<!-- wrapper -->
<section id="wrapper" class="sub">
	<?php include('_menu.php');?>
	<!-- contents -->
	<section id="contents">

	<?php if($gr_id=='intro'){?>
	<section class="sub-visual intro">
		<section class="visual-inner">
			<p>동주소개<span>Lawfirm Dongju</span></p>
		</section>
	</section>
	<div>
		<ul>
			<li <?php if($_GET['me_code'] == '1010') { echo " class=\"on\""; } ?>><a href="/page/greetings.php?me_code=1010">대표인사말</a></li>
			<li <?php if($_GET['me_code'] == '1020') { echo " class=\"on\""; } ?>><a href="/page/differentiation.php?me_code=1020">동주만의 차별화</a></li>
			<li <?php if($_GET['me_code'] == '1030') { echo " class=\"on\""; } ?>><a href="/page/location.php?me_code=1030">오시는 길</a></li>
		</ul>
	</div>

	<?php }else if($gr_id=='member'){?>
	<section class="sub-visual member">
		<section class="visual-inner">
			<p>변호사 구성원<span>Lawyers</span></p>
		</section>
	</section>
	<div>
		<ul>
			<li <?php if($_GET['me_code'] == '2010') { echo " class=\"on\""; } ?>><a href="/page/lawyer.php?me_code=2010">음주운전 변호사</a></li>
		</ul>
	</div>

	<?php }else if($gr_id=='center'){?>
	<section class="sub-visual center">
		<section class="visual-inner">
			<p>연구센터<span>Dongju Center</span></p>
		</section>
	</section>
	<div>
		<ul>
			<li <?php if($_GET['me_code'] == '2010') { echo " class=\"on\""; } ?>><a href="/page/center_info.php?me_code=2010">연구센터</a></li>
		</ul>
	</div>

	<?php }else if($gr_id=='case'){?>
	<section class="sub-visual case">
		<section class="visual-inner">
			<p>성공사례<span>Success case</span></p>
		</section>
	</section>
	<div>
		<ul>
			<li <?php if($_GET['bo_table'] == 'case') { echo " class=\"on\""; } ?>><a href="/bbs/board.php?bo_table=case&me_code=3010">성공사례</a></li>
			<li <?php if($_GET['bo_table'] == 'review') { echo " class=\"on\""; } ?>><a href="/bbs/board.php?bo_table=review&me_code=3020">고객후기</a></li>
		</ul>
	</div>
	<?php }else if($gr_id=='magazine'){?>
	<section class="sub-visual magazine">
		<section class="visual-inner">
			<p>동주 매거진<span>MAGAZINE</span></p>
		</section>
	</section>
	<div>
		<ul>
			<li <?php if($_GET['bo_table'] == 'column') { echo " class=\"on\""; } ?>><a href="/bbs/board.php?bo_table=column&me_code=4010">칼럼</a></li>
			<li <?php if($_GET['bo_table'] == 'media') { echo " class=\"on\""; } ?>><a href="/bbs/board.php?bo_table=media&me_code=4020">언론보도</a></li>
		</ul>
	</div>
	<?php }else if($gr_id=='business'){?>
	<section class="sub-visual business">
		<section class="visual-inner">
			<p>업무분야<span>Business area</span></p>
		</section>
	</section>
	<div>
		<ul>
			<li <?php if($_GET['me_code'] == '5010') { echo " class=\"on\""; } ?>><a href="/page/drunken01.php?me_code=5010#area_01-01"><span class="areas-01">형사</span>-처벌</a></li>
			<li <?php if($_GET['me_code'] == '5020') { echo " class=\"on\""; } ?>><a href="/page/drunken01.php?me_code=5020#area_01-02"><span class="areas-01">형사</span>-소송</a></li>
			<li <?php if($_GET['me_code'] == '5030') { echo " class=\"on\""; } ?>><a href="/page/drunken01.php?me_code=5030#area_01-03"><span class="areas-01">형사</span>-조력</a></li>
			<li <?php if($_GET['me_code'] == '5040') { echo " class=\"on\""; } ?>><a href="/page/drunken02.php?me_code=5040#area_02-01"><span class="areas-02">행정</span>-심판</a></li>
			<li <?php if($_GET['me_code'] == '5050') { echo " class=\"on\""; } ?>><a href="/page/drunken02.php?me_code=5050#area_02-02"><span class="areas-02">행정</span>-소송</a></li>
			<li <?php if($_GET['me_code'] == '5060') { echo " class=\"on\""; } ?>><a href="/page/drunken02.php?me_code=5060#area_02-03"><span class="areas-02">행정</span>-소청</a></li>
			<li <?php if($_GET['me_code'] == '5070') { echo " class=\"on\""; } ?>><a href="/page/drunken02.php?me_code=5070#area_02-04"><span class="areas-02">행정</span>-조력</a></li>
		</ul>
	</div>
	<?php }else if($gr_id=='online'){?>
	<section class="sub-visual online">
		<section class="visual-inner">
			<p>온라인 상담<span>consulting</span></p>
		</section>
	</section>
	<div>
		<ul>
			<li <?php if($_GET['bo_table'] == 'online') { echo " class=\"on\""; } ?>><a href="/bbs/board.php?bo_table=online&me_code=6010">온라인상담</a></li>
		</ul>
	</div>
	<?php }?>

<script type="text/javascript">
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 50) {
		   $('#header').addClass('fixed');
		}
		else {
		   $('#header').removeClass('fixed');
		}
	});
</script>