<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/
$owl = true;
include('header.php');?>
<div id="main">
	<div id="player">
		<span class="player-cover"></span>
		<div class="container">
			<div id="video">
				<div id="video-player" class="embed-responsive embed-responsive-16by9 video pointer nocontext">
					<video id="videoPlayer" class="embed-responsive-item" preload="none" poster="<?php echo $images;?>">
						<p>Your browser doesn't support HTML5 video</p>
					</video>
					<span class="spinner-wrapper">
						<span class="vam">
							<span class="spinner loading"></span>
						</span>
					</span>
					<span class="play-wrapper ease">
						<span class="vam">
							<span id="play" class="play-btn-border ease">
								<i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
							</span>
						</span>
						<div class="media-controls ease">
							<div id="leftControls" class="pull-left">
								<button type="button" name="Play" class="btn icon-control-play" id="play_btn"></button>
								<button id="volumeInc_btn" name="Volume" class="btn icon-volume-2"></button>
								<button id="timeContainer" class="btn"><span class="dmax">00:00:00</span> / <span class="dmax"><?php echo convertToHoursMins($runtime);?></span>
								</button>
							</div>
							<div id="progressContainer">
								<span id="progress-bar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></span>
							</div>
							<div id="rightControls" class="pull-right">
								<div id="sliderContainer">
									<div id="slider" class="ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all">
										<div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="height: 50%;"></div>
										<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="bottom: 50%;"></span>
									</div>
								</div>
								<div id="setting_btn" class="btn-group dropup">
									<button name="Setting" class="btn icon-settings dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="glyphicon glyphicon-hd-video"></span>
									</button>
									<ul class="dropdown-menu dropdown-menu-right">
										<li class="hq active">HD 1080p</li>
										<li class="hq">HD 720p</li>
									</ul>
								</div>
								<button id="fullscreen_btn" name="Fullscreen" class="btn icon-size-fullscreen pull-right"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="button-offer">
			<div class="container">
				<div class="text-center">
					<a class="btn btn-offer btn-lg btn-watch" href="<?php echo site_url() ?>/?action=register">
						<span class="btn-bg">
							<span class="icon icon-control-play"></span>
						</span> Watch Now
					</a>
					<a class="btn btn-offer btn-lg btn-download" href="<?php echo site_url() ?>/?action=register">
						<span class="btn-bg">
							<span class="icon icon-cloud-download"></span>
						</span> Download
					</a>
				</div>
			</div>
		</div>
		<div class="container" itemscope itemtype="http://schema.org/Series">
			<div class="row">
				<article id="post-400710" class="post col-md-8">
					<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li class="home" itemprop="itemListElement" itemscope itemtype="http://schema.org/Listitem">
							<span itemprop="name">
								<a itemprop="item" href="<?php echo site_uri() ?>">
									<span class="icon-home"></span>
								</a>
							</span>
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/Listitem">
							<span itemprop="name">
								<a itemprop="item" href="<?php echo site_uri() ?>/series/">Series</a>
							</span>
						</li>
						<li class="active"><?php echo $title;?></li>
					</ol>
					<header class="entry-header">
						<h1 class="entry-title">
							<span itemprop="name"><?php echo $judul;?></span>
						</h1>
						<meta itemprop="datePublished" content="<?php echo $release_date;?>">
						<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
							<meta itemprop="worstRating" content="1">
							<meta itemprop="bestRating" content="10">
							<meta itemprop="ratingValue" content="4.7">
							<meta itemprop="ratingCount" content="9">
						</div>
						<meta property="og:image" itemprop="image" content="<?php echo $images;?>">
					</header>
					<div class="entry-content">
						<div class="row">
							<div class="col-md-3 text-center">
								<img src="<?php echo $poster;?>" alt="<?php echo $judul;?>" width="500" height="750" class="img-responsive inblock main-poster">
								<div class="rating-star" title="<?php echo $rating;?> out of 10 stars" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"><?php for($k=1;$k<=$rating;$k++){?><i class="fa fa-star"></i><?php }?><?php for($i=$emp_rating;$i>=1;$i--){?><i class="fa fa-star-o"></i><?php $k++; } ?>
								<div class="movie-rating"><span itemprop="ratingValue"><?php echo $rating;?></span>/<span itemprop="bestRating">10</span> by <span itemprop="ratingCount"><?php echo $vote_count;?></span> users
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<p class="lead" itemprop="description"><?php echo $description;?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<section id="external-download" style="display:block!important;visibility:visible!important;opacity:1!important">
								<h3 class="widget-title" style="display:block!important;visibility:visible!important;opacity:1!important">
									<span>High-Speed External Downloads</span>
								</h3>
								<a href="<?php echo site_url() ?>/?action=register"><div class="section-content" style="display:block!important;visibility:visible!important;opacity:1!important">
									<ul id="ext-download" style="display:block!important;visibility:visible!important;opacity:1!important">
										<li class="ext-row pointer" data-key="<?php echo $judul;?> <?php echo $release_date;?>.rar" data-aff="7555" data-sub="100" style="display:block!important;visibility:visible!important;opacity:1!important">
											<span class="ext-title ease" style="display:block!important;visibility:visible!important;opacity:1!important">
												<span><?php echo $judul;?> <?php echo $release_date;?>.rar</span>
											</span>
											<span class="ext-right pull-right">
												<span class="ext-speed nomobile"><script type="text/javascript"> document.write(Math.floor(Math.random()*3200)); </script> Kb/s</span>
												<span class="ext-icon label label-primary">
													<span class="glyphicon glyphicon-download-alt"></span> DOWNLOAD
												</span>
											</span>
										</li>
										<li class="ext-row pointer" data-key="Calendario 50 Sfumature di Grigio 2016 - <?php echo $release_date;?> [Jpeg]" data-aff="7555" data-sub="100" style="display:block!important;visibility:visible!important;opacity:1!important">
											<span class="ext-title ease" style="display:block!important;visibility:visible!important;opacity:1!important">
												<span>Calendario 50 Sfumature di Grigio 2016 - <?php echo $release_date;?> [Jpeg]</span>
											</span>
											<span class="ext-right pull-right">
												<span class="ext-speed nomobile"><script type="text/javascript"> document.write(Math.floor(Math.random()*2200)); </script> Kb/s</span>
												<span class="ext-icon label label-primary">
													<span class="glyphicon glyphicon-download-alt"></span> DOWNLOAD
												</span>
											</span>
										</li>
										<li class="ext-row pointer" data-key="HOT! <?php echo $judul;?> <?php echo $release_date;?>" data-aff="7555" data-sub="100" style="display:block!important;visibility:visible!important;opacity:1!important">
											<span class="ext-title ease" style="display:block!important;visibility:visible!important;opacity:1!important">
												<span>HOT! <?php echo $judul;?> <?php echo $release_date;?></span>
											</span>
											<span class="ext-right pull-right">
												<span class="ext-speed nomobile"><script type="text/javascript"> document.write(Math.floor(Math.random()*2200)); </script> Kb/s</span>
												<span class="ext-icon label label-primary">
													<span class="glyphicon glyphicon-download-alt"></span> DOWNLOAD
												</span>
											</span>
										</li>
										<li class="ext-row pointer" data-key="Avast Internet Security 2015 Serial Keys Till <?php echo $release_date;?> (Update)" data-aff="7555" data-sub="100" style="display:block!important;visibility:visible!important;opacity:1!important">
											<span class="ext-title ease" style="display:block!important;visibility:visible!important;opacity:1!important">
												<span>Avast Internet Security 2015 Serial Keys Till <?php echo $release_date;?> (Update)</span>
											</span>
											<span class="ext-right pull-right">
												<span class="ext-speed nomobile"><script type="text/javascript"> document.write(Math.floor(Math.random()*2200)); </script> Kb/s</span>
												<span class="ext-icon label label-primary">
													<span class="glyphicon glyphicon-download-alt"></span> DOWNLOAD
												</span>
											</span>
										</li>
										<li class="ext-row pointer" data-key="[FULL] <?php echo $judul;?> <?php echo $release_date;?>" data-aff="7555" data-sub="100" style="display:block!important;visibility:visible!important;opacity:1!important">
											<span class="ext-title ease" style="display:block!important;visibility:visible!important;opacity:1!important">
												<span>[FULL] <?php echo $judul;?> <?php echo $release_date;?></span>
											</span>
											<span class="ext-right pull-right">
												<span class="ext-speed nomobile"><script type="text/javascript"> document.write(Math.floor(Math.random()*2200)); </script> Kb/s</span>
												<span class="ext-icon label label-primary">
													<span class="glyphicon glyphicon-download-alt"></span> DOWNLOAD
												</span>
											</span>
										</li>
									</ul>
								</div>
							</section></a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul class="nav nav-tabs" role="tablist">
								<li class="active">
									<a data-toggle="tab" href="#details">Details</a>
								</li>
								<li>
									<a data-toggle="tab" href="#casts">Casts</a>
								</li>
								<li class="nomobile">
									<a data-toggle="tab" href="#posters">Posters</a>
								</li>
								<li class="nomobile">
									<a data-toggle="tab" href="#images">Images</a>
								</li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade active in" id="details">
									<table class="table table-condensed table-bordered table-hover">
										<tr>
											<th>Title</th>
											<td>
												<strong><?php echo $title;?></strong>
											</td>
										</tr>
										<tr <?php echo $episode_name == '' ? 'hidden' : '' ?>>
											<th>Episode Title</th>
											<td>
												<strong><?php echo $episode_name;?></strong>
											</td>
										</tr>
										<tr <?php echo $release_date == '' ? 'hidden' : '' ?>>
											<th>Release Date</th>
											<td>
												<?php echo $release_date?>
											</td>
										</tr>
										<tr <?php echo $release_date == '' ? 'hidden' : '' ?>>
											<th>Runtime</th>
											<td>
												<?php echo $time;?> minutes
											</td>
										</tr>
										<tr <?php echo $season != '' ? 'hidden' : '' ?>>
											<th>First Air Date</th>
											<td>
												<?php echo $first_aired;?>
											</td>
										</tr>
										<tr <?php echo $episode != '' ? 'hidden' : '' ?>>
											<th>Last Air Date</th>
											<td>
												<?php echo $last_aired;?>
											</td>
										</tr>
										<tr>
											<th>Genres</th>
											<td>
												<span itemprop="genre"><?php echo $genres;?></span>, 
											</td>
										</tr>
										<tr>
											<th>Likes</th>
											<td>
												<span itemprop="genre"><?php echo $vote_count;?> People</span>, 
											</td>
										</tr>
										<tr>
											<th>Networks</th>
											<td>
												<span itemprop="creator" itemscope itemtype="http://schema.org/Networks">
													<span itemprop="name"><?php echo $networks;?></span>
												</span>
											</td>
										</tr>
									</table>
								</div>



								<div role="tabpanel" class="tab-pane fade" id="posters">
									<div class="row">

										<div class="col-md-6 col-sm-6 cast-list" itemprop="actors" itemscope itemtype="http://schema.org/Person">
											<div class="media">
												<div class="media-left">
													<img src="<?php echo $poster;?>" width="300" height="450" alt="<Images posters" />
												</div>
											</div>
										</div>

									</div>
								</div>

								<div role="tabpanel" class="tab-pane fade" id="images">
									<div class="row">

										<div class="col-md-6 col-sm-6 col-xs-6 col-img-height" itemprop="actors" itemscope itemtype="http://schema.org/Person">
											<div class="media">
												<div class="media-left">
													<img src="<?php echo $fanart;?>" width="300" height="169" alt="Images posters">
												</div>
											</div>
										</div>

									</div>
								</div>

								<div class="clearfix"></div>
								<h4 class="widget-title" class="text-center" style="display:block!important;visibility:visible!important;opacity:1!important">
									<span>Episode List</span>
								</h4>
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
												<td><a class="ext-icon label label-primary" href="<?php echo site_url() ?>/?action=register"
													<i class="glyphicon glyphicon-download-alt"></i> Download Link
												</span>
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
		<footer class="entry-footer">
			<button class="btn btn-xs btn-default" data-toggle="modal" data-target="#dmca-modal">
				<span class="icon-flag"></span> Report this page
			</button>
		</footer>
	</article>

	<div class="col-md-4">
		<aside id="widget-popular" class="widget">
			<h3 class="widget-title">
				<span>Airing Series</span>
			</h3>
			<div class="widget-content">
				<?php 
				if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
				$Movies = unserialize( ocim_data_tv('home_tv_airing_',$page, 'getAiringTodayTVShows') );
				if( is_array($Movies['result']) ):
					foreach ( (array) array_slice($Movies['result'], 0, 10) as $row ) {
						?>
						<a class="nodecor media side-list" href="<?php echo seo_tv($row['id'],$row['title']);?>">
							<div class="media-left">
								<img src="<?php echo $row['poster_path'];?>" width="45" height="68" alt="<?php echo $row['title'];?>" />
							</div>
							<div class="media-body">
								<h4 class="media-heading"><?php echo $row['title'];?> 
								<span class="text-color"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></span>
							</h4>
							<div class="rate" data-toggle="tooltip" data-placement="right" title="<?php echo $row['vote_average'];?> of 10 stars">
								<div class="movie-list-metadata"><div class="star"><i class="glyphicon glyphicon-star"></i> <?php echo $row['vote_average'];?></div></div>
								<div class="glyphicon glyphicon-heart"><?php echo $row['vote_count'];?> Likes</div>
							</div>
						</div>
					</a>
					<?php 
				}
			endif; 
			?>
		</div>
	</aside>
	<aside id="widget-comingsoon" class="widget">
		<h3 class="widget-title">
			<span>On The Air Series</span>
		</h3>
		<div class="widget-content">
			<?php 
			if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
			$Movies = unserialize( ocim_data_tv('home_tv_ontheair_',$page, 'getOnTheAirTVShows') );
			if( is_array($Movies['result']) ):
				foreach ( (array) array_slice($Movies['result'], 0, 10) as $row ) {
					?>
					<a class="nodecor media side-list" href="<?php echo seo_tv($row['id'],$row['title']);?>">
						<div class="media-left">
							<img src="<?php echo $row['poster_path'];?>" width="45" height="68" alt="<?php echo $row['title'];?>" />
						</div>
						<div class="media-body">
							<h4 class="media-heading"><?php echo $row['title'];?> 
							<span class="text-color"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></span>
						</h4>
						<div class="rate" data-toggle="tooltip" data-placement="right" title="<?php echo $row['vote_average'];?> of 10 stars">
							<div class="movie-list-metadata"><div class="star"><i class="glyphicon glyphicon-star"></i> <?php echo $row['vote_average'];?></div></div>
							<div class="glyphicon glyphicon-heart"><?php echo $row['vote_count'];?> Likes</div>
						</div>
					</div>
				</a>
				<?php 
			}
		endif; 
		?>
	</div>
