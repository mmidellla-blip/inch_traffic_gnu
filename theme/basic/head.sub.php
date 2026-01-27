<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    // 상태바에 표시될 제목
    $g5_head_title = $g5['title'];
}

$g5['title'] = strip_tags($g5['title']);
$g5_head_title = strip_tags($g5_head_title);

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">
<head>
	
<meta charset="utf-8">
<?php
if (G5_IS_MOBILE) {
    echo '<meta name="viewport" id="meta_viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10">'.PHP_EOL;
    echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
    echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
} else {
    echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">'.PHP_EOL;
}

$scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';
$host = 'trafficdrinking-law-dongju.com';
$uri  = $_SERVER['REQUEST_URI']; // ? 포함 전체 경로
$canonical = $scheme . '://' . $host . $uri;

// SEO 최적화된 title 생성 함수
if (!function_exists('get_seo_title')) {
function get_seo_title($page_title = '', $board_name = '', $is_detail = false) {
	$brand = '법무법인 동주';
	$max_length = 60; // 최대 60자
	
	// 메인 페이지
	$is_index = (basename($_SERVER['PHP_SELF']) == 'index.php' || 
	             basename($_SERVER['SCRIPT_NAME']) == 'index.php' ||
	             (isset($_SERVER['REQUEST_URI']) && preg_match('#^/?$|^/index\.php#', $_SERVER['REQUEST_URI'])));
	
	if ($is_index) {
		return '음주운전변호사 전문 상담 | ' . $brand;
	}
	
	// 게시글 상세 페이지
	if ($is_detail && !empty($page_title)) {
		$board_part = !empty($board_name) ? $board_name . ' | ' : '';
		$title = $page_title . ' | ' . $board_part . $brand;
		
		// 60자 초과 시 글제목만 자르기
		if (mb_strlen($title, 'UTF-8') > $max_length) {
			$brand_part = ' | ' . $brand;
			$board_part_len = mb_strlen($board_part, 'UTF-8');
			$available_len = $max_length - mb_strlen($brand_part, 'UTF-8') - $board_part_len;
			$page_title = mb_substr($page_title, 0, $available_len, 'UTF-8');
			$title = $page_title . ' | ' . $board_part . $brand;
		}
		return $title;
	}
	
	// 게시판 목록 페이지
	if (!empty($board_name)) {
		return $board_name . ' | ' . $brand;
	}
	
	// 일반 페이지
	if (!empty($page_title)) {
		$title = $page_title . ' | ' . $brand;
		if (mb_strlen($title, 'UTF-8') > $max_length) {
			$brand_part = ' | ' . $brand;
			$available_len = $max_length - mb_strlen($brand_part, 'UTF-8');
			$page_title = mb_substr($page_title, 0, $available_len, 'UTF-8');
			$title = $page_title . $brand_part;
		}
		return $title;
	}
	
	// 기본값
	return '음주운전변호사 전문 상담 | ' . $brand;
}
}

// 현재 페이지 정보 파악
$is_index_page = (basename($_SERVER['PHP_SELF']) == 'index.php' || 
                  basename($_SERVER['SCRIPT_NAME']) == 'index.php' ||
                  (isset($_SERVER['REQUEST_URI']) && preg_match('#^/?$|^/index\.php#', $_SERVER['REQUEST_URI'])));
$is_board_detail = (!empty($_GET['wr_id']) && !empty($_GET['bo_table']));
$is_board_list = (!empty($_GET['bo_table']) && empty($_GET['wr_id']));

// 게시판명 가져오기
$board_name = '';
if (isset($board) && !empty($board) && isset($board['bo_subject']) && !empty($board['bo_subject'])) {
	$board_name = (G5_IS_MOBILE && !empty($board['bo_mobile_subject'])) ? $board['bo_mobile_subject'] : $board['bo_subject'];
}

