<?php 
/**
 * The template for displaying page Privacy Policy
 *
 * @package www.g-silvers.website
 * @subpackage tmdbtwo
 * @since TMDB Two 1.0
 */
$hack_title = 'Privacy Policy';
$hack_description = "If you require any more information or have any questions about our privacy policy, please feel free to contact us by email at info@$hostname";
get_header();?>
<?php get_head(); ?>
<div style="min-height:500px !important">
   <div class="container p5" style="padding-top:20px !important; padding-bottom:20px !Important ">
      <div class="" style="padding-top:10px; padding-bottom:10px;">
         <a href="/" class="plpr" > Home </a> - 
         <a class="plpr" > Info Footer </a>   - 	
         <a  class="plpr" > Privacy Policy.info </a>
      </div>
      <div style="background: rgba(0,0,0,0.3); color:white;" class=" p10 radius">
         <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-12 p5">
               <h3 class="border-bottom p10"> Privacy Policy</h3>
               <br />
               <p><?php echo config('sitename') ?>, Inc.</p>
               <p><?php echo config('sitename') ?> Privacy Policy<br />We take privacy issues seriously and strive to keep your personal information confidential.</p>
               <p><?php echo config('sitename') ?> is a division of Wal-Mart Stores, Inc. The collection and use of your information is covered by the Walmart Privacy Policy. Read more about the Walmart Privacy Policy. You can tell us the ways you would like to hear from us at <?php echo config('sitename') ?> Communication Preferences.</p>
               <p>We look forward to serving you.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 p5">
               <div class="p5">
                  <a class="fs22" > Footer Info </a> 
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12  p5">
                     <div class="row"style="background: rgba(0,0,0,0.3) !important; padding:10px; border-radius:3px; border-left:5px solid black !important">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12  p5" >
                           <a href="<?php echo view_page( 'contact-us' );?>" > Contact us </a><br />
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12  p5">
                     <div class="row"style="background: rgba(0,0,0,0.3) !important; padding:10px; border-radius:3px; border-left:5px solid black !important">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12  p5" >
                           <a href="<?php echo view_page( 'about' );?>" > About us </a><br />
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12  p5">
                     <div class="row"style="background: rgba(0,0,0,0.3) !important; padding:10px; border-radius:3px; border-left:5px solid black !important">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12  p5" >
                           <a href="<?php echo view_page( 'dmca-notice' );?>" > Terms of Service </a><br />
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12  p5">
                     <div class="row"style="background: rgba(0,0,0,0.3) !important; padding:10px; border-radius:3px; border-left:5px solid black !important">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12  p5" >
                           <a href="<?php echo view_page( 'privacy-policy' );?>" > Privacy Policy </a><br />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>