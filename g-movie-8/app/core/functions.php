<?php
function getGeoIP() {
    $ip = $_SERVER['REMOTE_ADDR'];
    if ($ip != '127.0.0.1' or $ip = '::1') {
        $details = json_decode(file_get_contents("https://ipinfo.io/{$ip}"));
        return $details->country;
    } else {
        return 'US';
    }
}

function is_europe() {
    $geo = getGeoIP();
    $uni_eropa = array('NL','BE','IT','DE','LU','FR','GB','DK','IE','GR','PT','ES','AT','FI', 'SE', 'CZ', 'EE', 'HU', 'LV', 'LT','MT','PL','CY','SI','SK','BG','RO','HR');
    if(in_array($geo, $uni_eropa))
        return 'true';
    else
        return 'false';
}
function config($key){
        global $oc_config;
        $output = '';
        foreach($oc_config as $one => $two) {
                if ($one == $key) {
                        $output = $two;
                } 
        }
        return $output;
}
function options($key){
        global $oc_options;
        $output = '';
        foreach($oc_options as $one => $two) {
                if ($one == $key) {
                        $output = $two;
                } 
        }
        return $output;
}
function debug($string){
        if (config('debug') == 'true') {
                echo '<pre>';
                        print_r($string);
                echo '</pre>';
        }
}
function save_config($new = array())
{
        $config_file = DOCUMENT_ROOT . '/app/config/config.ini';
        $string = file_get_contents($config_file) . "\n";

        foreach ($new as $word => $value) {
                $value = str_replace('"', '\"', $value);
                $string = preg_replace("/^" . $word . " = .+$/m", $word . ' = "' . $value . '"', $string);
        }

        $string = rtrim($string);
        return file_put_contents($config_file, $string);
}
function canonical($seo = true, $base_url = false) {
        $s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
        $sp = strtolower($_SERVER["SERVER_PROTOCOL"]);
        $protocol = substr($sp, 0, strpos($sp, "/")) . $s;
        $port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);

        if ($base_url){
                return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port;
        }

        if ( ! $seo){
                $url = $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['SCRIPT_NAME'];
                $url .= ($_SERVER['QUERY_STRING'] != '') ? '?'. $_SERVER['QUERY_STRING'] : '';
                return rtrim($url, "?&");
        }
        return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
}
function site_url() {
        return canonical(false, true);
}

function site_uri()
{
    return site_url() . $_SERVER['REQUEST_URI'];
}
function site_path()
{
        $hostname = $_SERVER['HTTP_HOST'];
        return $hostname;
}
function is_home(){
        $host = site_url().'/';
        $current = canonical();
        if( $current == $host ){
                return true;
        } else {
                return false;
        }
}
/**
 * Create a web friendly URL slug from a string.
 * 
 * https://gist.github.com/sgmurphy/3098978
 *
 * @author Sean Murphy <sean@iamseanmurphy.com>
 * @copyright Copyright 2012 Sean Murphy. All rights reserved.
 * @license https://creativecommons.org/publicdomain/zero/1.0/
 *
 */
function permalink($str, $options = array()) {
	// Make sure string is in UTF-8 and strip invalid UTF-8 characters
	$str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
	
	$defaults = array(
		'delimiter' => '-',
		'limit' => null,
		'lowercase' => true,
		'replacements' => array(),
		'transliterate' => false,
	);
	
	// Merge options
	$options = array_merge($defaults, $options);
	
	$char_map = array(
		// Latin
		'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C', 
		'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 
		'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O', 
		'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH', 
		'ß' => 'ss', 
		'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c', 
		'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 
		'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o', 
		'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th', 
		'ÿ' => 'y',
		// Latin symbols
		'©' => '(c)',
		// Greek
		'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
		'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
		'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
		'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
		'Ϋ' => 'Y',
		'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
		'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
		'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
		'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
		'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',
		// Turkish
		'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
		'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g', 
		// Russian
		'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
		'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
		'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
		'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
		'Я' => 'Ya',
		'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
		'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
		'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
		'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
		'я' => 'ya',
		// Ukrainian
		'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
		'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',
		// Czech
		'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U', 
		'Ž' => 'Z', 
		'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
		'ž' => 'z', 
		// Polish
		'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z', 
		'Ż' => 'Z', 
		'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
		'ż' => 'z',
		// Latvian
		'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N', 
		'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
		'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
		'š' => 's', 'ū' => 'u', 'ž' => 'z'
	);
	
	// Make custom replacements
	$str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
	
	// Transliterate characters to ASCII
	if ($options['transliterate']) {
		$str = str_replace(array_keys($char_map), $char_map, $str);
	}
	
	// Replace non-alphanumeric characters with our delimiter
	$str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
	
	// Remove duplicate delimiters
	$str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
	
	// Truncate slug to max. characters
	$str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
	
	// Remove delimiter from ends
	$str = trim($str, $options['delimiter']);
	
	return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
}

