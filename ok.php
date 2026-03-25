<?php
/**
 * 배포·PHP 동작 확인용 (브라우저에서 /ok.php 접속 → ok 출력되면 PHP·경로 정상)
 * 확인 후 삭제해도 됩니다.
 */
header('Content-Type: text/plain; charset=UTF-8');
header('Cache-Control: no-store');
echo "ok\n";
