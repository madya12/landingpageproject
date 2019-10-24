<?php
   /*
   | -------------------------------------------------------------------------------
   | Author            : G-silvers
   | Template Name     : G-silvers V14
   | -------------------------------------------------------------------------------
   */

include('header.php');
?>
<body cz-shortcut-listen="true">
   <script>
      function showrespon(text){
      	$('#isi_respon').html(text);
      	$('#modal_respon').modal('show'); 
      }
      function cancel_respon(){ $('#modal_respon').modal('hide'); }
   </script>
   <div class="modal fade" id="modal_respon" role="dialog" style="display: none; margin-top:0px;">
      <div class="modal-dialog" style="margin-top: 10px;">
         <div class="modal-content">
            <div class="modal-header header_background">
               <span class="modal-title">Response From Server </span>
               <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body" id="isi_respon" style="padding:20px; color:black !important;">
            </div>
         </div>
      </div>
   </div>
   
   <?php include('head.php');?>  
   
   <div style="min-height:500px !important">
      <div class="">
          <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 1) as $row ) {
                ?>
         <img src="<?php echo $row['backdrop_path'];?>" height="449" width="1347" class="responsive">
         <?php 
                }
        endif; 
        ?>
      </div>
      <div class="" style="border-bottom:1px solid #00314e; padding-top:20px; padding-bottom:20px;">
         <div class="container p10">
            <div class="p10 bold-600" style="padding-left:0px !Important;">
               Box Office Film
            </div>
            <div class="products owl-carousel owl-theme owl-loaded owl-drag">
               <div class="owl-stage-outer">
                  <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 1725px;">
				  <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 18) as $row ) {
                ?>
                     <div class="owl-item active" style="width: 76.25px; margin-right: 10px;">
                        <div class="item item-page" style="z-index:999999;" align="center">
                           <div align="center" class="header_background p5 fs-12" style="border-radius:3px 3px 0px 0px !important ">
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
               <div class="owl-nav"><button class="btn owl-next disabled"><span aria-label="Previous">‹</span></button><button class="btn owl-prev"><span aria-label="Next">›</span></button></div>
               <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
            </div>
         </div>
      </div>
      <div class="" style="border-bottom:1px solid #00314e; padding-top:20px; padding-bottom:20px;">
         <div class="container p10">
            <div class="p10 bold-600" style="padding-left:0px !Important;">
               Newest Film
            </div>
            <div class="products owl-carousel owl-theme owl-loaded owl-drag">
               <div class="owl-stage-outer">
                  <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 1725px;">

				  <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_movie_upcoming_',$page, 'getUpcomingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 18) as $row ) {
                ?>
                     <div class="owl-item active" style="width: 76.25px; margin-right: 10px;">
                        <div class="item item-page" style="z-index:999999;" align="center">
                           <div align="center" class="header_background p5 fs-12" style="border-radius:3px 3px 0px 0px !important ">
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
               <div class="owl-nav"><button class="btn owl-next disabled"><span aria-label="Previous">‹</span></button><button class="btn owl-prev"><span aria-label="Next">›</span></button></div>
               <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
            </div>
         </div>
      </div>
      <div class="" style="border-bottom:1px solid #00314e; padding-top:20px; padding-bottom:20px;">
         <div class="container p10">
            <div class="p10 bold-600" style="padding-left:0px !Important;">
               Tv On Air
            </div>
            <div class="products owl-carousel owl-theme owl-loaded owl-drag">
               <div class="owl-stage-outer">
                  <div class="owl-stage" style="transform: translate3d(-603px, 0px, 0px); transition: 0s; width: 1725px;">
				  
                     <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_ontheair_',$page, 'getOnTheAirTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 18) as $row ) {
                ?>
                     <div class="owl-item active" style="width: 76.25px; margin-right: 10px;">
                        <div class="item item-page" style="z-index:999999;" align="center">
                           <div align="center" class="header_background p5 fs-12" style="border-radius:3px 3px 0px 0px !important ">
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
        endif; 
        ?>
					 
                  </div>
               </div>
               <div class="owl-nav"><button class="btn owl-next"><span aria-label="Previous">‹</span></button><button class="btn owl-prev"><span aria-label="Next">›</span></button></div>
               <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
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