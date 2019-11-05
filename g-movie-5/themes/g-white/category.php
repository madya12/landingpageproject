<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/
if ( empty( $_GET['page'] ) ) { 
        $pathinfo = pathinfo ($uri);
        $dirname = str_replace('/'.config('category_url').'/','',$pathinfo['dirname']);
        $filename = $pathinfo['filename'];
        $page = 1;
}else{ 
        $dirname = $_GET['terms'];
        $filename = $_GET['id'];
        $page = $_GET['page'];
        $hal = ' Pages ' .$page;
        $title_after = $hal;
        $description_after = $hal . ' on ' . site_path();
}

$hack_title = ucwords($dirname) . ' Movies';
include('header.php');
?>
<div class="col-md-12 col-sm-12 col-xs-12">
        <h1 class="heading"><i class="fa fa-film"></i> <span>Category for "<?php echo $dirname;?>"<?php echo $hal;?></span></h1>
        <div class="movie-list">
                    <?php 
            if (is_array($row2['episodes'])) {
                ?>
                    <h3 class="text-center clearfix heading"><i class="fa fa-bars"></i> <?php echo $dirname;?>"<?php echo $hal;?></h3>
                    <div class="clearfix"></div>
                        <?php 
        $Movies = unserialize( ocim_data_genre('home_genre_'.$filename.'_',$filename,$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 18  ) as $row ) {
                ?>
                            <div class="col-lg-5 col-md-3 col-sm-3 col-xs-6" itemscope itemtype="http://schema.org/TVSeries">
                                <div class="row">
                                <div class="col-lg-5 col-md-3 col-sm-3 col-xs-6">
                                    <figure class="gallery-list">
                                        <a href="<?php echo seo_movie($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>" rel="bookmark" itemprop="url">
                                            <img class="img-responsive poster_path hovereffect" itemprop="image" src="<?php echo $row['poster_path'];?>" width="100%" height="auto" alt="Watch <?php echo $row['title'];?> Full Movie" title="Watch <?php echo $row['title'];?> Full Movie">
                                            <div class="movie-list-title">
                                                <div class="vote_count"><?php echo $row['vote_count'];?> Likes</div>
                                                <h4 itemprop="name"><?php echo $row['title'];?></h4>
                                            </div>
                                        </a>
                                    </figure>
                                    <div class="movie-list-success">
                                        <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime( $row['release_date'] ) );?></div>
										<div class="movie-list-metadata"><div class="percentage"><i class="fa fa-heart"></i> <?php echo $row['vote_average'];?></div></div>
                                        <meta itemprop="datePublished" content="<?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?>" />
                                    </div>
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
                        $pagination->setPage($_GET['page']);
                       echo $pagination->showPage();
                endif;
                ?>
        </nav>
</div>
<?php include('footer.php'); ?>