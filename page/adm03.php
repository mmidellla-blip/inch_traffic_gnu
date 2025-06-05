<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/divorce.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "소청심사";
$gr_id ='business';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<!-- sub-conts-wrap -->
<section class="sub-conts-wrap">
	
	<section class="business-wrap">
		<section class="business-inner">
			<h1>소청심사<br><span>01</span></h1>
			<section class="business-conts">
				<section class="business-tit-wrap">
					<p>소청심사는 행정심판의 일종으로 공무원이 징계처분이나 신분상 의사에 반하는 불리한 처분 또는 부작위에 대한 이의제기를 하는 경우 이를 심사하는 제도입니다.</p>
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
							<p> <span>소청제기 대상 공무원</span>
								일반직, 특정직 등의 경력직 공무원 (특수경력직공무원은 원칙적으로 소청대상에 포함되지 않음)
							</p>
					</section>
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
							<p> <span>심사 청구 기간 </span>
								- 공무원이 징계처분·강임·휴직·직위해제 또는 직권면직을 받았을 때 처분사유설명서를 받은 날로부터 30일 이내<br>
								- 본인 의사에 반하는 불이익 처분을 받았을 때, 그 처분이 있음을 안 날로부터 30일 이내
							</p>
					</section>
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
							<p> <span>행정소송과의 관계</span>
								- 소청심사를 거치지 않고 행정소송을 제기할 수 없습니다.<br>
								- 소청심사결정서를 송달받은 날로부터 90일 이내로 행정법원에 행정소송을 제기할 수 있습니다.
							</p>
							<p>
								 <img src="/images/sub/adm03.png">
							</p>
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