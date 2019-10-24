<?php  
if (options('url_tvdb') != 'tv/watching') {
    if(strpos($uri, 'tv/watching' ) !== false ) {
        $ur = str_replace('tv/watching', options('url_tvdb'), $uri);
        header('location:'.site_url() . $ur);
    }
}

if ( $_GET['action'] == 'serie' || strposa($uri, options('url_tvdb') ) ) :
    if ( isset($_GET['id']) || strposa($uri, options('url_tvdb') ) ) {
        $apikey = options('tvdb_api');
        if(isset($_GET['id'])) {
            $tvdb       = new Tvdb( $apikey );
            $tvid       = $_GET['id'];
            $row        = $tvdb->seriesEpisode($tvid)['serie'];
            $row        = $tvdb->seriesEpisode($tvid)['serie'];
            $episodes   = $tvdb->seriesEpisode($tvid)['episodes'];
            $fanart     = $tvdb->fanart($row, style_theme() . '/images/no-backdrop.png');
            $poster     = $tvdb->poster($row->poster);
            $judul      = $row->name;
            $hack_title = 'Watch '.$name.' Online Free';
            $description= $row->overview;
            $time       = $row->runtime;
            $runtime    = format_time($time);
            $first_aired= format_tanggal($row->firstAired);
            $last_aired = format_tanggal($row->lastUpdated);
            $genres     = $tvdb->genres($row->genres);
            $networks   = $row->network;
            $rating     = $row->rating;
            $emp_rating = 11 - $rating;
            $vote_count = $row->ratingCount;
            $images 	= $fanart;

            if (isset($_GET['season']) && isset($_GET['episode'])) {
                $season = $_GET['season']; $episode = $_GET['episode'];

                if ($season != '' && $episode != '') {
                    $_season  = $tvdb->last_season($episodes);
                    $_episode = $tvdb->last_episode($episodes);

                    $dataepisode = null;

                    if($season > $_season) 
                    {
                        $dataepisode = null;
                    } 
                    else 
                    {
                        foreach ($episodes as $key) {
                            if($key->season == $season) {
                               $_episode = $key->number; 
                            }
                        }

                        if($episode > $_episode) 
                            $dataepisode = null;
                        else 
                            $dataepisode = $tvdb->episode($tvid, $season, $episode);
                    } 
                    $episode_name= empty($dataepisode->name) ? '': $dataepisode->name;
                    $_akhir     = empty($dataepisode->name) ? '' : ' : ' . $episode_name;
                    $judul      = $judul . ' - Season ' .$season.' Episode '.$episode . $_akhir; 
                    $hack_title = 'Watch '.$judul.' Online Free';
                    $gambar     = $tvdb->thumbnail($dataepisode, $fanart);
                    $images = $gambar;
                    $release_date= empty($dataepisode->firstAired) ? '' : $tvdb->date($dataepisode->firstAired);
                    $description= empty($dataepisode->overview) ? $row->overview : $dataepisode->overview;
                }

            }
        } else {
            if(strpos($uri, options('url_tvdb') ) !== false ) {
            	$strsz		= str_replace(options('url_tvdb') . '/', '', $uri);
                $strs       = explode('/', $strsz);
                $tvid       = $strs[1];
                $season     = $strs[2];
                $episode    = $strs[3];
                $tvdb       = new Tvdb( $apikey );
                $row        = $tvdb->seriesEpisode($tvid)['serie'];
                $episodes   = $tvdb->seriesEpisode($tvid)['episodes'];
                $fanart     = $tvdb->fanart($row, '/assets/images/no-backdrop.png');
                $poster     = $tvdb->poster($row->poster);
                $judul      = $row->name;
                $title 		= $judul;
                $hack_title = 'Watch '.$judul.' Online Free';
                $description= $row->overview;
                $time       = $row->runtime;
                $runtime    = format_time($time);
                $first_aired= format_tanggal($row->firstAired);
                $last_aired = format_tanggal($row->lastUpdated);
                $genres     = $tvdb->genres($row->genres);
                $networks   = $row->network;
                $rating     = $row->rating;
                $emp_rating = 11 - $rating;
                $vote_count = $row->ratingCount;
                $images 	= $fanart;

                if ($season != '' && $episode != '') {
                	$_season  = $tvdb->last_season($episodes);
					$_episode = $tvdb->last_episode($episodes);

					$dataepisode = null;

					if($season > $_season) 
					{
					    $dataepisode = null;
					} 
					else 
					{
					    foreach ($episodes as $key) {
					        if($key->season == $season) {
					           $_episode = $key->number; 
					        }
					    }

					    if($episode > $_episode) 
					        $dataepisode = null;
					    else 
					        $dataepisode = $tvdb->episode($tvid, $season, $episode);
					} 
					$episode_name= empty($dataepisode->name) ? '': $dataepisode->name;
					$_akhir 	= empty($dataepisode->name) ? '' : ' : ' . $episode_name;
                	$judul  	= $judul . ' - Season ' .$season.' Episode '.$episode . $_akhir; 
                	$hack_title	= 'Watch '.$judul.' Online Free';
                	$gambar 	= $tvdb->thumbnail($dataepisode, $fanart);
                    $images = $gambar;
                	$release_date= empty($dataepisode->firstAired) ? '' : $tvdb->date($dataepisode->firstAired);
                	$description= empty($dataepisode->overview) ? $row->overview : $dataepisode->overview;
                }
            }
        }
    }
endif;


                