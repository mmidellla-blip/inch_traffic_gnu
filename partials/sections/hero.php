<?php
/**
 * partials/sections/hero.php
 * 
 * main-visual 섹션 (LCP 후보)
 * 
 * 주의사항:
 * - LCP 요소는 첫 화면에 반드시 표시되어야 함
 * - display:none 상태가 아니어야 함
 * - 이미지 width/height 명시 필수
 * - $write 변수는 isset 체크 필요
 */
?>
<!-- main-visual -->
<section class="main-visual">
	<div class="main-menubg"></div>
	<div class="main-conts">
		<div class="main-box01">
			<div class="copy">
				<div class="copy_icon"></div>
				<h5>철저한 익명 보장 원칙<br>30분 이내 신속 답변 서비스</h5>
			</div>
			<div class="space"></div>
			<a href="tel:1522-3394" onMouseDown="javascript:try{NA_Call();}catch(e){}"><div class="telnum"><div class="telnum_icon"></div>1522-3394</div></a>
			<p>남겨 주신 문의 신속히 확인한 후<br>유선으로 안내해 드립니다.</p>
			<section class="online-form">
				<form action="<?php echo G5_URL ?>/_ok.php" method="post">
					<input type="hidden" name="wr_1" id="wr_1" value="<?php echo isset($write['wr_1']) ? $write['wr_1'] : '';?>">
					<input type="hidden" id="secret" name="secret" value="secret">
					<input type="hidden" id="gclid_field" name="gclid_field" value="gclid_field">
					<ul class="input-wrap">
						<li><label for="h_tel">연락처</label><input class="sec07_input" type="tel" name="h_tel" id="h_tel" placeholder="연락처를 입력하세요." required/></li>
						<li><label for="h_place">지역</label><input class="sec07_input" type="text" name="h_place" id="h_place" placeholder="지역을 입력하세요." required/></li>
						<li><input type="checkbox" id="chk" required/><label for="chk">개인정보 수집동의</label><a href="#">자세히보기</a></li>
					</ul>
					<p class="btn-wrap"><button id='submit_btn'>상담신청</button></p>
					<section class="privacy-pop">
						<h2>개인정보 수집 및 이용안내</h2>
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
		</div>
		<div class="main-area01">
			<div class="m-copy m-copy02">
				<div class="m-copy_icon"></div>
				<h5>형사부터 행정까지<br>음주운전 ONE-STOP 구제</h5>
			</div>
			<div class="main-box02">
				<div class="box02_list box02-1">
					<div class="box02-icon"></div>
					<h5>경찰조사 시뮬레이션 등<br>단계별 맞춤 서비스</h5>
				</div>
				<div class="box02_list box02-2">
					<div class="box02-icon"></div>
					<h5>대표/파트너변호사가<br>직접 상담 진행</h5>
				</div>
				<div class="box02_list box02-3">
					<div class="box02-icon"></div>
					<h5>개인이 아닌<br>'로이어팀'이 조력</h5>
				</div>
				<div class="box02_list box02-4">
					<div class="box02-icon"></div>
					<h5>형사/행정<br>'분야별' 연구팀</h5>
				</div>
			</div>

			<div class="m-copy m-copy03">
				<div class="m-copy_icon"></div>
				<h5>10년 이상 경력의<br>음주전문변호사 구성</h5>
			</div>
			<div class="main-box03">
				<div class="box03_list box03-1">
					<div class="profile">
						<div class="profile-name">
							<p><strong>박동진 </strong>대표변호사</p>
						</div>
						<div class="profile-career">
							<p>前 서울중앙지방검찰청 부장검사<br>前 부산지방검찰청 부장검사<br>前 대전지방검찰청 부장검사</p>
						</div>
					</div>
				</div>
				<div class="box03_list box03-2">
					<div class="profile">
						<div class="profile-name">
							<p><strong>이세환 </strong>대표변호사</p>
						</div>
						<div class="profile-career">
							<p>대한변호사협회 형사법 전문변호사<br>대한변호사협회 대의원<br>수원남부경찰서 수사민원상담변호사</p>
						</div>
					</div>
				</div>
				<div class="box03_list box03-3">
					<div class="profile">
						<div class="profile-name">
							<p><strong>조원진 </strong>파트너변호사</p>
						</div>
						<div class="profile-career">
							<p>대한변호사협회 형사법 전문변호사<br>대법원 국선변호인<br>해군본부 군검찰 국선변호인</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--//main-visual -->
