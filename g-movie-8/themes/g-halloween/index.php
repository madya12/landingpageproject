<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/

include('header.php');
?>
<!--/header--><body>

 
<div class="header-pad"></div> 
<!-- main -->
<div style="padding-top: 70px;" id="main">
    <div class="container">
        <div class="top-content">
            <!-- slider -->                 <div class="swiper-container-horizontal" id="slider">
                <div style="transition-duration: 0ms; transform: translate3d(-4680px, 0px, 0px);" class="swiper-wrapper">
				<?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 6) as $row ) {
                ?>
                            <div data-swiper-slide-index="0" class="swiper-slide" style="background-image: url(&quot;<?php echo $row['backdrop_path'];?>&quot;); width: 1170px;">
                                <a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="slide-link" title="<?php echo $row['title'];?>"></a>
                        <span class="slide-caption">
                            <h2><?php echo $row['title'];?></h2>
                            <p class="sc-desc"><?php echo $row['overview'];?></p>
                            <div class="slide-caption-info">
                                <div class="block"><strong>Likes:</strong>
                                   <a href="#" title="Action"><?php echo $row['vote_count'];?></a>  </div>
                                <div class="block"><strong>Release:</strong> <?php echo date('Y', strtotime( $row['release_date'] ) );?></div>
                                <div class="block"><strong>IMDb:</strong> <?php echo $row['vote_average'];?></div>
                            </div>
                            <a href="<?php echo seo_movie($row['id'],$row['title']);?>">
                                <div class="btn btn-danger mt20">Watching</div>
                            </a>
                        </span>
                            </div>

							<?php 
                }
        endif; 
        ?></div>
                <div class="swiper-pagination swiper-pagination-clickable"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                <div class="clearfix"></div>
            </div>
           
            <!--/slider -->
            
            
            <!--top news-->
            <div id="top-news">
                <div class="top-news">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tn-news" role="tab" data-toggle="tab">LATEST EPISODE</a></li>
                        
                    </ul>
                    <div class="top-news-content">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in fade active" id="tn-news">
                                                                    <ul data-ps-id="c089833c-a596-efa6-577c-48f2328ee954" class="tn-news ps-container ps-active-y">
                                                 <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_tv('home_tv_popular_',$page, 'getPopularTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 3) as $row ) {
                ?>
                                            <li>
                                                <a href="#" title="" class="thumb news-thumb" style="background-image:url(<?php echo $row['backdrop_path'];?>);"></a>

                                                <div class="tnc-info">
                                                    <h4>
                                                        <a href="<?php echo seo_tv($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a></h4>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
											<?php 
                }
        endif; 
        ?>                                                                                  
                                                                                  
                                                                                <li class="view-more">
                                            <a href="<?php echo view_page( 'movies-nowplay' );?>"> View more <i class="fa fa-chevron-circle-right"></i></a>
                                        </li>
                                    <div style="left: 0px; bottom: 3px;" class="ps-scrollbar-x-rail"><div style="left: 0px; width: 0px;" class="ps-scrollbar-x"></div></div><div style="top: 0px; height: 365px; right: 3px;" class="ps-scrollbar-y-rail"><div style="top: 0px; height: 152px;" class="ps-scrollbar-y"></div></div><div style="left: 0px; bottom: 3px;" class="ps-scrollbar-x-rail"><div style="left: 0px; width: 0px;" class="ps-scrollbar-x"></div></div><div style="top: 0px; height: 365px; right: 3px;" class="ps-scrollbar-y-rail"><div style="top: 0px; height: 152px;" class="ps-scrollbar-y"></div></div></ul>
                                                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tn-notice">
                                <div class="tnc-apps">
                                    <a href="#" class="tnca-block ios"><i class="fa fa-apple"></i><span>HDFlix</span>
                                        for Apple iOs</a>
                                    <a href="#" class="tnca-block android"><i class="fa fa-android"></i><span>HDFlix</span> for Android</a>
                                </div>
                                                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/top news-->
            <div class="clearfix"></div>
        </div>
        <!--survey -->
        
        <!--/survey-->
        
        <div class="pad"></div>
         
