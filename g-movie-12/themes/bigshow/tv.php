<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/
include('header.php');?>
<!-- Page Header -->

        <div class="page-header-overlay">
            <div class="container">
                <h3 class="page-title" style="text-align: right"> Watch <?php echo $title;?>
                <img src="<?php style_theme() ?>/assets/images/template/favicon.gif" weight="93" height="70"></h3>
            </div>
        </div>
   
    <!-- Page Header End -->  



<script type='text/javascript' src='<?php style_theme() ?>/assets/js/embed.min.js'></script>
<script src="<?php style_theme() ?>/js/simplePlayer.js"></script>


                
                <link rel='stylesheet' id='magelo-css' href='<?php style_theme() ?>/assets/css/style.min.css' type='text/css' media='screen,projection' />

		<div id="player-area">
   <link href="<?php echo site_url()?>/assets/css/video-js.css" rel="stylesheet">
	<script src="<?php echo site_url()?>/assets/css/videojs-ie8.min.js"></script>
	<script src="<?php echo site_url()?>/assets/css/video.js"></script>
	<script src="<?php echo site_url()?>/assets/css/resolution-switcher.js"></script>
	<link href="<?php echo site_url()?>/assets/css/resolution-switcher.css" rel="stylesheet">
	<link href="<?php echo site_url()?>/assets/css/videojs-overlay.css" rel="stylesheet">
	<script src="<?php echo site_url()?>/assets/css/videojs-overlay.min.js"></script>  
	<script src="<?php echo site_url()?>/assets/css/videojs.disableProgress.js"></script>
   <div id="player">
      <span class="player-cover"></span>
      <div class="container">
         <div id="player">
            <div class="embed-responsive embed-responsive-16by9">
               <video id="my-video" class="video-js vjs-16-9 vjs-big-play-centered" controls="" preload="auto" width="600" height="315" poster="<?php echo $images;?>" data-setup="">
                  <source src="<?php echo $selectedBg; ?>" type="video/mp4" label="SD">
                  <source src="<?php echo $selectedBg; ?>" type="video/mp4" label="HD">
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
                  var pausetime = 10; // stop at 10 seconds 
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
            </div>
         </div>
      </div>
   </div>
