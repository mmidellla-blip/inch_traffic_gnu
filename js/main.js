// 네이버 통계 함수들
function NA_Call(){
	if(window.wcs){
		if(!wcs_add) var wcs_add = {};
		wcs_add["wa"] = "s_59bf2b5a701";
		var _conv = {};
		_conv.type = 'custom001';
		wcs.trans(_conv);
	}
}

function NA_Katalk(){
	if(window.wcs){
		if(!wcs_add) var wcs_add = {};
		wcs_add["wa"] = "s_59bf2b5a701";
		var _conv = {};
		_conv.type = 'custom002';
		wcs.trans(_conv);
	}
}

function NA_Check(){
	if(window.wcs){
		if(!wcs_add) var wcs_add = {};
		wcs_add["wa"] = "s_59bf2b5a701";
		var _conv = {};
		_conv.type = 'custom003';
		wcs.trans(_conv);
	}
}

// slick.js가 로드될 때까지 대기하는 함수 (타임아웃 포함)
function waitForSlick(callback, maxAttempts) {
	maxAttempts = maxAttempts || 100; // 최대 5초 대기 (100 * 50ms)
	var attempts = 0;
	
	function check() {
		attempts++;
		if (typeof jQuery !== 'undefined' && typeof jQuery.fn !== 'undefined' && typeof jQuery.fn.slick !== 'undefined') {
			callback();
		} else if (attempts < maxAttempts) {
			setTimeout(check, 50);
		} else {
			console.warn('slick.js가 로드되지 않았습니다. 슬라이더를 초기화할 수 없습니다.');
			// slick이 없어도 이벤트 핸들러는 실행
			initMainEvents();
		}
	}
	check();
}

// 메인 페이지 슬라이더 및 이벤트 초기화
// DOMContentLoaded 사용하여 DOM만 준비되면 즉시 실행 (이미지 로드 대기 안 함)
(function() {
	function init() {
		waitForSlick(function() {
			initMainSliders();
			initMainEvents();
		});
	}
	
	// DOM이 준비되면 즉시 실행 (이미지 로드 대기 안 함)
	if (document.readyState === 'complete' || document.readyState === 'interactive') {
		// 약간의 지연을 두어 defer 스크립트들이 실행될 시간을 줌
		setTimeout(init, 100);
	} else {
		// DOMContentLoaded 사용 (이미지 로드 전에 실행)
		document.addEventListener('DOMContentLoaded', function() {
			setTimeout(init, 100);
		});
	}
})();

// 슬라이더 초기화 함수
function initMainSliders() {
	// 메인 비주얼 슬라이더 (현재는 사용되지 않지만 유지)
	if($(".main-visual-wrap").length > 0) {
		$(".main-visual-wrap").slick({
			slide: 'div',	
			fade: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			autoplay: true,
			autoplaySpeed: 4000,
			speed: 1000,
			dots: true,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slide: 'div',	
						fade: true,
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: false,
						autoplay: true,
						autoplaySpeed: 4000,
						speed: 1000,
						dots: true,
					}
				}
			]
		});
	}

	// 법무법인 인테리어 슬라이더
	if($(".lawfirm-interior-box").length > 0) {
		$(".lawfirm-interior-box").slick({
			infinite: false,
			dots: false,
			slide: 'div',	
			slidesToShow: 2,
			slidesToScroll: 2,
			arrows: true,
			autoplay: false,
			speed: 300,
			responsive: [
				{
					breakpoint: 950,
					settings: {
						infinite: false,
						arrows: true,
						dots: false,
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				}
			]
		});
	}

	// 메인 변호사 목록 슬라이더 (현재는 사용되지 않지만 유지)
	if($(".main-lawyer .member-list").length > 0) {
		$(".main-lawyer .member-list").slick({
			infinite: false,
			dots: false,
			slide: 'div',	
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows: true,
			speed: 300,
			variableWidth: true,
			adaptiveHeight: true,
			dots: true,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						infinite: false,
						arrows: true,
						dots: false,
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				}
			]
		});
	}

	// 메인 후기 목록 슬라이더
	if($(".main-review-list").length > 0) {
		$(".main-review-list").slick({
			infinite: false,
			dots: false,
			slide: 'div',	
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: true,
			autoplay: false,
			variableWidth: true,
			speed: 300,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						infinite: false,
						arrows: false,
						dots: false,
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				}
			]
		});
	}

	// 메인 케이스 목록 슬라이더 (현재는 사용되지 않지만 유지)
	if($(".main-case-list").length > 0) {
		$(".main-case-list").slick({
			infinite: false,
			dots: false,
			slide: 'div',	
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: true,
			autoplay: false,
			speed: 300,
			variableWidth: true,
		});
	}

	// 메인 미디어 목록 슬라이더
	if($(".main-media-list").length > 0) {
		$(".main-media-list").slick({
			infinite: false,
			dots: true,
			slide: 'div',	
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: true,
			autoplay: false,
			speed: 300,
			variableWidth: true,
		});
	}

	// 구성원 슬라이더 초기화
	if($('.slider-wrapper').length > 0) {
		$('.slider-wrapper').slick({
			infinite: true, 
			slidesToShow: 4, 
			slidesToScroll: 1,
			prevArrow: $('.prev'),
			nextArrow: $('.next'),
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 4
					}
				},
				{
					breakpoint: 900,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1
					}
				}
			]
		});
	}
}

