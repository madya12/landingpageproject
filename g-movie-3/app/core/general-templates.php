<?php
function oc_head() {
    /**
         * Print scripts or data in the head tag on the front end.
         *
         * @since 1.0.0
    */
    global $hooks;
    $hooks->do_action('oc_head');
}
function site_theme() {
    return site_url().'/themes/'.config('sitethemes');
}
function style_theme() {
    echo site_url().'/themes/'.config('sitethemes');
}
function get_header( ) {
        if (file_exists( $_SERVER['DOCUMENT_ROOT'] . '/themes/'. config('sitethemes') . '/header.php' ))
                include ( $_SERVER['DOCUMENT_ROOT'] . '/themes/' . config('sitethemes') . '/header.php' );
}
function get_footer( ) {
        if (file_exists( $_SERVER['DOCUMENT_ROOT'] . '/themes/'. config('sitethemes') . '/footer.php' ))
                include ( $_SERVER['DOCUMENT_ROOT'] . '/themes/' . config('sitethemes') . '/footer.php' );
}
function get_sidebar( ) {
        if (file_exists( $_SERVER['DOCUMENT_ROOT'] . '/themes/'. config('sitethemes') . '/sidebar.php' ))
                include ( $_SERVER['DOCUMENT_ROOT'] . '/themes/' . config('sitethemes') . '/sidebar.php' );
}
function _seo( $query ) {
        if ( config('_seo') == 'true' ):
                return site_url().'/'.config('search_url').'/'.permalink($query).config('url_end'); 
        else:
                return site_url().'/?s='.permalink($query);
        endif;
}
/**
 * Retrieve the contents of the search query variable.
 *
 * @since 1.0
 *
 * @return string
 */
function get_search_query( $escaped = true ) {
        global $url_str;
        if ( $escaped ):
                if ( $_GET['s'] ):
                        if (strpos( $_GET['s'] , 'https://' ) !== false) {	
                                $query = $_GET['s'];
                        }else{
                                $query = permalink( $_GET['s'], array( 'delimiter' => ' ' ) );
                        }
                else:
                        $query = str_replace( '.html','', $url_str );
                        $query = str_replace( '/','', $query );
                        $query = permalink( $query, array( 'delimiter' => ' ' ) );
                endif;
        else:
                $query = permalink( $_GET['s'] );
        endif;
        return trim(str_replace(range(0,9),'',$query));
}
/**
 * Filters oc_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $separate Optional separator.
 * @return string The filtered title.
 */

