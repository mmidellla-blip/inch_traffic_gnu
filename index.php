<?php include('_common.php');?>
<!DOCTYPE html>
<html lang="ko">
<?php 
// 그누보드 기본 head
include_once(G5_THEME_PATH.'/head.sub.php'); 

// 커스텀 head 확장 (선택사항)
if (basename($_SERVER['PHP_SELF']) == 'index.php') {
    include('partials/head.custom.php');
}
?>
<body class="index">


<!-- wrapper -->
<section id="wrapper">
    <?php include('_menu.php');?>
    
    <?php include('partials/sections/modal.php'); ?>
    <?php include('partials/sections/quick-menu.php'); ?>
    
    <!-- contents -->
    <section id="contents" class="main-contents">
        <?php include('partials/sections/hero.php'); ?>
        <?php include('partials/sections/counselling.php'); ?>
        <?php include('partials/sections/review.php'); ?>
        <?php include('partials/sections/media.php'); ?>
        <?php include('partials/sections/members.php'); ?>
        <?php include('partials/sections/case.php'); ?>
        <?php include('partials/sections/center.php'); ?>
        <?php include('partials/sections/location.php'); ?>
    </section>
    <!--//contents -->
    
    <!-- index.php 전용 스크립트 -->
    <!-- 
    주의: 스크립트 로딩 순서 중요
    - slick.js → main.js (slick 사용)
    - swiper.js → main-case.js (swiper 사용)
    - defer 속성으로 순서 보장
    -->
    <script src="/js/slick.js?ver=<?php echo get_asset_version('/js/slick.js'); ?>" defer></script>
    <script src="/js/swiper.js?ver=<?php echo get_asset_version('/js/swiper.js'); ?>" defer></script>
    <script src="/js/main-case.js?ver=<?php echo get_asset_version('/js/main-case.js'); ?>" defer></script>
    <script src="/js/main.js?ver=<?php echo get_asset_version('/js/main.js'); ?>" defer></script>
    
    <?php include('_footer.php');?>
</section>
<!-- //wrapper -->
</body>
</html>