// 이벤트 핸들러 초기화 함수
function initMainEvents() {
	// 메인 위치 탭 변경
	$(".main-location-tab li").on("click",function() {
		var tabnum = $(this).index();
		$(".main-location-tab li").removeClass("on");
		$(this).addClass("on");
		$(".location-map-wrap>div").removeClass("on");
		$(".main-location .location-address-wrap dl").removeClass("on");
		$(".lawfirm-interior-wrap>div").removeClass("on");
		$(".location-map-wrap>div").eq(tabnum).addClass("on");
		$(".main-location .location-address-wrap dl").eq(tabnum).addClass("on");
		$(".lawfirm-interior-wrap>div").eq(tabnum).addClass("on");
		return false;
	});

	// 개인정보 수집 동의 팝업
	$(".online-form .input-wrap li a").click(function(e){
		e.preventDefault();
		$(".privacy-pop").show();
	});
	$(".privacy-pop .pop-close").click(function(e){
		e.preventDefault();
		$(".privacy-pop").hide();
	});

	// 스크롤 시 헤더 고정
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 50) {
			$('#header').addClass('fixed');
		}
		else {
			$('#header').removeClass('fixed');
		}
	});
}

// 비디오 팝업 함수
function onVideoLayer(youtubeCODE) {
	var videoURL = '//www.youtube.com/embed/'+ youtubeCODE +'?rel=0&amp;autoplay=1&amp;vq=hd720';
	var playViewer = '<iframe src="'+videoURL+'" id="youTube" allowfullscreen="" frameborder="0"></iframe>';

	$('.youtube-box .fake-img').hide();
	$('.youtube-box .frame').addClass('active');
	$('.youtube-box .frame').append(playViewer);
}

// 요일별 모달 팝업
(function() {
	const today = new Date();
	const dayOfWeek = today.getDay(); // 0: 일요일, 1: 월요일, ..., 6: 토요일

	const modalClosedTime = localStorage.getItem('modalClosedTime');

	const oneDay = 24 * 60 * 60 * 1000; // 24시간을 밀리초로 변환
	const currentTime = today.getTime();

	if ((dayOfWeek === 6 || dayOfWeek === 6) && (!modalClosedTime || currentTime - modalClosedTime > oneDay)) {
		const modal = document.getElementById("weekendModal");
		const closeBtn = document.querySelector(".modal-close");

		if (modal && closeBtn) {
			modal.style.display = "block";

			closeBtn.onclick = function() {
				modal.style.display = "none";
				localStorage.setItem('modalClosedTime', currentTime); // 모달 닫은 시간 저장
			}

			window.onclick = function(event) {
				if (event.target === modal) {
					modal.style.display = "none";
				}
			}
		}
	}
})();
