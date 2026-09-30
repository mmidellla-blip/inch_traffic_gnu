<?php
/**
 * partials/sections/location.php
 * 
 * main-location 섹션 (오시는 길)
 * 완전 독립적 - 하드코딩된 콘텐츠
 * 
 * 주의사항:
 * - 탭 전환 기능은 main.js에서 처리
 * - 이미지 width/height 명시 필수 (CLS 방지)
 */
?>
<!-- main-location -->
<section id="location" class="section main-location">
	<div class="inner">
		<div class="txt-wrap">
			<h2 class="title-h2">오시는 길</h2>
			<p class="title-sub">미추홀구 학익동 인천사무소에서도 동일하게 상담·수임이 진행됩니다. 탭에서 사무소를 선택해 주세요.</p>
			<!-- 탭 -->
			<ul class="main-location-tab">
				<li class="on"><a href="#">서울사무소</a></li>
				<li><a href="#">수원사무소</a></li>
				<li><a href="#">인천사무소</a></li>
			</ul>
			<!-- 사무소 정보 -->
			<section class="location-address-wrap">
				<!-- 서울사무소 -->
				<dl class="on">
					<dt>주소</dt>
					<dd>서울특별시 강남구 테헤란로 326 아이타워 16층</dd>
					<dt>TEL.</dt>
					<dd><strong>1522-3394</strong></dd>
					<dt>FAX.</dt>
					<dd><span>02-523-7260</span></dd>
				</dl>
				<!-- 수원사무소 -->
				<dl>
					<dt>주소</dt>
					<dd>수원시 영통구 광교중앙로248번길 7-2, B동 902-903호(하동, 원희캐슬광교)</dd>
					<dt>TEL.</dt>
					<dd><strong>1522-3394</strong></dd>
					<dt>FAX.</dt>
					<dd><span>031-216-1160</span></dd>
				</dl>
				<!-- 인천사무소 -->
				<dl>
					<dt>주소</dt>
					<dd>인천시 미추홀구 학익소로 66, 403-404호(학익동, 선정빌딩)</dd>
					<dt>TEL.</dt>
					<dd><strong>1522-3394</strong></dd>
					<dt>FAX.</dt>
					<dd><span>032-719-4059</span></dd>
				</dl>
			</section>
		</div>
		<!-- 지도: 카카오 지도 퍼가기. JavaScript API 키 없이 timestamp/key로 불러온다 -->
		<div class="location-map-wrap">
			<?php
			$is_mobile_device = function_exists('is_mobile_device') ? is_mobile_device() : (function_exists('is_mobile') && is_mobile());
			?>
			<!-- 서울사무소 -->
			<div class="map-box on">
				<a href="https://map.kakao.com/link/map/1961523053" target="_blank" rel="noopener noreferrer" class="map-view"><img src="/images/main/icon_map.png" alt="법무법인 동주 서울사무소 카카오맵 보기" width="24" height="31" loading="lazy"><span>카카오맵 보기</span></a>
				<div id="daumRoughmapContainer1656517417699" class="root_daum_roughmap root_daum_roughmap_landing<?php echo $is_mobile_device ? ' map-loader-mobile' : ''; ?>" data-timestamp="1656517417699" data-key="2ashv" data-map-width="1200" data-map-height="580"></div>
				<?php if (!$is_mobile_device) { ?>
				<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
				<script charset="UTF-8">
					new daum.roughmap.Lander({
						"timestamp" : "1656517417699",
						"key" : "2ashv",
						"mapWidth" : "1200",
						"mapHeight" : "580"
					}).render();
					(function () {
						var tries = 0;
						function focusSeoulMap() {
							tries += 1;
							var inst = window.daum && daum.roughmap && daum.roughmap.instances && daum.roughmap.instances["1656517417699"];
							if (inst && inst.jsMap && window.daum.maps && daum.maps.LatLng) {
								var coords = new daum.maps.LatLng(37.5035467, 127.04703394).toCoords();
								inst.jsMap.setLevel(3);
								inst.jsMap.setCenter(coords);
								if (!inst._itTowerMarker || (inst._itTowerMarker.getMap && inst._itTowerMarker.getMap() !== inst.jsMap)) {
									inst._itTowerMarker = new daum.maps.Marker({ position: coords });
									inst._itTowerMarker.setMap(inst.jsMap);
								}
							}
							if (tries < 30) setTimeout(focusSeoulMap, 300);
						}
						focusSeoulMap();
					})();
				</script>
				<?php } ?>
				<div class="map-source">출처 : <img src="/images/main/main-location/logo-kakao.png" alt="카카오맵" width="80" height="20" loading="lazy"></div>
			</div>
			<!-- 수원사무소 -->
			<div class="map-box">
				<a href="http://kko.to/2tQ_xcEhY" target="_blank" rel="noopener noreferrer" class="map-view"><img src="/images/main/icon_map.png" alt="법무법인 동주 수원사무소 카카오맵 보기" width="24" height="31" loading="lazy"><span>카카오맵 보기</span></a>
				<div id="daumRoughmapContainer1656517629822" class="root_daum_roughmap root_daum_roughmap_landing<?php echo $is_mobile_device ? ' map-loader-mobile' : ''; ?>" data-timestamp="1656517629822" data-key="2ashx" data-map-width="1200" data-map-height="580"></div>
				<?php if (!$is_mobile_device) { ?>
				<script charset="UTF-8">
					new daum.roughmap.Lander({
						"timestamp" : "1656517629822",
						"key" : "2ashx",
						"mapWidth" : "1200",
						"mapHeight" : "580"
					}).render();
				</script>
				<?php } ?>
				<div class="map-source">출처 : <img src="/images/main/main-location/logo-kakao.png" alt="카카오맵" width="80" height="20" loading="lazy"></div>
			</div>
			<!-- 인천사무소 -->
			<div class="map-box">
				<a href="http://kko.to/R_cP-PPp4" target="_blank" rel="noopener noreferrer" class="map-view"><img src="/images/main/icon_map.png" alt="법무법인 동주 인천사무소 카카오맵 보기" width="24" height="31" loading="lazy"><span>카카오맵 보기</span></a>
				<div id="daumRoughmapContainer1656517597419" class="root_daum_roughmap root_daum_roughmap_landing<?php echo $is_mobile_device ? ' map-loader-mobile' : ''; ?>" data-timestamp="1656517597419" data-key="2ashw" data-map-width="1200" data-map-height="580"></div>
				<?php if (!$is_mobile_device) { ?>
				<script charset="UTF-8">
					new daum.roughmap.Lander({
						"timestamp" : "1656517597419",
						"key" : "2ashw",
						"mapWidth" : "1200",
						"mapHeight" : "580"
					}).render();
				</script>
				<?php } ?>
				<div class="map-source">출처 : <img src="/images/main/main-location/logo-kakao.png" alt="카카오맵" width="80" height="20" loading="lazy"></div>
			</div>
		</div>
		<!-- 사무소 사진 -->
		<div class="lawfirm-interior-wrap">
			<!-- 서울사무소 -->
			<div class="lawfirm-interior-box on">
				<div class="interior-slide"><img src="/images/main/interior1_01.jpg" alt="법무법인 동주 서울사무소 엘렌타워 내부 1" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_02.jpg" alt="법무법인 동주 서울사무소 엘렌타워 내부 2" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_03.jpg" alt="법무법인 동주 서울사무소 엘렌타워 내부 3" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_04.jpg" alt="법무법인 동주 서울사무소 엘렌타워 내부 4" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_05.jpg" alt="법무법인 동주 서울사무소 엘렌타워 내부 5" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_06.jpg" alt="법무법인 동주 서울사무소 엘렌타워 내부 6" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_07.jpg" alt="법무법인 동주 서울사무소 엘렌타워 내부 7" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_08.jpg" alt="법무법인 동주 서울사무소 엘렌타워 내부 8" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_09.jpg" alt="법무법인 동주 서울사무소 엘렌타워 내부 9" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_10.jpg" alt="법무법인 동주 서울사무소 엘렌타워 내부 10" width="400" height="300" loading="lazy"></div>
			</div>
			<!-- 수원 사무소 -->
			<div class="lawfirm-interior-box">
				<div class="interior-slide"><img src="/images/main/interior2_01.jpg" alt="법무법인 동주 수원사무소 원희캐슬광교 내부 1" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior2_02.jpg" alt="법무법인 동주 수원사무소 원희캐슬광교 내부 2" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior2_03.jpg" alt="법무법인 동주 수원사무소 원희캐슬광교 내부 3" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior2_04.jpg" alt="법무법인 동주 수원사무소 원희캐슬광교 내부 4" width="400" height="300" loading="lazy"></div>
			</div>
			<!-- 인천 사무소 -->
			<div class="lawfirm-interior-box">
				<div class="interior-slide"><img src="/images/main/interior3_01.jpg" alt="법무법인 동주 인천사무소 선정빌딩 내부 1" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior3_02.jpg" alt="법무법인 동주 인천사무소 선정빌딩 내부 2" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior3_03.jpg" alt="법무법인 동주 인천사무소 선정빌딩 내부 3" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior3_04.jpg" alt="법무법인 동주 인천사무소 선정빌딩 내부 4" width="400" height="300" loading="lazy"></div>
			</div>
		</div>
		<ul class="hashtag">
			<li>#Lawfirm</li>
			<li>#DongJu</li>
		</ul>
	</div>
</section>
<!--//main-location -->