function bad_word($term){
        $banned_words = @file_get_contents(  $_SERVER['DOCUMENT_ROOT'] .'/app/class/badkeyword.txt' );
        $option       = ( empty($option) ) ? $banned_words : $banned_words;
	$badwords     = explode( ',',$option );
	$term         = str_ireplace( $badwords,'***',$term );
	if( false === strpos( $term, '***' ) ):
		return false;
	else:
		return true;
        endif;
}
function bad_words($content){
        $banned_words = @file_get_contents(  DOCUMENT_ROOT .'/app/class/badkeyword.txt' );
        $bad_words = explode(',', $banned_words );
        foreach($bad_words as $word){
                $content = str_ireplace($word .' ', '', $content);
                $content = str_ireplace(' '. $word .' ', '', $content);
                $content = str_ireplace(' '. $word, '', $content);
                $content = str_ireplace($word, '', $content);
        }
        return $content;
}
function short($text, $len = 150, $more = '...') {
        $txt = ltrim(strip_tags($text));
        if (strlen($txt) > $len) {
                $text = substr($txt, 0, $len);
                $txt = substr($text, 0, strrpos($text, ' ')).$more;
        }
        return $txt;
}
function limit_word($string, $word_limit = 5) {
        $words = explode(' ', $string);
        return implode(' ', array_slice($words, 0, $word_limit));
}
function isChecked($haystack, $needle) {
        $haystack = explode(',', $haystack);
        return in_array($needle, $haystack);
}
function strposa($haystack, $needle, $offset=0) {
        if(is_array($needle)):
                foreach($needle as $query) {
                        if(!empty($query)):
                                if(strpos( (string) $haystack, $query, $offset) !== false) return true; // stop on first true result
                        endif;
                }
        else:
                if(!empty($needle)):
                        if(strpos( (string) $haystack, $needle, $offset) !== false) return true; // stop on first true result
                endif;
        endif;
        return false;
}
function f($haystack, $needle, $offset=0) {
        if(is_array($needle)):
        foreach($needle as $query) {
                if(!empty($query)):
                        if(strpos( (string) $haystack, $query, $offset) !== false) return $query; // stop on first true result
                endif;
        }
        else:
                if(!empty($needle)):
                        if(strpos( (string) $haystack, $needle, $offset) !== false) return $needle; // stop on first true result
                endif;
        endif;
        return false;
}
function time_ago($date){
    	if(empty($date)) {
    	    	return "No date provided";
    	}
        $periods         = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
        $lengths         = array("60","60","24","7","4.35","12","10");
        $now             = time();
        $unix_date       = strtotime($date);
        if(empty($unix_date)) {    
    	    	return "Bad date";
        }
        if($now > $unix_date) {    
    	    	$difference   = $now - $unix_date;
                $tense        = "ago";
        } else {
                $difference   = $unix_date - $now;
                $tense        = "from now";
        }
        for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
                $difference /= $lengths[$j];
        }
        $difference = round($difference);
        if($difference != 1) {
                $periods[$j].= "s";
        }
        return "$difference $periods[$j] {$tense}";
}
function get_contents($url) {
        if (function_exists('curl_exec')){ 
                $ch = curl_init();
                $header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
                $header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
                $header[] = "Cache-Control: max-age=0";
                $header[] = "Connection: keep-alive";
                $header[] = "Keep-Alive: 300";
                $header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
                $header[] = "Accept-Language: en-us,en;q=0.5";
                $header[] = "Pragma: ";

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5 );
                curl_setopt($ch, CURLOPT_REFERER, CURLOPT_REFERER() );
                curl_setopt($ch, CURLOPT_AUTOREFERER, true);
                curl_setopt($ch, CURLOPT_TIMEOUT, 30);
          //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	        curl_setopt($ch, CURLOPT_USERAGENT, CURLOPT_USERAGENT() );

                $url_get_contents_data = curl_exec($ch);
                curl_close($ch);
                        if ($url_get_contents_data == false){
                                $ch = curl_init();
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                                curl_setopt($ch, CURLOPT_HEADER, 0);
                              //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                                curl_setopt($ch, CURLOPT_URL, $url);
                                $url_get_contents_data = curl_exec($ch);
                                curl_close($ch);
                        }
        }elseif(function_exists('file_get_contents')){
                $url_get_contents_data = @file_get_contents($url);
        }elseif(function_exists('fopen') && function_exists('stream_get_contents')){
                $handle = fopen ($url, "r");
                $url_get_contents_data = stream_get_contents($handle);
        }else{
                $url_get_contents_data = false;
        }
        return $url_get_contents_data;
}


