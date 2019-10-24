		<div class="sidebar">
<div class="dt_mainmeta">
				<nav class="genres"><h2>Genres</h2>
					<ul class="genres scrolling mCustomScrollbar _mCS_1 mCS-autoHide" style="position: relative; overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: 281px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position: relative; top: -321px; left: 0px;" dir="ltr">
					<li class="cat-item cat-item-28"><a href="/genre/28/action">Action</a></li>
					<li class="cat-item cat-item-12"><a href="/genre/adventure/12">Adventure</a></li>
					<li class="cat-item cat-item-16"><a href="/genre/animation/16">Animation</a></li>
					<li class="cat-item cat-item-35"><a href="/genre/comedy/35">Comedy</a></li>
					<li class="cat-item cat-item-80"><a href="/genre/crime/80">Crime</a></li>
					<li class="cat-item cat-item-99"><a href="/genre/documentary/99">Documentary</a></li>
					<li class="cat-item cat-item-18"><a href="/genre/drama/18">Drama</a></li>
					<li class="cat-item cat-item-10751"><a href="/genre/family/10751">Family</a></li>
					<li class="cat-item cat-item-14"><a href="/genre/fantasy/14">Fantasy</a></li>
					<li class="cat-item cat-item-36"><a href="/genre/history/36">History</a></li>
					<li class="cat-item cat-item-27"><a href="/genre/horror/27">Horror</a></li>
					<li class="cat-item cat-item-10402"><a href="/genre/music/10402">Music</a></li>
					<li class="cat-item cat-item-9648"><a href="/genre/mystery/9648">Mystery</a></li>
					<li class="cat-item cat-item-10749"><a href="/genre/romance/10749">Romance</a></li>
					<li class="cat-item cat-item-878"><a href="/genre/science-fiction/878">Science Fiction</a></li>
					<li class="cat-item cat-item-10770"><a href="/genre/tv-movie/10770">TV Movie</a></li>
					<li class="cat-item cat-item-53"><a href="/genre/thriller/53">Thriller</a></li>
					<li class="cat-item cat-item-10752"><a href="/genre/war/10752">War</a></li>
					<li class="cat-item cat-item-37"><a href="/genre/western/37">Western</a></li>
					
					</div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; display: block; height: 97px; max-height: 247px; top: 110px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></ul>
				</nav>
			</div>
			<aside id="dtw_content-2" class="widget doothemes_widget">
				<div class="dtw_content">
				<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 18) as $row ) {
                ?>
					<article class="w_item_b" id="post-343668">
						<a href="<?php echo seo_movie($row['id'],$row['title']);?>">
						<div class="image">
							<img src="<?php echo $row['poster_path'];?>" alt="<?php echo $row['title'];?>"/>
						</div>
						<div class="data">
							<h3><?php echo $row['title'];?></h3>
							<span class="wdate"><?php echo date('Y', strtotime( $row['release_date'] ) );?></span>
							<span class="wextra"><b><i class="icon-heart"></i> <?php echo $row['vote_average'];?></b></span>
						</div>
						</a>
					</article>
					<?php 
                }
        endif; 
        ?>
					
				</div>
			</aside>
		</div>
		
	</div>
</div>