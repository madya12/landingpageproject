<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G12
| -------------------------------------------------------------------------------
*/
if ( empty( $_GET[page] ) ) { 
        $pathinfo = pathinfo ($uri);
        $dirname = str_replace('/'.config('category_url').'/','',$pathinfo['dirname']);
        $filename = $pathinfo['filename'];
        $page = 1;
}else{ 
        $dirname = $_GET[terms];
        $filename = $_GET[id];
        $page = $_GET[page];
        $hal = ' Pages ' .$page;
        $title_after = $hal;
        $description_after = $hal . ' on ' . site_path();
}

$hack_title = ucwords($dirname) . ' Movies';
include('header.php');
?>
        <div class="container menu-responsive content-responsive">
            <div class="row"><div class="col-md-12 col-sm-12 col-xs-12">
    <!-- <h2 class="page-header"><i class="fa fa-film"></i> Movies</h2> -->
    <div class="releases"><h1 style="color: #f29e37; border: 5px solid #0500040a; background: #000000a6;"><i class="fa fa-film"></i> <?php echo $dirname;?> <?php echo $hal;?> Movies</h1></div>
    <div style="background-color: #000000a3; width: 100%; overflow: hidden; padding-top: 15px;">
                        <?php 
        $Movies = unserialize( ocim_data_genre('home_genre_'.$filename.'_',$filename,$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 18) as $row ) {
                ?>
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6" itemscope itemtype="https://schema.org/Movie">
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
                        $link   = '/?action=category&terms='.$dirname.'&id='.$filename;
                        $pagination = new CSSPagination($totalResults, $limit, $link );
                        $pagination->setPage($_GET[page]);
                       echo $pagination->showPage();
                endif;
                ?>
        </nav>


</div>
</div><!-- row -->

</div><!-- container -->
<?php include('footer.php'); ?>