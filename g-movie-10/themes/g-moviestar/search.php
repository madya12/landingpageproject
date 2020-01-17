<?php
   /*
   | -------------------------------------------------------------------------------
   | Author            : G-silver
   | Template Name     : Black V1
   | -------------------------------------------------------------------------------
   */
   include('header.php');
   $newquery = bad_words( get_search_query() );
   ?>
<body cz-shortcut-listen="true">
    <div style="margin: 32px 32px 0px 32px ">
        <?php get_menu();?>
    </div>

<?php
      $TV = unserialize( ocim_data_search_tv(limit_word($newquery, 3),$page) );
      if( is_array($TV['result']) ):
          foreach ( (array) array_slice($TV['result'], 0, 1) as $row ) {
              ?>
   <div id="content_hero" style="background-image: url(<?php echo $row['backdrop_path'];?>)">
      <div class="container">
         <div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="100">
            <div class="col-md-9">
               <span class="title">Take a look at</span>
               <h1>What's on your find</h1>
            </div>
         </div>
      </div>
   </div>
   <?php 
      } 
      else:
          ?>
   <div class="row" style="margin: 0px 32px 32px 32px ">
      <div class="panel panel-default">
         <div class="panel-body" style="margin-top: 32px;">
            <h2><i class="fa fa-exclamation"></i> No TV Show Found for this search</h2>
         </div>
      </div>
   </div>
   <br>
   <?php
      endif;
      ?>
   <div class="container section negative-margin">
      <div class="row">
         <div class="col-sm-12">
            <div class="live-search">
               <form action="/" method="get">
                  <ul>
                     <li>
                        <input type="text" name="s" placeholder="Type Title Here...">
                     </li>
                     <a onclick="document.forms[0].submit();return false;" class="search-submit" href="" title="Search">
                     <i class="material-icons">search</i>
                     </a>
                  </ul>
               </form>
            </div>
            <div class="tabs movies ui-tabs ui-corner-all ui-widget ui-widget-content">
               <section>
                  <div class="container section">
                     <h1 class="heading"><span>Search Result for "<?php echo $newquery;?>"</span></h1>
               </section>
               </div>
               <section class="dark">
                  <div class="container section">
                                          <h2>MOVIE</h2>
                     <?php 
                        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
                        $Movies = unserialize( ocim_data_search_movie(limit_word($newquery, 3),$page) );
                        if( is_array($Movies['result']) ):
                        foreach ( (array) array_slice($Movies['result'], 0, 12) as $row ) {
                                ?>
                     <div class="row movie-tabs">
                        <div class="col-md-2 col-sm-3">
                            <a href="<?php echo seo_movie($row['id'],$row['title']);?>">
                           <img src="<?php echo $row['poster_path'];?>" alt="<?php echo $row['title'];?> Full Movie"></a>
                        </div>
                        <div class="col-md-10 col-sm-9">
                           <span class="title"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></span>
                           <a href="<?php echo seo_movie($row['id'],$row['title']);?>"><h3 class="no-underline"><?php echo $row['title'];?> Full Movie</h3></a>
                           <p><?php echo short($row['overview']);?></p>
                           <p><a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="arrow-button">Play Now</a></p>
                           <div class="row">
                              <div class="col-md-8 col-sm-9">
                                 <hr class="space-10">
                                 <span class="time"><i class="fa fa-heart"></i> <?php echo $row['vote_count'];?> people vote</span>
                                 <span class="time"><i class="fa fa-star"></i> <?php echo $row['vote_average'];?></span>
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
                     <div class="row movie-tabs">
                        <div class="col-md-2 col-sm-3">
                           <a href="<?php echo seo_movie($sect['id'],$sect['title']);?>">
                           <img src="<?php echo $sect['img'];?>" alt="Watch <?php echo $sect['title'];?> Full Movie">
                           </a>
                        </div>
                        <div class="col-md-10 col-sm-9">
                           <span class="title"><?php echo $sect['genre'];?></span>
                           <h3 class="no-underline">Watch <?php echo $sect['title'];?> Full Movie</h3>
                           <p><?php echo short($sect['overview']);?></p>
                           <p><a href="<?php echo seo_movie($sect['id'],$sect['title']);?>" class="arrow-button">Full synopsis</a></p>
                           <div class="row">
                              <div class="col-md-8 col-sm-9">
                                 <hr class="space-10">
                                 <span class="time"><i class="fa fa-heart"></i> <?php echo $sect['vote_count'];?> people vote</span>
                                 <span class="time"><i class="fa fa-star"></i> <?php echo $sect['vote_average'];?></span>
                              </div>
                              <div class="col-md-4 col-sm-3 running-time">
                                 <hr class="space-10">
                                 <?php echo $sect['runtime'];?> mins <span class="certificate">15</span>
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
               </section>
               </div>
               <section>
                  <div class="container section">
                     <h2>TV SERIES</h2>
                     <?php 
                        $TV = unserialize( ocim_data_search_tv(limit_word($newquery, 3),$page) );
                        if( is_array($TV['result']) ):
                            foreach ( (array) array_slice($TV['result'], 0, 12) as $row ) {
                                ?>
                     <div class="row movie-tabs">
                        <div class="col-md-2 col-sm-3">
                           <a href="<?php echo seo_tv($row['id'],$row['title']);?>">
                           <img src="<?php echo $row['poster_path'];?>" alt="<?php echo $row['title'];?> Full Episode">
                           </a>
                        </div>
                        <div class="col-md-10 col-sm-9">
                           <span class="title"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></span>
                           <a href="<?php echo seo_tv($row['id'],$row['title']);?>"><h3 class="no-underline"><?php echo $row['title'];?> Full Episode</h3></a>
                           <p><?php echo short($row['overview']);?></p>
                           <p><a href="<?php echo seo_tv($row['id'],$row['title']);?>" class="arrow-button">Play Now</a></p>
                           <div class="row">
                              <div class="col-md-8 col-sm-9">
                                 <hr class="space-10">
                                 <span class="time"><i class="fa fa-heart"></i> <?php echo $row['vote_count'];?> people vote</span>
                                 <span class="time"><i class="fa fa-star"></i> <?php echo $row['vote_average'];?></span>
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
               </section>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section small-padding border-top">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 cta">
               <p>Need help? Contact our support team on</p>
               <p class="gradient-text">0330 123 4567</p>
            </div>
         </div>
      </div>
   </div>
   <?php include('footer.php'); ?>