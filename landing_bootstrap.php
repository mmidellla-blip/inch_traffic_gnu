<?php
/**
 * DB 없이 메인(랜딩) 껍데기만 구동
 * 공식 사이트: LANDING_LIVE_URL
 */
if (!defined('LANDING_STATIC')) {
    define('LANDING_STATIC', true);
}
if (!defined('LANDING_LIVE_URL')) {
    define('LANDING_LIVE_URL', 'https://trafficdrinking-law-dongju.com');
}
if (!defined('DJ_FORM_ACTION')) {
    define('DJ_FORM_ACTION', rtrim(LANDING_LIVE_URL, '/') . '/_ok.php');
}

define('_GNUBOARD_', true);

error_reporting(E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING);
header('P3P: CP="ALL CURa ADMa DEVa TAIa OUR BUS IND PHY ONL UNI PUR FIN COM NAV INT DEM CNT STA POL HEA PRE LOC OTC"');

if (!defined('G5_SET_TIME_LIMIT')) {
    define('G5_SET_TIME_LIMIT', 0);
}
@set_time_limit(G5_SET_TIME_LIMIT);

if (version_compare(PHP_VERSION, '5.2.17', '<')) {
    die(sprintf('PHP 5.2.17 or higher required. Your PHP version is %s', PHP_VERSION));
}

$ext_arr = array('PHP_SELF', '_ENV', '_GET', '_POST', '_FILES', '_SERVER', '_COOKIE', '_SESSION', '_REQUEST',
    'HTTP_ENV_VARS', 'HTTP_GET_VARS', 'HTTP_POST_VARS', 'HTTP_POST_FILES', 'HTTP_SERVER_VARS',
    'HTTP_COOKIE_VARS', 'HTTP_SESSION_VARS', 'GLOBALS');
$ext_cnt = count($ext_arr);
for ($i = 0; $i < $ext_cnt; $i++) {
    if (isset($_GET[$ext_arr[$i]])) {
        unset($_GET[$ext_arr[$i]]);
    }
    if (isset($_POST[$ext_arr[$i]])) {
        unset($_POST[$ext_arr[$i]]);
    }
}

if (!function_exists('g5_path')) {
    function g5_path()
    {
        // Hostinger 등: SCRIPT_FILENAME에 dirname(__FILE__) 문자열이 없으면 strpos=false → PHP 8에서 substr TypeError → HTTP 500
        $base_norm = str_replace('\\', '/', dirname(__FILE__));
        $sf_norm = str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME']);
        $pos = strpos($sf_norm, $base_norm);
        if ($pos === false) {
            $result['path'] = $base_norm;
        } else {
            $result['path'] = substr($sf_norm, 0, $pos) . $base_norm;
        }
        $server_script_name = preg_replace('/\/+/', '/', str_replace('\\', '/', $_SERVER['SCRIPT_NAME']));
        $server_script_filename = preg_replace('/\/+/', '/', str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME']));
        $tilde_remove = preg_replace('/^\/\~[^\/]+(.*)$/', '$1', $server_script_name);
        $document_root = str_replace($tilde_remove, '', $server_script_filename);
        $pattern = '/.*?' . preg_quote($document_root, '/') . '/i';
        $root = preg_replace($pattern, '', $result['path']);
        $port = ($_SERVER['SERVER_PORT'] == 80 || $_SERVER['SERVER_PORT'] == 443) ? '' : ':' . $_SERVER['SERVER_PORT'];
        $https_on = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            || (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower((string)$_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https');
        $http = 'http' . ($https_on ? 's' : '') . '://';
        $user = str_replace(preg_replace($pattern, '', $server_script_filename), '', $server_script_name);
        $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
        if (isset($_SERVER['HTTP_HOST']) && preg_match('/:[0-9]+$/', $host)) {
            $host = preg_replace('/:[0-9]+$/', '', $host);
        }
        $host = preg_replace("/[\<\>\'\"\\\'\\\"\%\=\(\)\/\^\*]/", '', $host);
        $result['url'] = $http . $host . $port . $user . $root;

        return $result;
    }
}

$g5_path = g5_path();
include_once $g5_path['path'] . '/config.php';
unset($g5_path);

if (!isset($_SERVER['SERVER_ADDR'])) {
    $_SERVER['SERVER_ADDR'] = isset($_SERVER['LOCAL_ADDR']) ? $_SERVER['LOCAL_ADDR'] : '';
}

function array_map_deep($fn, $array)
{
    if (is_array($array)) {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = array_map_deep($fn, $value);
            } else {
                $array[$key] = call_user_func($fn, $value);
            }
        }
    } else {
        $array = call_user_func($fn, $array);
    }

    return $array;
}

function sql_escape_string($str)
{
    if (defined('G5_ESCAPE_PATTERN') && defined('G5_ESCAPE_REPLACE')) {
        $pattern = G5_ESCAPE_PATTERN;
        $replace = G5_ESCAPE_REPLACE;
        if ($pattern) {
            $str = preg_replace($pattern, $replace, $str);
        }
    }

    return call_user_func('addslashes', $str);
}

if (7.0 > (float) phpversion()) {
    if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
        $_POST = array_map_deep('stripslashes', $_POST);
        $_GET = array_map_deep('stripslashes', $_GET);
        $_COOKIE = array_map_deep('stripslashes', $_COOKIE);
        $_REQUEST = array_map_deep('stripslashes', $_REQUEST);
    }
}

