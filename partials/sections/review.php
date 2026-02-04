<?php
/**
 * partials/sections/review.php
 * 
 * main-review 섹션
 * DB 쿼리 의존성 있음 (g5_write_review)
 * 
 * 주의사항:
 * - thumbnail.lib.php include 필요
 * - sql_query(), sql_fetch_array() 사용
 * - get_list_thumbnail() 함수 사용
 */
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$thumb_width = '350';
$thumb_height = '220';
?>
<!-- main-review -->
<section class="section main-review">
	<div class="inner">
		<section class="main-conts-tit-wrap">
		<header>
			<h2 class="title-h2 svc-main-heading">의뢰인의 진짜 후기가 입증하는 동주의 실력</h2> <!-- <span> 부분 제거 -->
			<p class="title-sub">동주는 의뢰인에게 이익이 될 때만 수임을 제안 드립니다. 그리고 결과로 입증합니다.</p>
		</header>
		</section>
		<div class="main-review-list">
			<?php 
			$result = sql_query("select ca_name, wr_subject, wr_id, wr_content, wr_datetime, wr_id, wr_10, wr_1 from g5_write_review order by wr_5 desc, wr_id desc limit 12");
			for ($i=0; $list=sql_fetch_array($result); $i++){
			?>
			<div class="main-review-slide">
				<a href="/bbs/board.php?bo_table=review&wr_id=<?php echo $list['wr_id']?>">
					<div class="thumb">
						<?php 
						$thumb = get_list_thumbnail("review", $list['wr_id'], $thumb_width, $thumb_height);
						if($thumb['src']) {
							$img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$thumb_width.'" height="'.$thumb_height.'" loading="lazy">';
						} else {
							$img_content = '<span>no image</span>';
						}
						echo $img_content;
						?>
					</div>
					<div class="conts-wrap">
						<div class="cate"><?php echo $list['ca_name']?></div>
						<span class="subject"><?php echo cut_str($list['wr_subject'],100)?></span>
						<?php
						$list['wr_content'] = str_replace("BODY CONTENT","",$list['wr_content']);
						$list['wr_content'] = str_replace("본문 내용","",$list['wr_content']);
						$list['wr_content'] = preg_replace("/<(.*?)\>/"," ",$list['wr_content']); 
						$list['wr_content'] = preg_replace("/&nbsp;/"," ",$list['wr_content']); 
						$list['wr_content'] = str_replace("//##", " ", $list['wr_content']); 
						$list['wr_content'] = strip_tags($list['wr_content'], "<p>"); 
						?>
						<div class="bo-content"><?php echo conv_content($list['wr_content'], 10); ?></div>
					</div>
				</a>
			</div>
			<?php }if(!$result){?>
				<div class="no-data">등록된 게시물이 없습니다.</div>
			<?php } ?>
		</div>
		<a href="/bbs/board.php?bo_table=review&me_code=2010" class="view-more">View more<img src="/images/main/case_more.png" alt="음주운전 상담 후기 더보기" width="10" height="10" loading="lazy"></a>
	</div>
</section>
<!--//main-review -->
