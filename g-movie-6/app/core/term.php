<?php
/**
 * hooked to oc-head()
 * */ 
function pk_stt_function_oc_head_hook() {
        global $uri;
	if ( config( '_stt' ) == 'true' ) {

                if ( $_GET['s'] != '' || strpos($uri, '/'.config('search_url').'/' ) !== false) {
                        $title = strtolower( get_search_query() );
                        if (strpos( $title , "https://" ) === false) {
                        	if ( strlen($title) > 3 ) {
			        	if ( bad_word( $title ) === false ) {
				        	save_word($title);
			        	}
                        	}
                        }else{
                                ocim_throw();
			}
	        } 
	        else 
	        {	
		        $referer = pk_stt2_function_get_referer();
		        if (!$referer) return false;
		        $delimiter = pk_stt2_function_get_delimiter($referer);
		        if( $delimiter ){
			        $term = pk_stt2_function_get_terms($delimiter);	
			        if ( bad_word( strtolower( get_search_query() ) ) == false ) {		
				        save_word( $term );
			        }
		        }
	        }
	}
}
global $hooks;
$hooks->add_action('oc_head', 'pk_stt_function_oc_head_hook');
/**
 * get search delimiter for each search engine
 * base on the original searchterms tagging plugin
 * */ 
function pk_stt2_function_get_delimiter($ref) {
    $search_engines = array('google.com' => 'q',
			'go.google.com' => 'q',
			'images.google.com' => 'q',
			'video.google.com' => 'q',
			'news.google.com' => 'q',
			'blogsearch.google.com' => 'q',
			'maps.google.com' => 'q',
			'local.google.com' => 'q',
			'search.yahoo.com' => 'p',
			'search.msn.com' => 'q',
			'bing.com' => 'q',
			'msxml.excite.com' => 'qkw',
			'search.lycos.com' => 'query',
			'alltheweb.com' => 'q',
			'search.aol.com' => 'query',
			'search.iwon.com' => 'searchfor',
			'ask.com' => 'q',
			'ask.co.uk' => 'ask',
			'search.cometsystems.com' => 'qry',
			'hotbot.com' => 'query',
			'overture.com' => 'Keywords',
			'metacrawler.com' => 'qkw',
			'search.netscape.com' => 'query',
			'looksmart.com' => 'key',
			'dpxml.webcrawler.com' => 'qkw',
			'search.earthlink.net' => 'q',
			'search.viewpoint.com' => 'k',
			'yandex.kz' => 'text',
			'yandex.ru' => 'text',
			'baidu.com' => 'wd',			
			'mamma.com' => 'query');
    $delim = false;
    if (isset($search_engines[$ref])) {
        $delim = $search_engines[$ref];
    } else {
        if (strpos('ref:'.$ref,'google'))
            $delim = "q";
		elseif (strpos('ref:'.$ref,'search.atomz.'))
            $delim = "sp-q";
		elseif (strpos('ref:'.$ref,'search.msn.'))
            $delim = "q";
		elseif (strpos('ref:'.$ref,'search.yahoo.'))
            $delim = "p";
		elseif (strpos('ref:'.$ref,'yandex'))
            $delim = "text";
		elseif (strpos('ref:'.$ref,'baidu'))
            $delim = "wd";	
        elseif (preg_match('/home\.bellsouth\.net\/s\/s\.dll/i', $ref))
            $delim = "bellsouth";
    }
    return $delim;
}
/**
 * retrieve the search terms from search engine query
 * */ 
function pk_stt2_function_get_terms($d) {
        $terms       = null;
        $query_array = array();
        $query_terms = null;
        $query = explode($d.'=', $_SERVER['HTTP_REFERER']);
        $query = explode('&', $query[1]);
        $query = urldecode($query[0]);
        $query = str_replace("'", '', $query);
        $query = str_replace('"', '', $query);
        $query_array = preg_split('/[\s,\+\.]+/',$query);
        $query_terms = implode(' ', $query_array);
        $terms = htmlspecialchars(urldecode(trim($query_terms)));
        return $terms;
}
if( !function_exists('check_license') ){
        function check_license() {
                $license_key_verify = ocim_verify_license( config('license_active') );
                if ( "" == config('license_active') ) { tluo920(); } elseif( $license_key_verify != "true" ) { tluo920(); }
        }
}
$hooks->add_action('oc_head', 'check_license');
/**
 * get the referer
 * */ 
function pk_stt2_function_get_referer() {
        if (!isset($_SERVER['HTTP_REFERER']) || ($_SERVER['HTTP_REFERER'] == '')) return false;
            $referer_info = parse_url($_SERVER['HTTP_REFERER']);
            $referer = $referer_info['host'];
        if(substr($referer, 0, 4) == 'www.')
            $referer = substr($referer, 4);
        return $referer;
}
/**
* PHP 4 equivalent of PHP 5 str_ireplace function
**/
if( !function_exists('str_ireplace') ){
	function str_ireplace($search,$replace,$subject){
                $token = chr(1);
                $haystack = strtolower($subject);
        	$needle = strtolower($search);
        	while (($pos=strpos($haystack,$needle))!==FALSE){
                	$subject = substr_replace($subject,$token,$pos,strlen($search));
                	$haystack = substr_replace($haystack,$token,$pos,strlen($search));
        	}
        	$subject = str_replace($token,$replace,$subject);
        	return $subject;
        }
}