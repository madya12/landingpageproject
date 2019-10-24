<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silver
| Template Name     : Black V1
| -------------------------------------------------------------------------------
*/
include('header.php');?>
<style>
table {
    font-family: arial, sans-serif;
    color: #A94442;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #000000;
}
</style>
<script type='text/javascript' src='<?php style_theme() ?>/assets/js/embed.min.js'></script>
<script src="<?php style_theme() ?>/assets/js/simplePlayer.js"></script>
<link rel='stylesheet' id='magelo-css' href='<?php style_theme() ?>/assets/css/style.min.css' type='text/css' media='screen,projection' />


    <link rel="stylesheet" href="<?php style_theme() ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php style_theme() ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php style_theme() ?>/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php style_theme() ?>/assets/css/magnific-popup.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php style_theme() ?>/assets/css/responsive.css">
    <!-- Script -->
    
<div class="header-pad"></div>

<style>
#mv-info .mvi-cover{background-position: right top; background-size: cover; background-image: url(<?php echo $images;?>)}
#mv-info .mvi-cover:after{background-image: none;}
#mv-info .mvi-cover:before{display: none;}
</style>
<div id="main" class="page-detail">
<div class="container">
<div class="main-content main-detail">
<div class="pad"></div><ol class="breadcrumb hidden-xs"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo site_url() ?>"><span itemprop="title"><i class="fa fa-home"></i> Home</span></a></li><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"><a href="<?php echo site_url() ?>" title="Movies" itemprop="url">Movies</a> </span></li><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"><a href="<?php echo site_uri() ?>" title="<?php echo $judul;?>" itemprop="url"><?php echo $judul;?></a> </span></li><li class="active"><span>WATCH</span></li></ol>

<div id="mv-info">
<div id="video-player">
			<div >
				<div id="magelo-player">
					<div class="embed-responsive embed-responsive-16by9">
						<div id="cover-top"></div>
						<div id="cover-bottom"></div>
						<link href="<?php style_theme() ?>/player/video-js.css" rel="stylesheet">
	<script src="<?php style_theme() ?>/player/videojs-ie8.min.js"></script>
	<script src="<?php style_theme() ?>/player/video.js"></script>
	<script src="<?php style_theme() ?>/player/resolution-switcher.js"></script>
	<link href="<?php style_theme() ?>/player/resolution-switcher.css" rel="stylesheet">
	<link href="<?php style_theme() ?>/player/videojs-overlay.css" rel="stylesheet">
	<script src="<?php style_theme() ?>/player/videojs-overlay.min.js"></script>  
	<script src="<?php style_theme() ?>/player/videojs.disableProgress.js"></script>
						<div id="cover-top"></div>
						<div id="cover-bottom"></div>
						<video id="my-video" class="video-js vjs-16-9 vjs-big-play-centered" controls="" preload="auto" width="600" height="315" poster="<?php echo $images;?>" data-setup="">
						<source src="http://github.com/galihsophian/galihsophian.github.io/blob/master/Series.mp4?raw=true" type="video/mp4" label="SD">
						<source src="http://github.com/galihsophian/galihsophian.github.io/blob/master/Series.mp4?raw=true" type="video/mp4" label="HD">
						<track kind="subtitles" src="" srclang="en" label="English">
						<track kind="subtitles" src="" srclang="en" label="French">
						<track kind="subtitles" src="" srclang="en" label="Germany">
						<track kind="subtitles" src="" srclang="en" label="Netherland">
						<track kind="subtitles" src="" srclang="en" label="Italy">
						<track kind="subtitles" src="" srclang="en" label="Arabic">
					</video>
					script>
videojs('my-video').videoJsResolutionSwitcher();
limitload = 0;
</script>
<script>
            var myPlayer = videojs('my-video', {"fluid": false, ControlBar: {
                DurationDisplay: false}
            });
            var pausetime = 8; // stop at 8 seconds 
            myPlayer.on('timeupdate', function(e) {
                if (myPlayer.currentTime() >= pausetime) {
                    myPlayer.pause();
                    $('#modal-offer').modal({show: true, backdrop: 'static'});
                    
                    myPlayer.exitFullscreen();
                }
            });
            myPlayer.disableProgress({
                autoDisable: true
            });            
            