function ocim_verify_license( $license = '') {
 //    $domain   = str_replace('www.','',site_path());
 //    $username = config('username');
	// $licensed  = sha1(md5($username.$domain));
	// if ( $licensed == $license )
	// 	return "true";
	// return false;
    return "true"; 
}

function spintax( $string ) {
	$spintax = new Spintax();
	return $spintax->process( $string );	
}
class Spintax {
        public function process($text) {
                return preg_replace_callback( '/\{(((?>[^\{\}]+)|(?R))*)\}/x', array($this, 'replace'), $text );
        }
        public function replace($text) {
                $text = $this->process($text[1]);
                $parts = explode('|', $text);
                return $parts[array_rand($parts)];
        }
}
function CURLOPT_REFERER() {
	$grand = spintax("{com|ac|ad|ae|be|bf|bg|ch|cn|com.co|com.cr|com.hk|com.sg|co.id|co.in|co.nz|co.th|co.uk|de|dk|fr|ge|gr|ie|ir|is|it|nl|pl|se}"); 
	$yrand = spintax("{id|fr|de|in|hk|nl|se|sg|uk}"); 
	$refferer = array(
		"https://www.google.$grand/search",
		"https://$yrand.search.yahoo.com/search",
		"https://search.yahoo.com/search",
	);
	shuffle( $refferer );
	$reff = $refferer[0];
	return $reff;
}
/**
 * Random user agent creator
 * @since Sep 4, 2011
 * @version 1.0
 * @link https://360percents.com/
 * @author Luka Pušić <pusic93@gmail.com>
 */

/**
 * Possible processors on Linux
 */
$linux_proc = array(
    'i686',
    'x86_64'
);
/**
 * Mac processors (i also added U;)
 */
$mac_proc = array(
    'Intel',
    'PPC',
    'U; Intel',
    'U; PPC'
);
/**
 * Add as many languages as you like.
 */
$lang = array(
    'en-US',
    'sl-SI'
);
    
