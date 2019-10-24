<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/
include('header.php');
$newquery = bad_words( get_search_query() );
?>
<div id="main">
<div class="container">
<div class="row">
<section class="col-md-8">
        <h1 class="heading"><span>Search Result for "<?php echo $newquery;?>"</span></h1>
        <ul class="nav nav-tabs" style="margin-top: 15px;">
                <li class="active"><a data-toggle="tab" href="#tvtab">TV Series</a></li>
                <li><a data-toggle="tab" href="#movietab">Movies</a></li>
        </ul>
        <div class="tab-content">
        <div id="movietab" class="tab-pane">
        <div class="panel-body row">
        <div class="movie-list">
        <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_search_movie(limit_word($newquery, 3),$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 12) as $row ) {
                ?>
                <article id="post-400710" class="post col-md-3 col-sm-3 col-xs-6 col-box">
			<div class="poster-container">
				<div class="img-container">
					<img class="ease" src="<?php echo $row['poster_path'];?>" alt="<?php echo $row['title'];?> (<?php echo date('Y', strtotime( $row['release_date'] ) );?>)">
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
							<a href="<?php echo seo_movie($row['id'],$row['title']);?>"><?php echo $row['title'];?> (<?php echo date('Y', strtotime( $row['release_date'] ) );?>)</a>
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
        else:
            $unserialize = unserialize( ocim_search(limit_word($newquery, 3), limit_word($newquery, 3).'_search') );
            if( is_array($unserialize['result']) ):
                foreach ( (array) $unserialize['result'] as $sect) {
                ?>
                <div class="post col-md-3 col-sm-3 col-xs-6 col-box" itemscope itemtype="http://schema.org/Movie">
                        <figure class="gallery">
                                <a href="<?php echo seo_video($sect['id'],$sect['title']);?>" rel="bookmark" itemprop="url" title="<?php echo $sect['title'];?>">
                                <img class="img-responsive backdrop_path" itemprop="image" src="<?php echo $sect['img'];?>/mqdefault.jpg" width="100%" height="auto" alt="<?php echo $sect['title'];?>" title="<?php echo $sect['title'];?>">
                                <div class="movie-list-title">
                                        <div class="vote_count"><?php echo $sect['channel'];?></div>
                                        <h3 itemprop="name"><?php echo $sect['title'];?></h3>
                                </div>

                                </a>
                        </figure>
                        <div class="movie-list-info">
                                <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime( $sect['date'] ) );?></div>
                                <meta itemprop="datePublished" content="<?php echo date('Y-m-d', strtotime( $sect['date'] ) );?>" />
                        </div>
                </div>
            <?php
                }
            else: ?>
            <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2><i class="fa fa-exclamation"></i> No Movie Found for this search</h2>
                        </div>
                    </div>
                </div>
                <br>
            <?php 
            endif; 
        endif;
        ?>
        </div>
        <div class="clearfix"></div>
        <nav class="text-center">
                <?php 
                if ($Movies['total_results'][0] > 19) :
                        require_once( DOCUMENT_ROOT. '/app/class/CSSPagination.class.php');
                        if ($Movies['total_results'][0] > 1000) :
                                $totalResults = 1000;
                        else:
                                $totalResults = $Movies['total_results'][0];
                        endif;
                        $limit  = 20; 
                        $link   = '/?s='.get_search_query();
                        $pagination = new CSSPagination($totalResults, $limit, $link ); // create instance object
                        $pagination->setPage($_GET['page']); // dont change it
                       echo $pagination->showPage();
                endif;
                ?>
        </nav>
        </div>
        </div>
        <?php if (config('tvdb_search') == "true"): ?>
        <div id="tvtab" class="tab-pane active">
            <div class="panel-body row">
                <div class="movie-list">
                <?php
                $tvdb  = new Tvdb(options('tvdb_api'));
                $serie = $tvdb->search($newquery);
                $count = 0;
                ?>
                <?php if (!empty($serie)): ?>
                <?php foreach ($serie as $tv): ?>
                <?php $_seri = $tvdb->seriesEpisode($tv->id)['serie'] ?>
                <article id="post-1418" class="post col-md-3 col-sm-3 col-xs-6 col-box">
			<div class="poster-container">
				<div class="img-container">
					<img class="ease" src="<?php echo $tvdb->poster($_seri->poster) ?>" alt="<?php echo $tv->name ?>">
					</div>
					<span class="img-cover"></span>
				</div>
				<div class="detail-container ease">
					<span class="star">
						<span class="glyphicon glyphicon-star"></span>
						<span class="rate"><?php echo $_seri->rating;?></span>
					</span>
					<header class="entry-header">
						<h2 class="entry-title text-center">
							<a href="<?php seo_serie($tv->id) ?>"><?php echo $tv->name ?> (<?php echo format_tanggal( $_seri->firstAired );?>)</a>
						</h2>
					</header>
					<div class="play-btn">
						<a href="<?php seo_serie($tv->id) ?>">
							<span class="play-btn-border ease">
								<i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</div>
			</article>
                <?php endforeach ?>
                <?php else: ?>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2><i class="fa fa-exclamation"></i> No TV Show Found for this search</h2>
                        </div>
                    </div>
                </div>
                <?php endif ?>
                </div>
            </div>
                <br>
        </div>
        </div>
        <?php else: ?>
                <div id="tvtab" class="tab-pane active">
                    <div class="panel-body row">
                        <div class="movie-list">
                            <?php 
                            $TV = unserialize( ocim_data_search_tv(limit_word($newquery, 3),$page) );
                            if( is_array($TV['result']) ):
                                foreach ( (array) array_slice($TV['result'], 0, 12) as $row ) {
                                    ?>
                                    <div class="post col-md-3 col-sm-3 col-xs-6 col-box" itemscope itemtype="http://schema.org/Movie">
                                        <div class="row">
                                            <figure class="gallery">
                                                <a href="<?php echo seo_tv($row['id'],$row['title']);?>" title="<?php echo $row['title'];?> (<?php echo date('Y', strtotime( $row['release_date'] ) );?>)" rel="bookmark" itemprop="url">
                                                    <img class="img-responsive poster_path hovereffect" itemprop="image" src="<?php echo $row['poster_path'];?>" width="100%" height="auto" alt="<?php echo $row['title'];?> (<?php echo date('Y', strtotime( $row['release_date'] ) );?>)" title="<?php echo $row['title'];?> (<?php echo date('Y', strtotime( $row['release_date'] ) );?>)">
                                                    <div class="movie-list-title">
                                                        <div class="vote_count"><?php echo $row['vote_count'];?> people vote</div>
                                                        <h4 itemprop="name"><?php echo $row['title'];?> (<?php echo date('Y', strtotime( $row['release_date'] ) );?>)</h4>
                                                    </div>
                                                    <span class="playicon"><i class="fa fa-play-circle"></i></span>
                                                </a>
                                            </figure>
                                            <div class="movie-list-info">
                                                <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime( $row['release_date'] ) );?></div>
                                                <div class="movie-list-metadata"><div class="percentage"><i class="fa fa-heart"></i> <?php echo $row['vote_average'];?></div></div>
                                                <meta itemprop="datePublished" content="<?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?>" />
                                            </div>
                                        </div>
                                    </div>

                                    <?php 
                                } 
                                else:
                                    ?>
                                <div class="row">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h2><i class="fa fa-exclamation"></i> No TV Show Found for this search</h2>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <?php
                                endif;
                                ?>
                            </div>
                            <div class="clearfix"></div>
                            <nav class="text-center">
                                <?php 
                                if ($TV['total_results'][0] > 19) :
                                    require_once( DOCUMENT_ROOT. '/app/class/CSSPagination.class.php');

                                if ($TV['total_results'][0] > 1000) :
                                    $totalResults = 1000;
                                else:
                                    $totalResults = $TV['total_results'][0];
                                endif;
                                $limit  = 20; 
                                $link   = '/?s='.get_search_query();
                                $pagination = new CSSPagination($totalResults, $limit, $link ); // create instance object
                                $pagination->setPage($_GET['page']); // dont change it
                                echo $pagination->showPage();
                                endif;
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>   
                <?php endif ?>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>