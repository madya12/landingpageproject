<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silver
| Template Name     : Black V1
| -------------------------------------------------------------------------------
*/
?>
<footer>
   <div class="container">
      <div class="row">
         <div class="col-sm-3">
            <h6>Get in touch</h6>
            <ul>
               <li><a href="#">FAQs</a></li>
               <li><a href="#">Give us feedback</a></li>
               <li><a href="<?php echo view_page( 'contact-us' );?>">Contact us</a></li>
            </ul>
         </div>
         <div class="col-sm-3">
            <h6>About Movie star</h6>
            <ul>
               <li><a href="#">About us</a></li>
               <li><a href="https://www.google.com/search?rlz=1C1CHBF_enID777ID777&ei=ATOTWpjFLZS6vwT2gITQDA&q=<?php echo site_uri() ?>&oq=<?php echo site_uri() ?>&gs_l=psy-ab.3..33i160k1l2.12020.12020.0.12265.1.1.0.0.0.0.70.70.1.1.0....0...1c.1.64.psy-ab..0.1.69....0.YNXjHQo48V0">Find us</a></li>
               <li><a href="<?php echo view_page( 'tv-airing' );?>">Schedule</a></li>
               <li><a href="#">News</a></li>
            </ul>
         </div>
         <div class="col-sm-3">
            <h6>Legal stuff</h6>
            <ul>
               <li><a href="<?php echo view_page( 'terms-en' );?>">Terms &amp; Conditions</a></li>
               <li><a href="<?php echo view_page( 'privacy-policy' );?>">Privacy policy</a></li>
               <li><a href="<?php echo view_page( 'dmca-notice' );?>">DMCA</a></li>
            </ul>
         </div>
         <div class="col-sm-3">
            <h6>Connect with us</h6>
            <ul>
               <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_uri() ?>"><i class="fa fa-facebook"></i> Facebook</a></li>
               <li><a href="https://twitter.com/intent/tweet?url=<?php echo site_uri() ?>"><i class="fa fa-twitter"></i> Twitter</a></li>
               <li><a href="https://plus.google.com/up/accounts/upgrade/?continue=<?php echo site_uri() ?>"><i class="fa fa-google-plus"></i> Google +</a></li>
            </ul>
         </div>
      </div>
      <div class="copyright">
         <p>Copyright &copy; <?php echo date('Y') ?> <a href="<?php echo site_url() ?>"><?php echo config('sitename') ?></a>. All rights reserved.</p>
      </div>
   </div>
</footer>
<div class="modal animated bounceIn" id="reg_form" tabindex="-1" role="dialog" aria-labelledby="reg_form" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content clearfix"> <div class="modal-header bg-warning"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">Register Free Account!</h4> </div><div class="modal-body clearfix"> <div class="col-md-6" id="login"> <h5>Member Login</h5> <div class="form-group"> <input type="text" class="form-control input-sm" id="userid" placeholder="username"> </div><div class="form-group"> <input type="password" class="form-control input-sm" id="password" placeholder="password"> </div><div class="form-group"> <span class="onload label label-success" style="display: none;">Please wait...</span> <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span> </div><input type="submit" id="subreg" class="btn btn-success" value="Log me in"> </div><div class="col-md-6"> <h5>Member Benefits</h5> <ol> <li>Watch as many movies you want!</li><li>Secure and no restrictions!</li><li>Stream movies in HD quality!</li><li>It works on your TV, PC or MAC!</li></ol> <button class="btn btn-primary backcolor" onclick="window.location.href='/?action=register'">Register Here!</button> </div></div><div class="modal-footer bg-warning"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div></div></div></div>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
<script src="<?php style_theme() ?>/js/jquery-2.2.4.min.js"></script>
<script src="<?php style_theme() ?>/js/jquery-ui.min.js"></script>
<script src="<?php style_theme() ?>/js/bootstrap.min.js"></script>
<script src="<?php style_theme() ?>/js/headhesive.min.js"></script>
<script src="<?php style_theme() ?>/js/matchHeight.min.js"></script>
<script src="<?php style_theme() ?>/js/modernizr.custom.js"></script>
<script src="<?php style_theme() ?>/js/slick.min.js"></script>
<script src="<?php style_theme() ?>/js/venobox.min.js"></script>
<script src="https://use.fontawesome.com/4dfd2d448a.js"></script>
<script src="<?php style_theme() ?>/js/custom.js"></script>

<?php echo histats_write() ?>
</body>
</html>