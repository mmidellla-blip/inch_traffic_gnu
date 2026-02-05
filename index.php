<?php
$index_dir = __DIR__;
include($index_dir . '/_common.php');
$g5['body_class'] = 'index page-index';
?>
<?php
include_once(G5_THEME_PATH.'/head.sub.php');
if (basename($_SERVER['PHP_SELF']) == 'index.php') {
    include($index_dir . '/partials/head.custom.php');
}
?>

<!-- wrapper -->
<section id="wrapper">
    <?php include($index_dir . '/_menu.php');?>
    
    <?php include($index_dir . '/partials/sections/modal.php'); ?>
    <?php include($index_dir . '/partials/sections/quick-menu.php'); ?>
    
    <!-- contents -->
    <section id="contents" class="main-contents">
        <?php
        $sections = array('hero', 'counselling', 'review', 'media', 'members', 'case', 'center', 'location');
        foreach ($sections as $name) {
            $path = $index_dir . '/partials/sections/' . $name . '.php';
            if (is_file($path)) {
                include($path);
            }
        }
        ?>
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
    
    <?php include($index_dir . '/_footer.php');?>
</section>
<!-- //wrapper -->
</body>
</html>
