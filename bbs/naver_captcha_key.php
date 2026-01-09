<?php
define('G5_CAPTCHA', true);
include_once('./_common.php');
include_once(G5_LIB_PATH.'/naver_captcha.lib.php');

header('Content-Type: application/json; charset=utf-8');

$result = naver_captcha_get_key();
echo json_encode($result);