$_POST = array_map_deep(G5_ESCAPE_FUNCTION, $_POST);
$_GET = array_map_deep(G5_ESCAPE_FUNCTION, $_GET);
$_COOKIE = array_map_deep(G5_ESCAPE_FUNCTION, $_COOKIE);
$_REQUEST = array_map_deep(G5_ESCAPE_FUNCTION, $_REQUEST);

@extract($_GET, EXTR_SKIP);
@extract($_POST, EXTR_SKIP);
@extract($_SERVER, EXTR_SKIP);

include_once G5_PATH . '/version.php';

$config = array(
    'cf_title' => '인천음주운전변호사 | 교통사고·재범·면허구제 | 법무법인 동주',
    'cf_add_script' => '',
    'cf_editor' => '',
    'cf_captcha' => '',
    'cf_cert_use' => 0,
    'cf_cert_req' => 0,
    'cf_theme' => 'basic',
    'cf_possible_ip' => '',
    'cf_intercept_ip' => '',
    'cf_bbs_rewrite' => 0,
    'cf_login_minutes' => 10,
    'cf_login_point' => 0,
    'cf_member_skin' => 'basic',
    'cf_mobile_member_skin' => 'basic',
    'cf_new_skin' => 'basic',
    'cf_mobile_new_skin' => 'basic',
    'cf_search_skin' => 'basic',
    'cf_mobile_search_skin' => 'basic',
    'cf_connect_skin' => 'basic',
    'cf_mobile_connect_skin' => 'basic',
    'cf_faq_skin' => 'basic',
    'cf_mobile_faq_skin' => 'basic',
    'cf_admin_email' => '',
    'cf_admin' => '__landing_none__',
    'cf_use_email_certify' => 0,
    'cf_email_use' => 0,
    'cf_email_wr_board_admin' => 0,
    'cf_email_wr_group_admin' => 0,
    'cf_email_wr_super_admin' => 0,
);

$member = array(
    'mb_id' => '', 'mb_level' => 1, 'mb_name' => '', 'mb_point' => 0, 'mb_certify' => '', 'mb_email' => '',
    'mb_open' => '', 'mb_homepage' => '', 'mb_tel' => '', 'mb_hp' => '', 'mb_zip1' => '', 'mb_zip2' => '',
    'mb_addr1' => '', 'mb_addr2' => '', 'mb_addr3' => '', 'mb_addr_jibeon' => '', 'mb_signature' => '', 'mb_profile' => '',
);
$board = array(
    'bo_table' => '', 'bo_skin' => '', 'bo_mobile_skin' => '', 'bo_upload_count' => 0,
    'bo_use_dhtml_editor' => '', 'bo_subject' => '', 'bo_image_width' => 0,
);
$group = array('gr_device' => '', 'gr_subject' => '');
$g5 = array('title' => '');
$qaconfig = array();
$g5_debug = array('php' => array(), 'sql' => array());

include_once G5_LIB_PATH . '/hook.lib.php';
include_once G5_LIB_PATH . '/cache.lib.php';

$g5_object = new G5_object_cache();

@ini_set('session.cache_expire', 180);
@ini_set('session.gc_maxlifetime', 10800);
session_set_cookie_params(0, '/');
ini_set('session.cookie_domain', G5_COOKIE_DOMAIN);
@session_start();

$write = array();
$bo_table = '';
$wr_id = 0;
$gr_id = '';
$is_member = false;
$is_guest = true;
$is_admin = '';

