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
<meta name="robots" content="index, follow">
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
$uri  = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
// 메인 페이지는 베이스 URL 하나로 통일 (캐노니컬 정규화)
$is_index_for_canonical = (str_replace('\\', '/', $_SERVER['PHP_SELF'] ?? '') === '/index.php' || $uri === '' || $uri === '/' || preg_match('#^/?index\.php(\?|$)#', $uri));
$canonical = $is_index_for_canonical ? $scheme . '://' . $host . '/' : $scheme . '://' . $host . $uri;

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
		return '음주운전변호사 전문 상담 | 교통사고·재범·면허구제 | 법무법인 동주';
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
	
	// 기본값 (메인과 동일)
	return '음주운전변호사 전문 상담 | 교통사고·재범·면허구제 | 법무법인 동주';
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

// og:image 절대 URL (게시글 상세는 대표 이미지 우선)
// SNS/검증기는 HTTPS 이미지 URL 필요 — 항상 https로 출력
$base_url_og = ($host === 'trafficdrinking-law-dongju.com') ? 'https://' . $host : ($scheme . '://' . $host);
$og_image_path = ''; // 서버 경로 (width/height용)
$og_image_url = $base_url_og . '/images/common/ogimg-brand.png';
if ($is_board_detail && !empty($bo_table) && !empty($wr_id) && function_exists('get_board_file_db')) {
	$og_file = get_board_file_db($bo_table, $wr_id, 'bf_file', " and bf_type between '1' and '3' ", true);
	if (!empty($og_file['bf_file'])) {
		$og_image_url = $base_url_og . '/' . G5_DATA_DIR . '/file/' . $bo_table . '/' . $og_file['bf_file'];
	}
}
if (strpos($og_image_url, '/images/common/') !== false) {
	$og_default_file = (file_exists(G5_PATH . '/images/common/ogimg-brand.png')) ? 'ogimg-brand.png' : (file_exists(G5_PATH . '/images/common/logo_on.png') ? 'logo_on.png' : 'ogimg-brand.png');
	$og_image_url = $base_url_og . '/images/common/' . $og_default_file;
	$og_image_path = G5_PATH . '/images/common/' . $og_default_file;
}
$og_image_width = '';
$og_image_height = '';
if ($og_image_path && file_exists($og_image_path) && function_exists('getimagesize')) {
	$og_sizes = @getimagesize($og_image_path);
	if (!empty($og_sizes[0]) && !empty($og_sizes[1])) {
		$og_image_width = $og_sizes[0];
		$og_image_height = $og_sizes[1];
	}
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

$metaDescriptionConf = '법무법인 동주 음주운전센터입니다. 음주운전 교통사고·재범·면허구제 원스톱 전문. 서울·수원·인천·전국 24시간 음주운전변호사 상담. 경찰조사부터 면허구제까지 형사처벌과 행정처분 한 번에 대응. 부장검사출신 변호사 포함 10년 이상 경력 TF팀이 1:1 조력합니다';
$metaKeywordConf = '음주운전변호사, 음주재범 변호사, 음주운전 면허취소 구제, 음주운전 교통사고 변호사, 음주운전 행정심판 및 행정소송, 음주운전 전문 상담, 법무법인 동주';

// 페이지별 메타 설명: 각 페이지에서 $meta_description_page 설정 시 우선, 없으면 스크립트명/메인 기준 맵 사용
$meta_description_page = isset($meta_description_page) ? trim((string)$meta_description_page) : '';
$script_name = basename($_SERVER['SCRIPT_NAME'] ?? '');
// 메타 설명: 한글 기준 120~160자 권장(검색 결과 잘림 방지)
$page_descriptions = array(
	'index.php'       => '법무법인 동주 음주운전센터입니다. 음주운전 교통사고·재범·면허구제 원스톱 전문. 서울·수원·인천·전국 24시간 음주운전변호사 상담. 경찰조사부터 면허구제까지 형사처벌과 행정처분 한 번에 대응. 부장검사출신 변호사 포함 10년 이상 경력 TF팀이 1:1 조력합니다',
	'greetings.php'   => '법무법인 동주 대표 변호사 인사말. 음주운전·교통 전문 변호사 이세환 인사 및 변호사 소개.',
	'location.php'   => '법무법인 동주 오시는 길. 서울·수원·인천 사무소 위치, 지도, 주차, 상담 예약 안내.',
	'differentiation.php' => '동주만의 차별화. 행정법전문변호사·행정사 보유, 행정심판·행정소송 원스톱 전담, 음주운전 전문 로펌.',
	'lawyer.php'      => '음주운전 변호사 구성원 소개. 법무법인 동주 음주운전센터 전문 변호사 프로필.',
	'lawyer_view.php' => '음주운전 변호사 상세 소개. 법무법인 동주 전문 변호사 프로필 및 경력.',
	'self_test.php'   => '음주운전 자가진단. 혈중알코올농도·처벌 수위 간이 확인, 법무법인 동주 상담 연결.',
	'drunken01.php'   => '음주운전 형사 대응. 처벌·형사소송·조력 업무, 법무법인 동주 음주운전센터.',
	'drunken02.php'   => '음주운전 행정 대응. 행정심판·행정소송·소청·조력, 면허취소 구제, 법무법인 동주.',
	'specialized01.php' => '음주운전·교통 전문 법률 서비스. 법무법인 동주 업무분야 및 변호사 소개.',
	'center_info.php' => '법무법인 동주 연구센터. 음주운전·교통 분야 연구와 실무 연계.',
);
// 게시판 목록은 bo_table별로 서로 다른 설명 사용 (동일 설명문 중복 방지)
$board_list_descriptions = array(
	'case'    => '음주운전·교통사고 성공사례. 무죄·감경·면허유지 등 법무법인 동주 수임 결과.',
	'review'  => '법무법인 동주 의뢰인 후기. 음주운전·면허취소·행정심판 수임 후기.',
	'column'  => '음주운전·교통 법률 칼럼. 면허취소, 행정심판, 형사대응 등 법무법인 동주 전문글.',
	'media'   => '법무법인 동주 언론 보도. 음주운전·교통 전문 로펌 관련 기사.',
	'online'  => '온라인 상담 신청. 법무법인 동주 24시간 음주운전·교통 상담.',
	'member'  => '회원전용 게시판. 법무법인 동주 음주운전센터.',
	'selftest' => '음주운전 자가진단·문의. 법무법인 동주 상담 연결.',
);
if ($meta_description_page !== '') {
	$metaDescriptionFallback = $meta_description_page;
} elseif ($is_board_list && !empty($_GET['bo_table'])) {
	$bo_key = preg_replace('/[^a-zA-Z0-9_]/', '', (string)$_GET['bo_table']);
	$metaDescriptionFallback = isset($board_list_descriptions[$bo_key]) ? $board_list_descriptions[$bo_key] : ($board_name !== '' ? $board_name . ' 목록. 법무법인 동주 음주운전센터.' : $metaDescriptionConf);
} elseif (isset($page_descriptions[$script_name])) {
	$metaDescriptionFallback = $page_descriptions[$script_name];
} else {
	$metaDescriptionFallback = $metaDescriptionConf;
}

if(!empty($_GET['wr_id']) && !empty($_GET['bo_table']) && isset($write) && !empty($write)) {
	// 게시글 상세 페이지
	$metaTitle = $metaTitleConf; // 위에서 이미 생성됨
	$metaDescription = isset($write['wr_3']) ? trim((string)$write['wr_3']) : '';
	$metaKeyword = isset($write['wr_4']) ? $write['wr_4'] : '';
	// wr_3 없을 때도 글 제목 포함해 상세 페이지마다 서로 다른 설명 사용
	if ($metaDescription !== '') {
		$metaDescriptionOut = $metaDescription;
	} else {
		$subj = isset($write['wr_subject']) ? strip_tags(conv_subject($write['wr_subject'], 100)) : '';
		$metaDescriptionOut = ($subj !== '') ? $subj . ' | ' . ($board_name !== '' ? $board_name . ' ' : '') . '법무법인 동주' : $metaDescriptionFallback;
	}
?>

  <!-- $config['cf_add_meta'] 대체 시작 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $desc_out = trim((string)($metaDescriptionOut ?? '')) !== '' ? $metaDescriptionOut : $metaDescriptionConf; ?>
  <meta name="description" content="<?php echo htmlspecialchars($desc_out, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="Copyright" content="법무법인 동주 음주운전센터">

  <title><?php echo htmlspecialchars(trim((string)($metaTitle ?? '')) !== '' ? $metaTitle : '음주운전변호사 전문 상담 | 교통사고·재범·면허구제 | 법무법인 동주', ENT_QUOTES, 'UTF-8'); ?></title>
  <?php 
  // index.php 전용 LCP CSS 로드 (최우선) - 동기 로드 필수
  $lcp_css_path = '/assets/css/index-lcp.css';
  $lcp_css_file = G5_PATH . $lcp_css_path;
  
  // 조건 확인: $is_index_page 또는 직접 체크
  $load_lcp = false;
  if (isset($is_index_page) && $is_index_page) {
    $load_lcp = true;
  } elseif (isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == 'index.php') {
    $load_lcp = true;
  } elseif (isset($_SERVER['SCRIPT_NAME']) && basename($_SERVER['SCRIPT_NAME']) == 'index.php') {
    $load_lcp = true;
  } elseif (isset($_SERVER['REQUEST_URI'])) {
    $uri = $_SERVER['REQUEST_URI'];
    if (preg_match('#^/?$|^/index\.php#', $uri) || $uri == '/' || $uri == '/index.php' || strpos($uri, '/index.php') === 0) {
      $load_lcp = true;
    }
  }
  
  // 파일이 존재하고 조건이 맞으면 로드
  if ($load_lcp && file_exists($lcp_css_file)) {
    $lcp_css_version = filemtime($lcp_css_file);
  ?>
  <!-- LCP Critical CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $lcp_css_path; ?>?ver=<?php echo $lcp_css_version; ?>">
  <?php 
  }
  ?>
  <link rel="stylesheet" type="text/css" href="/css/template.css?ver=<?php echo get_asset_version('/css/template.css'); ?>">
  <?php if (!$is_index_page) { ?><link rel="stylesheet" type="text/css" href="/css/style.css?ver=<?php echo get_asset_version('/css/style.css'); ?>"><?php } ?>
  <link rel="stylesheet" type="text/css" href="/assets/css/common.css?ver=<?php echo get_asset_version('/assets/css/common.css'); ?>">
  <?php 
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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta property="og:url" content="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>">
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?php echo $metaTitle; ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($metaDescriptionOut, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($og_image_url, ENT_QUOTES, 'UTF-8'); ?>">
  <?php if ($og_image_width !== '' && $og_image_height !== '') { ?>
  <meta property="og:image:width" content="<?php echo (int)$og_image_width; ?>">
  <meta property="og:image:height" content="<?php echo (int)$og_image_height; ?>">
  <?php } ?>
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $metaTitle; ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDescriptionOut, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image_url, ENT_QUOTES, 'UTF-8'); ?>">
  <!-- $config['cf_add_meta'] 대체 끝 -->

<?php 
}else{
	$metaDescriptionOut = $metaDescriptionFallback;
?>  

  <!-- $config['cf_add_meta'] 대체 시작 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $desc_out = trim((string)($metaDescriptionOut ?? '')) !== '' ? $metaDescriptionOut : $metaDescriptionConf; ?>
  <meta name="description" content="<?php echo htmlspecialchars($desc_out, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="Copyright" content="법무법인 동주 음주운전센터">

  <title><?php echo htmlspecialchars(trim((string)($metaTitleConf ?? '')) !== '' ? $metaTitleConf : '음주운전변호사 전문 상담 | 교통사고·재범·면허구제 | 법무법인 동주', ENT_QUOTES, 'UTF-8'); ?></title>
  <?php 
  // index.php 전용 LCP CSS 로드 (최우선) - 동기 로드 필수
  $lcp_css_path = '/assets/css/index-lcp.css';
  $lcp_css_file = G5_PATH . $lcp_css_path;
  
  // 조건 확인: $is_index_page 또는 직접 체크
  $load_lcp = false;
  if (isset($is_index_page) && $is_index_page) {
    $load_lcp = true;
  } elseif (isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == 'index.php') {
    $load_lcp = true;
  } elseif (isset($_SERVER['SCRIPT_NAME']) && basename($_SERVER['SCRIPT_NAME']) == 'index.php') {
    $load_lcp = true;
  } elseif (isset($_SERVER['REQUEST_URI'])) {
    $uri = $_SERVER['REQUEST_URI'];
    if (preg_match('#^/?$|^/index\.php#', $uri) || $uri == '/' || $uri == '/index.php' || strpos($uri, '/index.php') === 0) {
      $load_lcp = true;
    }
  }
  
  // 파일이 존재하고 조건이 맞으면 로드
  if ($load_lcp && file_exists($lcp_css_file)) {
    $lcp_css_version = filemtime($lcp_css_file);
  ?>
  <!-- LCP Critical CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $lcp_css_path; ?>?ver=<?php echo $lcp_css_version; ?>">
  <?php 
  }
  ?>
  <link rel="stylesheet" type="text/css" href="/css/template.css?ver=<?php echo get_asset_version('/css/template.css'); ?>">
  <?php if (!$is_index_page) { ?><link rel="stylesheet" type="text/css" href="/css/style.css?ver=<?php echo get_asset_version('/css/style.css'); ?>"><?php } ?>
  <link rel="stylesheet" type="text/css" href="/assets/css/common.css?ver=<?php echo get_asset_version('/assets/css/common.css'); ?>">
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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta property="og:url" content="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $metaTitleConf; ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($metaDescriptionOut, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($og_image_url, ENT_QUOTES, 'UTF-8'); ?>">
  <?php if ($og_image_width !== '' && $og_image_height !== '') { ?>
  <meta property="og:image:width" content="<?php echo (int)$og_image_width; ?>">
  <meta property="og:image:height" content="<?php echo (int)$og_image_height; ?>">
  <?php } ?>
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $metaTitleConf; ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDescriptionOut, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image_url, ENT_QUOTES, 'UTF-8'); ?>">
  <!-- $config['cf_add_meta'] 대체 끝 -->

<?php 
}
// if($config['cf_add_meta']){
//     echo $config['cf_add_meta'].PHP_EOL;
// }
?>