// SEO 최적화된 title 생성
if ($is_board_detail && isset($write) && !empty($write)) {
	// 게시글 상세: wr_2(메타 타이틀) 우선, 없으면 wr_subject 사용
	$page_title = '';
	if (!empty($write['wr_2'])) {
		$page_title = $write['wr_2'];
	} elseif (isset($write['wr_subject']) && !empty($write['wr_subject'])) {
		$page_title = strip_tags(conv_subject($write['wr_subject'], 255));
	}
	$metaTitleConf = get_seo_title($page_title, $board_name, true);
} elseif ($is_board_list && !empty($board_name)) {
	// 게시판 목록
	$metaTitleConf = get_seo_title('', $board_name, false);
} elseif (!empty($g5_head_title) && $g5_head_title != $config['cf_title']) {
	// 커스텀 페이지 (page/*.php 등)
	$metaTitleConf = get_seo_title($g5_head_title, '', false);
} else {
	// 기본 (메인 페이지)
	$metaTitleConf = get_seo_title('', '', false);
}

$metaDescriptionConf = '음주운전변호사 | 음주전문변호사 | 음주운전처벌 | 음주운전사고 | 법무법인 동주 음주운전센터';
$metaKeywordConf = '음주 면허 취소,음주운전 행정심판,음주운전 면허취소,행정소송,행정심판,행정법전문변호사,행정사,영업정지 구제, 행정처분';

