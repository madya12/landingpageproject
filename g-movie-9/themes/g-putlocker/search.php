<?php
include('header.php');
$newquery = bad_words( get_search_query() );
?>
<?php get_head(); ?>
<div style="min-height:500px !important">
   <div class=""style="border-bottom:1px solid #00314e; padding-top:20px; padding-bottom:20px;">
      <div class="container p10">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 p10">
               <a class="fs-20" > 	<span>Search Result for "<?php echo $newquery;?>"</span>  </a> 
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 ">
               <form action="/" method="get">
                  <div class="input-group">
                     <input type="text" class="form-control" style="border-radius:5px !Important; " name="s" value="Search" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                     <div class="input-group-append" style="padding-left:10px !Important;">
                        <button type="submit" class="btn btn-outline-success radius-lg">Search Movies</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="row">
               <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_search_movie(limit_word($newquery, 3),$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
               <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-12  p10">
                  <div class="item item-page" style="z-index:999999;" align="center">
                     <div  align="center" class="header_background p5 fs-12"style="border-radius:3px 3px 0px 0px !important ">
                        MOVIE
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 p0 ">
                                 <img src="<?php echo $row['poster_path'];?>" class="responsive"> 
                                 <div class="page-detail p10 fs12" align="left">
                                    <a class="fs12"> Title :  <?php echo $row['title'];?></a> <br>
                                    Rating : <?php echo $row['vote_average'];?> <br>
                                    Release : <?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?> 
                                    <a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="btn btn-danger absolute bottom form-control left"> See Detail </a>
                                 </div>
                              </div>
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
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-12  p10">
                  <div class="item item-page" style="z-index:999999;" align="center">
                     <div  align="center" class="header_background p5 fs-12"style="border-radius:3px 3px 0px 0px !important ">
                        <?php echo date('Y', strtotime( $sect['release_date'] ) );?>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 p0 ">
                                 <img src="<?php echo $sect['poster_path'];?>" class="responsive"> 
                                 <div class="page-detail p10 fs12" align="left">
                                    <a class="fs12"> Title :  <?php echo $sect['title'];?></a> <br>
                                    Rating : <?php echo $sect['vote_average'];?> <br>
                                    Release : <?php echo date('Y-m-d', strtotime( $sect['release_date'] ) );?> 
                                    <a href="<?php echo seo_movie($sect['id'],$sect['title']);?>" class="btn btn-danger absolute bottom form-control left"> See Detail </a>
                                 </div>
                              </div>
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
		<?php if (config('tvdb_search') == "true"): ?>
		<?php
                $tvdb  = new Tvdb(options('tvdb_api'));
                $serie = $tvdb->search($newquery);
                $count = 0;
                ?>
                <?php if (!empty($serie)): ?>
                <?php foreach ($serie as $tv): ?>
                <?php $_seri = $tvdb->seriesEpisode($tv->id)['serie'] ?>
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-12  p10">
                  <div class="item item-page" style="z-index:999999;" align="center">
                     <div  align="center" class="header_background p5 fs-12"style="border-radius:3px 3px 0px 0px !important ">
                        TV SERIES
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 p0 ">
                                 <img src="<?php echo $tvdb->poster($_seri->poster) ?>" class="responsive"> 
                                 <div class="page-detail p10 fs12" align="left">
                                    <a class="fs12"> Title :  <?php echo $tv->name ?></a> <br>
                                    Rating : <?php echo $_seri->rating;?> <br>
                                    Release : <?php echo format_tanggal( $_seri->firstAired );?> 
                                    <a href="<?php seo_serie($tv->id) ?>" class="btn btn-danger absolute bottom form-control left"> See Detail </a>
                                 </div>
                              </div>
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
				<?php else: ?>
				<?php 
                            $TV = unserialize( ocim_data_search_tv(limit_word($newquery, 3),$page) );
                            if( is_array($TV['result']) ):
                                foreach ( (array) array_slice($TV['result'], 0, 20) as $row ) {
                                    ?>
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-12  p10">
                  <div class="item item-page" style="z-index:999999;" align="center">
                     <div  align="center" class="header_background p5 fs-12"style="border-radius:3px 3px 0px 0px !important ">
                        <?php echo date('Y', strtotime( $row['release_date'] ) );?>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 p0 ">
                                 <img src="<?php echo $row['poster_path'];?>" class="responsive"> 
                                 <div class="page-detail p10 fs12" align="left">
                                    <a class="fs12"> Title :  <?php echo $row['title'];?></a> <br>
                                    Rating : <?php echo $row['vote_average'];?> <br>
                                    Release : <?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?> 
                                    <a href="<?php echo seo_tv($row['id'],$row['title']);?>" class="btn btn-danger absolute bottom form-control left"> See Detail </a>
                                 </div>
                              </div>
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
				<?php endif ?>
            </div>
         </div>
      </div>
   </div>
</div>
<style>
   @media(max-width:500px){
   .centermobile{text-align:center !important;}
   }
</style>
<?php get_footer(); ?>