</aside>
</div>
</div>
</div>
<div id="player-modal" class="modal fade nocontext">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header text-center"> <?php echo $judul;?> </div>
			<div class="modal-body">
				<img class="img-responsive" src="<?php echo $images;?>" width="780" height="439" alt="<?php echo $judul;?>">
				<span class="img-cover"></span>
				<span class="offerlay ease"></span>
				<span class="modal-text ease">Join the network of satisfied members and try this service for 
					<strong>Free.</strong> Fill out the signup form and 
					<strong>start watching instantly.</strong>
				</span>
				<div class="modal-ft ease">
					<ul>
						<li>
							<span class="icon icon-film"></span> Unlimited Access
						</li>
						<li>
							<span class="icon icon-magnifier"></span> Search for Anything
						</li>
						<li>
							<span class="icon icon-ban"></span> Ads Free
						</li>
						<li>
							<span class="icon icon-screen-desktop"></span> All Platforms
						</li>
					</ul>
				</div>
			</div>
			<div class="modal-footer">
				<div class="text-center">
					<button class="btn btn-danger btn-lg btn-responsive" onclick="window.location.href='/?action=register'">
						<span class="btn-bg">
							<span class="icon icon-arrow-right-circle"></span>
						</span> Create Free Account
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="dmca-modal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="dmca-form" method="POST" action="<?php echo view_page( 'dmca-notice' );?>">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&timtimes;</button>
					<h3 class="text-center">
						<strong>DMCA Notice</strong>
					</h3>
				</div>
				<div class="modal-body">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">
							<span class="icon-user"></span>
						</span>
						<input type="text" class="form-control required" name="dmca-name" placeholder="Real Name" aria-describedby="sizing-addon1" required>
					</div>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2">
							<span class="icon-envelope"></span>
						</span>
						<input type="text" class="form-control required" name="dmca-email" placeholder="Valid Email Address" aria-describedby="sizing-addon2" required>
					</div>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">
							<span class="icon-link"></span>
						</span>
						<input type="text" class="form-control noselect" name="dmca-url" value="<?php echo seo_tv($row['id'],$row['title']);?>" readonly>
						<input type="hidden" name="dmca-type" value="movie">
						<input type="hidden" name="dmca-id" value="400710">
					</div>
					<div class="input-group">
						<textarea class="form-control required" name="dmca-claim" rows="5" placeholder="Claim..." required></textarea>
					</div>
					<div class="input-group">
						<div class="checkbox">
							<label>
								<input class="required" type="checkbox" name="dmca-agree" required> I have read and agree with 
								<strong>Privacy</strong> and 
								<strong>DMCA Policy</strong>
							</label>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="pull-right">
						<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
						<button class="btn btn-primary" name="dmca-submit" type="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
