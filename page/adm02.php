<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/divorce.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "행정소송";
$gr_id ='business';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<!-- sub-conts-wrap -->
<section class="sub-conts-wrap">
	
	<section class="business-wrap">
		<section class="business-inner">
			<h1>행정소송<br><span>01</span></h1>
			<section class="business-conts">
				<section class="business-tit-wrap">
					<p>행정소송은 행정 관청의 처분에 의해 권리를 침해 받은 자가 그 처분의 취소나 변경을 요구하는 소송입니다.</p>
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
							<p> <span>행정소송의 종류</span>
								<span>- 취소소송</span> 행정소송의 가장 대표적인 소송으로, 행정청의 위법한 처분 또는 재결의 취소나 변경을 구하는 소송입니다. 위법한 처분으로 인해 발생한 위법상태를 원상회복 시키고, 처분으로 인해 침해 또는 방해를 받은 권리와 이익을 보호 또는 구제하기 위한 소송입니다.<br><br>
								<span>- 무효등확인소송</span> 행정청의 위법한 처분 또는 재결의 효력 유/무 또는 존재여부를 확인하는 소송입니다. 행정처분의 위법성이 명백하여 당연무효의 경우라면, 그 처분은 효력을 갖지 않기 때문에 소송을 제기할 필요도 없습니다. 하지만, 이러한 경우 해당 처분이 무효라는 사실을 확인 받아야 합니다.
행정청의 위법한 처분 또는 재결의 효력 유/무 또는 존재여부를 확인하는 소송입니다. 행정처분의 위법성이 명백하여 당연무효의 경우라면, 그 처분은 효력을 갖지 않기 때문에 소송을 제기할 필요도 없습니다. 하지만, 이러한 경우 해당 처분이 무효라는 사실을 확인 받아야 합니다.<br><br>
								<span>- 부작위위법확인소송</span> 행정청의 부작위가 위법하다는 것을 확인하는 소송입니다. 쉽게 말해 행정청이 상대방 신청에 대해 일정한 처분을 내려야 하는데도 불구하고, 이를 이행하지 않았을 경우 이러한 부작위의 위법 여부를 확인하는 소송입니다. 행정청의 위법한 처분 또는 재결의 효력 유/무 또는 존재여부를 확인하는 소송입니다. 행정처분의 위법성이 명백하여 당연무효의 경우라면, 그 처분은 효력을 갖지 않기 때문에 소송을 제기할 필요도 없습니다. 하지만, 이러한 경우 해당 처분이 무효라는 사실을 확인 받아야 합니다.

							</p>
					</section>
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
							<p> <img src="/images/sub/adm02.png"></p>
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