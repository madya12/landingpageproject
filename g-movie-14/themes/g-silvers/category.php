<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G-silvers V-red
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


    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title"><span>Category for "<?php echo $dirname;?>"<?php echo $hal;?></span></h2>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="main-wrap">
        <div class="section section-padding video-list-section">
            <div class="container">
                <div class="row">
                    <div class="show-listing">
                     <?php 
        $Movies = unserialize( ocim_data_genre('home_genre_'.$filename.'_',$filename,$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="video-item">
                                <div class="thumb-wrap">
                                    <img src="<?php echo $row['poster_path'];?>" alt="Play <?php echo $row['title'];?>">
                                    <span class="rating"><?php echo $row['vote_average'];?></span>
                                    <div class="thumb-hover">
                                        <a class="play-video" href="<?php echo seo_movie($row['id'],$row['title']);?>" title="Play <?php echo $row['title'];?>"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="video-details">
                                    <h4 class="video-title"><a href="<?php echo seo_movie($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a></h4>
                                    <p class="video-release-on"><?php echo $row['release_date'];?></p>
                                </div>
                            </div>
                        </div>
                        <?php 
                }
        endif; 
        ?>
                         
                                    
                            <div class="col-xs-12"> 
                            <!-- Video Pagination -->
                            <nav class="navigation pagination" role="navigation">
                                <div class="nav-links">        
                                    
                                    
                                    <?php
                if ($Movies['total_results'][0] > 19) :
                        require_once( DOCUMENT_ROOT. '/app/class/CSSPagination.class.php');

                        if ($Movies['total_results'][0] > 1000) :
                                $totalResults = 1000;
                        else:
                                $totalResults = $Movies['total_results'][0];
                        endif;
                        $limit  = 20; 
                        $link   = "/?";
                        $pagination = new CSSPagination($totalResults, $limit, $link ); // create instance object
                        $pagination->setPage($_GET['page']); // dont change it
                       echo $pagination->showPage();
                endif;
                ?>
                        </div>
                            </nav>
                            <!-- Video Pagination End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

   

   

<?php get_footer(); ?>