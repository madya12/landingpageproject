<?php
   /*
   | -------------------------------------------------------------------------------
   | Author            : G-silver
   | Template Name     : Black V1
   | -------------------------------------------------------------------------------
   */
   $owl = true;
   include('header.php');?>
<?php include('menu.php');?>
<div id="hero" class="carousel slide slide-detail carousel-fade" data-ride="carousel">
   <div class="carousel-inner">
      <div class="item active" style="background-image: url('<?php echo $images_small;?>'); padding-top: 103px; -webkit-filter: blur(5px);
         -moz-filter: blur(5px);
         -o-filter: blur(5px);
         -ms-filter: blur(5px);
         filter: blur(5px);"></div>
   </div>
</div>
<style type="text/css">
   .image-cover:hover ~ .btn-playnow {
   color: white;
   }
   .btn-group, .btn-group-vertical {
   margin: auto;
   display: table!important;
   margin-top: 50px;
   }
   .nav li ul li a:after {
   height: 0px!important;
   }
   .navbar.banner--clone .nav li.active a:after {
   bottom: -11px!important;
   }
   .navbar.banner--clone .nav li ul li a {
   color: white!important;
   }
   .margin-top-20 h5 {
   margin-left: 7px;
   } 
   .btn-playnow {
   visibility: visible; 
   color: #ffffffb0; 
   font-size: 72px; 
   position: absolute; 
   margin: auto; 
   top: -20%; 
   left: 45%; 
   z-index: 9; 
   height: 0px; 
   bottom: 0px;
   }
   .btn-playnow:hover {
   color: white;
   }
   .list-group-item {
   background-color: #0b0b0b;
   border: 1px solid transparent;
   }
   .list-group-item p {
   color : #818181;
   }
   .list-group-item h4 {
   color : #aaa;
   font-weight: 600!important;
   }
   .pagination {
   padding-left: 0;
   margin: 20px 0 0;
   width: 100%;
   border: 1px solid #080808;
   background: #040404;
   }
   .pagination>li>a, .pagination>li>span {
   position: relative;
   float: left;
   padding: 10px 20px;
   margin-left: -1px;
   line-height: 1.42857143;
   font-size: 14px;
   text-decoration: none;
   border-right: 1px solid #080808;
   }
   .pagination a {
   color: #929292;
   }
   .single {
   margin-top: 10px!important;
   margin-bottom: 20px!important;
   }
   .loginsec a {
   color: #b5b5b5 !important;
   }
   .releases h1 {
   margin-bottom: 0px!important;
   background: #000000ed!important;
   margin-top: 20px;
   color: #d3dde6!important;
   }
   .overlay-detail {
   background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.85) 100%);
   position: absolute;
   bottom: 0px;
   width: 100%;
   height: 150px;
   z-index: 9;
   }
   .overlay-detail-epi {
   background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.85) 100%);
   position: absolute;
   bottom: 0px;
   width: 100%;
   height: 100px;
   z-index: 9;
   }
   .btn-hover:hover {
   opacity: 0.8;
   }
   .navigationstrip {
   background: #040404;
   margin-bottom: 0px!important;
   border-bottom: 0px!important;
   border-top: solid 5px #0a0a0a!important;
   }
   .poster_path {
   height: 260px!important;
   }
   .backdrop_path {
   height: 150px!important;
   }
   .movie-list-title {
   position: absolute;
   bottom: 0px;
   left: 0px;
   right: 0px;
   padding: 10px;
   margin: 0;
   background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, transparent), color-stop(100%, rgba(67,89,101,0.85)));
   background: -webkit-linear-gradient(top, transparent 0%, rgba(67,89,101,0.85) 100%);
   background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.85) 100%);
   }
   #player {
   position: relative;
   }
   .wrapper {
   overflow: hidden!important;
   }
   .marquee {
   font-size: 12px!important;
   color: #a5a5a5!important;
   }
   .progress {
   height: 10px;
   margin-bottom: 20px;
   overflow: hidden;
   top: 3px!important;
   background-color: transparent;
   }
   .iframe, .impl, #intro, .black {
   height: 650px!important;
   }
   #playnow {
   top: -20%;
   }
   #intro {
   display: none;
   }
   .img-tv-episode {
   min-width: 100%;
   }
   .img-tv-seasons {
   height: 180px;
   }
   .play-movie {
   margin-top: -480px;
   }
   .slide-video {
   background: white;
   margin-bottom: 70px;
   padding: 15px;
   border-radius: 10px;
   }
   .slide-detail {
   height: 563px;
   }
   @media only screen and (max-width: 500px) {
   #intro, .black {
   height: 300px!important;
   }
   .impl {
   width: 100%;
   height: inherit!important;
   }
   #playnow {
   top: -45%!important;
   }
   .iframe {
   min-height: 200px!important;
   max-height: 300px!important
   }
   .img-tv-episode {
   min-width: 100%;
   height: 70px;
   }
   .logo img {
   margin: auto;
   display: table;
   margin-bottom: 20px;
   }
   .search-content {
   background-color: #000000a3!important; 
   width: 100%; 
   overflow: hidden; 
   padding: 5px; 
   text-align: center;
   }
   .custom-container {
   width: 100%;
   margin: 0%;
   }
   .contents {
   margin-top: -15px;
   padding-top: 0px;
   }
   .navigationstrip {
   width: 100%;
   margin-bottom: 20px;
   padding-left: 10px;
   overflow-x:scroll;            
   }
   .poster_path {
   height: 230px!important;
   }
   .backdrop_path {
   height: 100px!important;
   }
   #cover-bottom, #cover-top {
   display: none;
   }
   #magelo-player {
   width: 100%;
   margin-left: 0px;
   }
   .menu-responsive {
   padding-right: 0px;
   padding-left: 0px;
   }
   .play-movie {
   margin-top: -275px;
   }
   #playnow .fa:before {
   font-size: 50px!important;
   color: #fff;
   opacity: 0.7;
   position: absolute;
   left: 50%;
   margin-left: -15px!important;
   top: 50%;
   margin-top: 35px!important;
   text-shadow: 0 0 100px #000;
   z-index: 9;
   visibility: visible;
   }
   .impl {
   margin-top: 50px;
   }
   .img-tv-seasons {
   height: 230px;
   width: 100%;
   }
   .slide-video {
   background: black;
   margin-bottom: 20px;
   padding: 15px;
   border-radius: 0px;
   }
   .slide-detail {
   height: 300px!important;
   }
   #hero {
   overflow: hidden;
   min-height: 300px;
   }
   }
   table tr {
   float: left;
   width: 100%;
   }
   .player-container{line-height:0;background-color:#000;}
   #playnow{visibility:hidden;cursor: pointer;width:100%;height:100%;outline:none;line-height:0;top:0;left:0;}
   #playnow .fa {display: initial;}
   .movie-loading{position:absolute;width:100%;height:100%;z-index:400;top:0;left:0; z-index: 1;}
   .movie-loader{width:100%;height:100%;background:transparent url(images/preloader15.gif) center center no-repeat;display:block;}
   .ld4 .movie-loader{background-image:url(images/preloader4.gif);}
   \
   .shadow{position:absolute;width:100%;height:100%;display:block;z-index:100;top:0;left:0;}
   #playnow .fa:before{font-size:90px;color:#fff;opacity:0.7;position:absolute;left:50%;margin-left:-45px;top:50%;margin-top:-45px;text-shadow:0 0 100px #000;z-index:200;visibility:visible;}
   .player-container:hover > a img.impl{opacity:0.8;-webkit-transform:scale(1.2);-moz-transform:scale(1.2);-o-transform:scale(1.2);}
   .player-container:hover > a.bigplay #playnow .fa:before{color:#f00;text-shadow:0 0 8px #000;opacity:1;}
   #controls{width:100%;position:absolute;bottom:0px;font-size:130%; background: rgba(0, 0, 0, 0.83);}
   .fixed #controls, #player:hover > #controls{bottom:0px;}
   .controls-wraper{margin: 0;padding:15px 15px 0;background-color:transparent!important;color:#999;position:relative;bottom: 0px;z-index: 300;line-height:0;height:45px;overflow:hidden;}
   .ctrlgrd .controls-wraper{background:#595757;background-image:-webkit-linear-gradient(top, #595757, #2b2b2b);background-image:-moz-linear-gradient(top, #595757, #2b2b2b);background-image:-ms-linear-gradient(top, #595757, #2b2b2b);background-image:-o-linear-gradient(top, #595757, #2b2b2b);background-image:linear-gradient(to bottom, #595757, #2b2b2b);border-radius:3px;}
   .cplay,.volume,.duration{display:inline-block;float:left;margin-right:15px;}
   a.play{color:#999;line-height:0;}
   .play:hover,.volume:hover,.quality:hover,.fullscreen:hover{cursor:pointer;color:#fff;}
   .duration{position:relative;float:left;font-size:13px;top:8px;color:#999;}
   .dmax{color:#fff;}
   .progress{display:block;margin:0 70px 0 130px;position:relative;top:3px;overflow:hidden;text-overflow:ellipsis;}
   .buffering, .marquee{position:relative;height:10px;background-color:#000;display:block;width:100%;}
   .marquee{line-height:13px;height:13px;color:#fff;font-size:13px;background-color:transparent;white-space:nowrap;-webkit-animation:rightThenLeft 10s infinite;top:-1px;}
   .ctrlgrd .buffering{background-color:#333;border-radius:5px;box-shadow:inset 0 0 6px #000, 0 1px rgba(255,255,255,.1);}
   .progressbar{position:absolute;height:10px;width:10px;background:#0099cc;display:block;top:0;left:0;}
   .ctrlgrd .progressbar{border-radius:50%;box-shadow:inset 0 0 5px #000, 1px 0 #000;}
   .buffering::after{content:'';opacity:0;position:absolute;top:0;right:0;bottom:0;left:0;background:#666;-webkit-animation:animate-shine 200s ease-in;-moz-animation:animate-shine 200s ease-in;animation:animate-shine 200s ease-in;}
   .quality,.fullscreen{position:absolute;display:inline-block;top:10px;}
   .quality{right:50px;}
   .fullscreen{right:15px;}
   .quality .hd{position:absolute;background:#c00;color:#fff;border-radius:2px;-webkit-border-radius:2px;-moz-border-radius:2px;font-family:Arial, Helvetica, sans-serif;font-size:7px;font-weight:bold;padding:1px 3px;top:-5px;left:8px;line-height:100%;}
   .nregister{line-height:1;text-align:center;color:#fff; z-index: 9; font-weight:bold;position:absolute;margin:auto;top:0;right:0;bottom:0;left:0;width:100%;height:160px}
   .nregister .fa{font-size:50px;color:#eeb211;margin:0}
   .oops-wrapper{padding-top:5px;line-height:initial;font-size:initial;}
   .oops{color:#c00}
   .oops-target{color:#09c;cursor:pointer}
   .oops-target:hover{text-decoration:underline}
   #regplay{display:inline-block;margin-top:10px;}
   #regplay{background:#3498db;background-image:-webkit-linear-gradient(top,#3498db,#2980b9);background-image:-moz-linear-gradient(top,#3498db,#2980b9);background-image:-ms-linear-gradient(top,#3498db,#2980b9);background-image:-o-linear-gradient(top,#3498db,#2980b9);background-image:linear-gradient(to bottom,#3498db,#2980b9);-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;text-shadow:1px 1px 3px #000;color:#fff;font-size:20px;padding:7px 15px 7px 15px;text-decoration:none}
   #regplay .fa{color:#fff;font-size:20px;margin-right:10px;}
   #regplay:hover{cursor:pointer;background:#3cb0fd;background-image:-webkit-linear-gradient(top,#3cb0fd,#3498db);background-image:-moz-linear-gradient(top,#3cb0fd,#3498db);background-image:-ms-linear-gradient(top,#3cb0fd,#3498db);background-image:-o-linear-gradient(top,#3cb0fd,#3498db);background-image:linear-gradient(to bottom,#3cb0fd,#3498db);text-decoration:none}
</style>
<div class="container section play-movie" id="content" >
   <div class="row">
      <!-- <div class="col-sm-12 slide-video" style="background: white; margin-bottom: 70px; padding: 15px; border-radius: 10px;">
         <div id="video" class="wrapper">
         	<div id="player" onmouseover="playHover()" onmouseout="playHover()">
         		<div class="player-container">
         			<div class="btn-offer" style="display: none;">
         				<div class="nregister"><div class="nregister-wrapper"><div><i class="fa fa-warning"></i><div class="oops">Oops!</div></div><div class="oops-wrapper"><div><div>You must create a <a href="" class="oops-target">Free Account</a></div><div>in order to STREAM or DOWNLOAD this movie</div></div></div><br><br><a href="" class="aaa">Create FREE Account</a></div></div>
         			</div>
         			<div class="movie-loading ld4" style="display: none;">
         				<div class="movie-loader"></div>
         			</div>
         			<a id="fregister" class="bigplay ui-link" onclick="playClick()">
         				<img class="impl" itemprop="image" onload="playerLoad()" src="" width="1280" height="720" alt="">
         				<span id="playnow" style="visibility: visible;"><i class="fa fa-play"></i></span>
         				<span class="shadow"></span>
         			</a>
         		</div>
         		<div id="controls">
         			<div class="controls-wraper">
         				<div class="cplay">
         					<span class="play" onclick="playClick()"><i class="fa fa-play"></i></span>
         				</div>
         				<div class="volume"><i class="fa fa-volume-up"></i></div>
         				<div class="duration"><span class="dmax">00:00:00</span> / <span class="dmax"><?php echo $runtime;?></span></div>
         				<div class="progress"><span class="marquee">.hd.1080p</span></div>
         				<div class="fullscreen"><i class="fa fa-arrows-alt"></i></div>
         				<div class="quality"><i class="fa fa-cog"></i><span class="hd">HD</span></div>
         				<div class="clear"></div>
         			</div>
         		</div>
         	</div>
         </div>
         </div>
         <a href="https://youtu.be/tE-LfJ7jHyg" data-vbtype="video" class="venobox video vbox-item">
         	<i class="fa fa-play-circle play-icon-detail"></i>
         	<img src="" width="100%" alt="">
         </a>
         </div> --> 
      <div class="col-sm-12 slide-video">
         	<div id="video" class="wrapper">
		<div id="player" onmouseover="playHover()" onmouseout="playHover()">
			<div class="player-container">
										<link href="<?php style_theme() ?>/player/video-js.css" rel="stylesheet">
	<script src="<?php style_theme() ?>/player/videojs-ie8.min.js"></script>
	<script src="<?php style_theme() ?>/player/video.js"></script>
	<script src="<?php style_theme() ?>/player/resolution-switcher.js"></script>
	<link href="<?php style_theme() ?>/player/resolution-switcher.css" rel="stylesheet">
	<link href="<?php style_theme() ?>/player/videojs-overlay.css" rel="stylesheet">
	<script src="<?php style_theme() ?>/player/videojs-overlay.min.js"></script>  
	<script src="<?php style_theme() ?>/player/videojs.disableProgress.js"></script>
    		<div id="player">
				<div class="embed-responsive embed-responsive-16by9">
					<video id="my-video" class="video-js vjs-16-9 vjs-big-play-centered" controls="" preload="auto" width="600" height="315" poster="<?php echo $images;?>" data-setup="">
						<source src="https://github.com/galihsophian/galihsophian.github.io/blob/master/Series.mp4?raw=true" type="video/mp4" label="SD">
						<source src="https://github.com/galihsophian/galihsophian.github.io/blob/master/Series.mp4?raw=true" type="video/mp4" label="HD">
						<track kind="subtitles" src="" srclang="en" label="English">
						<track kind="subtitles" src="" srclang="en" label="French">
						<track kind="subtitles" src="" srclang="en" label="Germany">
						<track kind="subtitles" src="" srclang="en" label="Netherland">
						<track kind="subtitles" src="" srclang="en" label="Italy">
						<track kind="subtitles" src="" srclang="en" label="Arabic">
					</video>
<script>
videojs('my-video').videoJsResolutionSwitcher();
limitload = 0;
</script>
<script>
            var myPlayer = videojs('my-video', {"fluid": true, ControlBar: {
                DurationDisplay: true}
            });
            var pausetime = 15; // stop at 15 seconds 
            myPlayer.on('timeupdate', function(e) {
                if (myPlayer.currentTime() >= pausetime) {
                    myPlayer.pause();
                    $('#reg_form').modal({show: true, backdrop: 'static'});
                    
                    myPlayer.exitFullscreen();
                }
            });
            myPlayer.disableProgress({
                autoDisable: true
            });            
            
</script>
				</div>
			</div>

		</div>
</div>
</div>
			
         <center><a href="" class=" btn btn-default vbox-item btn-download"><i class="fa fa-play"></i>
            <span>Play Now</span></a> &nbsp;<a href="" class=" btn btn-default vbox-item btn-download"><i class="fa fa-download"></i>
            <span>Download</span></a>
         </center>
      </div>
      <div class="col-md-3 desktop">
         <img src="<?php echo $images_small;?>" width="100%">
      </div>
      <div class="col-md-9">
         <h3>
            <?php echo $title;?>					
         </h3>
         <p style="text-align: justify;">
            <?php echo $description;?>					
         </p>
         <table style="width:100%">
						<tbody>
            <tr>
               <td width="170px">Title</td>
               <td>: &nbsp;</td>
               <td><?php echo $row['name'];?></td>
            </tr>
            <tr>
               <td width="170px">Last Air Date</td>
               <td>: &nbsp;</td>
               <td>
                  <?php echo date('M d, Y', strtotime($last_air_date));?>
               </td>
            </tr>
            <tr>
               <td width="170px">Number of Episodes</td>
               <td>: &nbsp;</td>
               <td><?php echo $number_of_episodes;?></td>
            </tr>
            <tr>
               <td width="170px">Number of Seasons</td>
               <td>: &nbsp;</td>
               <td><?php echo $number_of_seasons;?></td>
            </tr>
            <tr>
               <td width="170px">Genres</td>
               <td>: &nbsp;</td>
               <td><?php echo $genre;?></td>
            </tr>
            <tr>
               <td width="170px">Networks</td>
               <td>: &nbsp;</td>
               <td><?php echo $networks;?></td>
            </tr>
            <tr>
               <td width="170px">Casts</td>
               <td>: &nbsp;</td>
               <td><?php echo $cast;?></td>
            </tr>
			<tr <?php echo $alternative_titles == '' ? 'hidden' : '' ?>>
               <td width="170px">Alternative Titles</td>
               <td>: &nbsp;</td>
               <td><?php echo $alternative_titles;?></td>
            </tr>
			<tr <?php echo $keywords == '' ? 'hidden' : '' ?>>
               <td width="170px">Plot Keywords</td>
               <td>: &nbsp;</td>
               <td><?php echo $keywords;?></td>
            </tr>
         </tbody></table>
      </div>
   </div>
   <div class="col-sm-7">
      <article>
         <div class="news-comment-form">
            <h3>Leave a comment</h3>
            <form>
               <div class="form-group half">
                  <label>Name *</label>
                  <input type="text">
               </div>
               <div class="form-group half">
                  <label>Email *</label>
                  <input type="email">
               </div>
               <div class="form-group">
                  <label>Website</label>
                  <input type="text">
               </div>
               <div class="form-group">
                  <label>Comments *</label>
                  <textarea rows="5"></textarea>
               </div>
               <div class="form-group right-align">
                  <button class="btn btn-ghost">Post comment</button>
               </div>
            </form>
         </div>
      </article>
   </div>
</div>
</div>
<section class="dark">
<div class="container section">
<div class="row">
   <div class="col-sm-12">
      <h2>Season List</h2>
      <div class="slick-carousel slick-initialized slick-slider" id="newIn">
         <?php 
                     if (is_array($row['seasons'])) {
                     foreach((array)$row['seasons'] as $for) :
                         if (empty($for['air_date'])) {
                             continue;
                         }
                         if ($for['poster_path']) {
                             $poster_path = 'https://image.tmdb.org/t/p/original'.$for['poster_path'];
                         }else{
                             $poster_path = site_theme().'/images/no-cover.png';
                         }
                         ?>
                  <div class="movie-slide slick-slide" style="width: 180px;">
                     <div class="movie-poster">
                        <aside>
                           <div>
						   <a href="<?php echo seo_tv($id.'-'.$for['season_number'],$row['name']);?>" class="read-more"><?php echo $for['episode_count'];?> episode</a>
                              <a href="<?php echo seo_tv($id.'-'.$for['season_number'],$row['name']);?>" data-vbtype="video" class="play">
                              <i class="material-icons">play_arrow</i>
                              </a>
                              <a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="read-more">Season <?php echo $for['season_number'];?></a>
                              <span class="date">Released: <?php echo date('Y-m-d', strtotime( $for['air_date'] ) );?></span>
                           </div>
                        </aside>
                        <a href="<?php echo seo_tv($id.'-'.$for['season_number'],$row['name']);?>">
                        <img src="<?php echo $poster_path;?>" alt="<?php echo $title;?> Season <?php echo $for['season_number'];?>">
                        </a>
                     </div>
                     <a href="<?php echo seo_tv($id.'-'.$for['season_number'],$row['name']);?>">
                        <h4>Season <?php echo $for['season_number'];?></h4>
                     </a>

                  </div>
                  <?php 
                     endforeach;
                     }
                     ?>
		 </div>
      </div>
      
<?php 
            if (is_array($row2['episodes'])) {
                ?>
<div class="col-sm-12">
      <h2>Episode List of <?php echo $row2['name'];?></h2>
      <div class="slick-carousel slick-initialized slick-slider" id="newIn">
         <?php
                        foreach((array)$row2['episodes'] as $eps) :
                            if ($eps[still_path]) {
                                $still_path = 'https://image.tmdb.org/t/p/original'.$eps[still_path];
                            }else{
                                $still_path = site_theme().'/images/no-backdrop.png';
                            }
                            ?>
                  <div class="slick-slide slick-cloned"role="option" style="width: 260px;">
               <div class="movie-poster">
                  <aside>
                     <div>
                        <a href="<?php echo seo_tv($id.'-'.$eps['season_number'].'-'.$eps['episode_number'],$row['name']);?>">
                        </a>
                        <a href="<?php echo seo_tv($id.'-'.$eps['season_number'].'-'.$eps['episode_number'],$row['name']);?>" class="read-more"><?php echo short($eps['overview']);?></a>
                        <a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="read-more">Episode <?php echo $eps['episode_number'];?></a>
                     </div>
                  </aside>
                  <a href="<?php echo seo_tv($id.'-'.$eps['season_number'].'-'.$eps['episode_number'],$row['name']);?>">
                  <img src="<?php echo $still_path;?>" alt="Lorem ipsum delor sit amet">
                  </a>
               </div>
			   <a href="<?php echo seo_tv($id.'-'.$eps['season_number'].'-'.$eps['episode_number'],$row['name']);?>">
               <span class="date">Release: <?php echo date('Y-m-d', strtotime( $eps['air_date'] ) );?></span>
               <h4>Episode <?php echo $eps['episode_number'];?></h4>
               </a>
            </div>
                  <?php 
                            endforeach;
                        }
                        ?>
		 </div>
      </div>
   </div>
</div>
</section>
<?php include('footer.php');?>