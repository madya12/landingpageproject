<?php
$hack_title = 'New Movies Coming Soon';
$hack_description = "Check out the latest new movies coming soon to theaters";
get_header(); ?>
<div id="main">
<div class="container">
<div class="row">
<section class="col-md-12">
	<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
		<li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<span itemprop="name">
				<a itemprop="item" href="<?php echo site_uri() ?>">
					<span class="icon-home"></span>
				</a>
			</span>
		</li>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<span itemprop="name">
				<a itemprop="item" href="<?php echo site_uri() ?>/movie/">Movies</a>
			</span>
		</li>
		<li class="active">Upcoming</li>
	</ol>
	<header class="page-header">
		<h3 class="widget-title">
						<span>Upcoming Movies</span>
		</h3>
	</header>
	<div class="col-container clearfix">
	<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_movie_upcoming_',$page, 'getUpcomingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
		<article id="post-400710" class="post col-md-3 col-sm-3 col-xs-6 col-box">
			<div class="poster-container">
				<div class="img-container">
					<img class="ease" src="<?php echo $row['poster_path'];?>" alt="<?php echo $row['title'];?>">
					</div>
					<span class="img-cover"></span>
				</div>
				<div class="detail-container ease">
					<span class="star">
						<span class="glyphicon glyphicon-star"></span>
						<span class="rate"><?php echo $row['vote_average'];?></span>
					</span>
					<header class="entry-header">
						<h2 class="entry-title text-center">
							<a href="<?php echo seo_movie($row['id'],$row['title']);?>"><?php echo $row['title'];?></a>
						</h2>
					</header>
					<div class="play-btn">
						<a href="<?php echo seo_movie($row['id'],$row['title']);?>">
							<span class="play-btn-border ease">
								<i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</div>
			</article>
			<?php 
                }
        endif; 
        ?>
			
				</div>
				<footer class="page-footer">
					<ul class="pagination pagination-sm">
						<?php
                if ($Movies['total_results'][0] > 19) :
                        require_once( DOCUMENT_ROOT. '/app/class/CSSPagination.class.php');

                        if ($Movies['total_results'][0] > 1000) :
                                $totalResults = 1000;
                        else:
                                $totalResults = $Movies['total_results'][0];
                        endif;
                        $limit  = 20; 
                        $link   = "/?do=movie-upcoming";
                        $pagination = new CSSPagination($totalResults, $limit, $link ); // create instance object
                        $pagination->setPage($_GET[page]); // dont change it
                       echo $pagination->showPage();
                endif;
                ?>
					</ul>
				</footer>
			</section>
		</div>
	</div>
</div>
<?php get_footer(); ?>