<?php
$favicon_dir = G5_PATH . '/images/common/favicon';
$favicon_url = '/images/common/favicon';
// 기본 파비콘(항상 노출, 404 방지)
if (is_file($favicon_dir . '/favicon.ico')) {
	echo '<link rel="icon" type="image/x-icon" href="' . $favicon_url . '/favicon.ico">' . PHP_EOL;
}
if (is_file($favicon_dir . '/apple-touch-icon.png')) {
	echo '<link rel="apple-touch-icon" sizes="180x180" href="' . $favicon_url . '/apple-touch-icon.png">' . PHP_EOL;
}
if (is_file($favicon_dir . '/favicon-32x32.png')) {
	echo '<link rel="icon" type="image/png" sizes="32x32" href="' . $favicon_url . '/favicon-32x32.png">' . PHP_EOL;
}
if (is_file($favicon_dir . '/site.webmanifest')) {
	echo '<link rel="manifest" href="' . $favicon_url . '/site.webmanifest">' . PHP_EOL;
}
if (is_file($favicon_dir . '/safari-pinned-tab.svg')) {
	echo '<link rel="mask-icon" href="' . $favicon_url . '/safari-pinned-tab.svg" color="#877b77">' . PHP_EOL;
}
?>
<meta name="msapplication-TileColor" content="#000000">
<meta name="theme-color" content="#ffffff">

