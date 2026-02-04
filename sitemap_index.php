<?php
/**
 * 사이트맵 인덱스 (정적 페이지 + 게시글 사이트맵 목록)
 * robots.txt에서 이 URL만 등록하면 됨.
 */
$base_url = 'https://trafficdrinking-law-dongju.com';
if (isset($_SERVER['HTTP_HOST'])) {
    $scheme = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $port   = (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != '80' && $_SERVER['SERVER_PORT'] != '443') ? ':' . $_SERVER['SERVER_PORT'] : '';
    $base_url = $scheme . '://' . $_SERVER['HTTP_HOST'] . $port . preg_replace('#/[^/]*$#', '', $_SERVER['SCRIPT_NAME']);
}

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
echo "  <sitemap>\n";
echo "    <loc>" . htmlspecialchars($base_url . '/sitemap_pages.php', ENT_XML1, 'UTF-8') . "</loc>\n";
echo "    <lastmod>" . date('Y-m-d') . "</lastmod>\n";
echo "  </sitemap>\n";
echo "  <sitemap>\n";
echo "    <loc>" . htmlspecialchars($base_url . '/sitemap_posts.php', ENT_XML1, 'UTF-8') . "</loc>\n";
echo "    <lastmod>" . date('Y-m-d') . "</lastmod>\n";
echo "  </sitemap>\n";
echo '</sitemapindex>';
