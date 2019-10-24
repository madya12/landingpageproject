		<div id="hero" class="carousel slide carousel-fade" data-ride="carousel" style="height: 563px;">
			<a href="#content"><img src="<?php style_theme() ?>/images/scroll-arrow.svg" alt="Scroll down" class="scroll"></a>

			<div class="container">
				<ol class="carousel-indicators">
					<li data-target="#hero" data-slide-to="0" class="active"></li>
					<li data-target="#hero" data-slide-to="1" class=""></li>
					<li data-target="#hero" data-slide-to="2" class=""></li>
					<li data-target="#hero" data-slide-to="3" class=""></li>
					<li data-target="#hero" data-slide-to="4" class=""></li>
					<li data-target="#hero" data-slide-to="5" class=""></li>
					<li data-target="#hero" data-slide-to="6" class=""></li>
					<li data-target="#hero" data-slide-to="7" class=""></li>
					<li data-target="#hero" data-slide-to="8" class=""></li>
					<li data-target="#hero" data-slide-to="9" class=""></li>
					<li data-target="#hero" data-slide-to="10" class=""></li>
					<li data-target="#hero" data-slide-to="11" class=""></li>
					<li data-target="#hero" data-slide-to="12" class=""></li>
					<li data-target="#hero" data-slide-to="13" class=""></li>
					<li data-target="#hero" data-slide-to="14" class=""></li>
				</ol>
			</div>

			<div class="carousel-inner">
						
		<div class="item active" style="background-image: url('https://image.tmdb.org/t/p/original//askg3SMvhqEl4OL52YuvdtY40Yb.jpg'); padding-top: 103px;">

			<div class="container">
				<div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="100">
					<div class="col-md-9">

						<h1>Coco<small style="color: white;">&nbsp;(2017)</small></h1>
						<p class="desktop">
							
							Despite his family’s baffling generations-old ban on music, Miguel dreams of becoming an accomplished musician like his idol, Ernesto de la Cruz. Desperate to prove his talent, Miguel finds himself in the stunning...						</p>
						<p class="mobile">
							
							Despite his family’s baffling generations-old ban on music, Miguel dreams of becoming an accomplis...						</p>
						<label style="color: white;">Genres : &nbsp;</label>
													<span class="label label-primary label-black-transparant">
								Adventure							</span>
							&nbsp;
														<span class="label label-primary label-black-transparant">
								Animation							</span>
							&nbsp;
														<span class="label label-primary label-black-transparant">
								Comedy							</span>
							&nbsp;
														<span class="label label-primary label-black-transparant">
								Family							</span>
							&nbsp;
													<br><br>
						<div class="buttons">
							<a href="/movie/354912/coco.html" class=" btn btn-default ">
								<i class="material-icons">play_arrow</i>
								<span>Play Now</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 15) as $row ) {
                ?>
				<div class="item" style="background-image: url('<?php echo $row['backdrop_path'];?>'); padding-top: 103px;">

			<div class="container">
				<div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="100">
					<div class="col-md-9">

						<h1><?php echo $row['title'];?><small style="color: white;">&nbsp;(<?php echo date('Y', strtotime( $row['release_date'] ) );?>)</small></h1>
						<p class="desktop" style="height: auto;">
							
							<?php echo short($row['overview']);?>					</p>
						<p class="mobile" style="text-overflow: ellipsis;">
							
						<small>	<?php echo short($row['overview']);?>						</small></p>
						<label style="color: white;">IMDb : &nbsp;</label>
													<span class="label label-primary label-black-transparant">
								<?php echo $row['vote_average'];?>							</span>
							&nbsp;
													<br><br>
						<div class="buttons">
							<!-- <a href="<?php echo seo_movie($row['id'],$row['title']);?>" data-vbtype="video" class="venobox btn btn-default vbox-item"> -->
							<a href="<?php echo seo_movie($row['id'],$row['title']);?>" class=" btn btn-default vbox-item">
								<i class="material-icons">play_arrow</i>
								<span>Watch Now</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
                }
        endif; 
        ?>
				
					</div>
		</div>