</script>
						<span class="play-wrapper ease">
							<span id="play" class="fa fa-youtube-play ease"></span>
						</span>
						<div class="media-controls">
							<div id="leftControls">
								<button type="button" name="Play" class="btn glyphicon glyphicon-play" id="play_btn"></button>
								<button id="volumeInc_btn" name="Volume" class="btn glyphicon glyphicon-volume-up"></button>
								<button id="timeContainer" class="btn"><span class="dmax">00:00:00</span> / <span class="dmax"><time itemprop="duration" datetime="PT<?php echo $runtime;?>M"><?php echo $runtime;?></span></button>
							</div>

							<div id="progressContainer">
								<span id="progress-bar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-count="0.387931034483%"></span>
							</div>
							<div id="rightControls">
								<div id="sliderContainer">
									<div id="slider" class="ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all">
										<div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="height: 50%;"></div>
										<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="bottom: 50%;"></span>
									</div>
								</div>
								<div id="setting_btn" class="btn-group dropup">
									<button name="Setting" class="btn glyphicon glyphicon-cog dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-hd-video"></span></button>
									<ul class="dropdown-menu dropdown-menu-right">
										<li class="hq active">HD 1080p</li>
										<li class="hq">HD 720p</li>
									</ul>
								</div>
								<button id="fullscreen_btn" name="Fullscreen" class="btn glyphicon glyphicon-resize-full"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="modal-offer" data-domain="#" data-campaign="" data-movie="354912" data-title="<?php echo $judul;?>" class="modal fade pointer" onclick="window.location.href='request';">
			<div class="modal-dialog">
				<div id="login" class="modal-content">
					<div class="top-content" style="background-image:url(<?php echo $images;?>); height: 50px;"">
						<p class="text-center top"><?php echo $judul;?></p>
						<p class="text-center bottom">Released Date: <?php echo date('M d, Y', strtotime($release_date));?></p>
					</div>
					<div class="bottom-content">
						<img class="img-responsive" src="<?php style_theme() ?>/images/offer.jpg" width="614" height="275">
						<p class="text-center"><span class="btn btn-offer btn-danger btn-lg" data-title="<?php echo $judul;?>">Register Free Account</span></p>
					</div>
				</div>
			</div>
		</div>
<div id="bar-player">
<span id="button-favorite">
<a onclick="favorite(64432,2,'The Magicians')" class="btn bp-btn-like btn-favorite-64432"><i class="fa fa-heart"></i>Favorite</a>
<div class="popover fade top in popover-like" style="display: none;">
<div class="arrow" style="left: 25%;"></div>
<div class="popover-content">
<p id="popover-notice"></p>
<p class="mt10">
<a href="javascript:void(0)" onclick="favorite(<?php $tvid;?>,2,'<?php echo $judul;?>')" class="btn btn-attention btn-sm"><i class="fa fa-heart"></i> Favorite</a>
<a href="javascript:void(0)" class="btn btn-sm btn-default toggle-popover-like">Dismiss</a>
</p>
</div>
</div>
</span>
<div class="btn hidden-xs" onClick="autonext();">
<i class="fa fa-step-forward"></i> Auto Next: <span id="autonext"></span>
</div>
<a href="#comment-disqus" class="btn bp-btn-review">
<i class="fa fa-comments"></i>
<span class="disqus-comment-count" id="comment-count" data-disqus-url="<?php echo site_uri() ?>"><?php echo $vote_count;?> Comment</span>
</a>
<a class="btn bp-btn-report hidden" data-target="#pop-report" data-toggle="modal" style="color: #fff000; float: right"><i class="fa fa-warning"></i> Report</a>
<a id="download-srt" href="javascript:window.open(player.getPlaylistItem().tracks[0].file + '?name=pmovies.to_626-evolution_sd');" class="btn hidden-xs" style="color: #F22613; float: right;display:none;"><i class="fa fa-download"></i> Subtitle</a>
<a onclick="favorite(<?php $tvid;?>,2,'<?php echo $judul;?>')" class="btn hidden-xs" style="color: #F22613; float: right"><i class="fa fa-download"></i> Download</a>
<div class="clearfix"></div>
</div>
<div id="favorite-alert" style="display: none;">
<div class="alert alert-attention" role="alert">
<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
<i class="fa fa-check"></i> <span id="favorite-message"></span>
</div>
</div>
<div id="report-alert" style="display: none;">
<div class="alert alert-attention" role="alert">
<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
<i class="fa fa-check"></i> Thanks for your report! We will fix it asap.
</div>
</div>



