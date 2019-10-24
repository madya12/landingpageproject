<?php
function youtube( $query = 'entertainment', $count = 12) {

        $array_tube = explode(",", options('youtube_api'));
        $youtube_api = $array_tube[mt_rand(0, count($array_tube) - 1)];

        $json = get_contents('https://www.googleapis.com/youtube/v3/search?part=snippet&q='.permalink(limit_word($query,5)).'&key='.$youtube_api.'&maxResults='.$count.'&order=relevance&type=video'); 
        if ($data = @json_decode($json))
      //debug($data);
        return (object) $data;
}