<link rel="preload" as="image" href="/images/main/mainvisual/main-03-lawyer01.jpg" fetchpriority="high">
<link rel="preload" as="image" href="/images/main/mainvisual/main-03-lawyer02.jpg" fetchpriority="high">
<link rel="preload" as="image" href="/images/main/mainvisual/main-03-lawyer03.jpg" fetchpriority="high">

<?php
// default.css는 common.css로 대체되었습니다.
// $shop_css = '';
// if (defined('_SHOP_')) $shop_css = '_shop';
// echo '<link rel="stylesheet" href="'.run_replace('head_css_url', G5_THEME_CSS_URL.'/'.(G5_IS_MOBILE?'mobile':'default').$shop_css.'.css?ver='.G5_CSS_VER, G5_THEME_URL).'">'.PHP_EOL;
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
$canonical_esc = htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8');
$base_url = $scheme . '://' . $host;
?>
<link rel="canonical" href="<?php echo $canonical_esc; ?>">
<link rel="alternate" hreflang="ko" href="<?php echo $canonical_esc; ?>">
<link rel="alternate" hreflang="x-default" href="<?php echo $canonical_esc; ?>">
<?php
// 구조화 데이터 (Organization, WebSite, 퀵메뉴·소셜) — 풍부한 검색 결과용
$sd_organization = array(
	'@type' => 'LegalService',
	'@id'   => $base_url . '/#organization',
	'name'  => '법무법인 동주',
	'url'   => $base_url,
	'logo'  => array( '@type' => 'ImageObject', 'url' => $base_url . '/images/common/ogimg-brand.png' ),
	'image' => $base_url . '/images/common/ogimg-brand.png',
	'telephone' => '+82-1522-3394',
	'faxNumber'  => '+82-2-523-7260',
	'address' => array(
		'@type' => 'PostalAddress',
		'streetAddress' => '서초중앙로 123 (서초동), 13층 (서초동, 엘렌타워)',
		'addressLocality' => '서초동',
		'addressRegion' => '서울',
		'addressCountry' => 'KR'
	),
	'sameAs' => array(
		'https://pf.kakao.com/_Rpbxmxb/chat'
	),
	'contactPoint' => array(
		array(
			'@type' => 'ContactPoint',
			'telephone' => '+82-1522-3394',
			'contactType' => 'customer service',
			'areaServed' => 'KR',
			'availableLanguage' => 'Korean',
			'url' => $base_url,
			'contactOption' => 'toll-free'
		),
		array(
			'@type' => 'ContactPoint',
			'contactType' => 'chat',
			'url' => 'https://pf.kakao.com/_Rpbxmxb/chat',
			'areaServed' => 'KR',
			'availableLanguage' => 'Korean'
		)
	)
);
$sd_website = array(
	'@type' => 'WebSite',
	'@id'   => $base_url . '/#website',
	'url'   => $base_url,
	'name'  => '법무법인 동주 음주운전센터',
	'description' => '법무법인 동주 음주운전센터입니다. 음주운전 교통사고·재범·면허구제 원스톱 전문. 서울·수원·인천·전국 24시간 음주운전변호사 상담. 경찰조사부터 면허구제까지 형사처벌과 행정처분 한 번에 대응. 부장검사출신 변호사 포함 10년 이상 경력 TF팀이 1:1 조력합니다',
	'inLanguage' => 'ko',
	'publisher' => array( '@id' => $base_url . '/#organization' )
);
$sd_quickmenu = array(
	'@type' => 'ItemList',
	'name'  => '퀵메뉴',
	'description' => '음주운전 상담 퀵메뉴',
	'itemListElement' => array(
		array( '@type' => 'ListItem', 'position' => 1, 'name' => '음주진단', 'url' => $base_url . '/page/self_test.php?me_code=7010' ),
		array( '@type' => 'ListItem', 'position' => 2, 'name' => '전화상담', 'url' => 'tel:1522-3394' ),
		array( '@type' => 'ListItem', 'position' => 3, 'name' => '카톡상담', 'url' => 'https://pf.kakao.com/_Rpbxmxb/chat' ),
		array( '@type' => 'ListItem', 'position' => 4, 'name' => '온라인 상담', 'url' => $base_url . '/bbs/board.php?bo_table=online&me_code=6010' ),
		array( '@type' => 'ListItem', 'position' => 5, 'name' => '오시는 길', 'url' => $base_url . '/page/location.php?me_code=1040' )
	)
);