<div class="main-content">
            <div class="movies-list-wrap mlw-topview">     
            <!--related-->
           <div class="ml-title">
                    <span class="pull-left">Suggestion <i class="fa fa-chevron-right ml10"></i></span>
                    <a href="<?php echo view_page( 'tv-airing' );?>" class="pull-right cat-more">View more <i class="fa fa-chevron-circle-right"></i></a>
                    <ul role="tablist" class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" role="tab" href="#movie-featured" aria-expanded="false">Featured</a></li>
                        <li><a data-toggle="tab" role="tab" href="#topview-today" aria-expanded="false">Airing Today</a></li> 
                         
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="tab-content">
                    <div id="movie-featured" class="movies-list movies-list-full tab-pane in fade active">
                        <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 16) as $row ) {
                ?>       
        <div class="ml-item">
             <a href="<?php echo seo_movie($row['id'],$row['title']);?>" data-jtip="#f-featured-4362" class="ml-mask jt" title="<?php echo $row['title'];?> <?php echo date('Y', strtotime( $row['release_date'] ) );?>">
                               <span class="thumb mli-thumb" style="background-image: url(<?php echo $row['poster_path'];?>)"></span>
                                <span class="mli-info"><h2><?php echo $row['title'];?> <?php echo date('Y', strtotime( $row['release_date'] ) );?><br></br></h2></span>
                <span class="mli-info"><h2><?php echo $country;?></h2></span>
            </a>


            <div id="f-featured-5567" style="display: none; position: relative;">
                <div class="jtip-quality">HD</div>
                <div class="jtip-top">
                
                    <div class="clearfix"></div>
                </div>
                 
                                                   
                                <div class="jtip-bottom">
                   <a href="#" class="btn btn-block btn-danger"><i class="fa fa-play-circle mr10"></i>Login</a>
                    <button onclick="#" class="btn btn-block btn-default mt10 btn-favorite-3317 add-favorite" data-target="#pop-login" data-toggle="modal">
                        Add to favorite                    </button>
                </div>
            </div>
        </div>
		<?php 
                }
        endif; 
        ?>
                                         <div class="clearfix"></div>
                    </div>
                    
                    <!-- requested-->
                    
                    <div id="topview-today" class="movies-list movies-list-full tab-pane in fade">
                     
                                                  <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_tv('home_tv_airing_',$page, 'getAiringTodayTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 16) as $row ) {
                ?><div class="ml-item">
            <a href="<?php echo seo_tv($row['id'],$row['title']);?>" data-jtip="#f-featured-4362" class="ml-mask jt" title="<?php echo $row['title'];?> <?php echo date('Y', strtotime( $row['release_date'] ) );?>">
                               
                                <span class="thumb mli-thumb" style="background-image: url(<?php echo $row['poster_path'];?>)"></span>
                                <span class="mli-info"><h2><?php echo $row['title'];?> <?php echo date('Y', strtotime( $row['release_date'] ) );?><br></br></h2></span>
                <span class="mli-info"><h2><?php echo $networks;?></h2></span>
            </a>

            <div id="f-featured-4362" style="display: none; position: relative;">
                <div class="jtip-quality">HD</div>
                <div class="jtip-top">
                
                    <div class="clearfix"></div>
                </div>
                 
                                                   
                                <div class="jtip-bottom">
                   <a href="#" class="btn btn-block btn-danger"><i class="fa fa-play-circle mr10"></i>Login</a>
                    <button onclick="#" class="btn btn-block btn-default mt10 btn-favorite-3317 add-favorite" data-target="#pop-login" data-toggle="modal">
                        Add to favorite                    </button>
                </div>
            </div>
        </div> <?php 
                }
        endif; 
        ?><div class="clearfix"></div>
		
                            </div>
        <!--/requested-->
                    
                     <!-- requested-->
                    
                    <div id="top-rating" class="movies-list movies-list-full tab-pane in fade">
                     
                        
                            </div>
        <!--/requested-->
                    
                    
                          </div></div>
                    
                    
                    
        </div>
    </div>
</div>
 
 
</div>
<?php include('footer.php'); ?>