<div class="alert alert-attention" role="alert">
<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
<i class="fa fa-exclamation-circle"></i> Scroll down and click to choose episode/server you want to watch.<br>If you don't hear the sounds, please try another server or use Desktop browsers to watch.<br>If you got load forver or error message, please press Ctrl + F5 or clear your browser cache and try again.<br></span>
</div>


<div id="list-eps">
<div id="server-3" class="le-server">
<div class="les-title"><i class="fa fa-desktop mr5"></i><strong>SERVER 1</strong></div>
<div class="les-content">
<a data-toggle="modal" data-target="#modal-login" href="#modal-login" class="btn-eps first-ep active">HD</a>
</div>
<div class="clearfix"></div>
</div>
<div id="server-13" class="le-server">
<div class="les-title"><i class="fa fa-desktop mr5"></i><strong>SERVER 10</strong></div>
<div class="les-content">
<a data-toggle="modal" data-target="#modal-login" href="#modal-login" class="btn-eps first-ep ">Blueray</a>
</div>
<div class="clearfix"></div>
</div>
<div id="server-8" class="le-server">
<div class="les-title"><i class="fa fa-desktop mr5"></i><strong>OpenLoad</strong></div>
<div class="les-content">
<a data-toggle="modal" data-target="#modal-login" href="#modal-login" class="btn-eps first-ep ">HD</a>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
<style>
#myList a{ display:none;}
#movie-info .info{}
#movie-info .info .desc { width: 100%; margin-bottom: 10px; font-size: 12px; font-style: italic; color: #aaa;}
</style>
</script>
<div class="row" id="movie-info">
<div class="col-md-8 col-xs-12">
<div class="content-wrap">
                                <div class="thumb col-img-thumb">
<img itemprop="image" src="<?php echo $poster;?>" title="<?php echo $title;?> (<?php echo $year;?>)" alt="<?php echo $title;?> (<?php echo $year;?>)" class="poster-img">
</div>
                                <div class="video-details xs-top-40">
                                    <div class="single-section">
                                        <h3 class="video-title"><?php echo $title;?></h3>
                                        <p class="video-release-date"><?php echo $release_date;?></p>
                                        <div class="ratings-wrap">
                                            Watch <?php echo $judul;?> full movie online
                                            <span class="rating"><?php echo $rating;?></span>
                                            <div class="expanded-rating">
                                                <div class="star-rating">
                                                
                                                
                                                
                                                
                                                 
													<span class="star  on"></span>
													<span class="star  on"></span>
													<span class="star  on"></span>
													<span class="star  on"></span>
													<span class="star  on"></span>
													<span class="star  on"></span>
													<span class="star  on"></span>
													<span class="star  off"></span>
													<span class="star  off"></span>
													<span class="star  off"></span>
													                                                   
                                                </div>
                                                <div class="user-voted">
                                                    <i class="fa fa-user"></i> <?php echo $vote_count;?> Votes
                                                </div>
                                            </div>
                                        </div>
                                        
                                 
                                            
												
													<a href="#seasons"></a>													<a href="#episode"></a>												
												
													
															  <div class="video-attributes">
																 
																	<p class="cast"><label>Title :<strong>  </label> <?php echo $title;?></strong></p>
																	
																																		<p class="cast2" <?php echo $release_date == '' ? 'hidden' : '' ?>><label>Release Date :</label> <?php echo $release_date;?></p>
																		
																	<p class="cast2"><label>Runtime :</label> <time itemprop="duration" datetime="PT<?php echo $runtime;?>M"><?php echo $runtime;?> Minutes</time>
																	</p>
																	<p class="cast2"><label>Genres :</label>
																		<?php echo $genres;?>																		</p>
																	<p class="cast2" <?php echo $episode_name == '' ? 'hidden' : '' ?>><label>Episode Title :</label>
																		<?php echo $episode_name;?>																		</p>
																	
																																	<p class="cast2"><label>Networks :</label> 
																			<?php echo $networks;?>																		</p>
																																		<p class="cast2" <?php echo $alternative_titles == '' ? 'hidden' : '' ?>><label>Alternative Titles :</label> 
																			<?php echo $alternative_titles;?>																		</p>
                                                                  
																	                                                                      <p class="cast2"><label>Overview :</label> 
																			<?php echo $description;?></p>

														</div>
													</div>
												</div>
											</div>