// BreadcrumbList: 서브·게시판·게시글별 경로 노출 (검색 스니펫 클릭률 개선)
$bc_items = array();
$bc_items[] = array( 'name' => '홈', 'url' => rtrim($base_url, '/') . '/' );
$bbs_path = $base_url . '/' . (defined('G5_BBS_DIR') ? G5_BBS_DIR : 'bbs');

if ($is_board_detail && !empty($bo_table) && isset($write) && !empty($write)) {
	// 게시글 상세: 홈 > 섹션 > [게시판명(섹션과 다를 때만)] > 글제목
	$bo_sections = array(
		'case'   => array( 'label' => '성공사례', 'url' => $bbs_path . '/board.php?bo_table=case&me_code=3010' ),
		'review'  => array( 'label' => '성공사례', 'url' => $bbs_path . '/board.php?bo_table=review&me_code=3020' ),
		'column' => array( 'label' => '동주 매거진', 'url' => $bbs_path . '/board.php?bo_table=column&me_code=4010' ),
		'media'  => array( 'label' => '동주 매거진', 'url' => $bbs_path . '/board.php?bo_table=media&me_code=4020' ),
		'online' => array( 'label' => '온라인 상담', 'url' => $bbs_path . '/board.php?bo_table=online&me_code=6010' ),
	);
	if (isset($bo_sections[$bo_table])) {
		$bc_items[] = array( 'name' => $bo_sections[$bo_table]['label'], 'url' => $bo_sections[$bo_table]['url'] );
	}
	if (!empty($board_name) && (!isset($bo_sections[$bo_table]) || $bo_sections[$bo_table]['label'] !== $board_name)) {
		$bc_items[] = array( 'name' => $board_name, 'url' => $bbs_path . '/board.php?bo_table=' . urlencode($bo_table) . (isset($_GET['me_code']) ? '&me_code=' . (int)$_GET['me_code'] : '') );
	}
	$article_title = !empty($write['wr_2']) ? $write['wr_2'] : (isset($write['wr_subject']) ? strip_tags(conv_subject($write['wr_subject'], 120)) : '');
	if ($article_title !== '') {
		$bc_items[] = array( 'name' => $article_title, 'url' => $canonical );
	}
} elseif ($is_board_list && !empty($bo_table) && !empty($board_name)) {
	// 게시판 목록: 홈 > 섹션(필요 시) > 게시판명
	$bo_sections = array(
		'case'   => array( 'label' => '성공사례', 'url' => $bbs_path . '/board.php?bo_table=case&me_code=3010' ),
		'review'  => array( 'label' => '성공사례', 'url' => $bbs_path . '/board.php?bo_table=review&me_code=3020' ),
		'column' => array( 'label' => '동주 매거진', 'url' => $bbs_path . '/board.php?bo_table=column&me_code=4010' ),
		'media'  => array( 'label' => '동주 매거진', 'url' => $bbs_path . '/board.php?bo_table=media&me_code=4020' ),
		'online' => array( 'label' => '온라인 상담', 'url' => $bbs_path . '/board.php?bo_table=online&me_code=6010' ),
	);
	if (isset($bo_sections[$bo_table]) && $bo_sections[$bo_table]['label'] !== $board_name) {
		$bc_items[] = array( 'name' => $bo_sections[$bo_table]['label'], 'url' => $bo_sections[$bo_table]['url'] );
	}
	$bc_items[] = array( 'name' => $board_name, 'url' => $canonical );
} elseif (!empty($gr_id) && !empty($g5_head_title)) {
	// 서브 페이지(page/*): 홈 > 섹션 > 현재페이지
	$gr_sections = array(
		'intro'    => array( 'label' => '동주소개', 'url' => $base_url . '/page/greetings.php?me_code=1010' ),
		'member'   => array( 'label' => '변호사 구성원', 'url' => $base_url . '/page/lawyer.php?me_code=2010' ),
		'center'   => array( 'label' => '연구센터', 'url' => $base_url . '/page/center_info.php?me_code=2010' ),
		'case'     => array( 'label' => '성공사례', 'url' => $bbs_path . '/board.php?bo_table=case&me_code=3010' ),
		'magazine' => array( 'label' => '동주 매거진', 'url' => $bbs_path . '/board.php?bo_table=column&me_code=4010' ),
		'business' => array( 'label' => '업무분야', 'url' => $base_url . '/page/drunken01.php?me_code=5010' ),
		'online'   => array( 'label' => '온라인 상담', 'url' => $bbs_path . '/board.php?bo_table=online&me_code=6010' ),
		'self'     => array( 'label' => '음주진단', 'url' => $base_url . '/page/self_test.php?me_code=7010' ),
		'lawyer'   => array( 'label' => '변호사 구성원', 'url' => $base_url . '/page/lawyer.php?me_code=2010' ),
	);
	if (isset($gr_sections[$gr_id]) && $gr_sections[$gr_id]['label'] !== $g5_head_title) {
		$bc_items[] = array( 'name' => $gr_sections[$gr_id]['label'], 'url' => $gr_sections[$gr_id]['url'] );
	}
	$bc_items[] = array( 'name' => $g5_head_title, 'url' => $canonical );
}
// 메인 페이지는 홈만 있음(1개). 2개 이상일 때 BreadcrumbList 출력
if (count($bc_items) >= 2) {
	$sd_breadcrumb = array(
		'@type' => 'BreadcrumbList',
		'itemListElement' => array()
	);
	foreach ($bc_items as $i => $item) {
		$sd_breadcrumb['itemListElement'][] = array(
			'@type' => 'ListItem',
			'position' => $i + 1,
			'name' => $item['name'],
			'item' => $item['url']
		);
	}
	$sd_graph = array( $sd_organization, $sd_website, $sd_quickmenu, $sd_breadcrumb );
} else {
	$sd_graph = array( $sd_organization, $sd_website, $sd_quickmenu );
}

