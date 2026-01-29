<?php
/**
 * partials/sections/media.php
 * 
 * main-media 섹션
 * DB 쿼리 의존성 있음 (g5_write_media)
 * 
 * 주의사항:
 * - thumbnail.lib.php include 필요
 * - get_list_thumbnail() 함수 사용
 * - slick 슬라이더 사용 (main.js에서 초기화)
 */
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$thumb_width = '380';
$thumb_height = '240';
?>
<!-- main-media -->
<section class="section main-media">
	<div class="inner">
		<section class="main-conts-tit-wrap">
			<header class="section-head svc-title">
				<h2 class="title-h2">법무법인 동주의 실력과 전문성</h2>
				<p class="title-sub">다양한 언론사로부터 인정받고 있습니다.</p>
			</header>
		</section>
		<div class="main-media-list">
			<?php 
			$result = sql_query("select ca_name, wr_subject, wr_id, wr_content, wr_datetime, wr_id, wr_10, wr_1 from g5_write_media order by wr_5 desc, wr_id desc limit 12");
			for ($i=0; $list=sql_fetch_array($result); $i++){
			?>
			<div class="main-media-slide">
				<a href="/bbs/board.php?bo_table=media&wr_id=<?php echo $list['wr_id']?>">
					<div class="thumb">
						<?php 
						$thumb = get_list_thumbnail("media", $list['wr_id'], $thumb_width, $thumb_height);
						if($thumb['src']) {
							$img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$thumb_width.'" height="'.$thumb_height.'" loading="lazy">';
						} else {
							$img_content = '<span>no image</span>';
						}
						echo $img_content;
						?>
						<span class="icon"><img src="/images/main/thumb_icon.png" alt="" width="50" height="50" loading="lazy"></span>
					</div>
					<div class="conts-wrap">
						<span class="subject"><?php echo cut_str($list['wr_subject'],100)?></span>
						<?php
						$list['wr_content'] = str_replace("BODY CONTENT","",$list['wr_content']);
						$list['wr_content'] = str_replace("본문 내용","",$list['wr_content']);
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
		<a href="/bbs/board.php?bo_table=media&me_code=2010" class="view-more">View more<img src="/images/main/case_more_w.png" alt="" width="10" height="10" loading="lazy"></a>
	</div>
</section>
<!--//main-media -->