<div id="mv-keywords" class="hidden-xs">
<strong class="mr10">#Tags:</strong>
<a href='#' title='<?php echo $keywords;?>' rel='tag' ><h5 itemprop='keywords' <?php echo $keywords == '' ? 'hidden' : '' ?>><?php echo $keywords;?></h5></a></div>
<div class="clearfix"></div>

</div>
<div class="col-md-4 hidden-sm hidden-xs">
<div class="mvic-btn" style="left: 0px; right: 0px;">
<div class="mv-rating" style="margin-bottom: 10px"></div>
<div class="clearfix"></div>
<a class="twitter-follow-button" href="http://twitter.com/imdb" data-size="large">Follow @<?php echo config('sitename') ?></a>
<a class="twitter-timeline" href="http://twitter.com/imdb" data-height="500"><?php echo config('sitename') ?> Twitter</a>

</div>



</div>
</div>
<div class="clearfix"></div>
 

<div class="movies-list-wrap2 mlw-related">
<div class="ml-title"><span><i class="fa fa-thumbs-o-up"></i> Season List</span></div>
<div class="movies-list movies-list-full">
<table class="table table-bordered table-striped">
        	<thead>
        		<tr>
        			<th width="5">Season</th>
        			<th width="5">Episode</th>
        			<th width="250">Episode Title</th>
        			<th width="100">Release Date</th>
        			<th width="100">Download Link</th>
        		</tr>
        	</thead>
        	<tbody>
    		<?php foreach ( $episodes as $epi ): ?>
    			<tr>
    				<td><?php echo $epi->season ?></td>
    				<td><?php echo $epi->number ?></td>
    				<td><?php link_tvdb($tvid,$epi->season, $epi->number,$tvdb->episode_name($epi->name, $epi->number)) ?></td>
    				<td><?php echo $tvdb->date($epi->firstAired) ?></td>
    				<td><a class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#modal-login" href="#/<?php echo $judul . '.mp4' ?>">
									<i class="icon-download2"></i> Download Link
								</a>
					</td>
    			</tr>
    		<?php endforeach ?>
        	</tbody>
        </table>
 </div>

</div>

<div class="content-kus" style="text-align: center; margin: 20px 0; padding: 15px;display: inline-block;">

 



