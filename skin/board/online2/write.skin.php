<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<style type="text/css" title="">
.loaction-menu {display:none;}
</style>

<section class="sub-conts-wrap">
	<section class="online-board-wrap">
		<!-- 게시물 작성/수정 시작 { -->
		<form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
			<h2 class="sub-conts-title online"><?php echo $board['bo_subject'] ?> <span class="msg">상담신청을 해주시면 담당자가 확인 후, 24시간 이내에 자세한 안내 연락 드리겠습니다.</span></h2>

			<section class="board-list">
				<input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
				<input type="hidden" name="w" value="<?php echo $w ?>">
				<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
				<input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
				<input type="hidden" name="sca" value="<?php echo $sca ?>">
				<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
				<input type="hidden" name="stx" value="<?php echo $stx ?>">
				<input type="hidden" name="spt" value="<?php echo $spt ?>">
				<input type="hidden" name="sst" value="<?php echo $sst ?>">
				<input type="hidden" name="sod" value="<?php echo $sod ?>">
				<input type="hidden" name="page" value="<?php echo $page ?>">
				<input type="hidden" id="secret" name="secret" value="secret">
				<input type="hidden" id="wr_2" name="wr_2" value="접수완료">
			<?php if ($is_admin) {?>
					<select name="wr_2" id="wr_2">
						<option value="접수완료" <? if($write['wr_2'] == "접수완료"){ echo "selected"; } ?> >접수완료</option>
						<option value="상담중" <? if($write['wr_2'] == "상담중"){ echo "selected"; } ?> >상담중</option>
						<option value="상담완료" <? if($write['wr_2'] == "상담완료"){ echo "selected"; } ?> >상담완료</option>
					</select>
				<?php } ?>


				<div class="split">
					<dl>
						<dt>이름<span class="required"></span></dt>
						<dd>
							<input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input" placeholder="이름을 입력하세요.">
						</dd>
					</dl>
					<dl>
						<dt>연락처<span class="required"></span></dt>
						<dd>
							<input type="tel" name="wr_1" value="<?php echo $wr_1 ?>" id="wr_1" class="frm_input frm_tel" placeholder="연락처를 입력하세요.">
						</dd>
					</dl>
				</div>
				<div class="split">
					<dl>
						<dt>이메일<span class="required"></span></dt>
						<dd>
							<input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" required class="frm_input" placeholder="이메일을 입력하세요.">
						</dd>
					</dl>
				</div>
				<div class="split full">
					<dl>
				        <dt>제목<span class="required"></span></dt>
				        <dd>
							<input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input" size="50" maxlength="255" placeholder="제목을 입력하세요">
						</dd>
					</dl>
			
				</div>

				<div class="split full">
					<dl>
						<dt>내용<span class="required"></span></dt>
						<dd>
							<div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
								<?php if($write_min || $write_max) { ?>
								<!-- 최소/최대 글자 수 사용 시 -->
								<p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>다.</p>
								<?php } ?>
								<?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
								<?php if($write_min || $write_max) { ?>
								<!-- 최소/최대 글자 수 사용 시 -->
								<div id="char_count_wrap"><span id="char_count"></span>글자</div>
								<?php } ?>
							</div>
							<div class="filebox">
								<label for="wr_4">파일선택</label> 
								<input class="upload_name" value="첨부파일" disabled="disabled">
								<input type="file" id="wr_4" name="bf_file[0]" class="input input_file upload_hidden frm_file frm_input">
							</div>
						</dd>
					</dl>
				</div>
				<?php if (!$is_admin) { ?>
					<div class="split">
						<dl>
						<dt>비밀번호<span class="required"></span></dt>
						<dd>
					    <input type="password" name="wr_password" value="<?php echo $name ?>" id="wr_password" required class="frm_input">
						</dd>
						</dl>
					</div>
				 <?php } ?>
		
				<div class="split full last">
					<?php if(!$is_admin) {?>
					<div class="privacy">
						<input type="checkbox" id="pri_ok" value="1" required/><label for="pri_ok" class="pri_ok">개인정보 수집 및 이용동의</label>
						<a onclick="toggle_view('bo_privacy_info');">전문보기</a>
					</div>
					<div id="bo_privacy_info">
						<div class="bo_privacy_title">개인정보보호를 위한 이용자 동의 사항 <a onclick="toggle_view('bo_privacy_info');">X</a></div>
						<div class="bo_privacy_div">
							1. 개인정보의 수집 및 이용 목적 : 문의에 대한 답변<br/>
							2. 수집항목 : 연락처, 이메일<br/>
							3. 개인정보의 보유 및 이용기간 :  이용목적이 달성된 때까지 보유합니다.
						</div>
					</div>
					<?php } ?>
				</div>

				
	<!--			<?php if ($is_admin) {?>
					<select name="wr_2" id="wr_2">
						<option value="접수완료" <? if($write['wr_2'] == "접수완료"){ echo "selected"; } ?> >접수완료</option>
						<option value="상담중" <? if($write['wr_2'] == "상담중"){ echo "selected"; } ?> >상담중</option>
						<option value="상담완료" <? if($write['wr_2'] == "상담완료"){ echo "selected"; } ?> >상담완료</option>
					</select>
				<?php } ?> 
-->

<!--
				<div class="btn-wrap">
					<?php if(!$is_admin) {?>
					<input type="submit" value="상담예약신청" id="btn_submit" accesskey="s">
					<?php } else {?>
					<input type="submit" value="답변하기" id="btn_submit" accesskey="s">
					<?php } ?>
				</div>
				-->
			    <div class="btn_confirm write_div">
					<input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn_submit btn">
			        <a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel btn">취소</a>
			    </div>
				
			</section>
		</form>
	</section>

	<script type="text/javascript">
		// 첨부파일 커스텀
		$('.filebox').each(function(index){
			var fileTarget = $(this).find('.upload_hidden'); 
			fileTarget.on('change', function(){
				if(window.FileReader){
					var filename = $(this)[0].files[0].name;
				} else {
					var filename = $(this).val().split('/').pop().split('\\').pop();
				}
				$(this).siblings('.upload_name').val(filename); 
			}); 
		});

		function toggle_view(selector, obj){
			var search = $('#'+selector+'');
			var obj = $(obj);
			if (search.css('display') == 'none') {
				search.show();
				obj.addClass('active');
			} else {
				search.hide();
				obj.removeClass('active');
			}
		}
	</script>

    <script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }
		

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>

<!-- } 게시물 작성/수정 끝 -->
</section>
