<?php
/**
 * The template for displaying page Airing TV Show Episodes
 *
 * @author g-silvers.website
 * @subpackage G-silvers 1.0
 *
 */
$hack_title = 'Airing TV Show Episodes';
$hack_description = 'Detailed information of TV shows and episodes airing on '.site_path();
get_header(); ?>
<?php get_head(); ?>
<div style="min-height:500px !important">
   <div class=""style="border-bottom:1px solid #00314e; padding-top:20px; padding-bottom:20px;">
      <div class="container p10">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 p10">
               <a class="fs-20" > 	Tv Airing  </a> 
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
        $Movies = unserialize( ocim_data_tv('home_tv_airing_',$page, 'getAiringTodayTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 16) as $row ) {
                ?>
               <div class="col-md-3 col-sm-12 col-xs-12 col-12 p9">
                  <div class="item item-page" style="z-index:999999;" align="center">
                     <div  align="center" class="header_background p5 fs-12"style="border-radius:3px 3px 0px 0px !important ">
                        <?php echo date('Y', strtotime( $row['release_date'] ) );?>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 p0 ">
                                 <img src="<?php echo $row['backdrop_path'];?>" class="responsive"> 
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
        endif; 
        ?>
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