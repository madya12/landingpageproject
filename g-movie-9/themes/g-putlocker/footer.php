   <div class="" style="padding-top:30px; padding-bottom:30px;">
      <div class="hideonmobile container p10">
         <img src="<?php style_theme() ?>/image/app1.png" class="">
         <img src="<?php style_theme() ?>/image/app2.png" class="">
         <img src="<?php style_theme() ?>/image/app3.png" class="">
      </div>
      <div class="container " style="padding-left:0px !important; padding-right:0px !Important">
         <div class="row line-height">
            <div class="hideonmobile col-lg-2 col-md-2 col-sm-12 col-xs-12 col-12  p10">
               <b> Category </b> <br>
               <a class="fs12 color-gray" href="<?php echo site_url() ?>/category/6/movies"> Movies</a>   <br>
            </div>
            <div class="hideonmobile  col-lg-2 col-md-2 col-sm-12 col-xs-12 col-12    p10">
               <b> Genre </b> <br>
               <?php foreach ($_cate as $cateid => $catename): ?>
                                                            <a href="<?php echo seocat( $catename,$cateid );?>"><?php echo ucwords($catename) ?></a>
                                                            <?php endforeach ?>   <br>
            </div>
            <div class="hideonmobile col-lg-2 col-md-2 col-sm-12 col-xs-12 col-12    p10">
               <b> New Movies </b> <br>
               <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_movie_upcoming_',$page, 'getUpcomingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 10) as $row ) {
                ?>
               <a class="fs12 color-gray" href="<?php echo seo_movie($row['id'],$row['title']);?>"> <?php echo $row['title'];?> </a>   <br>
<?php 
                }
        endif; 
        ?>
            </div>
            <div class="centermobile col-lg-2 col-md-2 col-sm-12 col-xs-12 col-12  p10">
               <b> Features </b> <br>
               <p><a href="<?php echo site_url() ?>/redeem" class="fs12 color-gray">Redeem <?php echo config('sitename') ?> Code</a></p>
               <a class="fs12 color-gray" href="<?php echo view_page( 'about' );?>"> About us</a>   <br>
            </div>
            <div class="hideonmobile col-lg-2 col-md-2 col-sm-12 col-xs-12 col-12  p10">
               <b> Help </b> <br>
               <a class="fs12 color-gray" href="<?php echo view_page( 'contact-us' );?>"> Contact us</a>   <br>
               <a class="fs12 color-gray" href="<?php echo view_page( 'dmca-notice' );?>"> Terms of Service</a>   <br>
               <a class="fs12 color-gray" href="<?php echo view_page( 'privacy-policy' );?>"> Privacy Policy</a>   <br>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 p10 fs12" align="center">
               Copyright @ <?php echo config('sitename') ?> <?php echo date('Y') ?>	 - 2019		
            </div>
         </div>
      </div>
   </div>
   <script>  
      $('.products').owlCarousel({ 
          items:3,
          nav:true, 
      	margin:10,
          responsive:{
              600:{
                  items:8
              }
          }
      });
   </script> 
   <div id="bs2rl4H-1531507724038" class="" style="display: block; outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; position: fixed !important; border: 0px !important; min-height: 0px !important; min-width: 0px !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: auto !important; height: auto !important; z-index: 2000000000 !important; cursor: auto !important; float: none !important; bottom: 0px !important; right: 0px !important; left: auto !important;">
      <iframe id="gDs41T1-1531507724040" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: auto !important; left: auto !important; position: static !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 320px !important; height: 400px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; display: none !important;"></iframe><iframe id="CqNamVY-1531507724042" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; transition-property: none !important; z-index: 1000001 !important; cursor: auto !important; float: none !important; height: 66px !important; min-height: 66px !important; max-height: 66px !important; width: 62px !important; min-width: 62px !important; max-width: 62px !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center 0px !important; margin: 0px !important; top: auto !important; bottom: 10px !important; right: 15px !important; left: auto !important; display: block !important;"></iframe>
      <iframe id="S77rH4t-1531507724042" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; display: none !important; z-index: 1000003 !important; cursor: auto !important; float: none !important; top: auto !important; bottom: 57px !important; right: 15px !important; left: auto !important; width: 62px !important; max-width: 62px !important; min-width: 62px !important; height: 22px !important; max-height: 22px !important; min-height: 22px !important;"></iframe>
      <div id="i3NMCMM-1531507724036" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none rgb(255, 255, 255) !important; opacity: 0 !important; top: 1px !important; bottom: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: auto !important; height: 45px !important; display: block !important; z-index: 999997 !important; cursor: move !important; float: none !important; left: 0px !important; right: 96px !important;"></div>
      <div id="i40ZGgu-1531507724038" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 96px !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: w-resize !important; float: none !important;"></div>
      <div id="IMqEJSw-1531507724038" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: e-resize !important; float: none !important;"></div>
      <div id="JncAE1N-1531507724038" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: n-resize !important; float: none !important;"></div>
      <div id="wFq77MO-1531507724038" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: 0px !important; bottom: 0px !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: s-resize !important; float: none !important;"></div>
      <div id="P1A8oxV-1531507724038" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: nw-resize !important; float: none !important;"></div>
      <div id="P5JSeSp-1531507724039" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: ne-resize !important; float: none !important;"></div>
      <div id="of3dmGw-1531507724039" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: 0px !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: sw-resize !important; float: none !important;"></div>
      <div id="ZijOYMh-1531507724039" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: 0px !important; bottom: 0px !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999999 !important; cursor: se-resize !important; float: none !important;"></div>
      <div class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 100% !important; display: none !important; z-index: 1000001 !important; cursor: move !important; float: left !important;"></div>
   </div>
   <iframe src="about:blank" title="chat widget logging" style="display: none !important;"></iframe>
   <?php echo histats_write() ?>
</body>
</html>