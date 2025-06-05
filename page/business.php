<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/business.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$gr_id ='business';
include_once(G5_LIB_PATH.'/latest.lib.php');
?>


<section class="business-online">
	<section class="business-case">
		<h1 class="business-tit">성공사례</h1>
		<div class="main-case-list">
			<?php 
			include_once(G5_LIB_PATH.'/thumbnail.lib.php');
			// 썸네일 크기 설정
			$thumb_width = '238';    //썸네일 넓이
			$thumb_height = '288';    //썸네일 높이

			$result=sql_query("select ca_name, wr_subject, wr_id, wr_content, wr_datetime, wr_id, wr_10, wr_1 from g5_write_case order by wr_id desc limit 12");
			for ($i=0; $list=sql_fetch_array($result); $i++){
			?>
			<div class="main-case-slide">
				<a href="/bbs/board.php?bo_table=case&wr_id=<?php echo $case['wr_id']?>">
					<div class="thumb">
					<?php 
						$thumb = get_list_thumbnail("case", $list['wr_id'], $thumb_width, $thumb_height); // 썸네일 크기를 위에서 선언한 크기사용

						if($thumb['src']) {
							$img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
						} else {
							$img_content = '<span>no image</span>';
						}
						echo $img_content;
					 ?>
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
			<?}?>
		</div>
	</section>
</section>

<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<script src="/js/slick.js"></script>
<script>
	$(".main-case-list").slick({
		infinite: false,
		dots: false,
		slide: 'div',	
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		autoplay: false,
		speed: 1000,
		variableWidth: true,
	});
</script>