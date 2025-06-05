$(function(){
	var swiper = new Swiper('.swiper-container', {
        spaceBetween: 0,
        freeMode: false,
        enteredSlides: true,
        speed: 2000,
        autoplay: {
            delay: 1,
        },
        loop: true,
        slidesPerView:'auto',
        allowTouchMove: false,
        disableOnInteraction: true
    });
 });

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