</div>
<script type="text/javascript">
$(document).ready(function () {
	$.get(base_url + 'ajax/movie_rate_info/626-evolution', function (data){
		$('.mv-rating').html(data);
	});
	$("#carousel-actor").owlCarousel({
		autoPlay :2000,
		stopOnHover : true,
		items:7,
		itemsDesktop:[1000,6],
		itemsDesktopSmall:[900,6],
		itemsTablet:[600,2],
		itemsMobile:false,
	});
	$(".des").shorten({
		"showChars" : 200
	});
});
var disqus_config = function () {
	this.page.url = "<?php echo site_uri() ?>";
	this.page.identifier = "movieID-<?php $tvid;?>";
	this.page.title = "<?php echo $judul;?>";
};
</script> </div>
</div>
</div>
<script type="text/javascript">
var movie = {
	id: "<?php $tvid;?>",
	name: "<?php echo $judul;?>",
	full_episode: "1",
	total_episode: "0",
	quality: "SD",
	episode: "329588",
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: 8192</p>
<p>Message:  Function mcrypt_get_iv_size() is deprecated</p>
<p>Filename: libraries/Encrypted.php</p>
<p>Line Number: 23</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/application/libraries/Encrypted.php<br />
			Line: 23<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/application/views/content/movie_watch.php<br />
			Line: 209<br />
			Function: encode			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/application/views/layout.php<br />
			Line: 158<br />
			Function: view			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/application/controllers/Movie.php<br />
			Line: 120<br />
			Function: view			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/index.php<br />
			Line: 315<br />
			Function: require_once			</p>

		
	

</div>
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: 8192</p>
<p>Message:  Function mcrypt_create_iv() is deprecated</p>
<p>Filename: libraries/Encrypted.php</p>
<p>Line Number: 24</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/application/libraries/Encrypted.php<br />
			Line: 24<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/application/views/content/movie_watch.php<br />
			Line: 209<br />
			Function: encode			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/application/views/layout.php<br />
			Line: 158<br />
			Function: view			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/application/controllers/Movie.php<br />
			Line: 120<br />
			Function: view			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/index.php<br />
			Line: 315<br />
			Function: require_once			</p>

		
	

</div>
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: 8192</p>
<p>Message:  Function mcrypt_encrypt() is deprecated</p>
<p>Filename: libraries/Encrypted.php</p>
<p>Line Number: 25</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/application/libraries/Encrypted.php<br />
			Line: 25<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/application/views/content/movie_watch.php<br />
			Line: 209<br />
			Function: encode			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/application/views/layout.php<br />
			Line: 158<br />
			Function: view			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/application/controllers/Movie.php<br />
			Line: 120<br />
			Function: view			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/<?php echo config('sitename') ?>.com/public_html/index.php<br />
			Line: 315<br />
			Function: require_once			</p>

		
	

</div>hash: "sTTb9Pl7dfILJXwPDuHmr4dpwJQCXi7Nq0T4iqQLhpF996_zqXkUt70t3lsWiHQrhwhZF3xRsjqwsll1wEMjXqEeReqA7d4JFTEjKUQrIX-xh0cURC24QQSDxHxn69nVu8wpqcA9khJ8nVO8BzuIdE7dSLyaGrG1aPqNEQwLk8FxuI7oOn4FPybaoLpM9lChvYBLoFwM8hl_lUbMqt_-uXiRHP3mkNDgUmWJsudfMnzYM_BlJtL-esmoVIYeryrkt8GMq2KMFU-tzdsN00-YQ5dw_ILbI-JiEpec5A_JwWI",player_type: "jwplayer",nextServer: true,nextServerEpisode: "<?php echo site_uri() ?>watch/server-10-putlocker-megashare9-123movies-0.html",};
$(document).ready(function (){
	$('[data-toggle="tooltip"]').tooltip();
	/*setupPlayer();*/
	/*Auto Next*/
	var getAutoNext = $.cookie("player-next");
	if(!getAutoNext){
		$.cookie("player-next","1",{expires:365,path: '/'});
		$('#autonext').html('ON');
	}else if(getAutoNext==0){
		$('#autonext').html('OFF');
	}else{
		$('#autonext').html('ON');
	}
	
	if (!$.cookie('report-' + movie.id)) {
		$('.bp-btn-report').removeClass('hidden');
	}
	
	$("#toggle-schedule").click(function (e) {
		$("#toggle-schedule").toggleClass("active");
		$(".se-list").toggle();
	});
	
	setTimeout(function () {
		if (!$.cookie('notice-favorite-' + movie.id)){
			if ($('.popover-like').length > 0) {
				if (parseInt(movie.total_episode) > 1 || movie.quality !== "HD"){
					$.cookie('notice-favorite-' + movie.id, true, {expires: 3, path: '/'});
					if(parseInt(movie.full_episode) == 0){
						var notice_message = 'Get updated once new episode is available. Favorite this now.';
					}
					if(movie.quality != "HD"){
						var notice_message = "Get updated once this movie is available in HD. Favorite this now.";
					}
					if(notice_message){
						$('.popover-like').show();
						$('#popover-notice').text(notice_message);
						$('.toggle-popover-like').click(function () {
							$('.popover-like').hide();
						});
					}
				}
			}
		}
	}, 2000);

	setTimeout(function () {
		updateMovieView(movie.id)
	}, 5000);
});
</script>