<footer id="site-footer">
	<div class="container">
		<div class="row">
			<div class="site-links col-md-12 text-center">
				<ul>
					<li>
						<a href="<?php echo view_page( 'privacy-policy' );?>">Privacy</a>
					</li>
					<li>
						<a href="<?php echo view_page( 'dmca-notice' );?>">DMCA Policy</a>
					</li>
					<li>
						<a href="<?php echo view_page( 'contact-us' );?>">Contact</a>
					</li>
					<li>
						<a href="<?php echo site_url() ?>/sitemap.xml">Sitemap</a>
					</li>
				</ul>
			</div>
			<div class="site-credit col-md-12 text-center"> &copy;<?php echo date('Y') ?>
			<a href="<?php echo site_url() ?>"><?php echo config('sitename') ?></a> - All rights reserved. 
		</div>
		<div class="site-note col-md-12 text-center">Disclaimer: All of the free movies found on this website are hosted on third-party servers that are freely available to watch online on <?php echo config('sitename') ?> for all internet users. Any legal issues regarding the free online movies on this website should be taken up with the actual file hosts themselves. <?php echo config('sitename') ?> is not responsible for the accuracy, compliance, copyright, legality, decency, or any other aspect of the content of other linked sites. In case of any copyright claims, Please contact the source websites directly file owners or host sites.
		By accessing this site you agree to be bound by our Privacy Policy.</div>
		<div id="counter" data-min="12234" data-max="12733">
			<span class="globe">
				<span class="fa fa-globe"></span>
			</span>
			<span class="counter-value"><script type="text/javascript"> document.write(Math.floor(Math.random()*12733)); </script></span> Users Online
		</div>
	</div>
</div>
</footer>
<script type="text/javascript" src="//code.jquery.com/jquery-2.2.0.min.js" defer></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" defer></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js" defer></script>
<script type="text/javascript" src="<?php style_theme();?>/js/scripts.min.js" defer></script>
<?php echo histats_write() ?>
</body>
</html>