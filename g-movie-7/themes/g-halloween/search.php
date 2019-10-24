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
<!--/header--><body>

 
<div class="header-pad"></div> 
<!-- main -->
<div style="padding-top: 70px;" id="main">
    <div class="container">
        
        <div class="pad"></div>
         
<div class="main-content">
            <div class="movies-list-wrap mlw-topview">     
            <!--related-->
           <div class="ml-title">
                    <span class="pull-left">Search Result for "<?php echo $newquery;?>" <i class="fa fa-chevron-right ml10"></i></span>
                    <a href="<?php echo view_page( 'tv-airing' );?>" class="pull-right cat-more">View more »</a>
                    <ul role="tablist" class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" role="tab" href="#movie" aria-expanded="false">Movie</a></li>
						<li><a data-toggle="tab" role="tab" href="#tmdb" aria-expanded="false">TV Series</a></li>
                         
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="tab-content">
                    <div id="movie" class="movies-list movies-list-full tab-pane in fade active">
                        <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_search_movie(limit_word($newquery, 3),$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 12) as $row ) {
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
                   <a href="#" class="btn btn-block btn-success"><i class="fa fa-play-circle mr10"></i>Login</a>
                    <button onclick="#" class="btn btn-block btn-default mt10 btn-favorite-3317 add-favorite" data-target="#pop-login" data-toggle="modal">
                        Add to favorite                    </button>
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
                                         <div class="clearfix"></div>
                    </div>
                    
                    <!-- requested-->
                    
                    <div id="tv" class="movies-list movies-list-full tab-pane in fade">
                     
                                                  
				<div class="ml-item">
            <a href="<?php echo seo_video($sect['id'],$sect['title']);?>" data-jtip="#f-featured-4362" class="ml-mask jt" title="<?php echo $sect['title'];?> <?php echo date('Y', strtotime( $sect['release_date'] ) );?>">
                               
                                <span class="thumb mli-thumb" style="background-image: url(<?php echo $sect['poster_path'];?>)"></span>
                                <span class="mli-info"><h2><?php echo $sect['title'];?> <?php echo date('Y', strtotime( $sect['release_date'] ) );?><br></br></h2></span>
                <span class="mli-info"><h2><?php echo $sect['channel'];?></h2></span>
            </a>

            <div id="f-featured-4362" style="display: none; position: relative;">
                <div class="jtip-quality">HD</div>
                <div class="jtip-top">
                
                    <div class="clearfix"></div>
                </div>
                 
                                                   
                                <div class="jtip-bottom">
                   <a href="#" class="btn btn-block btn-success"><i class="fa fa-play-circle mr10"></i>Login</a>
                    <button onclick="#" class="btn btn-block btn-default mt10 btn-favorite-3317 add-favorite" data-target="#pop-login" data-toggle="modal">
                        Add to favorite                    </button>
                </div>
            </div>
        </div> <?php
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
			<div class="clearfix"></div>
		
                            </div>
        <!--/requested-->
                    
                     <!-- requested-->
                    <?php if (config('tvdb_search') == "false"): ?>
                    <div id="tvdb" class="movies-list movies-list-full tab-pane in fade">
                     
                 <?php
                $tvdb  = new Tvdb(options('tvdb_api'));
                $serie = $tvdb->search($newquery);
                $count = 0;
                ?>
                <?php if (!empty($serie)): ?>
                <?php foreach ($serie as $tv): ?>
                <?php $_seri = $tvdb->seriesEpisode($tv->id)['serie'] ?>              
				<div class="ml-item">
            <a href="<?php seo_serie($tv->id) ?>" data-jtip="#f-featured-4362" class="ml-mask jt" title="<?php echo $tv->name ?> <?php echo format_tanggal( $_seri->firstAired );?>">
                               
                                <span class="thumb mli-thumb" style="background-image: url(<?php echo $tvdb->poster($_seri->poster) ?>)"></span>
                                <span class="mli-info"><h2><?php echo $tv->name ?> <?php echo format_tanggal( $_seri->firstAired );?><br></br></h2></span>
                <span class="mli-info"><h2><?php echo $_seri->rating;?></h2></span>
            </a>

            <div id="f-featured-4362" style="display: none; position: relative;">
                <div class="jtip-quality">HD</div>
                <div class="jtip-top">
                
                    <div class="clearfix"></div>
                </div>
                 
                                                   
                                <div class="jtip-bottom">
                   <a href="#" class="btn btn-block btn-success"><i class="fa fa-play-circle mr10"></i>Login</a>
                    <button onclick="#" class="btn btn-block btn-default mt10 btn-favorite-3317 add-favorite" data-target="#pop-login" data-toggle="modal">
                        Add to favorite                    </button>
                </div>
            </div>
        </div> 
		<?php endforeach ?>
				<?php else: ?>
            <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2><i class="fa fa-exclamation"></i> No Movie Found for this search</h2>
                        </div>
                    </div>
                </div>
                <br>
            <?php endif ?>
			<div class="clearfix"></div>
		
                            </div>
        <!--/requested-->
		 <!-- requested-->
                    <?php else: ?>
                    <div id="tmdb" class="movies-list movies-list-full tab-pane in fade">
                     
                 <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $TV = unserialize( ocim_data_search_tv(limit_word($newquery, 3),$page) );
        if( is_array($TV['result']) ):
        foreach ( (array) array_slice($TV['result'], 0, 12) as $row ) {
                ?>
        <div class="ml-item">
             <a href="<?php echo seo_tv($row['id'],$row['title']);?>" data-jtip="#f-featured-4362" class="ml-mask jt" title="<?php echo $row['title'];?> <?php echo date('Y', strtotime( $row['release_date'] ) );?>">
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
                   <a href="#" class="btn btn-block btn-success"><i class="fa fa-play-circle mr10"></i>Login</a>
                    <button onclick="#" class="btn btn-block btn-default mt10 btn-favorite-3317 add-favorite" data-target="#pop-login" data-toggle="modal">
                        Add to favorite                    </button>
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
                    
                    
                          </div></div>
                    
                    
                    
        </div>
    </div>
</div>
 
<?php endif ?>
</div>
<?php include('footer.php'); ?>