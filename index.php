<?php

// Find the way
$ws = explode( '?', $_SERVER['REQUEST_URI'], 2 );
$pp = trim( $ws[0], '/' );
if ( $pp ) {
	$path = explode( '/', $pp );
} else $path = [];

// The path info
$lang = isset( $path[0] ) ? $path[0] : false;
$page = isset( $path[1] ) ? $path[1] : 'index';
$slug = isset( $path[2] ) ? $path[2] : false;

// Sitemap file
if ( $lang == 'sitemap.xml' ) {
	require_once __DIR__ . '/page/common.php';
	require_once __DIR__ . '/page/seo.php';
	sitemap();
}

// Redirector
function redirect( $url, $last = true ) {
	if ( $_GET ) {
		$url .= ( strpos( $url, '?' ) !== false ) ? '&' : '?';
		$url .= http_build_query( $_GET );
	}
	header( "Location: $url" );
	if ( $last ) die();
}

// Redirects
$r2r = [
	'kontakt'	=> '/ru/contact/',
	'blokirovka-reklamnogo-akkaunta-facebook' => '/ru/blog/29-blokirovka-reklamnogo-akkaunta-facebook-prichiny-i-kak-razblokirovat',
	'kejs-po-slivu-trafika-na-a-cardin' => '/ru/blog/32-kejs-po-slivu-trafika-na-a-cardin',
	'4-populyarnyx-trekera-dlya-arbitrazha-trafika' => '/ru/blog/31-4-populyarnyx-trekera-dlya-arbitrazha-trafika',
	'arbitrazhim-na-polshu-xarakteristika-geo-i-profitnye-offery-dlya-tebya' => '/ru/blog/30-arbitrazhim-na-polshu-xarakteristika-geo-i-profitnye-offery-dlya-tebya',
];
if (isset( $r2r[$lang] )) redirect( $r2r[$lang] );

// Language redirect
if ( !$lang || ( $lang != 'ru' && $lang != 'en' ) ) {
	$pp = ( $page != 'index' ) ? "$lang/$page" : $lang;
	redirect( "/en/$pp", false );
	if (isset( $_SERVER['HTTP_ACCEPT_LANGUAGE'] )) {
		$x = explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] );
		foreach ( $x as $z ) if ( $z = trim( $z ) ) if ( strpos( $z, 'ru' ) !== false ) redirect( "/ru/$pp" );
	}
	die();
} else define( 'LANG', $lang );

// Take the part
$part = $slug ? __DIR__ . "/page/$lang-$page-one.php" : __DIR__ . "/page/$lang-$page.php";
if (file_exists( $part )) {
	define( 'SLUG', $slug );
	require_once __DIR__ . '/page/common.php';
	require_once __DIR__ . '/page/parts.php';
	require_once $part;
} else {
	$p404 = __DIR__ . "/page/$lang-404.php";
	if (file_exists( $p404 )) {
		require_once $p404;
	} else require_once __DIR__ . '/page/en-404.php';
}
