<?php
/**
 * head.custom.php
 * 
 * head.sub.php 위에 얹는 커스텀 head 확장
 * 그누보드5 코어 수정 없이 추가 리소스 관리
 * 
 * 사용법: index.php에서 head.sub.php 이후에 include
 */

// index.php 전용 리소스만 여기서 관리
$is_index_page = (basename($_SERVER['PHP_SELF']) == 'index.php' || 
                  basename($_SERVER['SCRIPT_NAME']) == 'index.php' ||
                  (isset($_SERVER['REQUEST_URI']) && preg_match('#^/?$|^/index\.php#', $_SERVER['REQUEST_URI'])));

if ($is_index_page) {
    // 메타 태그
    echo '<meta name="naver-site-verification" content="8aca2004fc829309d2ad81a2bea09be81918272d">' . PHP_EOL;
   
   // index.css 로드 (Non-critical - LCP 이후 로드)
   // LCP CSS는 head.sub.php에서 이미 로드됨
   $index_css_version = function_exists('get_asset_version') ? get_asset_version('/assets/css/index.css') : time();
   echo '<link rel="preload" href="/assets/css/index.css?ver=' . $index_css_version . '" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">' . PHP_EOL;
   echo '<noscript><link rel="stylesheet" href="/assets/css/index.css?ver=' . $index_css_version . '"></noscript>' . PHP_EOL;
}
?>
