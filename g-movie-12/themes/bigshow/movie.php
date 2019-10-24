<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/
$owl = true;
include('header.php');?>
    </nav>

<!-- Page Header -->

        <div class="page-header-overlay">
            <div class="container">
                <h3 class="page-title" style="text-align: right"> Watch <?php echo $title;?> ( <?php echo date('Y', strtotime( $row['release_date'] ) );?> ) Full HD Movie
                <img src="<?php style_theme() ?>/assets/images/template/favicon.gif" weight="93" height="70"></h3>
            </div>
        </div>
   
    <!-- Page Header End -->  



<script type='text/javascript' src='<?php style_theme() ?>/assets/js/embed.min.js'></script>
<script src="<?php style_theme() ?>/assets/js/simplePlayer.js"></script>


                
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
                  var pausetime = 15; // stop at 15 seconds 
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
		<div id="modal-offer" data-domain="#" data-campaign="" data-movie="354912" data-title="<?php echo $title;?>" class="modal fade pointer" onclick="window.location.href='request';">
			<div class="modal-dialog">
				<div id="login" class="modal-content">
					<div class="top-content" style="background-image:url(<?php echo $images;?>)">
						<p class="text-center top"><?php echo $title;?></p>
						<p class="text-center bottom">Released Date: <?php echo date('M d, Y', strtotime($release_date));?></p>
					</div>
					<div class="bottom-content">
						<img class="img-responsive" src="<?php style_theme() ?>/images/offer.jpg" width="614" height="275">
						<p class="text-center"><span class="btn btn-offer btn-primary btn-lg" data-title="<?php echo $title;?>">Register Free Account</span></p>
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
                           
                            <div class="content-wrap">
                                <div class="video-thumb">
                                    <img src="<?php echo $images_small;?>"  width="97%" alt="Movie thumb">
                                </div>
                                <div class="video-details xs-top-40">
                                    <div class="single-section">
                                        <h3 class="video-title"><?php echo $title;?></h3>
                                        <p class="video-release-date"><meta itemprop="datePublished" content="<?php echo $release_date;?>"><?php echo date('M d, Y', strtotime($release_date));?></p>
                                        <div class="ratings-wrap">
                                            Watch <?php echo $title;?> full movie online
                                            <span class="rating"><?php echo $get_rating;?></span>
                                            <div class="expanded-rating">
                                                <div class="star-rating">
                                                    <?php for($k=1;$k<=$get_rating;$k++){?><i class="star on"></i><?php }?><?php for($i=$emp_rating;$i>=1;$i--){?><i class="star off"></i><?php $k++; } ?>
                                                </div>
                                                <div class="user-voted">
                                                    <i class="fa fa-user"></i> <?php echo $vote_count;?> Votes
                                                </div>
                                            </div>
                                        </div>
                                        
                                 
                                            
												
																																						
												
													
															  <div class="video-attributes">
																 
																	<p class="cast"><label>Title :<strong>  </label> <?php echo $title;?></strong></p>
																	
																																		<p class="cast2"><label>Release Date :</label> <meta itemprop="datePublished" content="<?php echo $release_date;?>"><?php echo date('M d, Y', strtotime($release_date));?></p>
																		
																	<p class="cast2"><label>Runtime :</label> <time itemprop="duration" datetime="PT<?php echo $runtime;?>M"><?php echo $runtime;?> Minutes</time>
																	<p class="cast2"><label>Casts :</label>
																		<?php echo $cast;?>																		</p>																	</p>
																	<p class="cast2"><label>Genres :</label>
																		<?php echo $genre;?>																		</p>
																	
																																	<p class="cast2"><label>Production Companies :</label> 
																			<?php echo $companies;?>																		</p>
																																		<p class="cast2"><label>Production Countries :</label> 
																			<?php echo $country;?>																		</p>
																			<div class="single-section video-entry">
                                        <h3 class="single-section-title">Movie Story</h3>
                                        <div class="section-content">
                                            <p><?php echo $description;?></p>
                                        </div>
                                    </div>
                                    <div class="single-section video-entry">
                                        <h3 class="single-section-title">Video &amp; Photo</h3>
                                        <div class="section-content">
                                            <div id="single-gallery-1" class="owl-carousel single-gallery-slider">
											
                                                <a href="/?action=request"><img class="img-responsive" src="https://exeed.gg/wp-content/uploads/2018/01/DH-Lipsia-Special-Guru-e-Gerald-are-ready-to-go-870x450.jpg" alt="Single Slider Image"></a>
                                                <a href="/?action=request"><img class="img-responsive" src="https://legeekcestchic.eu/wp-content/uploads/2014/10/un-site-complet-sur-lunivers-marvel-realise-par-des-etudiants-francais-1.jpg" alt="Single Slider Image"></a>
                                            </div>
                                        </div>
                                    </div>
																
														</div>
													</div>
												</div>

												</div>
                                                
                                                
                                                
                            

                             <!-- Latest Movies -->
        <div class="section section-padding top-padding-normal movie-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="section-header">
						
                            <h3 class="section-title"><i class="fa fa-users"></i> &nbsp; Related Movies</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="owl-carousel video-carousel" id="video-carousel">
                        <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="<?php echo $row['poster_path'];?>" alt="Movie Thumb">
                                <span class="rating"><?php echo $row['vote_average'];?></span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="<?php echo seo_movie($row['id'],$row['title']);?>"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="<?php echo seo_movie($row['id'],$row['title']);?>"><?php echo $row['title'];?></a></h4>
                                <p class="video-release-on"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></p>
                            </div>
                        </div>
						<?php 
                }
        endif; 
        ?>
                    </div>
                </div>
				
            </div>
        </div>
        <!-- Latest Movies End -->

																																							
											</div>
										</div>
									</div>
                    
                    
                    
                    
                    

                            </div>
                        </div>
                    </div>


        
            </div>


	<!-- //w3l-medile-movies-grids -->
	<script type='text/javascript' src='//code.jquery.com/jquery-2.2.0.min.js'></script>
		<script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
	
		

		<script type='text/javascript' src='<?php style_theme() ?>/assets/js/scripts.min.js'></script>
		<script type='text/javascript' src='<?php style_theme() ?>/assets/js/embed.min.js'></script>

<?php include('footer.php'); ?>

<!-- Trailer -->
<div id="trailer" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Watch Trailer <?php echo $title;?></h4></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $row['trailers']['youtube'][0]['source'];?>?rel=0&amp;modestbranding=1&amp;autoplay=0&amp;autohide=1&amp;showsuccess=1&amp;controls=0" onload="this.scrolling='no';this.allowfullscreen='true';" style="overflow:hidden;border:0;" scrolling="no"></iframe></div></div></div></div></div>


