<?php

use Moinax\TvDb\Http\Cache\FilesystemCache;
use Moinax\TvDb\Http\CacheClient;
use Moinax\TvDb\Client;

class Tvdb
{

	protected $db;
	protected $tvdb_url = 'https://thetvdb.com';
	protected $tvdb_img = 'https://thetvdb.com/banners/';

	public function __construct($apikey)
	{
		$this->db = new Client($this->tvdb_url, $apikey);
	}

	public function search($query)
	{
		return $this->db->getSeries($query);
	}

	public function fanart($data, $default)
	{
		if (empty($data->fanArt)) 
		{
			if(empty($data->banner))
			{
				$image = $default;
			}
			else
			{
				$image = $this->tvdb_img . $data->banner;
			}
		}
		else
		{
			$image = $this->tvdb_img . $data->fanArt;
		}

		return $image;
	}

	public function thumbnail($data, $default)
	{
		if (empty($data->thumbnail)) 
		{
			$image = $default;
		}
		else
		{
			$image = $this->tvdb_img . $data->thumbnail;
		}

		return $image;
	}

	public function seriesEpisode($id)
	{
		$cache 		= new FilesystemCache(__DIR__.'/../../cache/tvdb');
		$httpClient = new CacheClient($cache, 600);
		$this->db->setHttpClient($httpClient);
		$data = $this->db->getSerieEpisodes(intval($id), 'en', Client::FORMAT_ZIP);
		return $data;
	}

	public function episode($id, $season, $episode)
	{
		return $this->db->getEpisode($id, $season, $episode);
	}

	public function url($id, $url_tv, $season = '', $episode = '')
	{
		if($season == '' && $episode == '')
			$url = '/' . $url_tv.'/'.$id;
		else
			$url = '/' . $url_tv.'/'.$id.'/'.$season.'/'.$episode;

		return $url;
	}

	public function star_rating($rating)
	{
		$rate = '';

		for ($i=0; $i < floor($rating); $i++) 
		{ 
			$rate .= '<i class="fa fa-star"></i>';
		}
		for ($j=0; $j < (10 - floor($rating)) ; $j++) 
		{ 
			$rate .= '<i class="fa fa-star-o"></i>';
		}

		return $rate;
	}

	public function episode_name($name, $number)
	{
		$get = '';
		if($name == '' or $name == null)
		{
			$get = 'Episode ' . $number;
		}
		else
		{
			$get = $name;
		}

		return $name;
	}

	public function poster($data)
	{
		if (empty($data)) 
		{
			$image = '/assets/images/no-cover.jpg';
		}
		else
		{
			$image = $this->tvdb_img . $data;
		}

		return $image;
	}

	public function last_season($data) {
	    $number = 0;
	    foreach ($data as $key) {
	        $number = $key->season;
	    }

	    return $number;
	}

	public function last_episode($data) {
	    $number = 0;
	    foreach ($data as $key) {
	        $number = $key->number;
	    }

	    return $number;
	}

	public function total_season($data)
	{
	    $num = 0;

	    foreach ($data as $key => $value) {
	        $num = $value->season;
	    }

	    return $num;

	}

	public function date($data)
	{
		if($data == null)
		{
			return '';
		}
		else
		{
			foreach ($data as $key) {
		        $data = $data;
		    }
		    $date = new DateTime($data->date);
		    return $date->format('d M Y');
		}
	}

	public function genres($data)
	{
		$genre = '';
		$count = 1;
		foreach ($data as $r) 
		{
			$genre .= $r;
			if($count == count($data) or count($data) == 1) break;
			$genre .= ' , ';
			$count++;
		}
		return $genre;
	}
}