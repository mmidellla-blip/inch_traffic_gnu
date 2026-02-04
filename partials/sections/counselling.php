<?php
/**
 * partials/sections/counselling.php
 * 
 * main-counselling-wrap 섹션
 * DB 쿼리 의존성 있음 (g5_write_online)
 * 
 * 주의사항:
 * - sql_query(), sql_fetch_array() 사용
 * - $write 변수는 isset 체크 필요
 */
?>
<!-- main-counselling-wrap -->
<section class="section main-counselling-wrap">
	<section class="main-counselling">
		<div class="inner">
		<section class="main-conts-tit-wrap">
			<header>
				<h2 class="title-h2 svc-main-heading">수임보다는 '<em>상담</em>'이 먼저입니다.</h2>
				<p class="title-sub"><strong>'동주'</strong>는 충분히 사건을 파악하고 검토한 후 의뢰인에게 이익이 될 때 수임을 제안드립니다.</p>
			</header>
		</section>
			<section class="main-counselling-box">
				<ul>
					<li><span class="icon"><img src="/images/main/main_counselling_icon01.png" alt="24시간 음주운전 긴급상담 아이콘" width="60" height="60"></span>평일·주말 <strong>24시간</strong><br>긴급상담 가능</li>
					<li><span class="icon"><img src="/images/main/main_counselling_icon02.png" alt="대표변호사 직접 상담 아이콘" width="60" height="60"></span>대표/파트너변호사가 <br><strong>직접 상담 진행</strong></li>
					<li><span class="icon"><img src="/images/main/main_counselling_icon03.png" alt="로이어팀 음주운전 사건 조력 아이콘" width="60" height="60"></span>개인이 아닌  <br><strong>'로이어팀'이 조력</strong></li>
					<li><span class="icon"><img src="/images/main/main_counselling_icon04.png" alt="분야별 전문 변호사 자문단 아이콘" width="60" height="60"></span>분야별 <br><strong>'진짜' 전문 자문단</strong></li>
				</ul>
			</section>
		</div>
	</section>
	<section class="main-online">
		<div class="inner">
			<section class="main-conts-tit-wrap">
				<header>
					<h2 class="title-h2 svc-main-heading">30분 내 <em>신속 답변</em> 서비스</h2>
					<p class="title-sub">모든 문의는 신속히 확인하여 유선으로 안내해 드립니다.<br>영업시간 외 문의 역시 빠르게 안내 받으실 수 있습니다.</p>
				</header>
				<dl>
					<dt><img src="/images/main/icon_clock.png" alt="24시간 상담 가능" width="24" height="24"><strong>24시간 언제나</strong> 상담 가능</dt>
					<dd>주말 : 토요일 방문상담 가능</dd>
				</dl>
			</section>
			<section class="online-form emphasized-border">
				<form action="<?php echo G5_URL ?>/_ok.php" method="post">
					<input type="hidden" name="wr_1" id="wr_1" value="<?php echo isset($write['wr_1']) ? $write['wr_1'] : '';?>">
					<input type="hidden" id="secret" name="secret" value="secret">
					<input type="hidden" id="gclid_field" name="gclid_field" value="gclid_field">
					<ul class="input-wrap">
						<li><label for="h_tel">연락처</label><input class="sec07_input" type="tel" name="h_tel" id="h_tel" placeholder="연락처를 입력하세요." required/></li>
						<li><label for="h_place">지역</label><input class="sec07_input" type="text" name="h_place" id="h_place" placeholder="지역을 입력하세요." required/></li>
						<li>
							<label for="wr_5">분야</label>
							<select CLASS="sec07_input" name="wr_5" id="wr_5" required>
								<option>상담분야를 선택해 주세요.</option>
								<option value="음주 행정심판">음주 행정심판</option>
								<option value="음주 형사처벌">음주 형사처벌</option>
								<option value="일반 교통범죄">일반 교통범죄</option>								
							</select>
						</li>
						<li><input type="checkbox" id="chk" required/><label for="chk">개인정보 수집동의</label><a href="#">자세히보기</a></li>
					</ul>
					<p class="btn-wrap"><button id='submit_btn'>상담신청</button></p>
					<section class="privacy-pop">
						<div class="privacy-pop-title">개인정보 수집 및 이용안내</div>
						<section class="pop-inner">
							<p>법무법인 동주는 아래와 같은 개인정보 처리방침을 수립·시행하고 있습니다.<br><br>
							<strong>개인정보의 처리 목적</strong><br>
							법률 상담 등 법률서비스 제공 및 그 이용 권유, 각종 서비스 안내, 고객이 의뢰한 사건의 처리, 고객과 관련된 사건의 처리를 함에 있어 필요한 연락 및 기타 필요한 정보의 제공<br><br>
							<strong>처리하는 개인정보의 항목</strong><br>
							성명, 연락처(전화번호), 이메일, 주소, 생년월일, 기타 고객을 위하여 또는 고객과 관련하여 수행하는 서비스 및 거래관계의 설정.유지.이행.관리 과정에서 생성되었거나 제공받은 정보<br><br>
							<strong>개인정보의 처리 및 보유 기간</strong><br>
							위 목적 달성 시까지 필요한 기간, 또는 고객의 동의 철회 시까지<br><br>
							<strong>개인정보의 파기절차 및 파기방법</strong><br>
							1) 개인정보 수집 및 이용목적이 달성되어 그 개인정보가 불필요하게 되었을 때 지체없이 개인정보 파기<br>
							2) 파기방법 : 인쇄물의 경우 파쇄, 전자적 파일형태의 개인정보는 재생할 수 없는 기술적 방법을 사용하여 영구삭제<br><br>
							<strong>정보주체의 권리ㆍ의무 및 그 행사방법에 관한 사항</strong><br>
							정보주체는 개인정보보호법 등 관계법령이 정하는 바에 따라 개인정보의 열람, 정정 및 삭제, 처리정지 요구 등 개인정보 보호관련 권리를 행사할 수 있음<br><br>
							<strong>개인정보의 안전성 확보조치</strong> <br>
							1) 관리적 조치 : 내부관리계획 수립․시행, 직원․종업원 등에 대한 정기적 교육 <br>
							2) 기술적 조치 : 개인정보처리시스템(또는 개인정보가 저장된 컴퓨터)의 비밀번호 설정 등 접근권한 관리, 백신소프트웨어 등 보안프로그램 설치, 개인정보가 저장된 파일의 암호화 <br>
							3) 물리적 조치 : 개인정보가 저장․보관된 장소의 시건, 출입통제 등 <br><br>
							</p>
						</section>
						<a href="#" class="pop-close">개인정보수집및이용안내닫기</a>
					</section>
				</form>
			</section>
			<section  class="main-online-list">
				<h3 class="title-h3">상담신청 현황</h3>
				<ul>
					<?php 
					$result = sql_query("select wr_subject, wr_name, wr_id, wr_2, wr_3, wr_5, ca_name, wr_datetime from g5_write_online order by wr_id desc limit 6");
					for ($i=0; $online=sql_fetch_array($result); $i++){
					?>
					<?php if($online['wr_name']== "") 
						$online['wr_name'] = "신속"; 
						?>
					<li>
						<a href="/bbs/board.php?bo_table=online&wr_id=<?php echo $online['wr_id']?>">
							<ul>
								<li class="date"><?php echo date("Y.m.d", strtotime($online['wr_datetime']))?></li>
								<?php if($online['wr_name'] != "신속") { ?>
								<li class="subject"><?php echo cut_str($online['wr_name'],1,'**')?></li>
								<?php } else { ?>
								<li class="subject"><?php echo $online['wr_name'] ?></li>
								<?php } ?>
								<li class="cate"><?php echo $online['wr_5']?></li>
								<li class="type"><span class="<?php if($online['wr_2'] == "접수완료"){ echo "progress ing"; } else if($online['wr_2'] == "상담중") { echo "progress";} else if($online['wr_2'] == "상담완료"){ echo "progress end";}?>"><?php echo cut_str($online['wr_2'],4) ?></span></li>
							</ul>
						</a>
					</li>
					<?php }if(!$result){?>
						<li class="no-data">등록된 게시물이 없습니다.</li>
					<?php } ?>
				</ul>
			</section>
		</div>
	</section>
</section>
<!--//main-counselling-wrap -->
