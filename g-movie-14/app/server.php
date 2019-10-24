<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Flix
| -------------------------------------------------------------------------------
*/

$uri = isset($uri) ? $uri : '';
if (($pos = strrpos($uri, '/')) !== false) $url_str = substr($uri, $pos+1);

define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
// define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI']);
define('APP_PATH', DOCUMENT_ROOT . '/app');
define('CLASS_PATH', APP_PATH . '/class');

require __DIR__.'/config/autoload.php';

if (config('timezone')) {
    date_default_timezone_set(config('timezone'));
} else {
    date_default_timezone_set('Asia/Jakarta');
}

if ($uri == '/' . options('url_tvdb') or $uri == '/' . options('url_tvdb') . '/') {
    header('location:'.site_url());
}

if (str_replace('/', '', $uri) == options('url_sport') or str_replace('/', '', $uri) == 'sports') 
{
	header('location:'.site_url().'/'.options('url_sport').'/sports/');
}
// This file allows us to emulate Apache's "mod_rewrite" functionality
$arrayfuk = array(config('search_url'),config('category_url'),options('url_page'), options('url_movie'),options('url_tvdb'),options('url_tv'),options('url_sport'),options('url_watch'),options('url_single'));

if(isset($_GET['s'])) {
        $destination = config('search_url');
}elseif(isset($_GET['action'])) {
        $destination = 'url_action';
}elseif(isset($_GET['do'])) {
        $destination = 'url_do';
}elseif( f( $uri, 'sitemap.xml' ) == 'sitemap.xml') {
        $destination = 'sitemap.xml';
}elseif( f( $uri, 'sitemap-post.xml' ) == 'sitemap-post.xml') {
        $destination = 'sitemap-post.xml';
}elseif( f( $uri, 'register' ) == 'register') {
        $destination = 'register';
}elseif( f( $uri, 'login' ) == 'login') {
        $destination = 'login';
}elseif( f( $uri, 'download' ) == 'download') {
        $destination = 'download';
}elseif( strposa( dirname($uri), $arrayfuk ) ) {
        $destination = f( dirname($uri), $arrayfuk );
}else {
        $destination = 'homepage';
}

// echo options('url_sport'); die;
// echo $destination; die;
//debug( $destination );
switch ($destination){
	case 'homepage':
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/index.php';
		break;
	case options('url_movie'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/movie.php';
		break;
	case 'login':
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/login.php';
		break;
	case 'register':
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/register.php';
		break;
	case 'download':
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/download.php';
		break;
	case options('url_tv'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/tv.php';
		break;
	case options('url_tvdb'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/serie.php';
		break;
	case options('url_sport'):
		$goto =  DOCUMENT_ROOT.'/app/sports/index.php';
		break;
	case options('url_watch'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/watch.php';
		break;
	case config('category_url'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/category.php';
		break;
	case config('search_url'):
	case options('url_video'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/search.php';
		break;
	case 'url_action':
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/'.$_GET['action'].'.php';
		break;
	case 'url_do':
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/'.options('url_page').'/'.$_GET['do'].'.php';
		break;
	case options('url_page'):
                $pathinfo = pathinfo ($uri) ;
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/'.options('url_page').'/'.$pathinfo['filename'].'.php';
		break;
	case options('url_single'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/single.php';
		break;
	case 'sitemap.xml':
		$goto =  APP_PATH.'/content/sitemap/sitemap.php';
		break;
	case 'sitemap-post.xml':
		$goto =  APP_PATH.'/content/sitemap/sitemap-post.php';
		break;
	default:
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/index.php';
		break;
}

//debug( $goto );
for ($i = 0; $i <= 1000; $i++) {
        if (strpos($uri, 'sitemap-'.$i.'.xml' ) !== false ) {
                if(file_exists( DOCUMENT_ROOT.'/app/content/sitemap/sitemap-'.$i.'.php')) {
                        include_once DOCUMENT_ROOT.'/app/content/sitemap/sitemap-'.$i.'.php';
                        exit;
                }
        }
}
if( file_exists( $goto ) ) 
{
	include $goto;
	exit;
}else{
	if(file_exists(__DIR__.'/../themes/'.config('sitethemes').'/index.php')) {
		include_once __DIR__.'/../themes/'.config('sitethemes').'/index.php';
		exit;
	}else{
		include __DIR__.'/class/welcome.php';
		exit;
	}
}
?>