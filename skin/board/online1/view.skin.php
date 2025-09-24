<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// if (!$is_admin)
// 	goto_url(G5_HTTP_BBS_URL.'/write.php?bo_table='.$bo_table);


// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<section class="sub-conts-wrap">

	<!-- <p class="sub-conts-title"><?php echo $board['bo_subject'] ?></p> -->

<!-- 게시물 읽기 시작 { -->

<article id="bo_v" style="width:<?php echo $width; ?>">
   <div class="bo_header">
        <span id="bo_v_title">
            <?php if ($category_name) { ?>
            <span class="bo_v_cate">[<?php echo $view['ca_name']; // 분류 출력 끝 ?>]</span> 
            <?php } ?>
            <span class="bo_v_tit">
            <?php
            echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
            ?></span>
        </span>
    </div>

    <section id="bo_v_info">
        
        <span class="sound_only">작성자</span> <strong><?php echo $view['wr_name'] ?>(Tel: <?php echo $view['wr_1'] ?>)</strong>
        <strong class="if_date"><span class="sound_only">작성일</span><?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></strong>

    </section>

    <section id="bo_w">
        <span id="bo_v_atc_title">본문</span>

        <!-- 본문 내용 시작 { -->
    	<div class="bo_w_select write_div">
			<div class="label">상담분야</div>
			<div class="val"><?php echo $view['wr_5'];?></div>
		</div>

  		<div class="bo_w_select write_div">
			<div class="label">이<span class="bin"></span>름</div>
			<div class="val"><?php echo $view['wr_name'];?></div>
		</div>
		<div class="bo_w_select write_div">
			<div class="label">연락처</div>
			<div class="val"><?php echo $view['wr_1'];?></div>
		</div>
		<div class="bo_w_select write_div">
			<div class="label">이메일</div>
			<div class="val"><?php echo $view['wr_email'];?></div>
		</div>
<!--	<div class="bo_w_select write_div">
			<div class="label">상담희망시간</div>
			<div class="val"><?php echo $view['wr_4'];?></div>
		</div>-->
		<div class="bo_w_select write_div">
			<div class="label">내용</div>
			<?php
	//		$view['content'] = preg_replace("/<(.*?)\>/"," ",$view['wr_content']); 
	//		$view['content'] = preg_replace("/&nbsp;/"," ",$view['content']); 
			$view['content'] = str_replace("//##", " ", $view['content']); 
			?>
			
			
			<div class="val"><?php echo $view['content'];?></div>
		</div>


        <div class="write_div">
			 <div class="label">다운로드</div>
			 <div class="val"><a href="<?php echo $view['file'][0]['href'];  ?>" class="view_file_download">다운로드1</a></div>
             <div class="val"><a href="<?php echo $view['file'][1]['href'];  ?>" class="view_file_download">다운로드2</a></div>
             <div class="val"><a href="<?php echo $view['file'][2]['href'];  ?>" class="view_file_download">다운로드3</a></div>
		 </div>
		<div class="bo_w_select write_div ing_div">
			<div class="label">상태</div>
			<div class="val"><a class="btn_admin btn btn_active"><?php echo ($view['wr_2'])? $view['wr_2']:"접수"?></a>
			</div>
        </div>		 
    </section>


    <!-- 게시물 상단 버튼 시작 { -->
    <div id="bo_v_top">
        <?php
        ob_start();
        ?>

        <ul class="bo_v_left2">
            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_admin btn">수정</a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_admin btn" onclick="del(this.href); return false;">삭제</a></li><?php } ?>
            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn_admin btn" onclick="board_move(this.href); return false;">복사</a></li><?php } ?>
            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="btn_admin btn" onclick="board_move(this.href); return false;">이동</a></li><?php } ?>
            <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>" class="btn_b01 btn">검색</a></li><?php } ?>
        </ul>

        <ul class="bo_v_com">
           <li><a href="<?php echo $list_href ?>" class="btn_b01 btn">목록</a></li>
            <?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="btn_b01 btn">답변</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn">글쓰기</a></li><?php } ?>
        </ul>


        <?php
        $link_buttons = ob_get_contents();
        ob_end_flush();
         ?>
    </div>
    <!-- } 게시물 상단 버튼 끝 -->




</article>
<!-- } 게시판 읽기 끝 -->
</section>


<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();

    //sns공유
    $(".btn_share").click(function(){
        $("#bo_v_sns").fadeIn();

    });

    $(document).mouseup(function (e) {
        var container = $("#bo_v_sns");
        if (!container.is(e.target) && container.has(e.target).length === 0){
        container.css("display","none");
        }
    });
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->
