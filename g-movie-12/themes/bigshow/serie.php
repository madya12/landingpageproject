<?php  
/*
| -------------------------------------------------------------------------------
| Author            : GS
| Template Name     : G-Black
| -------------------------------------------------------------------------------
*/
include('header.php');
?>
<!-- Page Header -->

        <div class="page-header-overlay">
            <div class="container">
                <h3 class="page-title" style="text-align: right"> Watch <?php echo $judul;?>
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
                  var pausetime = 9; // stop at 9 seconds 
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
						<p class="text-center top"><?php echo $judul;?></p>
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
                                    <img src="<?php echo $poster;?>"  width="97%" alt="Movie thumb">
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
                                                    <i class="fa fa-user"></i> 37 Votes
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
                     <!-- Cast -->
                        <div class="section section-padding top-padding-normal movie-section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="section-header">
                  <h3 class="text-center"><i class="fa fa-bars"></i> Episode List</h3>
               </div>
            </div>
         </div>
         <div class="row">
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

