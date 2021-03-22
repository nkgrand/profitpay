<?php

// Make cached CURL request
function cached( $url ) {

	// Find the file
	$path = realpath( __DIR__ . '/../cache' );
	$uid = md5( $url );
	$cache = "$path/$uid.txt";
	$valid = time() - 300;

	// Load the cache
	if ( file_exists( $cache ) && filemtime( $cache ) > $valid ) {
		$text = file_get_contents( $cache );
		$data = json_decode( $text, true );
		if (is_array( $data )) return $data;
	}

	// Load the data
	$text = file_get_contents( $url );
	if ( ! $text ) return false;
	$data = json_decode( $text, true );
	if ( ! $data ) return false;
	file_put_contents( $cache, $text );
	return $data;

}

// Make CURL request
function curl( $url ) {
	$curl = curl_init( $url );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, 1 );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
	curl_setopt( $curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15' );
	curl_setopt( $curl, CURLOPT_HEADER, true );
	$result = curl_exec( $curl );
	curl_close( $curl );
	return $result;
}

// Check the block once
function showitonce( $block ) {
	$cn = 'blk-'.substr( md5( $block ), 0, 6 );
	if (isset( $_COOKIE[$cn] )) return false;
	setcookie( $cn, '1', time() + 1350000, '/' );
	return true;
}

// Blog description
function excerpt( $text, $len = 100 ) {

	$text = strip_tags( $text );
	$text = stripslashes( $text );
	$text = html_entity_decode ( $text, ENT_QUOTES, 'UTF-8' );

	if ( mb_strlen ( $text ) > $len ) {
		$text = mb_substr ( $text, 0, $len );
    	if ( mb_strpos($text, ' ') ) $text = mb_substr ( $text, 0, mb_strrpos ( $text, ' ' ) );
		$text = trim ( $text );
		if ( $text ) $text .= ' ...';
	} else $text = trim ( $text );

	return $text;

}

// Convert text to link
function text2link( $text ) {

	$text = filter_var( $text, FILTER_SANITIZE_STRING );
	$text = trim ( $text );

	$code = array(
		"Є"=>"YE","І"=>"I","Ѓ"=>"G","і"=>"i","№"=>"#","є"=>"ye","ѓ"=>"g",
		"А"=>"A","Б"=>"B","В"=>"V","Г"=>"G","Д"=>"D",
		"Е"=>"E","Ё"=>"YO","Ж"=>"ZH",
		"З"=>"Z","И"=>"I","Й"=>"J","К"=>"K","Л"=>"L",
		"М"=>"M","Н"=>"N","О"=>"O","П"=>"P","Р"=>"R",
		"С"=>"S","Т"=>"T","У"=>"U","Ф"=>"F","Х"=>"X",
		"Ц"=>"C","Ч"=>"CH","Ш"=>"SH","Щ"=>"SHH","Ъ"=>"",
		"Ы"=>"Y","Ь"=>"","Э"=>"E","Ю"=>"YU","Я"=>"YA",
		"а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d",
		"е"=>"e","ё"=>"yo","ж"=>"zh",
		"з"=>"z","и"=>"i","й"=>"j","к"=>"k","л"=>"l",
		"м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
		"с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"x",
		"ц"=>"c","ч"=>"ch","ш"=>"sh","щ"=>"shh","ъ"=>"",
		"ы"=>"y","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya","—"=>"-",
		"Ї"=>'yi','ї'=>'yi'
	);

	$text = strtr ( $text, $code );
	$text = preg_replace ("#([\s\-]+)#si", '-', $text);
	$text = trim ( $text, '-' );
	$text = strtolower ( $text );
	$text = preg_replace ("#([^a-z0-9\-\_\.]*)#si", '', $text);
	$text = preg_replace ("#([\-]+)#si", '-', $text);
	$text = trim ( $text, '-' );
	return $text ? $text : '';
}

// Make the pages list
function pages( $base, $count, $page, $show ) {
	
}