function oc_title( $separate = ' | ', $options = array() ){
        global $title,$hack_title,$title_before,$title_after,$uri;
	$defaults = array(
                'term' => $hack_title,
                'before' => $title_before,
                'after' => $title_after
	);

	$sep = config( 'sitename' );

	// Merge options
	$options = array_merge($defaults, $options);

        // If there is a post
        if ( $title ) {
                if ( $options['term'] ) : $term = $options['term']; else: $term = $title; endif;
                if ( $options['before'] == '' ) : $before = ''; else: $before = $options['before']; endif;
                if ( $options['after'] == '' ) : $after = $separate . $sep; else: $after = $options['after']; endif;
                $oc_title = $before . $term . $after;
        } 
        // If it's a category or tag
        elseif ( isset($_GET['terms']) || strposa(dirname($uri), config('category_url') ) !== false ) {
                if ( $options['term'] ) : 
                        $deskripsi = $options['term']; 
                else: 
                        if (strposa(dirname($uri), config('category_url') ) !== false ) :
                                $explode = explode('/',$uri);
                                $deskripsi = ucwords(permalink($explode[2], array( 'delimiter' => ' ' )) ); 
                        else :
                                $deskripsi = ucwords(permalink($_GET['terms'], array( 'delimiter' => ' ' )) ); 
                        endif;
                endif;
                if ( $options['before'] == '' ) : $before = ucwords(config('category_url')).' '; else: $before = $options['before']; endif;
                if ( $options['after'] == '' ) : $after = ''; else: $after = $options['after']; endif;
                $oc_title = $before . $deskripsi . $after. $separate . $sep;
        } 
        // If it's a page on view folder
        elseif ( isset($_GET['do']) || strpos(dirname($uri), options('url_page') ) !== false ) {
                if ( $options['term'] ) : 
                        $deskripsi = $options['term']; 
                else: 
                        if (strpos(dirname($uri), options('url_page') ) !== false ) :
                                $pathinfo = pathinfo ($uri) ;
                                $deskripsi = ucwords(permalink($pathinfo['filename'], array( 'delimiter' => ' ' )) ); 
                        else :
                                $deskripsi = ucwords(permalink($_GET['do'], array( 'delimiter' => ' ' )) ); 
                        endif;
                endif;
                if ( $options['before'] == '' ) : $before = ''; else: $before = $options['before']; endif;
                if ( $options['after'] == '' ) : $after = ''; else: $after = $options['after']; endif;
                $oc_title = $before . $deskripsi . $after. $separate . $sep;
        } 

        // If it's a 404
        elseif ( isset($_GET['e']) == '404' ) {
                $oc_title = 'Nothing Found';
        }

        // If it's a search
        elseif ( isset($_GET['s']) || strpos(dirname($uri), config('search_url') ) !== false ) {
                if ( $options['before'] == '' ) : $before = 'Search Results for '; else: $before = $options['before']; endif;
                if ( $options['after'] == '' ) : $after = ''; else: $after = $options['after']. $separate . $sep; endif;
                $oc_title = $before . ucwords( bad_words(get_search_query()) ) . $after ;
        }

        // If there is a home or empty
        else {
                $oc_title = config( 'sitename' ) ;
        }

        // Send it out
        echo $oc_title;
}
/**
 * Filters oc_description to print a neat <meta name="description"> tag based on what is being viewed.
 *
 * @param string $description Default description text for current view.
 * @param string $separate Optional separator.
 * @return string The filtered description.
 */
function oc_description( $separate = ' | ', $options = array() ){
        global $description,$hack_description,$description_before,$description_after,$uri;
	$defaults = array(
                'term' => $hack_description,
                'before' => $description_before,
                'after' => $description_after
	);

	$sep = config( 'sitedescription' );

	// Merge options
	$options = array_merge($defaults, $options);

        // If there is a post
        if ( $description ) {
                if ( $options['term'] ) : 
                        $deskripsi = ucwords(short($options['term'], 150));
                elseif ( $description ): 
                        $deskripsi = ucwords(short($description, 150));
                else: 
                        $pathinfo = pathinfo ($uri);
                        $deskripsi = ucwords(permalink($pathinfo['filename'], array( 'delimiter' => ' ' )) ); 
                endif;
                if ( $options['before'] == '' ) : $before = ''; else: $before = $options['before']; endif;
                if ( $options['after'] == '' ) : $after = ''; else: $after = $options['after']; endif;
                $oc_description = $before . $deskripsi . $after. $options['after'];
        } 

        // If it's a category or tag
        elseif ( isset($_GET['terms']) || strpos(dirname($uri), 'category' ) !== false ) {
                if ( $options['term'] ) : 
                        $deskripsi = $options['term']; 
                else: 
                        if (strpos(dirname($uri), 'category' ) !== false ) :
                                $explode = explode('/',$uri);
                                $deskripsi = ucwords(permalink($explode[2], array( 'delimiter' => ' ' )) ); 
                        else :
                                $deskripsi = ucwords(permalink($_GET['terms'], array( 'delimiter' => ' ' )) ); 
                        endif;
                endif;
                if ( $options['before'] == '' ) : $before = 'Archives for categories '; else: $before = $options['before']; endif;
                if ( $options['after'] == '' ) : $after = ' on ' . site_path(); else: $after = $options['after']; endif;
                $oc_description = $before . $deskripsi . $after;
        } 

        // If it's a page on view folder
        elseif ( isset($_GET['do']) || strpos(dirname($uri), options('url_page') ) !== false ) {
                if ( $options['term'] ) : 
                        $deskripsi = short($options['term']); 
                else: 
                        if (strpos(dirname($uri), options('url_page') ) !== false ) :
                                $pathinfo = pathinfo ($uri);
                                $deskripsi = ucwords(permalink($pathinfo['filename'], array( 'delimiter' => ' ' )) ); 
                        else :
                                $deskripsi = ucwords(permalink($_GET['do'], array( 'delimiter' => ' ' )) ); 
                        endif;
                endif;
                if ( $options['before'] == '' ) : $before = 'Pages description '; else: $before = $options['before']; endif;
                if ( $options['after'] == '' ) : $after = ''; else: $after = $options['after']; endif;
                $oc_description = $before . $deskripsi . $after . $separate . $sep;
        } 
        // If it's a 404
        elseif ( isset($_GET['e']) == '404' ) {
                $oc_description = 'This is somewhat embarrassing, isn’t it?';
        }

        // If it's a search
        elseif ( isset($_GET['s']) || strpos(dirname($uri), config('search_url') ) !== false ) {
                if ( $options['before'] == '' ) : $before = 'Search Results for '; else: $before = $options['before']; endif;
                if ( $options['after'] == '' ) : $after = ' on ' . site_path() . $separate . $sep; else: $after = $options['after']; endif;
                $oc_description = $before . ucwords( bad_words(get_search_query()) ) . $after ;
        }

        // If there is a home or empty
        else {
                $oc_description = $sep ;
        }

        // Send it out
        echo $oc_description;
}
/**
 * Filters oc_keywords to print a neat <meta name="keywords"> tag based on what is being viewed.
 */