<style>
.modal-report{}
.modal-report .modal-body{ padding-top: 0;}
.modal-report .form-group .fg-radio{ display: inline-block; float: left; margin: -1px 0 0; padding: 8px 0; margin-right: 20px;}
.modal-report .form-group input{ height: auto; margin-right: 5px;}
.report-list{ background: rgba(0,0,0,0.02); padding: 0; font-size: 12px; border: 1px solid #ddd; border-radius: 3px; margin: 10px 0; overflow: auto;}
.report-list .rl-block{ padding: 10px 15px; border-bottom: 1px solid #ddd;}
.report-list .rl-block:last-of-type{ border-bottom: none;}
.report-textarea textarea{ resize: none; font-size: 12px;}
.report-list .rl-title{ font-size: 14px;}
</style>
<div class="modal fade modal-report" id="pop-report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
<h4 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i>Report</h4>
</div>
<div class="modal-body">
<form id="report-form" method="POST" action="http://<?php echo config('sitename') ?>.net/ajax/episode_report">
<input type="hidden" id="report-eID" name="episodeID" value="329588">
<input type="hidden" id="report-URL" name="urlrequest" value="http://<?php echo config('sitename') ?>.net/movie/626-evolution/watch/server-1-picasa-0.html">
<div class="form-group report-list">
<div class="rl-block">
<div class="block rl-title"><strong>Movie</strong></div>
<label for="radios-1" class="fg-radio">
<input type="checkbox" value="1" name="movie[broken]" class="needsclick"> Broken
</label>
<label for="radios-2" class="fg-radio">
<input type="checkbox" value="1" name="movie[wrong]" class="needsclick"> Wrong movie
</label>
<label for="radios-3" class="fg-radio">
<input type="checkbox" value="1" name="movie[others]" class="needsclick"> Others
</label>
<div class="clearfix"></div>
</div>
<div class="rl-block">
<div class="block rl-title"><strong>Audio</strong></div>
<label for="radios-5" class="fg-radio">
<input type="checkbox" value="1" name="audio[notsynced]" class="needsclick"> Not Synced
</label>
<label for="radios-6" class="fg-radio">
<input type="checkbox" value="1" name="audio[wrong]" class="needsclick"> There's no Audio
</label>
<label for="radios-7" class="fg-radio">
<input type="checkbox" value="1" name="audio[others]" class="needsclick"> Others
</label>
<div class="clearfix"></div>
</div>
<div class="rl-block">
<div class="block rl-title"><strong>Subtitle</strong></div>
<label for="radios-8" class="fg-radio">
<input type="checkbox" value="1" name="sub[notsynced]" class="needsclick"> Not Synced
</label>
<label for="radios-9" class="fg-radio">
<input type="checkbox" value="1" name="sub[wrong]" class="needsclick"> Wrong subtitle
</label>
<label for="radios-10" class="fg-radio">
<input type="checkbox" value="1" name="sub[missing]" class="needsclick"> Missing subtitle
</label>
<div class="clearfix"></div>
</div>
</div>
<div class="report-textarea mt10">
<textarea name="message" class="form-control" placeholder="Describe the issue here (Optional)" maxlength="255" minlength="3"></textarea>
</div>
<div style="display: none;" id="report-error-message" class="alert alert-danger"></div>
<div class="report-btn text-center mt20">
<button id="report-submit" type="submit" class="btn btn-attention mr5">Send</button>
<button data-dismiss="modal" class="btn btn-default">Cancel</button>
<div style="display: none;" id="report-loading" class="cssload-center">
<div class="cssload"><span></span></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

<div class="modal fade modal-subc modal-resume" id="pop-resume" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
</div>
<div class="modal-body text-center">
<h4 style="color: #F48625; margin-bottom: 15px;">Resume playing?</h4>
<div class="clearfix"></div>
<p class="desc">Welcome back! You left off at <span id="time-resume"></span>. Would you like to resume watching where you left off?</p>
<div class="block mt10">
<div class="pull-left" style="width: 48%;">
<button onclick="function_one();" data-dismiss="modal" type="button" class="btn btn-block btn-attentionful btn-approve mt20">Yes, please</button>
</div>
<div class="pull-right" style="width: 48%;">
<button onclick="player.seek(0);" data-toggle="tooltip" data-dismiss="modal" type="button" aria-label="Close" class="btn btn-block btn-default btn-approve mt20" data-original-title="" title="">No, thanks</button>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade modal-cuz" id="pop-censored" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<h4 class="modal-title" id="myModalLabel">NOTIFICATION !</h4>
</div>
<div class="modal-body">
<h4 style="text-align:center;color: red;">
Films with images and sensitive content.<br>
The audience should consider before watching
</h4>
<div>
<a class="btn btn-block btn-attention btn-approve mt10" style="width: auto; display: inline-block;" href="http://<?php echo config('sitename') ?>.net/">EXIT</a>
<a class="btn btn-block btn-attention btn-approve mt10 pull-right" style="width: auto; display: inline-block;" data-dismiss="modal" aria-label="Close">CONTINUE</a>
</div>
<div class="pull-right" style="color: #ea4858;">Confirmed on 18+</div>
</div>
</div>
</div>
</div>


	
		

		<script type='text/javascript' src='<?php style_theme() ?>/assets/js/scripts.min.js'></script>
		<script type='text/javascript' src='<?php style_theme() ?>/assets/js/embed.min.js'></script>
<?php include('footer.php'); ?>



<div class="modal animated bounceIn" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-watch" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content clearfix"> <div class="modal-header bg-attention"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">PLEASE SIGN UP TO WATCH <?php echo $title ?></h4> </div><div class="modal-body clearfix"> <div class="row"> <div class="col-md-6" id="login"> <img class="img-responsive" src="<?php echo $w780; ?>"> <hr> <h5>Member Login</h5> <div class="form-group"> <input type="text" class="form-control input-sm" id="userid" placeholder="username"> </div><div class="form-group"> <input type="password" class="form-control input-sm" id="password" placeholder="password"> </div><div class="form-group"> <span class="onload label label-attention" style="display: none;">Please wait...</span> <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span> </div><input type="submit" id="submov" class="btn btn-danger" value="Log me in"> </div><div class="col-md-6"> <ul class="list-group"> <li class="list-group-item"> <h4 class="list-group-item-heading">High Quality Movies</h4> <p class="list-group-item-text">All of the Movies are available in the superior HD Quality or even higher!</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch Without Limits</h4> <p class="list-group-item-text">You will get access to all of your favourite the Movies without any limits.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">100% Free Advertising</h4> <p class="list-group-item-text">Your account will always be free from all kinds of advertising.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch anytime, anywhere</h4> <p class="list-group-item-text">It works on your TV, PC, or MAC!</p></li></ul> </div></div></div><div class="modal-footer bg-attention"> <a class="btn btn-danger" href="/?action=register">Sign Up For Free</a> </div></div></div></div>