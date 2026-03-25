<?php
/**
 * HTTP 오류 전용 안내 페이지 (공통 템플릿)
 *
 * - canonical 미설정 (오류 URL이 검색엔진에 정식 URL로 수집되지 않도록)
 * - noindex 메타로 검색엔진 수집 방지
 * - $error_response: code, title, message, [login_url], [retry_after]
 */
$err = isset($GLOBALS['error_response']) ? $GLOBALS['error_response'] : array();
$code    = (int) (isset($err['code']) ? $err['code'] : 404);
$title   = isset($err['title']) ? $err['title'] : '페이지를 찾을 수 없습니다';
$message = isset($err['message']) ? $err['message'] : '요청하신 페이지를 찾을 수 없습니다.';
$login_url = isset($err['login_url']) ? $err['login_url'] : '';
$base_url = defined('G5_URL') ? G5_URL : '';
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?> | 법무법인 동주</title>
	<style>
		body { font-family: "Malgun Gothic", "맑은 고딕", sans-serif; margin: 0; padding: 40px 20px; background: #f5f5f5; color: #333; }
		.error-wrap { max-width: 520px; margin: 0 auto; background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,.08); }
		.error-wrap h1 { margin: 0 0 16px; font-size: 1.5rem; color: #222; }
		.error-wrap p { margin: 0 0 24px; line-height: 1.6; color: #555; }
		.error-wrap .btn { display: inline-block; margin-right: 8px; padding: 10px 20px; background: #333; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px; }
		.error-wrap .btn:hover { background: #555; }
		.error-wrap .btn.secondary { background: #666; }
	</style>
</head>
<body>
	<div class="error-wrap">
		<h1><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h1>
		<p><?php echo nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')); ?></p>
		<p>
			<?php if ($login_url) { ?>
				<a href="<?php echo htmlspecialchars($login_url, ENT_QUOTES, 'UTF-8'); ?>" class="btn">로그인</a>
			<?php } ?>
			<a href="<?php echo htmlspecialchars($base_url ?: '/', ENT_QUOTES, 'UTF-8'); ?>" class="btn secondary">홈으로</a>
		</p>
	</div>
</body>
</html>
