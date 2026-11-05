<?php
/**
 * partials/sections/video.php
 *
 * main-video 섹션 (법무법인 동주 공식 유튜브)
 * 위치: 성공사례(main-case, order:3) 아래 / 후기(main-review, order:4) 위
 * 동작: 썸네일 재생버튼 또는 '영상 재생하기' 버튼 클릭 시 페이지 이동 없이 같은 자리에서 재생
 */
$main_video_id = 'faaxT3YgRWo';
?>
<!-- main-video -->
<section class="section main-video">
	<div class="inner">
		<h2 class="main-video-heading">법무법인 동주 공식 유튜브</h2>
		<div class="main-video-box">
			<div class="main-video-player" id="mainVideoPlayer" data-video-id="<?php echo $main_video_id; ?>">
				<button type="button" class="main-video-thumb js-main-video-play" aria-label="영상 재생하기">
					<img src="https://i.ytimg.com/vi/<?php echo $main_video_id; ?>/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://i.ytimg.com/vi/<?php echo $main_video_id; ?>/hqdefault.jpg';" alt="음주운전 경찰조사 대응법 영상 썸네일" width="640" height="360" loading="lazy">
					<span class="main-video-play-icon" aria-hidden="true"></span>
				</button>
			</div>
			<div class="main-video-info">
				<div class="main-video-channel">
					<img src="/images/main/main_video_logo.png" alt="법무법인 동주 로고" width="56" height="56" loading="lazy">
					<div class="channel-txt">
						<strong>형사전문변호사_법무법인동주</strong>
						<span>법무법인 동주 공식 유튜브</span>
					</div>
				</div>
				<p class="main-video-title">음주운전 경찰조사, 무조건 출석하면 안 됩니다! 전직 '경찰'이 알려주는 음주운전 경찰조사 대응법 | 출석 전 필수시청‼️</p>
				<button type="button" class="main-video-btn js-main-video-toggle" aria-pressed="false">영상 재생하기</button>
			</div>
		</div>
	</div>
</section>
<script>
(function () {
	var player = document.getElementById('mainVideoPlayer');
	if (!player) return;
	var toggleBtn = document.querySelector('.js-main-video-toggle');
	var iframe = null;
	var playing = false;

	// 버튼 문구/아이콘: 재생 중이면 '영상 멈추기', 아니면 '영상 재생하기'
	function setPlaying(state) {
		playing = state;
		if (!toggleBtn) return;
		toggleBtn.textContent = state ? '영상 멈추기' : '영상 재생하기';
		toggleBtn.classList.toggle('is-playing', state);
		toggleBtn.setAttribute('aria-pressed', state ? 'true' : 'false');
	}

	// YouTube 플레이어 제어 (enablejsapi=1 postMessage)
	function command(func) {
		if (!iframe || !iframe.contentWindow) return;
		iframe.contentWindow.postMessage(JSON.stringify({ event: 'command', func: func, args: [] }), '*');
	}

	// 플레이어 상태 수신 → 영상 자체 컨트롤로 멈춰도 버튼 문구 동기화
	window.addEventListener('message', function (e) {
		if (!iframe || e.source !== iframe.contentWindow) return;
		var data;
		try { data = typeof e.data === 'string' ? JSON.parse(e.data) : e.data; } catch (err) { return; }
		if (!data || !data.info || typeof data.info.playerState === 'undefined') return;
		var s = data.info.playerState; // 1 재생, 3 버퍼링, 2 일시정지, 0 종료, -1 시작 전, 5 대기
		if (s === 1 || s === 3) setPlaying(true);
		else setPlaying(false); // 모바일 자동재생 차단 등으로 시작 못 한 경우도 '영상 재생하기'로 복귀
	});

	function play() {
		if (iframe) { command('playVideo'); setPlaying(true); return; }
		var id = player.getAttribute('data-video-id');
		iframe = document.createElement('iframe');
		iframe.src = 'https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0&playsinline=1&enablejsapi=1&origin=' + encodeURIComponent(location.origin);
		iframe.addEventListener('load', function () {
			// 상태 이벤트 구독 시작
			iframe.contentWindow.postMessage(JSON.stringify({ event: 'listening', id: 'mainVideoPlayer' }), '*');
		});
		iframe.title = '법무법인 동주 공식 유튜브 영상';
		iframe.setAttribute('frameborder', '0');
		iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
		iframe.setAttribute('referrerpolicy', 'strict-origin-when-cross-origin');
		iframe.setAttribute('allowfullscreen', '');
		player.innerHTML = '';
		player.appendChild(iframe);
		setPlaying(true);
	}

	function pause() {
		command('pauseVideo');
		setPlaying(false);
	}

	// 썸네일 가운데 재생버튼
	var thumbBtn = player.querySelector('.js-main-video-play');
	if (thumbBtn) thumbBtn.addEventListener('click', play);

	// 제목 아래 버튼: 재생 ↔ 멈추기 토글
	if (toggleBtn) {
		toggleBtn.addEventListener('click', function () {
			if (playing) pause(); else play();
		});
	}
})();
</script>
<!--//main-video -->
