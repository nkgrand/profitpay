<?php

// SHow the sitemap
function sitemap() {

	// Main URLs
	$base = 'https://www.profitpay.one';
	$url = [
		'ru/', 'ru/blog/', 'ru/contact/',
		'en/', 'en/blog/', 'en/contact/',
	];

	// Blog entries
	$fetch = 'https://my.profitpay.one/api/sys/news.json?id=1-a5ea36973b3611a8d9b37ce8f2c2140a&public=1&show=500&notext=1';
	$news = cached( $fetch );
	foreach ( $news['data'] as $n ) {
		$lang = ( $n['lang'] == 'en' ) ? 'en' : 'ru';
		$id = $n['id'];
		$slug = text2link( $n['title'] );
		$url[] = "$lang/blog/$id-$slug";
	}

	// Show the URLs
	header( 'Content-type: application/xml' );
	echo '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
	foreach ( $url as $u ) echo "<url><loc>$base/$u</loc></url>";
	echo '</urlset>';
	die();

}