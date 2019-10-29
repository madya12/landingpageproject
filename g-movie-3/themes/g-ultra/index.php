<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G12
| -------------------------------------------------------------------------------
*/

include('header.php');
?>
        <div class="container menu-responsive content-responsive">
            <div class="row"><div class="col-md-12 col-sm-12 col-xs-12">
    <!-- <h2 class="page-header"><i class="fa fa-film"></i> Movies</h2> -->
    <div class="releases" ><h1 style="color: #f29e37; border: 5px solid #0500040a; background: #000000a6;"><i class="fa fa-film"></i> Movies</h1></div>
    <div style="background-color: #000000a6; width: 100%; overflow: hidden; padding-top: 15px;">
                        <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 12) as $row ) {
                ?>
                <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12" itemscope itemtype="https://schema.org/Movie">
                        <div class="row">
                                <figure class="gallery">
                                        <a href="<?php echo seo_movie($row['id'],$row['title']);?>" title="Watch <?php echo $row['title'];?> Full Movie" rel="bookmark" itemprop="url">
                                        <img class="img-responsive poster_path hovereffect" itemprop="image" src="<?php echo $row['poster_path'];?>" width="100%" height="auto" alt="Watch <?php echo $row['title'];?> Full Movie" title="Watch <?php echo $row['title'];?> Full Movie">
                                        <div class="movie-list-title">
                                                <div class="vote_count"><?php echo $row['vote_count'];?> Likes</div>
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
        endif; 
        ?>                
                        </div>
        <div class="clearfix"></div><br>
        <!-- <h2 class="page-header"><i class="fa fa-film"></i> TV Shows</h2> -->
        <div class="releases"><h1 style="color: #f29e37; border: 5px solid #0500040a; background: #000000a6;"><i class="fa fa-film"></i> TV Shows</h1></div>
    <div style="background-color: #000000a6; width: 100%; overflow: hidden; padding-top: 15px;">
                        <?php 
        $TV = unserialize( ocim_data_tv('home_tv_',$page, 'getOnTheAirTVShows') );
        if( is_array($TV['result']) ):
        foreach ( (array) array_slice($TV['result'], 0, 12) as $row ) {
                ?>
                 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6" itemscope itemtype="https://schema.org/Movie">
                        <div class="row">
                               <figure class="gallery">
                                        <a href="<?php echo seo_tv($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>" rel="bookmark" itemprop="url">
                                        <img class="img-responsive poster_path hovereffect" itemprop="image" src="<?php echo $row['poster_path'];?>" width="100%" height="auto" alt="<?php echo $row['title'];?>" title="<?php echo $row['title'];?>">
                                        <div class="movie-list-title">
                                                <div class="vote_count"><?php echo $row['vote_count'];?> Likes</div>
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
        endif;
        ?>

                </div>


</div>
</div><!-- row -->

</div><!-- container -->
<?php include('footer.php'); ?>