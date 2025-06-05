<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/divorce.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "음주운전 행정절차";
$gr_id ='business';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<!-- sub-conts-wrap -->
<section class="areasWrap">

	<!-- 음주운전 행정심판(01) -->
	<div class="areas-sec area01" id="area_02-01">
		<div class="area-name">
			<span>01</span>
			<h3>음주운전 행정심판</h3>
		</div>
		<div class="area-conts drunkenCate">
			<div class="cont-box">
				<p>
					<b>법무법인 동주에는 2인의 행정사 및 변호사가 행정심판을 함께 합니다.</b>
				</p>
				
				<div class="spa-topic"></div>

				<h5>이의신청이란</h5>
				<p>
					행정심판 전에 처분한 경찰서에 이의신청을 통해 구제를 청구할 수 있습니다. 하지만, 구제율은 낮은 편입니다.
				</p>
				<p>
					청구 가능 기간은 처분통지를 받은 날로부터 60일 이내입니다.
				</p>

				<div class="spa-topic"></div>

				<h5>이의신청 조건</h5>
				<p>
					<b>이의 신청 구제대상이 되기 위한 조건은 다음과 같습니다.</b>
				</p>
				<div class="spa-para"></div>
				<ul>
					<li>• 운전이 가족의 생계를 책임질 정도로 중요한 수단인 경우</li>
					<li>• 모범운전자로 처분 당시 3년 이상 교통봉사활동에 종사한 경우</li>
					<li>• 뺑소니 운전자를 검거하여 경찰서장 이상의 표창을 받은 사람</li>
				</ul>
				<div class="spa-para"></div>
				<div class="spa-para"></div>
				<p>
					하지만 위 3가지 사항 중 하나에 해당해도
				</p>
				<div class="spa-para"></div>
				<p>
					➡️ 음주수치 0.1% 초과했거나, 교통사고로 인적피해를 일으켰거나, 음주측정불응 및 거부했거나, 경찰관을 폭행했거나, 5년 이내 음주운전 전력이 있다면 음주운전면허취소 이의신청을 청구하기 어렵습니다.
				</p>
			</div>
			<div class="cont-box">
				<h5>행정심판이란</h5>
				<p>
					행정청의 부당한 처분 또는 위법한 처분과 그 외 공권력행사 등으로 인해 권리나 이익을 침해 받은 국민이 행정기관에 제기하는 것으로 권리구제를 위한 절차입니다.
				</p>

				<div class="spa-topic"></div>

				<h5>행정심판 대상</h5>
				<ul>
					<li>• 음주, 뺑소니, 무면허, 측정불응, 벌점초과 등에 적발되어 운전면허가 취소 또는 정지된 자</li>
					<li>• 위법, 부당한 측정 방법으로 운전면허가 취소된 자</li>
					<li>• 운전면허 정지기간 중 운전으로 면허가 취소된 자</li>
					<li>• 과태료 미납, 벌점초과, 적성검사 미실시 등으로 면허가 정지 또는 취소된 자</li>
					<li>• 음주운전 2진아웃으로 면허가 취소된 자는 행정심판의 구제대상이 됩니다.</li>
				</ul>
			</div>
			<div class="cont-box">
				<h5>음주운전 행정처분 및 행정심판 절차</h5>
				<img src="/images/sub/areas/process02.png" alt="음주 행정심판 절차">
				<img src="/images/sub/areas/process02-mo.png" alt="음주 행정심판 절차" class="img-mo">
			</div>
		</div>
	</div>
	<!-- // 음주운전 행정심판(01) -->

	<!-- 음주운전 행정소송(02) -->
	<div class="areas-sec area02" id="area_02-02">
		<div class="area-name">
			<span>02</span>
			<h3>음주운전 행정소송</h3>
		</div>
		<div class="area-conts drunkenCate">
			<h4>법무법인 동주는 행정법 전문 변호사가 1:1로 배치됩니다.</h4>

			<div class="cont-box">
				<h4>행정소송의 종류</h4>
				<div class="spa-para"></div>
				<h5>취소소송</h5>
				<p>
					행정소송의 가장 대표적인 소송으로, 행정청의 위법한 처분 또는 재결의 취소나 변경을 구하는 소송입니다. 위법한 처분으로 인해 발생한 위법상태를 원상회복 시키고, 처분으로 인해 침해 또는 방해를 받은 권리와 이익을 보호 또는 구제하기 위한 소송입니다.
				</p>

				<div class="spa-topic"></div>

				<h5>무효등확인소송</h5>
				<p>
					행정청의 위법한 처분 또는 재결의 효력 유·무 또는 존재여부를 확인하는 소송입니다. 행정처분의 위법성이 명백하여 당연무효의 경우라면, 그 처분은 효력을 갖지 않기 때문에 소송을 제기할 필요도 없습니다. 하지만 이러한 경우 해당 처분이 무효라는 사실을 확인 받아야 합니다. 행정청의 위법한 처분 또는 재결의 효력 유·무 또는 존재여부를 확인하는 소송입니다. 행정처분의 위법성이 명백하여 당연무효의 경우라면, 그 처분은 효력을 갖지 않기 때문에 소송을 제기할 필요도 없습니다. 이러한 경우 해당 처분이 무효라는 사실을 확인 받아야 합니다.
				</p>

				<div class="spa-topic"></div>

				<h5>부작위위법확인소송</h5>
				<p>
					행정청의 부작위가 위법하다는 것을 확인하는 소송입니다. 쉽게 말해 행정청이 상대방 신청에 대해 일정한 처분을 내려야 하는데도 불구하고, 이를 이행하지 않았을 경우 이러한 부작위의 위법 여부를 확인하는 소송입니다. 행정청의 위법한 처분 또는 재결의 효력 유·무 또는 존재여부를 확인하는 소송입니다. 행정처분의 위법성이 명백하여 당연무효의 경우라면, 그 처분은 효력을 갖지 않기 때문에 소송을 제기할 필요도 없습니다. 이러한 경우 해당 처분이 무효라는 사실을 확인 받아야 합니다.
				</p>

			</div>

			<div class="cont-box">
				<h5>음주운전 행정소송 절차</h5>
				<img src="/images/sub/areas/process03.png" alt="음주 행정소송 절차">
				<img src="/images/sub/areas/process03.png" alt="음주 행정소송 절차" class="img-mo">
			</div>
		</div>
	</div>
	<!-- // 음주운전 행정소송(02) -->

	<!-- 음주운전 소청심사(03) -->
	<div class="areas-sec area03" id="area_02-03">
		<div class="area-name">
			<span>03</span>
			<h3>음주운전 소청심사</h3>
		</div>
		<div class="area-conts drunkenCate">
			<div class="cont-box">
				<h5>소청심사란</h5>
				<p>
					소청심사는 행정심판의 일종으로 공무원이 징계처분이나 신분상 의사에 반하는 불리한 처분 또는 부작위에 대한 이의제기를 하는 경우 이를 심사하는 제도입니다.
				</p>

				<div class="spa-topic"></div>

				<h5>소청제기 대상 공무원</h5>
				<p>
					일반직, 특정직 등의 경력직 공무원 (특수경력직공무원은 원칙적으로 소청대상에 포함되지 않음)
				</p>

				<div class="spa-topic"></div>

				<h5>행정소송과의 관계</h5>
				<img src="/images/sub/areas/process04.png" alt="음주 소청심사 절차">
				<img src="/images/sub/areas/process04-mo.png" alt="음주 소청심사 절차" class="img-mo">
			</div>
		</div>
	</div>
	<!-- // 음주운전 소청심사(03) -->

	<!-- 동주의 조력(04) -->
	<div class="areas-sec area04" id="area_02-04">
		<div class="area-name">
			<span>04</span>
			<h3>동주의 조력</h3>
		</div>
		<div class="area-conts drunkenCate">
			<h4>대한변호사협회 등록 형사전문변호사가 조력</h4>
			
			<div class="cont-box copy">
				<div><h5>1. 2인의 행정사 및 변호가 직접 전담 수행</h5></div>
				<div>
					<h5>2. 의뢰인 1명을 위한 전문 변호인단 구성</h5>
					<p>- 다수의 형사전문변호사, 부장검사 출신 변호사, 국정원 출신 변호사, 대한변호사협회 대의원, 행정법전문변호사, 행정사 등 의뢰인의 사안에 맞게 TF변호인단 구성해 조력</p>
				</div>
				<div><h5>3. 상황 분석 후 이의신청, 행정심판, 행정소송 중 최적의 전략 구성</h5></div>
				<div><h5>4. 각종 양형사유 수집 및 변호인 의견서 직접 작성</h5></div>
			</div>

			<div class="support support2">
				<div class="01 objection">
					<div class="tit">
						<h5>이의신청</h5>
					</div>
					<div class="list">
						<p><span>1</span>이의신청 조건 확인</p>
						<p><span>2</span>집행정지 신청</p>
						<p><span>3</span>반성문 및 탄원서 조력</p>
					</div>
				</div>
				<div class="02 simpan">
					<div class="tit">
						<h5>행정심판</h5>
					</div>
					<div class="list">
						<p><span>1</span>행정심판전치주의 유무 확인</p>
						<p><span>2</span>집행정지 신청</p>
						<p><span>3</span>반성문 및 탄원서 조력</p>
					</div>
				</div>
				<div class="03 trial">
					<div class="tit">
						<h5>행정소송</h5>
					</div>
					<div class="list">
						<p><span>1</span>행정소송 기간 확인</p>
						<p><span>2</span>집행정지 신청</p>
						<p><span>3</span>반성문 및 탄원서 조력</p>
						<p><span>4</span>소송 전 분야 조력</p>
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
	<!-- // 동주의 조력(04) -->

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