function oc_keywords( $separate = ' | ', $options = array() ){
        global $keywords,$hack_keywords,$keywords_before,$keywords_after,$uri,$cek;
	$defaults = array(
                'term' => $hack_keywords,
                'before' => $keywords_before,
                'after' => $keywords_after
	);

	$sep = config( 'sitekeywords' );

	// Merge options
	$options = array_merge($defaults, $options);

        // If there is a post
        if ( $keywords ) {
                if ( $keywords ) : 
                        $deskripsi = ucwords(short($keywords, 140));
                else: 
                        $pathinfo = pathinfo ($uri);
                        $deskripsi = ucwords(permalink($pathinfo['filename'], array( 'delimiter' => ' ' )) ); 
                endif;
                if ( $options['before'] == '' ) : $before = ''; else: $before = $options['before']; endif;
                if ( $options['after'] == '' ) : $after = ''; else: $after = $options['after']; endif;
                $oc_keywords = $before . $deskripsi . $after. $options['after'];
        } 

        // If it's a category or tag
        elseif ( isset($_GET['terms']) || strpos(dirname($uri), 'category' ) !== false ) {
                if ( $options['term'] ) : 
                        $deskripsi = $options['term']; 
                else: 
                        if (strpos(dirname($uri), 'category' ) !== false ) :
                                $explode = explode('/',$uri);
                                $deskripsi = ucwords(permalink($explode[2], array( 'delimiter' => ' ' )) ); 
                        else :
                                $deskripsi = ucwords(permalink($_GET['terms'], array( 'delimiter' => ' ' )) ); 
                        endif;
                endif;
                if ( $options['before'] == '' ) : $before = 'Archives for categories '; else: $before = $options['before']; endif;
                if ( $options['after'] == '' ) : $after = ' on ' . site_path(); else: $after = $options['after']; endif;
                $oc_keywords = $before . $deskripsi . $after;
        } 

        // If it's a page on view folder
        elseif ( isset($_GET['do']) || strpos(dirname($uri), options('url_page') ) !== false ) {
                if ( $options['term'] ) : 
                        $deskripsi = short($options['term']); 
                else: 
                        if (strpos(dirname($uri), options('url_page') ) !== false ) :
                                $pathinfo = pathinfo ($uri);
                                $deskripsi = ucwords(permalink($pathinfo['filename'], array( 'delimiter' => ' ' )) ); 
                        else :
                                $deskripsi = ucwords(permalink($_GET['do'], array( 'delimiter' => ' ' )) ); 
                        endif;
                endif;
                if ( $options['before'] == '' ) : $before = 'Pages description '; else: $before = $options['before']; endif;
                if ( $options['after'] == '' ) : $after = ''; else: $after = $options['after']; endif;
                $oc_keywords = $before . $deskripsi . $after . $separate . $sep;
        } 
        // If it's a 404
        elseif ( isset($_GET['e']) == '404' ) {
                $oc_keywords = 'This is somewhat embarrassing, isn’t it?';
        }

        // If it's a search
        elseif ( isset($_GET['s']) || strpos($uri, '/'.$cek[1].'/' ) !== false ) {
                if ( $options['before'] == '' ) : $before = ''; else: $before = $options['before']; endif;
                if ( $options['after'] == '' ) : $after = ''; else: $after = $options['after']; endif;
                $oc_keywords = $before . ucwords( bad_words(get_search_query()) ) . $after ;
        }

        // If there is a home or empty
        else {
                $oc_keywords = $sep ;
        }

        // Send it out
        echo $oc_keywords;
}
function tluo920(){
       /** $our = '<div class="container" style="margin: 30px;background-color: #fff;"><table class="table" style="width: 700px;max-width: 700px;margin: 0 auto;padding: 20px 0;"><tr><td style="vertical-align:middle;width:30%">License Key Required!</td><td style="width:70%">This domain is not registered for this license.</td></tr></table></div>';
        echo $our;
        exit(); **/
}
function recent_posts($limit = 9) {
	$path = $_SERVER['DOCUMENT_ROOT'] .'/cache/single/';
        if ( !file_exists( $path ) ) {
		mkdir( $path, 0755, true );
	}
        if ($handle = opendir($path)) {
                while (false !== ($entry = readdir($handle))) {
                        if ($entry != "." && $entry != "..") {
                                $daftar[] = $entry;
                        }
                }
	}
        if(is_array($daftar)):
                $i = 0;
                foreach ($daftar as $key => $val) {
                        if ( file_exists( $path . $val ) ) {
                                $data = @file_get_contents( $path . $val ); 
                                $unserialize = unserialize( $data );
                                $uhoh['id']      = $unserialize['id'];
                                $uhoh['slug']    = $unserialize['slug'];
                                $uhoh['title']   = $unserialize['title'];
                                $uhoh['pubdate'] = $unserialize['pubdate'];
                                $damn[] = $uhoh;
	                }
                $i++;
                if($i == $limit) break;
                }
        endif;
        closedir($handle);

        if($damn != ''):
                return $damn;
        else:
                return false;

        endif;
}
function recent_search($limit = 10, $pos = 0) {
	$word_path = DOCUMENT_ROOT .'/app/content/keywords/'; 
	if(file_exists($word_path.'items'.$pos.'.txt')) {
        	$handle = fopen($word_path.'items'.$pos.'.txt', "r");
	}
	else
	{
		$handle = '';
	}

	if ($handle) {
		if (($data = fgets($handle)) !== false) {
			$result = explode(",", $data );
                        $res = array_slice($result, -$limit, $limit, true);
                        if($res != ''):
                                shuffle($res);
                		foreach($res as $hasil) {
                                        if ($hasil != '') {
                                		$a['title'] = $hasil;
                                		$output[] = $a;
                        	        }
                        	}
                        endif;
		}
		fclose($handle);
	}
        if($output != ''):
                return $output;
        else:
                $a['title'] = 'hello world';
                $output[] = $a;
                return $output;

        endif;
}
function sitemap_search($limit = 500, $pos = 1, $sep = ",") {
	$word_path = DOCUMENT_ROOT .'/app/content/keywords/'; 
	if(file_exists($word_path.'items'.$pos.'.txt')) {
        	$handle = @file_get_contents($word_path.'items'.$pos.'.txt');
	}
	else
	{
		$handle = '';
	}

	if ($handle) {

		$result = explode($sep, $handle );
		$res = array_slice($result, -$limit, $limit, true);
		if($res != ''):
                        shuffle($res);
			foreach($res as $hasil) {
				if ($hasil != '') {
					$a['title'] = $hasil;
                                	$output[] = $a;
				}
			}
		endif;

	}
        if($output != ''):
                return $output;
        else:
                $a['title'] = 'hello world';
                $output[] = $a;
                return $output;

        endif;
}