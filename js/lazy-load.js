/**
 * 지연 로딩 유틸리티
 * 초기 렌더링 속도 개선을 위한 스크립트 지연 로딩
 */

// CSS 비동기 로딩 폴백 (구형 브라우저 지원)
(function() {
	var raf = requestAnimationFrame || function(c) { setTimeout(c, 10); };
	var loaded = false;
	
	function loadCSS(href) {
		var link = document.createElement('link');
		link.rel = 'stylesheet';
		link.href = href;
		document.head.appendChild(link);
	}
	
	// preload로 로드된 CSS를 실제로 적용
	raf(function() {
		var links = document.querySelectorAll('link[rel="preload"][as="style"]');
		links.forEach(function(link) {
			if (link.onload) {
				link.onload();
			}
		});
		loaded = true;
	});
	
	// 폴백: onload가 작동하지 않는 경우
	setTimeout(function() {
		if (!loaded) {
			var links = document.querySelectorAll('link[rel="preload"][as="style"]');
			links.forEach(function(link) {
				link.rel = 'stylesheet';
			});
		}
	}, 3000);
})();

// Intersection Observer를 사용한 이미지 지연 로딩
(function() {
	if ('IntersectionObserver' in window) {
		var imageObserver = new IntersectionObserver(function(entries, observer) {
			entries.forEach(function(entry) {
				if (entry.isIntersecting) {
					var img = entry.target;
					if (img.dataset.src) {
						img.src = img.dataset.src;
						img.removeAttribute('data-src');
						imageObserver.unobserve(img);
					}
				}
			});
		}, {
			rootMargin: '50px'
		});
		
		// data-src 속성을 가진 이미지들을 관찰
		document.addEventListener('DOMContentLoaded', function() {
			var lazyImages = document.querySelectorAll('img[data-src]');
			lazyImages.forEach(function(img) {
				imageObserver.observe(img);
			});
		});
	} else {
		// 폴백: Intersection Observer 미지원 브라우저
		var lazyImages = document.querySelectorAll('img[data-src]');
		lazyImages.forEach(function(img) {
			img.src = img.dataset.src;
		});
	}
})();

// 스크립트 지연 로딩 함수
function loadScript(src, callback) {
	var script = document.createElement('script');
	script.src = src;
	script.async = true;
	if (callback) {
		script.onload = callback;
	}
	document.head.appendChild(script);
}

// 뷰포트 진입 시 스크립트 로드
function loadScriptWhenVisible(selector, scriptSrc, callback) {
	if ('IntersectionObserver' in window) {
		var observer = new IntersectionObserver(function(entries) {
			entries.forEach(function(entry) {
				if (entry.isIntersecting) {
					loadScript(scriptSrc, callback);
					observer.disconnect();
				}
			});
		}, {
			rootMargin: '100px'
		});
		
		var element = document.querySelector(selector);
		if (element) {
			observer.observe(element);
		}
	} else {
		// 폴백: 즉시 로드
		loadScript(scriptSrc, callback);
	}
}