</div>
		<div id="modal-offer" data-domain="#" data-campaign="" data-movie="86520" data-title="<?php echo $title;?>" class="modal fade pointer" onclick="window.location.href='request';">
			<div class="modal-dialog">
				<div id="login" class="modal-content">
					<div class="top-content" style="background-image:url(<?php echo $images;?>)">
						<p class="text-center top"><?php echo $title;?></p>
						<p class="text-center bottom">Released Date: <?php echo $release_date;?></p>
					</div>
					<div class="bottom-content">
						<img class="img-responsive" src="<?php style_theme() ?>/images/offer.jpg" width="614" height="275">
						<p class="text-center"><span class="btn btn-offer btn-primary btn-lg" data-title="<?php echo $title;?>">Register Free Account</span></p>
					</div>
				</div>
			</div>
		</div>
		</div>
        
         
        
        
      <div class="main-wrap">
      <div class="section section-padding video-single-section">
         <div class="container">
            <div class="video-single">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="content-wrap"><div class="content-wrap">
                                <div class="video-thumb">
                                    <img src="<?php echo $images_small;?>"  width="97%" alt="Movie thumb">
                                </div>
                                <div class="video-details xs-top-40">
                                    <div class="single-section">
                                        <h3 class="video-title"><?php echo $title;?></h3>
                                        <p class="video-release-date"><?php echo $release_date;?></p>
                                        <div class="ratings-wrap">
                                            Watch <?php echo $title;?> full movie online
                                            <span class="rating"><?php echo $get_rating;?></span>
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
                                                    <i class="fa fa-user"></i> 37 Votes
                                                </div>
                                            </div>
                                        </div>
                                        
                                 
                                            
												
													<a href="#seasons"></a>													<a href="#episode"></a>												
												
													
															  <div class="video-attributes">
																 
																	<p class="cast"><label>Title :<strong>  </label> <?php echo $row['name'];?></strong></p>
																	
																																		<p class="cast2"><label>Release Date :</label> <meta itemprop="datePublished" content="<?php echo $release_date;?>"><?php echo date('M d, Y', strtotime($release_date));?></p>
																		
																	<p class="cast2"><label>Runtime :</label> <time itemprop="duration" datetime="PT<?php echo $runtime;?>M"><?php echo $runtime;?> Minutes</time>
																	</p>
																	<p class="cast2"><label>Genres :</label>
																		<?php echo $genre;?>																		</p>
																	<p class="cast2"><label>Season Number :</label>
																		<?php echo $row2['season_number'];?>																		</p>
																		<p class="cast2"><label>Episode Count On Season <?php echo $row2['season_number'];?> :</label>
																		<?php echo $number_of_episodes;?>																		</p>
																	
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
                     <!-- Cast -->
                     <div class="section section-padding top-padding-normal movie-section">
   <!-- Cast -->
   <div class="section section-padding top-padding-normal movie-section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="section-header">
                  <h3 class="section-title">Season List</h3>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="owl-carousel video-carousel2 owl-theme" id="video-carousel" style="opacity: 1; display: block;">
               <!-- Cast -->
               <div class="owl-wrapper-outer">
                  <div class="owl-wrapper" style="width: 3000px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);">
				  <?php 
            if (is_array($row['seasons'])) {
            foreach((array)$row['seasons'] as $for) :
                if (empty($for['air_date'])) {
                    continue;
                }
                if ($for[poster_path]) {
                    $poster_path = 'https://image.tmdb.org/t/p/original'.$for[poster_path];
                }else{
                    $poster_path = site_theme().'/images/no-cover.png';
                }
                ?>
                     <div class="owl-item" style="width: 250px;">
                        <div class="video-item2">
                           <div class="thumb-wrap2">
                              <img src="<?php echo $poster_path;?>" alt="<?php echo $title;?>">
                              <div class="thumb-hover">
                                 <a class="play-video" href="<?php echo seo_tv($id.'-'.$for['season_number'],$for['name']);?>"><i class="fa fa-play"></i></a>
                              </div>
                           </div>
                           <div class="video-details2">
                              <h4 class="video-title"><a href="<?php echo seo_tv($id.'-'.$for['season_number'],$for['name']);?>">Season <?php echo $for['season_number'];?></a></h4>
                              <p class="video-release-on"><?php echo $for['episode_count'];?> Episode(s) - <?php echo date('Y-m-d', strtotime( $for['air_date'] ) );?></p>
                           </div>
                        </div>
                     </div>
                    <?php 
                endforeach;
            }
            ?>
                  </div>
               </div>
               <div class="owl-controls clickable" style="">
                  <div class="owl-buttons">
                     <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                     <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
	  <?php 
            if (is_array($row2['episodes'])) {
                ?>
      <div class="section section-padding top-padding-normal movie-section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="section-header">
                     <h3 class="section-title">Episode List <?php echo $row2['name'];?></h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="owl-carousel video-carousel2 owl-theme" id="video-carousel" style="opacity: 1; display: block;">
                  <div class="owl-wrapper-outer">
                     <div class="owl-wrapper" style="width: 11500px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);">
					 <?php
                        foreach((array)$row2['episodes'] as $eps) :
                            if ($eps[still_path]) {
                                $still_path = 'https://image.tmdb.org/t/p/original'.$eps[still_path];
                            }else{
                                $still_path = site_theme().'/images/no-backdrop.png';
                            }
                            ?>
                        <div class="owl-item" style="width: 250px;">
                           <div class="video-item2">
                              <div class="thumb-wrap3">
                                 <img src="<?php echo $still_path;?>" alt="Episode 1">
                                 <div class="thumb-hover">
                                    <a class="play-video" href="<?php echo seo_tv($id.'-'.$eps['season_number'].'-'.$eps['episode_number'],$eps['name']);?>"><i class="fa fa-play"></i></a>
                                 </div>
                              </div>
                              <div class="video-details2">
                                 <h4 class="video-title"><a href="<?php echo seo_tv($id.'-'.$eps['season_number'].'-'.$eps['episode_number'],$eps['name']);?>">Episode <?php echo $eps['episode_number'];?></a></h4>
                                 <p class="video-release-on"><?php echo $eps['name'];?> <?php echo date('Y-m-d', strtotime( $eps['air_date'] ) );?></p>
                              </div>
                           </div>
                        </div>
                        <?php 
                            endforeach;
                        }
                        ?>
                     </div>
                  </div>
                  <div class="owl-controls clickable">
                     <div class="owl-buttons">
                        <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                        <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
                  </div>
                  <div class="media-grids">
                  </div>
               </div>
            </div>
         </div>
         <!-- TV Show Section -->
         <!-- TV Show Section End -->
      </div>
	<!-- //w3l-medile-movies-grids -->
	<script type='text/javascript' src='//code.jquery.com/jquery-2.2.0.min.js'></script>
		<script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
	
		

		<script type='text/javascript' src='<?php style_theme() ?>/assets/js/scripts.min.js'></script>
		<script type='text/javascript' src='<?php style_theme() ?>/assets/js/embed.min.js'></script>
        <?php include('footer.php'); ?>