if(!empty($_GET['wr_id']) && !empty($_GET['bo_table']) && isset($write) && !empty($write)) {
	// 게시글 상세 페이지
	$metaTitle = $metaTitleConf; // 위에서 이미 생성됨
	$metaDescription = isset($write['wr_3']) ? $write['wr_3'] : '';
	$metaKeyword = isset($write['wr_4']) ? $write['wr_4'] : '';
?>

  <!-- $config['cf_add_meta'] 대체 시작 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo (!empty($metaDescription))? $metaDescription : $metaDescriptionConf; ?>">
  <meta property="og:type" content="article">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="<?php echo $metaTitle; ?>">
  <meta name="twitter:description" content="<?php echo (!empty($metaDescription))? $metaDescription : $metaDescriptionConf; ?>">
  <meta name="Copyright" content="법무법인 동주 음주운전센터">

  <title><?php echo $metaTitle; ?></title>
  <link rel="stylesheet" type="text/css" href="/css/template.css?ver=<?php echo get_asset_version('/css/template.css'); ?>">
  <link rel="stylesheet" type="text/css" href="/css/style.css?ver=<?php echo get_asset_version('/css/style.css'); ?>">
  <?php 
  $is_index_page = (basename($_SERVER['PHP_SELF']) == 'index.php' || 
                    basename($_SERVER['SCRIPT_NAME']) == 'index.php' ||
                    (isset($_SERVER['REQUEST_URI']) && preg_match('#^/?$|^/index\.php#', $_SERVER['REQUEST_URI'])));
  if ($is_index_page) { ?>
  <!-- index.php 전용: Non-critical CSS 비동기 로드 -->
  <link rel="preload" href="/css/slick.css?ver=<?php echo get_asset_version('/css/slick.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="/css/swiper.css?ver=<?php echo get_asset_version('/css/swiper.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="/css/slick.css?ver=<?php echo get_asset_version('/css/slick.css'); ?>"></noscript>
  <noscript><link rel="stylesheet" href="/css/swiper.css?ver=<?php echo get_asset_version('/css/swiper.css'); ?>"></noscript>
  <?php } else { ?>
  <link rel="stylesheet" type="text/css" href="/css/slick.css?ver=<?php echo get_asset_version('/css/slick.css'); ?>">
  <link rel="stylesheet" type="text/css" href="/css/swiper.css?ver=<?php echo get_asset_version('/css/swiper.css'); ?>">
  <?php } ?>
  <script type="text/javascript" data-nscript="lazyOnload" src="//wcs.naver.net/wcslog.js"></script>

  <meta name="keywords" content="<?php echo (!empty($metaKeyword))? $metaKeyword : $metaKeywordConf; ?>">
  <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta property="og:url" content="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>">
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?php echo $metaTitle; ?>">
  <meta property="og:description" content="<?php echo (!empty($metaDescription))? $metaDescription : $metaDescriptionConf; ?>">
  <meta property="og:image" content="/images/common/ogimg-brand.png">
  <!-- $config['cf_add_meta'] 대체 끝 -->

<?php 
}else{
?>  

  <!-- $config['cf_add_meta'] 대체 시작 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $metaDescriptionConf; ?>">
  <meta property="og:type" content="article">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="<?php echo $metaTitleConf; ?>">
  <meta name="twitter:description" content="<?php echo $metaDescriptionConf; ?>">
  <meta name="Copyright" content="법무법인 동주 음주운전센터">

  <title><?php echo $metaTitleConf; ?></title>
  <link rel="stylesheet" type="text/css" href="/css/template.css?ver=<?php echo get_asset_version('/css/template.css'); ?>">
  <link rel="stylesheet" type="text/css" href="/css/style.css?ver=<?php echo get_asset_version('/css/style.css'); ?>">
  <?php 
  $is_index_page = (basename($_SERVER['PHP_SELF']) == 'index.php' || 
                    basename($_SERVER['SCRIPT_NAME']) == 'index.php' ||
                    (isset($_SERVER['REQUEST_URI']) && preg_match('#^/?$|^/index\.php#', $_SERVER['REQUEST_URI'])));
  if ($is_index_page) { ?>
  <!-- index.php 전용: Non-critical CSS 비동기 로드 -->
  <link rel="preload" href="/css/slick.css?ver=<?php echo get_asset_version('/css/slick.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="/css/swiper.css?ver=<?php echo get_asset_version('/css/swiper.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="/css/slick.css?ver=<?php echo get_asset_version('/css/slick.css'); ?>"></noscript>
  <noscript><link rel="stylesheet" href="/css/swiper.css?ver=<?php echo get_asset_version('/css/swiper.css'); ?>"></noscript>
  <?php } else { ?>
  <link rel="stylesheet" type="text/css" href="/css/slick.css?ver=<?php echo get_asset_version('/css/slick.css'); ?>">
  <link rel="stylesheet" type="text/css" href="/css/swiper.css?ver=<?php echo get_asset_version('/css/swiper.css'); ?>">
  <?php } ?>
  <script type="text/javascript" data-nscript="lazyOnload" src="//wcs.naver.net/wcslog.js"></script>

  <meta name="keywords" content="<?php echo $metaKeywordConf; ?>">
  <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta property="og:url" content="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $metaTitleConf; ?>">
  <meta property="og:description" content="<?php echo $metaDescriptionConf; ?>">
  <meta property="og:image" content="/images/common/ogimg-brand.png">
  <!-- $config['cf_add_meta'] 대체 끝 -->

<?php 
}
// if($config['cf_add_meta']){
//     echo $config['cf_add_meta'].PHP_EOL;
// }
?>

<link rel="apple-touch-icon" sizes="180x180" href="/images/common/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/common/favicon/favicon-32x32.png">
<link rel="icon" type="image/ico" sizes="16x16" href="/images/common/favicon/favicon.ico">
<link rel="manifest" href="/images/common/favicon/site.webmanifest">
<link rel="mask-icon" href="/images/common/favicon/safari-pinned-tab.svg" color="#877b77">
<meta name="msapplication-TileColor" content="#000000">
<meta name="theme-color" content="#ffffff">

<link rel="preload" as="image" href="/images/main/mainvisual/main-03-lawyer01.jpg" fetchpriority="high">
<link rel="preload" as="image" href="/images/main/mainvisual/main-03-lawyer02.jpg" fetchpriority="high">
<link rel="preload" as="image" href="/images/main/mainvisual/main-03-lawyer03.jpg" fetchpriority="high">

<?php
$shop_css = '';
if (defined('_SHOP_')) $shop_css = '_shop';
echo '<link rel="stylesheet" href="'.run_replace('head_css_url', G5_THEME_CSS_URL.'/'.(G5_IS_MOBILE?'mobile':'default').$shop_css.'.css?ver='.G5_CSS_VER, G5_THEME_URL).'">'.PHP_EOL;
?>
<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
<?php if (defined('G5_USE_SHOP') && G5_USE_SHOP) { ?>
var g5_theme_shop_url = "<?php echo G5_THEME_SHOP_URL; ?>";
var g5_shop_url = "<?php echo G5_SHOP_URL; ?>";
<?php } ?>
<?php if(defined('G5_IS_ADMIN')) { ?>
var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
<?php } ?>
</script>
<?php
// jQuery는 동기 로드 (다른 스크립트들이 즉시 사용)
// 하지만 async 속성을 사용하여 파싱은 차단하지 않음
?>
<script src="<?php echo G5_JS_URL ?>/jquery-1.12.4.min.js"></script>
<script src="<?php echo G5_JS_URL ?>/jquery-migrate-1.4.1.min.js"></script>
<?php
// jQuery 플러그인들은 defer로 로드 (순서 보장, jQuery 이후 실행)
if (defined('_SHOP_')) {
    if(!G5_IS_MOBILE) {
        add_javascript('<script src="'.G5_JS_URL.'/jquery.shop.menu.js?ver='.G5_JS_VER.'" defer></script>', 0);
    }
} else {
    add_javascript('<script src="'.G5_JS_URL.'/jquery.menu.js?ver='.G5_JS_VER.'" defer></script>', 0);
}
add_javascript('<script src="'.G5_JS_URL.'/common.js?ver='.G5_JS_VER.'" defer></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/wrest.js?ver='.G5_JS_VER.'" defer></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/placeholders.min.js" defer></script>', 0);

// 테마 전용 스크립트들 (jQuery에 의존)
// slick.js, swiper.js, main-case.js는 index.php의 body 끝에서 직접 로드되므로 여기서는 제외
add_javascript('<script src="/js/jquery.fullPage.min.js" defer></script>', 0);

add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/font-awesome/css/font-awesome.min.css">', 0);

if(G5_IS_MOBILE) {
    add_javascript('<script src="'.G5_JS_URL.'/modernizr.custom.70111.js" defer></script>', 1); // overflow scroll 감지
}
if(!defined('G5_IS_ADMIN'))
    echo $config['cf_add_script'];
?>
<link rel="canonical" href="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>">
<?php 
$is_index_page = (basename($_SERVER['PHP_SELF']) == 'index.php' || 
                  basename($_SERVER['SCRIPT_NAME']) == 'index.php' ||
                  (isset($_SERVER['REQUEST_URI']) && preg_match('#^/?$|^/index\.php#', $_SERVER['REQUEST_URI'])));
if ($is_index_page) { ?>
<!-- index.php 전용: CSS 비동기 로딩 폴백 스크립트 -->
<script>
(function() {
	var raf = requestAnimationFrame || function(c) { setTimeout(c, 10); };
	var loaded = false;
	
	function loadCSS(href) {
		var link = document.createElement('link');
		link.rel = 'stylesheet';
		link.href = href;
		document.head.appendChild(link);
	}
	
	raf(function() {
		var links = document.querySelectorAll('link[rel="preload"][as="style"]');
		links.forEach(function(link) {
			if (link.onload) {
				link.onload();
			}
		});
		loaded = true;
	});
	
	setTimeout(function() {
		if (!loaded) {
			var links = document.querySelectorAll('link[rel="preload"][as="style"]');
			links.forEach(function(link) {
				link.rel = 'stylesheet';
			});
		}
	}, 3000);
})();
</script>
<?php } ?>
</head>
<body<?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>
<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    echo '<div id="hd_login_msg">'.$sr_admin_msg.get_text($member['mb_nick']).'님 로그인 중 ';
    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}