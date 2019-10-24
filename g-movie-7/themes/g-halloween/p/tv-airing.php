<?php
/**
 * The template for displaying page Most Popular TV Series
 *
 * @author www.g-silvers.website
 * @subpackage TMDB TWO 1.0
 *
 */
$hack_title = 'On the Air (TV series)';
$hack_description = 'The easiest way to keep track of your favorite TV shows air dates. on '.site_path();
get_header(); ?>
<body>

 <div class="header-pad"></div>
<div class="csrf-token">
    <input id="csrf-token-rating" name="csrf_token" value="b95c4f2a874fcff68fa907701c8b54eb" type="hidden"></div>
<div id="main" class="page-detail">

<div class="container"><div class="pad"></div>
 <div class="panel panel-primary">
                      <div class="panel-heading">TV Schedule <a href="schedule-us"><img class="flag-align" src="https:<?php style_theme();?>/images/globe.png" alt="US" title="US"></a>
                      </div>
                      <div class="panel-body">
                      <table class="table table-striped table-hover">
                      <thead>
          <tr>
            <th>Show</th>
            <th>Episode</th>
            <th>Episode name</th>
            <th>Airs at</th>
            <th>Network</th>
          </tr>
        </thead>
         <tbody>
		 <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_tv('home_tv_airing_',$page, 'getAiringTodayTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 30) as $row ) {
                ?>
              <tr> 
           <td><a href="<?php echo seo_tv($row['id'],$row['title']);?>"><img src="<?php echo $row['poster_path'];?>" width="45" class="img-thumbnail" alt="thumb" title="<?php echo $row['title'];?>"> <?php echo $row['title'];?></a></td>
            <td ><a href="<?php echo seo_tv($row['id'],$row['title']);?>">Season <?php echo $number_of_seasons;?> Episode <?php echo $number_of_episodes;?></a></td>
            <td ><a href="<?php echo seo_tv($row['id'],$row['title']);?>"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></a></td>
            <td ><?php echo $networks;?></td>
            <td ><?php echo $genre;?></td>
          </tr>
		  <?php 
                }
        endif; 
        ?>
           
            
           
             </tbody></table></div></div></div> 
           </div>
		   </div> 


<?php get_footer(); ?>