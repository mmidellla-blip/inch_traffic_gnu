<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/self_test.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "자가진단";
$gr_id ='self';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<!-- sub-conts-wrap -->
<div class="self-test-wrap">
	<div class="self-wrap">
		<div class="self-title">
			<h5>위기상황 비상탈출</h5>
			<h1>법무법인 동주의 <br>음주운전 구제 프로그램</h1>
			<p><img src="../images/sub/self_title.png" alt=""/></p>
			<div class="re_btn"><a href="/page/self_test.php">진단 초기화</a></div>
		</div>
		<div class="diagnosis">
			<form name="frm_form" method="post" action="<?php echo G5_URL ?>/_ok_process.php">
				<div class="diagnosiscnt diagnosiscnt0">
					<ul class="step-list">
						<li class="on"><span><img src="../images/sub/self_step01_on.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step02.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step03.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step04.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step05.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step06.png" alt=""/></span></li>
					</ul>
					<h3 class="title"><strong>01</strong>운전면허 취소처분 통지서를 받고 며칠이 지났나요?</h3>
					<ul class="list row2">
						<li>
							<input type="radio" name="wr_6" value="운전면허 취소처분 통지서를 받은 날로부터 90일 경과" id="wr_6_1">
							<label for="wr_6_1"><span>운전면허 취소처분 통지서를 받은 날로부터 90일 경과</span></label>
						</li>
						<li>
							<input type="radio" name="wr_6" value="운전면허 취소처분 통지서를 받은 날로부터 90일 이내" id="wr_6_2">
							<label for="wr_6_2"><span>운전면허 취소처분 통지서를 받은 날로부터 90일 이내</span></label>
						</li>
					</ul>
				</div>
				<div class="diagnosiscnt diagnosiscnt1">
					<ul class="step-list">
						<li><span><img src="../images/sub/self_step01.png" alt=""/></span></li>
						<li class="on"><span><img src="../images/sub/self_step02_on.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step03.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step04.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step05.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step06.png" alt=""/></span></li>
					</ul>
					<h3 class="title"><strong>02</strong>적발 당시 혈중알코올농도 수치는 얼마였나요?</h3>
					<ul class="list row5">
						<li>
							<input type="radio" name="wr_7" value="0.03% ~ 0.079%" id="wr_7_1">
							<label for="wr_7_1"><span>0.03% ~ 0.079%</span></label>
						</li>
						<li>
							<input type="radio" name="wr_7" value="0.08% ~ 0.19%" id="wr_7_2">
							<label for="wr_7_2"><span>0.08% ~ 0.19%</span></label>
						</li>
						<li>
							<input type="radio" name="wr_7" value="0.2% 이상" id="wr_7_3">
							<label for="wr_7_3"><span>0.2% 이상</span></label>
						</li>
						<li>
							<input type="radio" name="wr_7" value="기억나지 않음" id="wr_7_4">
							<label for="wr_7_4"><span>기억나지 않음</span></label>
						</li>
						<li>
							<input type="radio" name="wr_7" value="음주측정 불응" id="wr_7_5">
							<label for="wr_7_5"><span>음주측정 불응</span></label>
						</li>
					</ul>
				</div>
				<div class="diagnosiscnt diagnosiscnt2">
					<ul class="step-list">
						<li><span><img src="../images/sub/self_step01.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step02.png" alt=""/></span></li>
						<li class="on"><span><img src="../images/sub/self_step03_on.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step04.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step05.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step06.png" alt=""/></span></li>
					</ul>
					<h3 class="title"><strong>03</strong>과거 음주운전으로 적발된 적이 있으셨나요?</h3>
					<ul class="list row3">
						<li>
							<input type="radio" name="wr_3" value="없음" id="wr_3_1">
							<label for="wr_3_1"><span>없음</span></label>
						</li>
						<li>
							<input type="radio" name="wr_3" value="1회 적발" id="wr_3_2">
							<label for="wr_3_2"><span>1회 적발</span></label>
						</li>
						<li>
							<input type="radio" name="wr_3" value="2회 이상 적발" id="wr_3_3">
							<label for="wr_3_3"><span>2회 이상 적발</span></label>
						</li>
					</ul>
				</div>
				<div class="diagnosiscnt diagnosiscnt3">
					<ul class="step-list">
						<li><span><img src="../images/sub/self_step01.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step02.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step03.png" alt=""/></span></li>
						<li class="on"><span><img src="../images/sub/self_step04_on.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step05.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step06.png" alt=""/></span></li>
					</ul>
					<h3 class="title"><strong>04</strong>음주운전 적발 당시 해당되는 내용이 있으셨나요?</h3>
					<ul class="list row3">
						<li>
							<input type="radio" name="wr_4" value="집행유예 기간 중" id="wr_4_1">
							<label for="wr_4_1"><span>집행유예 기간 중</span></label>
						</li>
						<li>
							<input type="radio" name="wr_4" value="금고 이상의 형 종료/면제 후 3년 이내" id="wr_4_2">
							<label for="wr_4_2"><span>금고 이상의 형 종료/면제 후 3년 이내</span></label>
						</li>
						<li>
							<input type="radio" name="wr_4" value="해당사항 없음" id="wr_4_3">
							<label for="wr_4_3"><span>해당사항 없음</span></label>
						</li>
					</ul>
				</div>
				<div class="diagnosiscnt diagnosiscnt4">
					<ul class="step-list">
						<li><span><img src="../images/sub/self_step01.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step02.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step03.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step04.png" alt=""/></span></li>
						<li class="on"><span><img src="../images/sub/self_step05_on.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step06.png" alt=""/></span></li>
					</ul>
					<h3 class="title"><strong>05</strong>음주운전 당시 교통사고가 발생했나요?</h3>
					<ul class="list row4">
						<li>
							<input type="radio" name="wr_5" value="사고 없음" id="wr_5_1">
							<label for="wr_5_1"><span>사고 없음</span></label>
						</li>
						<li>
							<input type="radio" name="wr_5" value="대물사고" id="wr_5_2">
							<label for="wr_5_2"><span>대물사고</span></label>
						</li>
						<li>
							<input type="radio" name="wr_5" value="대인사고" id="wr_5_3">
							<label for="wr_5_3"><span>대인사고</span></label>
						</li>
						<li>
							<input type="radio" name="wr_5" value="사고후미조치/도주(뺑소니)" id="wr_5_4">
							<label for="wr_5_4"><span>사고후미조치/도주(뺑소니)</span></label>
						</li>
					</ul>
				</div>
				<div class="diagnosiscnt diagnosiscnt5">
					<ul class="step-list">
						<li><span><img src="../images/sub/self_step01.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step02.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step03.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step04.png" alt=""/></span></li>
						<li><span><img src="../images/sub/self_step05.png" alt=""/></span></li>
						<li class="on"><span><img src="../images/sub/self_step06_on.png" alt=""/></span></li>
					</ul>
					<h3 class="title"><strong>06</strong>현재 운전면허가 필요한 직업을 갖고 계신가요? </h3>
					<ul class="list row3">
						<li>
							<input type="radio" name="wr_8" value="해당사항 없음" id="wr_8_1" class="test">
							<label for="wr_8_1"><span>해당사항 없음</span></label>
						</li>
						<li>
							<input type="radio" name="wr_8" value="생계형 운전자(택시, 택배, 화물차 기사 등)" id="wr_8_2" class="test">
							<label for="wr_8_2"><span>생계형 운전자(택시, 택배, 화물차 기사 등)</span></label>
						</li>
						<li>
							<input type="radio" name="wr_8" value="간접적인 필요성 존재" id="wr_8_3" class="test">
							<label for="wr_8_3"><span>간접적인 필요성 존재</span></label>
						</li>
					</ul>
					
				</div>
				<div class="diagnosiscnt diagnosiscnt6">
					<div class="submit-fild">

						<div class="case">
							<a href="/bbs/board.php?bo_table=case&me_code=3010">
								<div class="img"><img src="../images/sub/self_case.jpg" alt=""/></div>
								<div class="text">
									<h3>비슷한 상황,<br>동주와 함께한 의뢰인의 결과는?</h3>
									<!-- <p>음주운전 재범,<br>면허취소처분을 <strong>이의신청을 통해 구제</strong> 받은 사례</p> -->
								</div>
							</a>
						</div>
						<div class="msg">
							<!-- 상황별 텍스트 -->
							<h5 id ="txt_restriction" >
								
							</h5>
							
							<p>진단 결과를 바탕으로 <br>당신의 상황을 분석해 최선의 방법을 안내해드립니다.</p>
						</div>
						<ul>
							<li>
								<label for="h_name">지역</label>
								<input type="text" name="h_name" id="h_name" required/>
							</li>
							<li>
								<label for="h_tel">전화번호</label>
								<input type="tel" name="h_tel" id="h_tel" required/>
							</li>
						</ul>
						<div class="submit"><button id='submit_btn'>5분 이내 결과 분석 받기</button></div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- sub-conts-wrap -->

<script type="text/javascript">
	$('.diagnosiscnt').each(function(idx){
		var chk = $(this).find('input[type=radio]');
		chk.click(function(){
			setTimeout(function() { 
				diagnosisTab(idx+1)
			}, 500);
		});
	});

	function diagnosisTab(no) {
		var detail = $('.diagnosiscnt');
		detail.hide();
		$('.diagnosiscnt'+no).show();
		if(no == 6)
		{
			self();
		}
	}
	$(document).ready(function(){
		diagnosisTab(0);
	});
	
	function self(){
		
		 $.ajax({
			 url : "../page/selftest01_set.php",
			 type : "post",
			 data : $("form[name=frm_form]").serialize(),
			 dataType : "json"
		 })
		 .done(function(data) {
			
			 if (data.code == 1) {
				 $("#txt_restriction").html(data.restriction);
				 //$("#txt_description").html(data.description);
			 }
			 else {
				 //alert(data.message);
				 alert(data);
			 }
		 });
	};
		
	

</script>

<?php
include_once('../_footer.php');
?>