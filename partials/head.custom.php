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
    // LCP 이미지 preload는 head.sub.php에 이미 있음
    // 추가 리소스가 필요하면 여기에 작성
    
    // 예시: 추가 DNS prefetch
    // echo '<link rel="dns-prefetch" href="//example.com">' . PHP_EOL;
    
    // 예시: 추가 메타 태그
    // echo '<meta name="..." content="...">' . PHP_EOL;
   echo '<meta name="naver-site-verification" content="8aca2004fc829309d2ad81a2bea09be81918272d">' . PHP_EOL;
}
?>
