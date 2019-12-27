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
<?php include('head.php');?>
<div style="min-height:500px !important">
   <div class=""style="border-bottom:1px solid #00314e; padding-top:20px; padding-bottom:20px;">
      <div class="container p10">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 p10">
               <a class="fs-20" > 	Category for "<?php echo $dirname;?>"<?php echo $hal;?>  </a> 
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
        $Movies = unserialize( ocim_data_genre('home_genre_'.$filename.'_',$filename,$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
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
                                    <a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="btn btn-danger absolute bottom form-control left"> See Detail </a>
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
<?php include('footer.php'); ?>