$theme_path = G5_PATH . '/' . G5_THEME_DIR . '/basic';
define('G5_THEME_PATH', $theme_path);
define('G5_THEME_URL', G5_URL . '/' . G5_THEME_DIR . '/basic');
define('G5_THEME_MOBILE_PATH', $theme_path . '/' . G5_MOBILE_DIR);
define('G5_THEME_LIB_PATH', $theme_path . '/' . G5_LIB_DIR);
define('G5_THEME_CSS_URL', G5_THEME_URL . '/' . G5_CSS_DIR);
define('G5_THEME_IMG_URL', G5_THEME_URL . '/' . G5_IMG_DIR);
define('G5_THEME_JS_URL', G5_THEME_URL . '/' . G5_JS_DIR);

include_once G5_THEME_PATH . '/theme.config.php';

if (!defined('G5_USE_SHOP')) {
    define('G5_USE_SHOP', false);
}

$is_mobile = false;
$_SESSION['ss_is_mobile'] = $is_mobile;
define('G5_IS_MOBILE', $is_mobile);
define('G5_DEVICE_BUTTON_DISPLAY', false);

include_once G5_LIB_PATH . '/common.lib.php';
include_once __DIR__ . '/landing_html_process.php';

define('G5_HTTP_BBS_URL', https_url(G5_BBS_DIR, false));
define('G5_HTTPS_BBS_URL', https_url(G5_BBS_DIR, true));

define('G5_CAPTCHA_DIR', !empty($config['cf_captcha']) ? $config['cf_captcha'] : 'kcaptcha');
define('G5_CAPTCHA_URL', G5_PLUGIN_URL . '/' . G5_CAPTCHA_DIR);
define('G5_CAPTCHA_PATH', G5_PLUGIN_PATH . '/' . G5_CAPTCHA_DIR);

define('G5_EDITOR_LIB', G5_LIB_PATH . '/editor.lib.php');

if (G5_IS_MOBILE) {
    $board_skin_path = get_skin_path('board', $board['bo_mobile_skin']);
    $board_skin_url = get_skin_url('board', $board['bo_mobile_skin']);
    $member_skin_path = get_skin_path('member', $config['cf_mobile_member_skin']);
    $member_skin_url = get_skin_url('member', $config['cf_mobile_member_skin']);
    $new_skin_path = get_skin_path('new', $config['cf_mobile_new_skin']);
    $new_skin_url = get_skin_url('new', $config['cf_mobile_new_skin']);
    $search_skin_path = get_skin_path('search', $config['cf_mobile_search_skin']);
    $search_skin_url = get_skin_url('search', $config['cf_mobile_search_skin']);
    $connect_skin_path = get_skin_path('connect', $config['cf_mobile_connect_skin']);
    $connect_skin_url = get_skin_url('connect', $config['cf_mobile_connect_skin']);
    $faq_skin_path = get_skin_path('faq', $config['cf_mobile_faq_skin']);
    $faq_skin_url = get_skin_url('faq', $config['cf_mobile_faq_skin']);
} else {
    $board_skin_path = get_skin_path('board', $board['bo_skin']);
    $board_skin_url = get_skin_url('board', $board['bo_skin']);
    $member_skin_path = get_skin_path('member', $config['cf_member_skin']);
    $member_skin_url = get_skin_url('member', $config['cf_member_skin']);
    $new_skin_path = get_skin_path('new', $config['cf_new_skin']);
    $new_skin_url = get_skin_url('new', $config['cf_new_skin']);
    $search_skin_path = get_skin_path('search', $config['cf_search_skin']);
    $search_skin_url = get_skin_url('search', $config['cf_search_skin']);
    $connect_skin_path = get_skin_path('connect', $config['cf_connect_skin']);
    $connect_skin_url = get_skin_url('connect', $config['cf_connect_skin']);
    $faq_skin_path = get_skin_path('faq', $config['cf_faq_skin']);
    $faq_skin_url = get_skin_url('faq', $config['cf_faq_skin']);
}

if (is_file(G5_EXTEND_PATH . '/version.extend.php')) {
    include_once G5_EXTEND_PATH . '/version.extend.php';
}
if (!defined('G5_JS_VER')) {
    define('G5_JS_VER', '1');
}
if (!defined('G5_CSS_VER')) {
    define('G5_CSS_VER', '1');
}

ob_start();

header('Content-Type: text/html; charset=utf-8');
$gmnow = gmdate('D, d M Y H:i:s') . ' GMT';
header('Expires: 0');
header('Last-Modified: ' . $gmnow);
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: pre-check=0, post-check=0, max-age=0');
header('Pragma: no-cache');

$html_process = new html_process_landing();

if (!function_exists('get_asset_version')) {
    function get_asset_version($file_path)
    {
        $full_path = G5_PATH . $file_path;
        if (file_exists($full_path)) {
            return filemtime($full_path);
        }

        return time();
    }
}

run_event('common_header');