// 게시글 상세: Article 스키마 (리치 스니펫·날짜·작성자 노출)
if ($is_board_detail && !empty($bo_table) && isset($write) && !empty($write)) {
	$article_headline = !empty($write['wr_2']) ? $write['wr_2'] : (isset($write['wr_subject']) ? strip_tags(conv_subject($write['wr_subject'], 120)) : '');
	if ($article_headline !== '') {
		$date_published = isset($write['wr_datetime']) && $write['wr_datetime'] ? date('c', strtotime($write['wr_datetime'])) : '';
		$date_modified  = !empty($write['wr_last']) ? date('c', strtotime($write['wr_last'])) : $date_published;
		$author_name    = !empty($write['wr_name']) ? trim(strip_tags($write['wr_name'])) : '법무법인 동주';
		$sd_article = array(
			'@type'     => 'Article',
			'headline'  => $article_headline,
			'url'       => $canonical,
			'author'    => array( '@type' => 'Person', 'name' => $author_name ),
			'publisher' => array( '@id' => $base_url . '/#organization' ),
			'image'     => isset($og_image_url) ? $og_image_url : ( $base_url . '/images/common/ogimg-brand.png' )
		);
		if ($date_published !== '') {
			$sd_article['datePublished'] = $date_published;
			$sd_article['dateModified']  = $date_modified !== '' ? $date_modified : $date_published;
		}
		$sd_graph[] = $sd_article;
	}
}
?>
<script type="application/ld+json"><?php echo json_encode(array( '@context' => 'https://schema.org', '@graph' => $sd_graph ), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>
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
<body<?php echo isset($g5['body_class']) && $g5['body_class'] !== '' ? ' class="' . htmlspecialchars($g5['body_class'], ENT_QUOTES, 'UTF-8') . '"' : ''; ?><?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>
<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    echo '<div id="hd_login_msg">'.$sr_admin_msg.get_text($member['mb_nick']).'님 로그인 중 ';
    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}