<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/divorce.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "행정심판";
$gr_id ='business';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<!-- sub-conts-wrap -->
<section class="sub-conts-wrap">
	
	<section class="business-wrap">
		<section class="business-inner">
			<h1>행정심판<br><span>01</span></h1>
			<section class="business-conts">
				<section class="business-tit-wrap">
					<p>법무법인 동주에는 2인의 행정사 및 변호사가 행정심판을 함께 합니다.</p>
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
							<p> <span>행정심판이란</span>
								행정청의 부당한 처분 또는 위법한 처분과 그 외 공권력행사 등으로 인해 권리나 이익을 침해받은 국민이 행정기관에 제기하는 것으로 권리구제를 위한 절차입니다.	
							</p>
					</section>
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
							<p> <span>행정심판의 종류</span>
								- 취소심판 : 행정청의 부당한 처분 또는 위법한 처분의 취소나 변경을 구하는 심판<br>
								- 무효 등 확인심판 : 행정청의 처분에 대해 효력의 유무 또는 존재여부에 대한 확인을 구하는 심판<br>
								- 의무이행심판 : 행정청의 부당한 처분 또는 위법한 처분, 부작위에 대한 처분을 하도록 하는 심판
							</p>
					</section>
				</section>	
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
							<p> <span>행정심판은 민원, 행정소송 및 재판과 이렇게 다릅니다.
</span>
								행정기관이 한 각종 행정처분에 대해 불복하는 경우 이의를 제기할 수 있는 절차는 크게 민원, 행정심판, 행정소송 3가지가 있습니다.<br>
								일반적으로 행정심판은 결정을 권고의 형식으로 내리는 민원에 비해 행정기관을 구속하는 강력한 법적 효력이 있습니다.<br>
								행정소송에 비해서는 간단하고 별도의 비용이 들지 않으면서 위법성, 부당성, 합목적성까지 판단해 구제의 폭은 훨씬 넓어 국민입장에서 매우 효율적이고 편리한 권익구제 제도입니다.
	
							</p>
					</section>
				</section>	
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
							<p> <img src="/images/sub/adm01.png"></p>
					</section>
				</section>														
			</section>
		</section>
		

		<section class="section main-case">
			<h3>대표 성공사례를 확인해보세요</h3>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<a href="/bbs/board.php?bo_table=case&wr_id=77" class="swiper-slide"><img src="/images/main/main-case/main-case-01.jpg" alt="교통음주대표사례01"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=90" class="swiper-slide"><img src="/images/main/main-case/main-case-02.jpg" alt="교통음주대표사례02"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=72" class="swiper-slide"><img src="/images/main/main-case/main-case-03.jpg" alt="교통음주대표사례03"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=83" class="swiper-slide"><img src="/images/main/main-case/main-case-04.jpg" alt="교통음주대표사례04"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=76" class="swiper-slide"><img src="/images/main/main-case/main-case-05.jpg" alt="교통음주대표사례05"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=53" class="swiper-slide"><img src="/images/main/main-case/main-case-06.jpg" alt="교통음주대표사례06"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=44" class="swiper-slide"><img src="/images/main/main-case/main-case-07.jpg" alt="교통음주대표사례07"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=40" class="swiper-slide"><img src="/images/main/main-case/main-case-08.jpg" alt="교통음주대표사례08"></a>
				</div>
			</div>
			<div class="case-link"><a href="/bbs/board.php?bo_table=case&me_code=3010">더 많은 성공사례 알아보기</a></div>
		</section>
		
					
						
				
	</section>
</section>
<!-- //sub-conts-wrap -->

<?php
include_once('../_footer.php');
?>