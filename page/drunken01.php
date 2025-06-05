<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/divorce.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "음주운전 형사절차";
$gr_id ='business';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<!-- sub-conts-wrap -->
<section class="areasWrap">

	<!-- 음주운전 처벌(01) -->
	<div class="areas-sec area01" id="area_01-01">
		<div class="area-name">
			<span>01</span>
			<h3>음주운전 처벌</h3>
		</div>
		<div class="area-conts drunkenCate">
			<div class="cont-box">
				<h5>도로교통법 제148조의2(벌칙)</h5>
				<p>제44조 제1항을 위반하여 술에 취한 상태에서 자동차등 또는 노면전차를 운전한 사람은 다음 각 호의 구분에 따라 처벌한다.</p>
				<img src="/images/sub/areas/punishment01.png" alt="음주운전처벌기준1">
				<img src="/images/sub/areas/punishment01-mo.png" alt="음주운전처벌기준1" class="img-mo">
			</div>
			<div class="cont-box">
				<h5>도로교통법 제148조의2(벌칙)</h5>
				<p>제44조 제1항 또는 제2항을 위반하여 벌금 이상의 형을 선고 받고 그 형이 확정된 날부터 10년 내에 다시 같은 조 제1항 또는 제2항을 위반한 사람은 다음 각 호의 구분에 따라 처벌한다. <개정 2023.1.3></p>
				<img src="/images/sub/areas/punishment02.png" alt="음주운전처벌기준2">
				<img src="/images/sub/areas/punishment02-mo.png" alt="음주운전처벌기준2" class="img-mo">
			</div>
			<div class="cont-box">
				<h5>특정범죄 가중처벌 등에 관한 법률 제5조의11(위험운전 등 치사상)</h5>
				<p>음주 또는 약물의 영향으로 정상적인 운전이 곤란한 상태에서 자동차등을 운전하여 사람을 상해 또는 사망에 이르게 한 자는 아래와 같은 형에 처한다.</p>
				<img src="/images/sub/areas/punishment03.png" alt="음주운전처벌기준3">
				<img src="/images/sub/areas/punishment03-mo.png" alt="음주운전처벌기준3" class="img-mo">
			</div>
		</div>
	</div>
	<!-- // 음주운전 처벌(01) -->

	<!-- 형사소송 절차(02) -->
	<div class="areas-sec area02" id="area_01-02">
		<div class="area-name">
			<span>02</span>
			<h3>형사소송 절차</h3>
		</div>
		<div class="area-conts drunkenCate">
			<div class="cont-box">
				
				<img src="/images/sub/areas/process01.png" alt="음주 형사처벌 절차" class="imgProcess">
				<img src="/images/sub/areas/process01-mo.png" alt="음주 형사처벌 절차" class="img-mo imgProcess">
				
				<h4>01. 수사개시</h4>
				<p>
					음주운전에 단속된 경우, 담당 수사관이 배정되면 담당 수사관 측에서 연락을 해옵니다.
					<br>
					이때 수사일정을 조율할 수 있고, 일정이 조율되면 수사가 개시됩니다.
				</p>
				
				<div class="spa-topic"></div>
				
				<h4>02. 입건</h4>
				<p>
					수사 시작에 따라서 형사사건이 되는 것을 입건이라고 합니다.
					<br>
					이때 용의자로 수사가 진행되고 혐의가 인정되면 정식 입건되어 피의자가 됩니다.
				</p>
				
				<div class="spa-topic"></div>
				
				<h4>03. 체포</h4>
				<p>
					피의자가 정당한 이유 없이 수사기관의 출석 요구에 응하지 않거나 증거를 인멸한 우려가 있을 때에는 체포될 수 있습니다.
				</p>
				<div class="spa-para"></div>
				<p>
					피의자를 체포하기 위해서는 원칙적으로 판사가 발부한 체포영장이 있어야 하며, 판사는 기록을 검토한 결과 체포의 필요성이 인정되지 아니한다고 판단한 경우에는 체포영장의 청구를 받아들이지 않는 결정을 하는데, 이를 체포영장의 기각이라고 합니다.
				</p>
				<div class="spa-para"></div>
				<p>
					다만, 수사기관은 범죄가 무겁고 긴급한 사정이 있어 판사로부터 체포영장을 발급 받을 여유가 없을 때에는 피의자에게 그 사유를 알리고 영장 없이 피의자를 긴급체포할 수 있으며, 범죄를 실행한 직후인 사람은 현행범으로서 누구든지 영장 없이 체포할 수 있습니다.
				</p>
				
				<div class="spa-topic"></div>
				
				<h4>04. 구속</h4>
				<p>
					죄질이 나쁘고 주거지가 불안정하여 도망갈 우려가 있는 때에는 구속될 수 있습니다.
				</p>
				<div class="spa-para"></div>
				<p>
					피의자는 구속 여부가 결정되기 전에 판사 앞에서 변명의 기회를 가질 수 있는데, 이 제도가 바로 영장실질심사제도입니다.
				</p>
				<div class="spa-para"></div>
				<p>
					수사기관에 체포된 피의자는 영장실질심사를 신청할 권리가 있고, 그 외 피의자의 변호인, 법정대리인, 배우자, 직계존속, 형제자매, 호주, 가족이나 동거인 또는 고용인은 피의자와 별도로 영장실질심사를 신청할 수 있습니다. 피의자나 변호인 등의 영장실질심사신청이 없을 경우 판사는 피의자의 변명을 듣지 않은 채 사건기록만을 검토한 후 구속영장의 발부 여부를 결정하게 됩니다.
				</p>
				<div class="spa-para"></div>
				<p>
					다만 영장에 의해 체포 또는 구속되었다고 해도 법원이 피의자의 석방을 명하면 즉시 석방될 수 있기 때문에, 체포 또는 구속적부심의 청구도 고려해보는 것이 좋습니다.
				</p>
				
				<div class="spa-topic"></div>
				
				<h4>05. 송치</h4>
				<p>
					사법경찰관이 해당 형사사건의 기록과 증거물을 검토한 후 관할 검찰청으로 보내는 것을 송치한다고 합니다.
				</p>
				<div class="spa-para"></div>
				<p>
					사법경찰관은 사건을 검찰로 송치할 때 그 동안 수사한 결과를 종합하여 기소 여부에 대한 사법경찰관 나름대로의 의견을 붙여서 송치하는데 이를 송치의견이라고 하는데요.
				</p>
				<div class="spa-para"></div>
				<p>
					사법경찰관의 송치의견은 검사가 기소 여부를 결정하는데 참고가 될 뿐이며, 검사가 그 의견에 전적으로 따라야 하는 것은 아닙니다.
				</p>
				<div class="spa-para"></div>
				<p>
					검사는 사법경찰관의 수사 결과와 검사가 추가로 수사한 결과를 토대로 피의자를 기소할 것인지 여부를 최종적으로 결정하게 됩니다.
				</p>
				
				<div class="spa-topic"></div>
				
				<h4>06. 기소</h4>
				<p>
					검사는 송치 받은 사건 등에 대해 유죄의 증거가 충분하고 죄질이 무겁다고 판단하면 피의자를 기소합니다.
				</p>
				<div class="spa-para"></div>
				<p>
					검사에 의해 기소되면 피고인이 되죠.
				</p>
				<div class="spa-para"></div>
				<p>
					이때 사건이 경미하여 징역형 및 금고형보다는 벌금형에 처함이 상당하다고 판단되면 기소와 동시에 법원에 대해 "피고인을 벌금형에 처해 달라는 뜻"의 약식명령을 청구할 수 있습니다.
				</p>
				<div class="spa-para"></div>
				<p>
					이를 약식기소라고 합니다.
				</p>
				<div class="spa-para"></div>
				<p>
					그러나 수사기록을 검토한 판사가 약식절차는 부적당하다고 판단하면 사건을 정식재판으로 넘길 수 있습니다.
				</p>
				<div class="spa-para"></div>
				<p>
					만약 판사의 약식명령에 대해 불복이 있다면 약식명령을 송달 받은 날로부터 7일 이내에 정식재판을 청구하면 됩니다.
				</p>
				
				<div class="spa-topic"></div>
				
				<h4>07. 불기소처분</h4>
				<p>
					검사의 수사 결과 ➡️ 피의자의 죄를 인정할 만한 증거가 부족하거나 ➡️ 법리적으로 죄가 성립하지 않거나 ➡️ 법리적으로 죄가 성립하고 증거가 충분하지만 여러 사정을 참작했을 때 피고인을 처벌하지 않는 것이 타당하다고 판단된다면 "피의자를 기소하지 않고 사건을 종결"하는 불기소처분을 내리게 됩니다.
				</p>
				<div class="spa-para"></div>
				<p>
					불기소처분에는 아래와 같은 경우가 있습니다.
				</p>
				<div class="spa-para"></div>
				<ul>
					<li>1️⃣ <strong>공소권 없음</strong> (공소시효가 완성되어 피의자를 더 이상 처벌할 수 없거나, 피의자의 행위가 정당방위에 해당하는 등의 법률적 이유로 인하여 기소가 불가능한 경우)</li>
					<li>2️⃣ <strong>죄가 안 됨 처분</strong></li>
					<li>3️⃣ <strong>혐의 없음 처분</strong> (범죄사실이 인정되지 않거나 증거가 불충분한 경우)</li>
					<li>4️⃣ <strong>기소유예 처분</strong> (법률적으로 기소는 가능하지만 여러 사정을 참착하여 피의자를 기소하지 않음)</li>
					<li>5️⃣ <strong>기소중지 처분</strong> (수사가 더 필요하지만 피의자가 소재불명인 경우)</li>
					<li>6️⃣ <strong>참고인중지 처분</strong> (중요한 참고인이 소재불명인 경우)</li>
					<li>7️⃣ <strong>각하 처분</strong> (고소인 또는 고발인의 진술에 의하더라도 기소를 위한 수사의 필요성이 더 이상 없음이 명백하다고 인정되는 경우)</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- // 형사소송 절차(02) -->

	<!-- 동주의 조력(03) -->
	<div class="areas-sec area03" id="area_01-03">
		<div class="area-name">
			<span>03</span>
			<h3>동주의 조력</h3>
		</div>
		<div class="area-conts drunkenCate">
			<h4>대한변호사협회 등록 형사전문변호사가 조력</h4>
			
			<div class="cont-box copy">
				<div><h5>1. 형사재판 & 면허취소 구제 (이의신청, 행정심판, 행정소송) 동시 대응 가능</h5></div>
				<div>
					<h5>2. 의뢰인 1명을 위한 전문 변호인단 구성</h5>
					<p>- 다수의 형사전문변호사, 부장검사 출신 변호사, 국정원 출신 변호사, 대한변호사협회 대의원, 행정법전문변호사, 행정사 등 의뢰인의 사안에 맞게 TF변호인단 구성해 조력</p>
				</div>
				<div><h5>3. 경찰조사 시뮬레이션 및 동행</h5></div>
				<div><h5>4. 각종 양형사유 수집 및 변호인 의견서 직접 작성</h5></div>
			</div>

			<div class="support">
				<div class="01 invest">
					<div class="tit">
						<img src="/images/sub/crime01.png" alt="">
						<h5>수사진행 과정에서의 조력</h5>
					</div>
					<div class="list">
						<p><span>1</span>고소장 검토 및 피의자 조사 준비</p>
						<p><span>2</span>피의자조사 변호인 동행</p>
						<p><span>3</span>구속영장실질심사시 도주 및 증거인멸 우려 없음 주장</p>
						<p><span>4</span>증거 수집을 통한 무혐의 처분 조력</p>
						<p><span>5</span>피해자와의 합의 조력</p>
					</div>
				</div>
				<div class="02 trial">
					<div class="tit">
						<img src="/images/sub/crime02.png" alt="">
						<h5>재판진행 과정에서의 조력</h5>
					</div>
					<div class="list">
						<p><span>1</span>재판 전 과정 동석</p>
						<p><span>2</span>무죄 및 감형을 위한 증거자료 수집</p>
						<p><span>3</span>피해자 진술의 모순 검토</p>
						<p><span>4</span>반성문 작성 및 타원서 조력</p>
						<p><span>5</span>선처를 위한 피해자와의 합의 조력</p>
					</div>
				</div>
			</div>

			<div class="cont-box">
				<p>
					법무법인 동주 교통음주분야에서는<br>
					① 경찰 및 검찰수사부터 재판 변론까지 <b>형사법 전문 변호사</b>가<br>
					② 면허정지•면허취소에 대한 이의신청과 행정심판 그리고 행정소송까지 <b>전담 행정사와 행정법 전문 변호사</b>가 1:1로 조력해 드립니다.
				</p>
				<a href="/page/self_test.php?me_code=7010">자가진단 진행하기 <img src="/images/sub/business_arrow.png" alt="자가진단 이동"></a>
			</div>

		</div>
	</div>
	<!-- // 동주의 조력(03) -->

</section>

<?php
include_once('areasCaseList.php');
?>


<?php
include_once('../_footer.php');
?>

<script>
	let currentTab = 0;

	function showTab(index) {
		const contents = document.querySelectorAll('.tab-content');
		const tabs = document.querySelectorAll('.tab');
		
		contents.forEach(content => {
			content.classList.remove('active');
		});

		tabs.forEach(tab => {
			tab.style.backgroundColor = '#D6D6D6'; // 기본 배경색으로 설정
		});

		document.getElementById(`tab-content-${index}`).classList.add('active');
		tabs[index].style.backgroundColor = '#3200A7'; // 선택된 탭의 배경색 변경

		currentTab = index;
	}

	// 첫 번째 탭을 기본으로 활성화
	showTab(currentTab);
</script>