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

// Language redirect
if ( !$lang || ( $lang != 'ru' && $lang != 'en' ) ) {
	$pp = ( $page != 'index' ) ? "$lang/$page" : $lang;
	header( "Location: /en/$pp" );
	if (isset( $_SERVER['HTTP_ACCEPT_LANGUAGE'] )) {
		$x = explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] );
		foreach ( $x as $z ) if ( $z = trim( $z ) ) if ( strpos( $z, 'ru' ) !== false ) header( "Location: /ru/$pp" );
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
