<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/location.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "오시는 길";
$gr_id ='intro';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>


<!-- sub-conts-wrap -->
<section class="sub-conts-wrap">
	<h1 class="sub-conts-title"><span><?php echo $g5['title']; ?></span></h1>
	<section class="location-wrap">
		<ul class="location-tab">
			<li class="on"><a href="#">서울사무소</a></li>
			<li><a href="#">수원사무소</a></li>
			<li><a href="#">인천사무소</a></li>
		</ul>
		<section class="location-detail">
			
			<!-- 서울사무소 -->
			<section class="location-inner on">
				<section class="location-map">
					<div id="daumRoughmapContainer1656517417699" class="root_daum_roughmap root_daum_roughmap_landing"></div>
					<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
					<script charset="UTF-8">
						new daum.roughmap.Lander({
							"timestamp" : "1656517417699",
							"key" : "2ashv",
							"mapWidth" : "1200",
							"mapHeight" : "520"
						}).render();
					</script>
				</section>
				<section class="location-address">
					<h1><span>Location</span>서울사무소</h1>
					<section class="location-address-wrap">
						<p>서울시 서초구 서초중앙로 123, 13층(서초동, 엘렌타워)</p>
						<dl>
							<dt>Tel.</dt>
							<dd>1522-3394</dd>
							<dt>Fax.</dt>
							<dd>02-523-7260</dd>
						</dl>
					</section>
					<a href="https://kko.to/dBj8nGkHz" target="_blank">Go to map</a>
				</section>
			</section>
			

			<!-- 수원 -->
			<section class="location-inner">
				<section class="location-map">
					<div id="daumRoughmapContainer1656517629822" class="root_daum_roughmap root_daum_roughmap_landing"></div>
					<script charset="UTF-8">
						new daum.roughmap.Lander({
							"timestamp" : "1656517629822",
							"key" : "2ashx",
							"mapWidth" : "1200",
							"mapHeight" : "520"
						}).render();
					</script>
				</section>
				<section class="location-address">
					<h1><span>Location</span>수원사무소</h1>
					<section class="location-address-wrap">
						<p>수원시 영통구 광교중앙로248번길 7-2, B동 902-903호(하동, 원희캐슬광교)</p>
						<dl>
							<dt>Tel.</dt>
							<dd>1522-3394</dd>
							<dt>Fax.</dt>
							<dd>031-216-1160</dd>
						</dl>
					</section>
					<a href="http://kko.to/2tQ_xcEhY" target="_blank">Go to map</a>
				</section>
			</section>

			<!-- 인천 -->
			<section class="location-inner">
				<section class="location-map">
					<div id="daumRoughmapContainer1656517597419" class="root_daum_roughmap root_daum_roughmap_landing"></div>
					<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
					<script charset="UTF-8">
						new daum.roughmap.Lander({
							"timestamp" : "1656517597419",
							"key" : "2ashw",
							"mapWidth" : "1200",
							"mapHeight" : "520"
						}).render();
					</script>
				</section>
				<section class="location-address">
					<h1><span>Location</span>인천사무소</h1>
					<section class="location-address-wrap">
						<p>인천시 미추홀구 학익소로 66, 403-404호(학익동, 선정빌딩)</p>
						<dl>
							<dt>Tel.</dt>
							<dd>1522-3394</dd>
							<dt>Fax.</dt>
							<dd>032-719-4059</dd>
						</dl>
					</section>
					<a href="http://kko.to/R_cP-PPp4" target="_blank">Go to map</a>
				</section>
			</section>


		</section>
	</section>
</section>
<!-- //sub-conts-wrap -->

<?php
include_once('../_footer.php');
?>
