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
<section class="section main-location">
	<div class="inner">
		<div class="txt-wrap">
			<h2><span>Contact US</span>오시는 길</h2>
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
					<dd>서울 서초구 서초중앙로 123 (서초동), 13층 (서초동, 엘렌타워)</dd>
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
		<!-- 지도 -->
		<div class="location-map-wrap">
			<!-- 서울사무소 -->
			<div class="map-box on">
				<a href="http://kko.to/dBj8nGkHz" target="_blank" class="map-view"><img src="/images/main/icon_map.png" alt="" width="50" height="50" loading="lazy"><span>카카오맵 보기</span></a>
				<img src="/images/main/main-location/map01.jpg" alt="서울사무소" width="580" height="435" loading="lazy">
				<div>출처 : <img src="/images/main/main-location/logo-kakao.png" alt="카카오맵" width="80" height="20" loading="lazy"></div>
			</div>
			<!-- 수원사무소 -->
			<div class="map-box">
				<a href="http://kko.to/2tQ_xcEhY" target="_blank" class="map-view"><img src="/images/main/icon_map.png" alt="" width="50" height="50" loading="lazy"><span>카카오맵 보기</span></a>
				<img src="/images/main/main-location/map03.jpg" alt="수원사무소" width="580" height="435" loading="lazy">
				<div>출처 : <img src="/images/main/main-location/logo-kakao.png" alt="카카오맵" width="80" height="20" loading="lazy"></div>
			</div>
			<!-- 인천사무소 -->
			<div class="map-box">
				<a href="http://kko.to/R_cP-PPp4" target="_blank" class="map-view"><img src="/images/main/icon_map.png" alt="" width="50" height="50" loading="lazy"><span>카카오맵 보기</span></a>
				<img src="/images/main/main-location/map04.jpg" alt="인천사무소" width="580" height="435" loading="lazy">
				<div>출처 : <img src="/images/main/main-location/logo-kakao.png" alt="카카오맵" width="80" height="20" loading="lazy"></div>
			</div>
		</div>
		<!-- 사무소 사진 -->
		<div class="lawfirm-interior-wrap">
			<!-- 서울사무소 -->
			<div class="lawfirm-interior-box on">
				<div class="interior-slide"><img src="/images/main/interior1_01.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_02.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_03.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_04.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_05.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_06.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_07.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_08.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_09.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior1_10.jpg" alt="" width="400" height="300" loading="lazy"></div>
			</div>
			<!-- 수원 사무소 -->
			<div class="lawfirm-interior-box">
				<div class="interior-slide"><img src="/images/main/interior2_01.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior2_02.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior2_03.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior2_04.jpg" alt="" width="400" height="300" loading="lazy"></div>
			</div>
			<!-- 인천 사무소 -->
			<div class="lawfirm-interior-box">
				<div class="interior-slide"><img src="/images/main/interior3_01.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior3_02.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior3_03.jpg" alt="" width="400" height="300" loading="lazy"></div>
				<div class="interior-slide"><img src="/images/main/interior3_04.jpg" alt="" width="400" height="300" loading="lazy"></div>
			</div>
		</div>
		<ul class="hashtag">
			<li>#Lawfirm</li>
			<li>#DongJu</li>
		</ul>
	</div>
</section>
<!--//main-location -->
