<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
// 썸네일 크기 설정
$thumb_width = '363';    //썸네일 넓이
$thumb_height = '281';    //썸네일 높이

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- <h2 id="container_title"><?php echo $board['bo_subject'] ?><span class="sound_only"> 목록</span></h2> -->

<section class="sub-conts-wrap board-conts">
	<h1 class="sub-conts-title wow fadeInUp"><span><?php echo $g5['title'] ?></span></h1>

	<!-- 게시판 목록 시작 { -->
	<div id="bo_gall" style="width:<?php echo $width; ?>">

			<?php if ($rss_href || $write_href) { ?>
			<ul class="btn_bo_user">
				<?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01">RSS</a></li><?php } ?>
				<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">관리자</a></li><?php } ?>
				<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
			</ul>
			<?php } ?>

		   <!-- 게시판 검색 시작 { -->
		<fieldset id="bo_sch">
			<legend>게시물 검색</legend>

			<form name="fsearch" method="get">
			<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
			<input type="hidden" name="sca" value="<?php echo $sca ?>">
			<input type="hidden" name="sop" value="and">
			<label for="sfl" class="sound_only">검색대상</label>
			<select name="sfl" id="sfl">
				<option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
				<option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
				<option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
	
			</select>
			<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
			<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder="검색어를 입력해주세요">
			<button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span>검색</span></button>
			</form>
		</fieldset>
		<!-- } 게시판 검색 끝 -->   

		<?php if ($is_category) { ?>

		<nav id="bo_cate">
			<h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
			<ul id="bo_cate_ul">
				<?php echo $category_option ?>
			</ul>
		</nav>

		<?php } ?>


<!-- 		<div class="bo_fx">
			<div id="bo_list_total">
				<span>Total <?php echo number_format($total_count) ?>건</span>
				<?php echo $page ?> 페이지
			</div>
		</div> -->

		<form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
		<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
		<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
		<input type="hidden" name="stx" value="<?php echo $stx ?>">
		<input type="hidden" name="spt" value="<?php echo $spt ?>">
		<input type="hidden" name="page" value="<?php echo $page ?>">
		<input type="hidden" name="sw" value="">

		<?php if ($is_checkbox) { ?>
		<div id="gall_allchk">
			<label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
			<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
		</div>
		<?php } ?>

		<ul class="case-box-lawyer">

			<?php for ($i=0; $i<count($list); $i++) {
	/*
				if($i>0 && ($i % $bo_gallery_cols == 0))
					$style = 'clear:both;';
				else
					$style = '';
				if ($i == 0) $k = 0;
				$k += 1;
				if ($k % $bo_gallery_cols == 0) $style .= "margin:0 !important;";
	*/
			 ?>

			<li <?php if ($wr_id == $list[$i]['wr_id']) { ?>gall_now<?php } ?> class="swiper-slide">
				<!-- 제목,내용 출력 -->
				<a href="<?php echo $list[$i]['href'] ?>">
					<?php if ($is_checkbox) { ?>
						<label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
						<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
					<?php } ?>
					
		<!--			<?php
					if ($list[$i]['is_notice']) {// 공지사항 ?>
						<strong style="width:<?php echo $thumb_width ?>px;height:45px">공지</strong>
<?php } else {
                        // $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']);
                        $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $thumb_width, $thumb_height, $is_create=false, $is_crop=true ); // 썸네일 크기를 위에서 선언한 크기사용

						if($thumb['src']) {
	                            // $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$board['bo_gallery_width'].'" height="'.$board['bo_gallery_height'].'">';
	                            $img_content = '<img class="thum-img" src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
	                        } else {
	                            // $img_content = '<span style="width:'.$board['bo_gallery_width'].'px;height:'.$board['bo_gallery_height'].'px">no image</span>';
								$img_content = '<span>no image</span>';
	                        }
	                        echo $img_content;
	                    }
	                     ?>
-->
						<?php
						if ($is_category && $list[$i]['ca_name'] && !$list[$i]['is_notice']) {  // 공지사항은 분류출력 안함 ?>
							<span class="cate-name"><?php echo $list[$i]['ca_name'] ?></span>
						<?php } ?>
						<strong class="subject"><?php echo $list[$i]['subject'] ?></strong>
						<?php
							$wr_content = preg_replace("/<(.*?)\>/"," ",$list[$i]['wr_content']); 
							$wr_content = preg_replace("/&nbsp;/"," ",$wr_content); 
							$wr_content = str_replace("//##", " ", $wr_content); 
							$wr_content = str_replace("EVENT OUTLINE","",$wr_content);
							$wr_content = str_replace("사건 개요","",$wr_content);

							$wr_content = cut_str(get_text($wr_content), 100, '…');
							if (!$list[$i]['is_notice']) { // 공지사항이 아닐경우 내용출력 ?>
							<span class="bo-content"><?php echo $wr_content?></span>
						<?php } ?>
						<?php
							$tmp_law_name = "";
							$tmp_law_pic = "";
							if($list[$i]['file']['count'] > 0) {
								$tmp_view = get_view($list[$i], $board, $board_skin_path);
								for($j=0; $j<$tmp_view['file']['count']; $j++) {
									if(preg_match("/변호사/",$tmp_view['file'][$j]['bf_content'])) {
										$tmp_law_name = $tmp_view['file'][$j]['bf_content'];
										$tmp_law_name = str_replace("  "," ",$tmp_law_name);
										$tmp_law_name = str_replace("  "," ",$tmp_law_name);
										$arr_law_name = explode(" ",$tmp_law_name);
										if(count($arr_law_name) == 1) {
											if(preg_match("/대표변호사/",$tmp_view['file'][$j]['bf_content'])) {
												$tmp_law_name = str_replace("대표변호사","",$tmp_law_name);
												$tmp_law_name = "<strong>".$tmp_law_name."</strong>대표변호사";
											} else if(preg_match("/파트너변호사/",$tmp_view['file'][$j]['bf_content'])) {
												$tmp_law_name = str_replace("파트너변호사","",$tmp_law_name);
												$tmp_law_name = "<strong>".$tmp_law_name."</strong>파트너변호사";
											} else if(preg_match("/변호사/",$tmp_view['file'][$j]['bf_content'])) {
												$tmp_law_name = str_replace("변호사","",$tmp_law_name);
												$tmp_law_name = "<strong>".$tmp_law_name."</strong>변호사";
											}
										} else {
											$tmp_law_name = "<strong>".$arr_law_name[0]."</strong>";
											for($k=1; $k<count($arr_law_name); $k++) {
												$tmp_law_name .= $arr_law_name[$k];
											}
										}
										$tmp_law_pic = $tmp_view['file'][$j]['path']."/".$tmp_view['file'][$j]['file'];
										break;
									}
								}
							}

							if($tmp_law_name != "") {
						?>
						<ul class="name">
							<li><?php echo $tmp_law_name ?></li>
							<li><img src="<?php echo $tmp_law_pic ?>" alt=""></li>
						</ul>
						<?php } ?>

						<span class="more"><!--<img src="/images/sub/board_arrow.png" alt="">--></span>

						<ul class="name">
							<?php
							// 담당변호사 가져오기
							$arr_lawyer = explode("|", $list[$i]["wr_10"]);
							$max_lawyer_cnt = 1;
							$curr_lawyer_cnt = 0;
							$lawyer_id = 0;
							for($lawyer_i=0; $lawyer_i < count($arr_lawyer); $lawyer_i++) {
								if(empty($arr_lawyer[$lawyer_i])) continue;
								$lawyer_id = $arr_lawyer[$lawyer_i];
								$curr_lawyer_cnt++;
								if($curr_lawyer_cnt > 1) break;
							}

							if(!empty($lawyer_id)) {
								$lawyer_row = sql_fetch("select * from g5_write_lawyer_list where wr_id=".$lawyer_id." ");
								$lawyer_file = get_file("lawyer_list", $lawyer_id);

								if(is_array($lawyer_file) && $lawyer_file["count"] > 1) {
									$lawyer_pic = $lawyer_file[0]["path"]."/".$lawyer_file[0]["file"];
								} else {
									$lawyer_pic = "";
								}

							?>
								<li>
									<?php if(!empty($lawyer_pic)) { ?>
										<img src="<?php echo $lawyer_pic; ?>" alt="">
									<?php } ?>
								</li>
								<li>사건 담당<strong><?php echo $lawyer_row["wr_subject"] ?> <?php echo $lawyer_row["ca_name"] ?></strong></li>
							<?php } ?>
						</ul>
				</a>
			</li>
			<?php } ?>
			<?php if (count($list) == 0) { echo "<li class=\"no-data\">게시물이 없습니다.</li>"; } ?>
		</ul>

		<?php if ($list_href || $is_checkbox || $write_href) { ?>
		<div class="bo_fx">
			<?php if ($is_checkbox) { ?>
			<ul class="btn_bo_adm">
				<li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"></li>
				<li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"></li>
				<li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"></li>
			</ul>
			<?php } ?>

			<?php if ($list_href || $write_href) { ?>
			<ul class="btn_bo_user">
				<?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01">목록</a></li><?php } ?>
				<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
			</ul>
			<?php } ?>
		</div>
		<?php } ?>
		</form>
	</div>

	<?php if($is_checkbox) { ?>
	<noscript>
	<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
	</noscript>
	<?php } ?>

	<!-- 페이지 -->
	<?php echo $write_pages;  ?>

</section>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
		if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";

	}

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
