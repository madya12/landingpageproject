<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Flix
| -------------------------------------------------------------------------------
*/
include('header.php');
$newquery = bad_words( get_search_query() );
?>
<div id="main">
<div class="container">
<div class="row">
<section class="col-md-8">
        <div class="page-header">
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title">Search Results for movie : <?php echo $newquery;?></h2>
            </div>
        </div>
    </div>
        <ul class="nav nav-tabs" style="margin-top: 15px;">
                <li><a data-toggle="tab" href="#tvtab">TV Series</a></li>
                <li class="active"><a data-toggle="tab" href="#movietab">Movies</a></li>
        </ul>
        <div class="tab-content">
        <div id="movietab" class="tab-pane active">
<div class="container">
   <div class="show-listing">
      <div class="row">
	  <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_search_movie(limit_word($newquery, 3),$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 18) as $row ) {
                ?>
         <div class="col-6 col-sm-4 col-md-2">
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
                  <p class="video-release-on"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></p>
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
         <div class="col-6 col-sm-4 col-md-2">
            <div class="video-item">
               <div class="thumb-wrap">
                  <img src="<?php echo $sect['poster_path'];?>" alt="Play <?php echo $sect['title'];?>">
                  <span class="rating"><?php echo $sect['vote_average'];?></span>
                  <div class="thumb-hover">
                     <a class="play-video" href="<?php echo seo_video($sect['id'],$sect['title']);?>" title="Play <?php echo $sect['title'];?>"><i class="fa fa-play"></i></a>
                  </div>
               </div>
               <div class="video-details">
                  <h4 class="video-title"><a href="<?php echo seo_video($sect['id'],$sect['title']);?>" title="<?php echo $sect['title'];?>"><?php echo $sect['title'];?></a></h4>
                  <p class="video-release-on"><?php echo date('Y-m-d', strtotime( $sect['release_date'] ) );?></p>
               </div>
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
         <div class="col-xs-12">
            <!-- Video Pagination -->
            <nav class="navigation pagination" role="navigation">
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
   </div>
</div>
        </div>
        <?php if (config('tvdb_search') == "false"): ?>
        <div id="tvtab" class="tab-pane">
<div class="container">
   <div class="show-listing">
      <div class="row">
<?php
                $tvdb  = new Tvdb(options('tvdb_api'));
                $serie = $tvdb->search($newquery);
                $count = 0;
                ?>
                <?php if (!empty($serie)): ?>
                <?php foreach ($serie as $tv): ?>
                <?php $_seri = $tvdb->seriesEpisode($tv->id)['serie'] ?>
         <div class="col-6 col-sm-4 col-md-2">
            <div class="video-item">
               <div class="thumb-wrap">
                  <img src="<?php echo $tvdb->poster($_seri->poster) ?>" alt="Play <?php echo $tv->name ?>">
                  <span class="rating"><?php echo $_seri->rating;?></span>
                  <div class="thumb-hover">
                     <a class="play-video" href="<?php seo_serie($tv->id) ?>" title="Play <?php echo $tv->name ?>"><i class="fa fa-play"></i></a>
                  </div>
               </div>
               <div class="video-details">
                  <h4 class="video-title"><a href="<?php seo_serie($tv->id) ?>" title="<?php echo $tv->name ?>"><?php echo $tv->name ?></a></h4>
                  <p class="video-release-on"><?php echo date('Y-m-d', strtotime( $sect['release_date'] ) );?></p>
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
         <div class="col-xs-12">
            <!-- Video Pagination -->
            <nav class="navigation pagination" role="navigation">
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
   </div>
</div>
                <br>
        </div>
        </div>
        <?php else: ?>
                <div id="tvtab" class="tab-pane">
<div class="container">
   <div class="show-listing">
      <div class="row">
	   <?php 
                            $TV = unserialize( ocim_data_search_tv(limit_word($newquery, 3),$page) );
                            if( is_array($TV['result']) ):
                                foreach ( (array) array_slice($TV['result'], 0, 18) as $row ) {
                                    ?>
         <div class="col-6 col-sm-4 col-md-2">
            <div class="video-item">
               <div class="thumb-wrap">
                  <img src="<?php echo $row['poster_path'];?>" alt="Play <?php echo $row['title'];?>">
                  <span class="rating"><?php echo $row['vote_average'];?></span>
                  <div class="thumb-hover">
                     <a class="play-video" href="<?php echo seo_tv($row['id'],$row['title']);?>" title="Play <?php echo $row['title'];?>"><i class="fa fa-play"></i></a>
                  </div>
               </div>
               <div class="video-details">
                  <h4 class="video-title"><a href="<?php echo seo_tv($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a></h4>
                  <p class="video-release-on"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></p>
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
         <div class="col-xs-12">
            <!-- Video Pagination -->
            <nav class="navigation pagination" role="navigation">
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
</div>
                    </div>
                </div>   
                <?php endif ?>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>