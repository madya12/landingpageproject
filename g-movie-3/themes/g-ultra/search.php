<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G12
| -------------------------------------------------------------------------------
*/
include('header.php');
$newquery = bad_words( get_search_query() );
?>
<div class="col-md-12 col-sm-12 col-xs-12">
        <h1 class="heading" style="color: #f29e37; border: 5px solid #0500040a; background: #000000a6;"><span>Search Result for "<?php echo $newquery;?>"</span></h1>
        <ul class="nav nav-tabs" style="margin-top: 15px;">
                <li class="active"><a data-toggle="tab" href="#tvtab">TV Series</a></li>
                <li><a data-toggle="tab" href="#movietab">Movies</a></li>
        </ul>
        <div class="tab-content" style="background-color: #000000a3; width: 100%; overflow: hidden; padding-top: 15px;">
        <div id="movietab" class="tab-pane">
        <div class="panel-body row">
        <div class="movie-list">
        <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_search_movie(limit_word($newquery, 3),$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 12) as $row ) {
                ?>
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6" itemscope itemtype="https://schema.org/Movie">
                        <div class="row">
                                <figure class="gallery">
                                        <a href="<?php echo seo_movie($row['id'],$row['title']);?>" title="Watch <?php echo $row['title'];?> Full Movie" rel="bookmark" itemprop="url">
                                        <img class="img-responsive poster_path hovereffect" itemprop="image" src="<?php echo $row['poster_path'];?>" width="100%" height="auto" alt="Watch <?php echo $row['title'];?> Full Movie" title="Watch <?php echo $row['title'];?> Full Movie">
                                        <div class="movie-list-title">
                                                <div class="vote_count"><?php echo $row['vote_count'];?> people vote</div>
                                                <h4 itemprop="name"><?php echo $row['title'];?></h4>
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
            $unserialize = unserialize( ocim_search(limit_word($newquery, 3), limit_word($newquery, 3).'_search') );
            if( is_array($unserialize['result']) ):
                foreach ( (array) $unserialize['result'] as $sect) {
                ?>
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6" itemscope itemtype="https://schema.org/Movie">
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
                        $pagination->setPage($_GET[page]); // dont change it
                       echo $pagination->showPage();
                endif;
                ?>
        </nav>
        </div>
        </div>
        <?php if (config('tvdb_search') == "false"): ?>
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
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6" itemscope itemtype="https://schema.org/Movie">
                    <div class="row">
                        <figure class="gallery">
                            <a href="<?php seo_serie($tv->id) ?>" title="<?php echo $tv->name ?>" rel="bookmark" itemprop="url">
                                <img class="img-responsive poster_path hovereffect" onerror="posterError(this)" itemprop="image" src="<?php echo $tvdb->poster($_seri->poster) ?>" width="100%" height="auto" alt="<?php echo $tv->name ?>" title="<?php echo $tv->name ?>">
                                <div class="movie-list-title">
                                    <div class="vote_count"><?php echo $_seri->ratingCount;?> people vote</div>
                                    <h4 itemprop="name"><?php echo $tv->name ?></h4>
                                </div>
                            <span class="playicon"><i class="fa fa-play-circle"></i></span>
                            </a>
                        </figure>
                        <div class="movie-list-info">
                            <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo format_tanggal( $_seri->lastUpdated );?></div>
                            <div class="movie-list-metadata"><div class="percentage"><i class="fa fa-heart"></i> <?php echo $_seri->rating;?></div></div>
                            <meta itemprop="datePublished" content="<?php echo format_tanggal( $_seri->firstAired );?>" />
                        </div>
                    </div>
                </div>
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
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6" itemscope itemtype="https://schema.org/Movie">
                                        <div class="row">
                                            <figure class="gallery">
                                                <a href="<?php echo seo_tv($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>" rel="bookmark" itemprop="url">
                                                    <img class="img-responsive poster_path hovereffect" itemprop="image" src="<?php echo $row['poster_path'];?>" width="100%" height="auto" alt="<?php echo $row['title'];?>" title="<?php echo $row['title'];?>">
                                                    <div class="movie-list-title">
                                                        <div class="vote_count"><?php echo $row['vote_count'];?> people vote</div>
                                                        <h4 itemprop="name"><?php echo $row['title'];?></h4>
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
                                $pagination->setPage($_GET[page]); // dont change it
                                echo $pagination->showPage();
                                endif;
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>   
                <?php endif ?>
</div>
<?php include('footer.php'); ?>