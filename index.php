<?php
header( 'Location: /en/' );
if (isset( $_SERVER['HTTP_ACCEPT_LANGUAGE'] )) {
	$x = explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] );
	foreach ( $x as $z ) if ( $z = trim( $z ) ) if ( strpos( $z, 'ru' ) !== false ) header( 'Location: /ru/' );
}