<?php
/**
 * 배포 진단: 브라우저에서 /diag.php 열기.
 * - 본문이 보이면 PHP·.htaccess 최소 동작 중.
 * - MISSING 줄이 있으면 해당 경로를 public_html에 업로드.
 * 확인 후 삭제 권장.
 */
header('Content-Type: text/plain; charset=UTF-8');
header('Cache-Control: no-store');

$root = __DIR__;
$checks = array(
    'index.php'              => $root . '/index.php',
    'landing_bootstrap.php'  => $root . '/landing_bootstrap.php',
    'theme/basic/head.sub.php' => $root . '/theme/basic/head.sub.php',
    'lib/common.lib.php'     => $root . '/lib/common.lib.php',
    'config.php'             => $root . '/config.php',
    'version.php'            => $root . '/version.php',
);

foreach ($checks as $label => $path) {
    echo (is_file($path) ? 'OK ' : 'MISSING ') . $label . "\n";
}

echo 'PHP ' . PHP_VERSION . "\n";
