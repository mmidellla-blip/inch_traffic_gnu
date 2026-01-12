// Swiper가 로드될 때까지 대기하는 함수
function waitForSwiper(callback, maxAttempts) {
	maxAttempts = maxAttempts || 100; // 최대 5초 대기 (100 * 50ms)
	var attempts = 0;
	
	function check() {
		attempts++;
		if (typeof Swiper !== 'undefined') {
			callback();
		} else if (attempts < maxAttempts) {
			setTimeout(check, 50);
		} else {
			console.warn('Swiper가 로드되지 않았습니다. 슬라이더를 초기화할 수 없습니다.');
		}
	}
	check();
}

// Swiper 초기화
(function() {
	function initSwiper() {
		waitForSwiper(function() {
			var container = document.querySelector('.main-case .swiper-container');
			if (container) {
				try {
					var swiper = new Swiper('.main-case .swiper-container', {
						spaceBetween: 0,
						freeMode: false,
						speed: 2000,
						autoplay: {
							delay: 3000,
							disableOnInteraction: false,
						},
						loop: true,
						slidesPerView: 'auto',
						allowTouchMove: true,
						watchOverflow: true,
						observer: true,
						observeParents: true
					});
					console.log('Swiper 초기화 완료:', swiper);
				} catch (e) {
					console.error('Swiper 초기화 오류:', e);
				}
			} else {
				console.warn('.main-case .swiper-container를 찾을 수 없습니다.');
			}
		});
	}
	
	// DOM이 준비된 후 실행 (이미지 로드 대기 안 함)
	if (document.readyState === 'complete' || document.readyState === 'interactive') {
		// 약간의 지연을 두어 defer 스크립트들이 실행될 시간을 줌
		setTimeout(initSwiper, 200);
	} else {
		// DOMContentLoaded 사용 (이미지 로드 전에 실행)
		document.addEventListener('DOMContentLoaded', function() {
			setTimeout(initSwiper, 200);
		});
	}
})();

// $(function(){
//     var swiper = new Swiper('.swiper-container', {
//         spaceBetween: 0,
//         freeMode: false,
//         enteredSlides: true,
//         speed: 2000,
//         autoplay: {
//             delay: 1,
//         },
//         loop: true,
//         slidesPerView:'auto',
//         allowTouchMove: false,
//         disableOnInteraction: true
//     });

//     // 마우스 커서 이벤트 처리
//     $('.swiper-slide').on('mouseenter', function() {
//         swiper.autoplay.stop();
//     });

//     $('.swiper-slide').on('mouseleave', function() {
//         swiper.autoplay.start();
//     });
// });