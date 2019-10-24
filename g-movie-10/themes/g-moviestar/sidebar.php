<section class="dark">
   <div class="container section remove-bottom-padding">
      <div class="row comingSoon-slides">
         <div class="col-sm-12">
            <h2>Coming soon</h2>
            <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_movie_upcoming_',$page, 'getUpcomingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 1) as $row ) {
                ?>
            <div class="row single-slide slide<?php echo $row['id'];?>" style="opacity: 0; height: 0px; padding-bottom: 0px;">
               <div class="bg" style="background: url(https://cdn.wonderfulengineering.com/wp-content/uploads/2014/07/background-wallpapers-2.jpg);"></div>
               <div class="col-sm-5 slide-content">
                  <span class="imdb"><strong>IMDb:</strong><imdb> <?php echo $row['vote_average'];?></imdb></span>
                  <h3 class="no-underline"><?php echo $row['title'];?></h3>
                  <div class="star-rating">
                     <i class="material-icons">star_rate</i>
                     <i class="material-icons">star_rate</i>
                     <i class="material-icons">star_rate</i>
                     <i class="material-icons">star_rate</i>
                     <i class="material-icons">star_rate</i>
                  </div>
                  <div class="date">
                     <i class="material-icons">date_range</i> <?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?>
                  </div>
                  <p><?php echo short($row['overview']);?></p>
                  <p><a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="arrow-button">More info</a></p>
               </div>
               <div class="col-sm-6 col-sm-push-1 slide-video">
                  <a href="<?php echo seo_movie($row['id'],$row['title']);?>" data-vbtype="video" class="video">
                  <i class="material-icons">play_arrow</i>
                  <img src="<?php echo $row['backdrop_path'];?>" alt="<?php echo $row['title'];?>">
                  </a>
               </div>
            </div>
            <?php 
                }
        endif; 
        ?>
               </div>
            </div>
         </div>
</section>