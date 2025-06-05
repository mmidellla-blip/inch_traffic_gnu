<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/divorce.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "음주운전 구제방법";
$gr_id ='business';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<!-- sub-conts-wrap -->
<section class="sub-conts-wrap">
	
	<section class="business-wrap">
		<section class="business-inner">
			<h1>음주운전 구제방법<br><span>01</span></h1>
			<section class="business-conts">
				<section class="business-tit-wrap">
					<p>행정심판 전에 처분한 경찰서에 이의신청을 통해 구제를 청구할 수 있습니다. 하지만, 구제율은 낮은 편입니다. 청구 가능 기간은 처분통지 받은 날로부터 60일 이내입니다.</p>
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
							<p> <span>이의신청 구제대상이 되기 위한 조건은 다음과 같습니다.</span>
								- 운전이 가족의 생계를 책임질 정도로 중요한 수단인 경우<BR>
								- 모범운전자로 처분 당시 3년 이상 교통봉사활동에 종사한 경우<BR>
								- 뺑소니 운전자를 검거하여 경찰서장 이상의 표창을 받은 사람

							</p>
					</section>
				</section>
				<section class="business-tit-wrap">
					<p>위 3가지 사항에서 음주수치 0.12% 초과, 교통사고로 인적피해를 일으키거나, 음주측정불응 및 거부, 경찰관 폭행, 음주운전 전력이 5년 이내에 해당되지 않아야 합니다. 하나라도 해당된다면 음주운전면허취소 이의신청이 어렵습니다.</p>
				</section>
				
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
							<p> <span> 행정심판</span>
								 - 구제대상은 음주,뺑소니,무면허,측정불응,벌점초과 등에 적발되어 운전면허가 취소 또는 정지된 자<br>
								 - 위법,부당한 측정방법으로 운전면허가 취소된 자<br>
								 - 운전면허 정지기간 중 운전으로 면허가 취소된 자<br>
								 - 과태로 미납, 벌점초과, 적성검사 미실시 등으로 면허가 정지 또는 취소된 자<br>
								 - 음주운전 2진아웃으로 면허가 취소된 자는 행정심판의 구제대상이 됩니다.

							</p>
					</section>
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
							<p>
								<span> 음주운전 행정처분 및 행정심판 절차</span>
								 
							</p>
							<p>
								<img src="/images/sub/adm04.png">
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