function firefox() {
        global $linux_proc, $mac_proc, $lang;
        $ver = array(
    	        'Gecko/' . date('Ymd', rand(strtotime('2015-1-1'), time())) . ' Firefox/' . rand(5, 7) . '.0',
    	        'Gecko/' . date('Ymd', rand(strtotime('2015-1-1'), time())) . ' Firefox/' . rand(5, 7) . '.0.1',
    	        'Gecko/' . date('Ymd', rand(strtotime('2014-1-1'), time())) . ' Firefox/3.6.' . rand(1, 20),
    	        'Gecko/' . date('Ymd', rand(strtotime('2014-1-1'), time())) . ' Firefox/3.8'
        );
    
        $platforms = array(
    	        '(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; ' . $lang[array_rand($lang, 1)] . '; rv:1.9.' . rand(0, 2) . '.20) ' . $ver[array_rand($ver, 1)],
    	        '(X11; Linux ' . $linux_proc[array_rand($linux_proc, 1)] . '; rv:' . rand(5, 7) . '.0) ' . $ver[array_rand($ver, 1)],
    	        '(Macintosh; ' . $mac_proc[array_rand($mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ' rv:' . rand(2, 6) . '.0) ' . $ver[array_rand($ver, 1)]
        );
    
        return $platforms[array_rand($platforms, 1)];
}
    
function safari() {
        global $linux_proc, $mac_proc, $lang;
        $saf = rand(531, 535) . '.' . rand(1, 50) . '.' . rand(1, 7);
        if (rand(0, 1) == 0) {
    	        $ver = rand(4, 5) . '.' . rand(0, 1);
        } else {
    	        $ver = rand(4, 5) . '.0.' . rand(1, 5);
        }
    
        $platforms = array(
    	        '(Windows; U; Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . ") AppleWebKit/$saf (KHTML, like Gecko) Version/$ver Safari/$saf",
    	        '(Macintosh; U; ' . $mac_proc[array_rand($mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ' rv:' . rand(2, 6) . '.0; ' . $lang[array_rand($lang, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Version/$ver Safari/$saf",
    	        '(iPod; U; CPU iPhone OS ' . rand(3, 4) . '_' . rand(0, 3) . ' like Mac OS X; ' . $lang[array_rand($lang, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Version/" . rand(3, 4) . ".0.5 Mobile/8B" . rand(111, 119) . " Safari/6$saf",
        );
    
        return $platforms[array_rand($platforms, 1)];
}
    
function iexplorer() {
        $ie_extra = array(
    	'',
    	'; .NET CLR 1.1.' . rand(4320, 4325) . '',
    	'; WOW64'
        );
        $platforms = array(
    	'(compatible; MSIE ' . rand(5, 9) . '.0; Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; Trident/' . rand(3, 5) . '.' . rand(0, 1) . ')'
        );
    
        return $platforms[array_rand($platforms, 1)];
}
    
function opera() {
        global $linux_proc, $mac_proc, $lang;
        $op_extra = array(
    	'',
    	'; .NET CLR 1.1.' . rand(4320, 4325) . '',
    	'; WOW64'
        );
        $platforms = array(
    	        '(X11; Linux ' . $linux_proc[array_rand($linux_proc, 1)] . '; U; ' . $lang[array_rand($lang, 1)] . ') Presto/2.9.' . rand(160, 190) . ' Version/' . rand(10, 12) . '.00',
    	        '(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; U; ' . $lang[array_rand($lang, 1)] . ') Presto/2.9.' . rand(160, 190) . ' Version/' . rand(10, 12) . '.00'
        );
    
        return $platforms[array_rand($platforms, 1)];
}
    
function chrome() {
        global $linux_proc, $mac_proc, $lang;
        $saf = rand(531, 536) . rand(0, 2);
    
        $platforms = array(
    	        '(X11; Linux ' . $linux_proc[array_rand($linux_proc, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf",
    	        '(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf",
    	        '(Macintosh; U; ' . $mac_proc[array_rand($mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf"
        );
        return $platforms[array_rand($platforms, 1)];
}
function CURLOPT_USERAGENT() {
        $x = rand(1, 5);
        switch ($x) {
    	        case 1:
                        return "Mozilla/5.0 " . firefox();
                        break;
    	        case 2:
                        return "Mozilla/5.0 " . safari() ;
    	                break;
    	        case 3:
    	                return "Mozilla/" . rand(4, 5) . ".0 " . iexplorer();
    	                break;
    	        case 4:
    	                return "Opera/" . rand(8, 9) . '.' . rand(10, 99) . ' ' . opera();
    	                break;
    	        case 5:
                        return 'Mozilla/5.0' . chrome();
                        break;
        }
}
function save_word($query){

        $title = strtolower( $query );
	$f     = 0;
        $koma  = ",";
        $root  = DOCUMENT_ROOT .'/app/content/keywords/'; 
        $path  = $root.'items'.$f.'.txt';
        $fp    = fopen($root.'items'.$f.'.txt', 'r');
        $fgets = fgets($fp);
        fclose($fp);
        $data  = explode($koma, $fgets);
        
	if( file_exists($path) ) {
		if(!empty( $query )) {
			if (in_array($query, $data)) {
				$tulis = implode($koma, $data);
			} 
        		else 
        		{
                                for ($i = 1; $i <= 500; $i++) {
					$tulis .= $data[$i].$koma;
          		        }
                                $tulis .= $query;
        		}

			$masuk = fopen($path, 'w');
			fwrite($masuk,$tulis);
			fclose($masuk);
		}
	}
}
function duration($milliseconds) {
        $seconds = floor($milliseconds / 1000);
        $minutes = floor($seconds / 60);
        $hours = floor($minutes / 60);
        $milliseconds = $milliseconds % 1000;
        $seconds = $seconds % 60;
        $minutes = $minutes % 60;

        $format = '%02u:%02u';
        $time = sprintf($format, $minutes, $seconds);
        return rtrim($time, '0');
}
function ocim_rating( $rating, $count, $aggregate ) {
	$rating	= round( $rating, 2 );
	if ( $aggregate == true ) {
		if ( $count > 1 ) {
			$user	= "users";
		} else {
			$user	= "user";
		}
		$schema	 =	"itemprop=\"aggregateRating\" itemscope itemtype=\"https://schema.org/AggregateRating\"";
		if ( $count >= 1 ) {
			$rvalue	 =	sprintf( '<div class="book-rating"><span itemprop="ratingValue">%s</span>/<span itemprop="bestRating">5</span> by <span itemprop="ratingCount">%1s</span> %2s</div>', $rating, $count, $user );
		}
	} else {
		$schema	 =	"";
		$rvalue	 =	"";
	}
	if ( $rating > 0 ) {
		$title	= sprintf( '%s out of 5 stars', $rating );
		$rating	= explode( ".", $rating );
		$front	= $rating[0];
		$rear	= $rating[1];
		$out	=	"<div class=\"rating-star\" title=\"$title\" $schema>";
		$s	= 0;
		for ( $s = 0; $s <= 4; $s++ ) {
			if ( $s < $front ) {
				$out	.=	"<i class=\"fa fa-star\"></i>";
			} elseif ( $s == $front ) {
				if ( $rear <= 3 ) {
					$out	.=	"<i class=\"fa fa-star-o\"></i>";
				} elseif ( $rear >= 40 && $rear <= 70 ) {
					$out	.=	"<i class=\"fa fa-star-half-o\"></i>";
				} else {
					$out	.=	"<i class=\"fa fa-star\"></i>";
				}
			} else {
				$out	.=	"<i class=\"fa fa-star-o\"></i>";
			}
		}
		$out	.=		$rvalue;
		$out	.=	"</div>";
	} else {
		$nr	= 0;
		$title	= 'Not Rated Yet';
		$out	 =	"<div class=\"rating-star\" title=\"$title\">";
		for ( $nr = 0; $nr <= 4; $nr++ ) {
			$out	.=	"<i class=\"fa fa-star-o\"></i>";
		}
		$out	.=		"<div class=\"movie-rating\">Not rated yet</div>";
		$out	.=	"</div>";
	}
	return $out;	
}
function ocim_review_rating( $rating ) {
	$out	.=	"<div class=\"review-rating\" itemprop=\"reviewRating\">";
	if ( $rating >= 1 ) {
		$out	.=	"<span itemscope itemtype=\"https://schema.org/Rating\" title=\"$rating Stars\">";
		$out	.=	"<meta itemprop=\"ratingValue\" content=\"$rating\">";
		$out	.=	"<meta itemprop=\"bestRating\" content=\"5\">";
		for ( $s = 0; $s <= 4; $s++ ) {
			if ( $s < $rating ) {
				$out	.=	"<i class=\"fa fa-star\"></i>";
			} else {
				$out	.=	"<i class=\"fa fa-star-o\"></i>";
			}
		}
		$out	.=	"</span>";
	} else {
		$out	.=	"<span itemscope itemtype=\"https://schema.org/Rating\" title=\"Not rated yet\">";
		$out	.=	"<meta itemprop=\"ratingValue\" content=\"$rating\">";
		$out	.=	"<meta itemprop=\"bestRating\" content=\"5\">";
		for ( $s = 0; $s <= 4; $s++ ) {
			$out	.=	"<i class=\"fa fa-star-o\"></i>";
		}
		$out	.=	"</span>";
	}
	$out	.=	"</div>";
	return $out;
}

function format_tanggal($data)
{
    
    foreach ($data as $key => $value) {
        # code...
    }
    $date = new DateTime($data->date);
    return $date->format('d M Y');
}

function format_time($min) 
{
    $min=(int)$min;
    $heure=(int)($min/60);
    $minute=(($min/60)-$heure)*60;
    if($heure < 10)
        $heure = '0' . $heure;
    if($minute < 10)
        $minute = '0' . $minute;


    return $heure .':' . $minute . ':00';
}

function link_tvdb($id,$season, $episode, $name)
{
    if(empty($name))
        $name = 'Season ' . $season . ' Episode ' . $episode;
    if(isset($_GET['season']) && isset($_GET['episode']))
    {
        echo '<a href="'.site_url().'/?action=serie&id='.$id.'&season='.$season.'&episode='.$episode.'">'.$name.'</a>';
    }
    else
    {
        echo '<a class="text-danger" href="'.site_url().'/'.options('url_tvdb').'/'.$id.'/'.$season.'/'.$episode.'">'.$name.'</a>';
    }
}

function seo_serie($id)
{
    if(config('_seo') == 'true')
    {
        echo site_url() . '/'.options('url_tvdb').'/'.$id;
    }
    else
    {
        echo site_url() . '/?action=serie&id='.$id;
    }
}

function histats_write() {
    if( config('histatsID') != '') {
        echo "<script type='text/javascript'>var _Hasync=_Hasync|| [];_Hasync.push(['Histats.start', '1,".config('histatsID').",4,0,0,0,00010000']);_Hasync.push(['Histats.fasi', '1']);_Hasync.push(['Histats.track_hits', '']);(function(){var hs=document.createElement('script'); hs.type='text/javascript'; hs.async=true;hs.src=('https://s10.histats.com/js15_as.js');(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);})();</script><noscript><a href='https://www.histats.com' target='_blank'><img src='https://sstatic1.histats.com/0.gif?".config('histatsID')."&101' alt='advanced web statistics' border='0'></a></noscript>";
    }
}