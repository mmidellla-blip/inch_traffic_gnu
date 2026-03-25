<?php
/** 배포 확인: 브라우저에서 /health.php 접속 시 본문이 보이면 PHP 동작 중. 확인 후 삭제 가능. */
header('Content-Type: text/plain; charset=UTF-8');
header('Cache-Control: no-store');
echo "ok php=" . PHP_VERSION . "\n";
