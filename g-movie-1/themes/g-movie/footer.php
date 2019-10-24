<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silver
| Template Name     : Black V1
| -------------------------------------------------------------------------------
*/
?>
<script type='text/javascript' src='<?php style_theme();?>/js/swiper.min.js' /></script>
<link rel="stylesheet" href="<?php style_theme();?>/css/slide.css" type="text/css" />
<script type="text/javascript">
$(document).ready(function (){
	$(".nav-tabs a").click(function (){
		var filter_value = $(this).attr('data-filter');
		if (filter_value) {
			var check_data = $("#tab-" + filter_value + "_movies").html();
			if (!check_data){
				$("#tab-" + filter_value + "_movies").html('<center><img style="margin-top: 20px;" src="<?php style_theme();?>/images/loading-cylon-red.svg" width="256" height="32"></center>');
				$.ajax("<?php echo site_url() ?>ajax/load_tab_movie?type=" + filter_value, {
					type: 'GET', datatype: 'html', success: function (result){
						$("#tab-" + filter_value + "_movies").html(result);
						qtip_movie_item();
					}
				});
			}
		}
	});
	var swiper = new Swiper('#slider', {
		pagination: '.swiper-pagination',
		paginationClickable: true,
		loop: true,
		autoplay: 4000
	});
});
</script>

<div id="footer">
<div id="top_footer" class="full">
<div class="container">
<div class="row">
<div class="col-md-2 col-sm-3 col-xs-6">
<p class="title_footer"><?php echo config('sitename') ?></p>
</div>
</div>
<div class="key_footer hidden-xs">
<h3><a title="free movies"><?php echo config('sitekeywords');?></a></h3>
</div>
</div>
</div>
<div id="copy_right">
<div class="container">
<ul class="full">
<li>Copyright © <a href="<?php echo site_url() ?>" title="<?php echo site_path() ?>"> <?php echo site_path() ?></a>. All Rights Reserved.</li>
<li><a href="<?php echo view_page( 'privacy-policy' );?>">Privacy Policy</a></li>
<li><a href="<?php echo view_page( 'dmca-notice' );?>">DMCA</a></li>
<li><a href="javascript:();">Advertising</a></li>
<li><a href="javascript:();">FAQs</a></li>
<li><a href="<?php echo view_page( 'contact-us' );?>">Contact Us</a></li>
<li><a href="<?php echo site_url() ?>/sitemap.xml">Sitemap</a></li>
<li><script id="_wauf87">var _wau = _wau || []; _wau.push(["small", "pmoviesto", "f87"]);(function() {var s=document.createElement("script"); s.async=true;s.src="//widgets.amung.us/small.js";document.getElementsByTagName("head")[0].appendChild(s);})();</script></li>
</ul>
</div>
</div>
</div>

<div class="schedule_allpage">
<div id="schedule_list_allpage" style="display:none;width:320px">
<div id="xsidebar">
<div class="xside-content">

<div class="xsblock xc-feed">
<div class="sb-xtitle"><i class="fa fa-clock-o mr5"></i>Schedule Today</div>
<div id="schedule"></div>
</div>

</div>
</div>
</div>

</div>

<div class="modal fade modal-cuz" id="pop-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
<h4 class="modal-title" id="myModalLabel">MEMBER LOGIN AREA</h4>
</div>
<div class="modal-body">
<p class="desc">Watch HD Movies Online For Free and Download the latest movies. For everybody, everywhere, everydevice, and everything ;)</p>
<form id="login-form" method="POST" action="<?php echo site_url() ?>/ajax/user_login/">
<div class="block">
<input required type="text" class="form-control" name="username" id="username" placeholder="Username">
</div>
<div class="block mt10">
<input required type="password" class="form-control" name="password" id="password" placeholder="Password">
</div>
<div style="display: none;" id="error-message" class="alert alert-danger"></div>
<div class="block mt10 small">
<label><input type="checkbox" style="vertical-align: sub; margin-right: 3px;"> Remember me</label>
<div class="pull-right">
<a id="open-forgot" data-dismiss="modal" data-target="#pop-forgot" data-toggle="modal" title="Forgot password?">Forgot password?</a>
</div>
</div>
<button id="login-submit" type="submit" class="btn btn-block btn-successful btn-approve mt10">Login</button>
<div style="display: none;" id="login-loading" class="cssload-center">
<div class="cssload"><span></span></div>
</div>
</form>
</div>
<div class="modal-footer text-center">
Not a member yet? <a href="/register" id="open-register" action="/register" title="">Join now!</a>
</div>
</div>
</div>
</div>
<div class="modal fade modal-cuz" id="pop-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i>
</button>
<h4 class="modal-title" id="myModalLabel">You are welcome</h4>
</div>
<div class="modal-body">
<p class="desc">When becoming members of the site, you could use the full range of functions and
enjoy
the most exciting films.</p>
<form id="register-form" method="POST" action="/register">
<div class="block">
<input required type="text" class="form-control" name="full_name" id="full_name" placeholder="Full name">
</div>
<div id="error-full_name" class="alert alert-danger error-block"></div>
<div class="block mt10">
<input required type="text" class="form-control" name="username" id="username" placeholder="Username">
</div>
<div id="error-username" class="alert alert-danger error-block"></div>
<div class="block mt10">
<input required type="email" class="form-control" name="email" id="email" placeholder="Email">
</div>
<div id="error-email" class="alert alert-danger error-block"></div>
<div class="block mt10">
<input required type="password" class="form-control" name="password" id="password" placeholder="Password">
</div>
<div id="error-password" class="alert alert-danger error-block"></div>
<div class="block mt10">
<input required type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
</div>
<div id="error-confirm_password" class="alert alert-danger error-block"></div>
<button id="register-submit" type="submit" class="btn btn-block btn-successful btn-approve mt20">
Register
</button>




<div style="display: none;" id="register-loading" class="cssload-center">
<div class="cssload"><span></span></div>
</div>
</form>
</div>
<div class="modal-footer text-center">
<a id="open-register" style="color: #888" data-dismiss="modal" data-target="#pop-login" data-toggle="modal" title=""><i class="fa fa-chevron-left mr10"></i> Back to login</a>
</div>
</div>
</div>
</div>
<div class="modal fade modal-cuz" id="pop-forgot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i>
</button>
<h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
</div>
<div class="modal-body">
<p class="desc">We will send a new password to your email. Please fill your email to form
below.</p>
<form id="forgot-form">
<div class="block mt10">
<input type="email" class="form-control" name="email" id="email" placeholder="Your email" required>
</div>
<div style="display: none;" id="forgot-success-message" class="alert alert-success"></div>
<div style="display: none;" id="forgot-error-message" class="alert alert-danger"></div>
<button id="forgot-submit" type="submit" class="btn btn-block btn-successful btn-approve mt20">
Submit
</button>
<div style="display: none;" id="forgot-loading" class="cssload-center">
<div class="cssload"><span></span></div>
</div>
</form>
</div>
<div class="modal-footer text-center">
<a id="open-register" style="color: #888" data-dismiss="modal" data-target="#pop-login" data-toggle="modal" title=""><i class="fa fa-chevron-left mr10"></i> Back to login</a>
</div>
</div>
</div>
</div>
<div class="modal fade modal-cuz" id="pop-alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i>
</button>
</div>
<div class="modal-body" id="message-content" style="text-align: center"></div>
</div>
</div>
</div>

<script type='text/javascript' src='<?php style_theme();?>/js/swiper.min.js' /></script>

<script type="text/javascript" src="//platform.twitter.com/widgets.js" charset="utf-8" async="async"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5181dc394703fed7" async="async"></script>
<script type="text/javascript" async="async">
/* Comment Disqus */
window.onload = (function(){
	var d = document, s = d.createElement('script');
	s.src = '//<?php echo config('sitename') ?>-com.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
})();
</script>


<?php echo histats_write() ?>
<?php if (config('protect_content') == 'true'): ?>
    <Script Language='Javascript'>
        document.write(unescape('%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%0A%66%75%6E%63%74%69%6F%6E%20%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%65%29%7B%69%66%28%74%79%70%65%6F%66%20%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%6C%73%65%20%69%66%28%74%79%70%65%6F%66%20%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%3D%22%6E%6F%6E%65%22%3B%65%6C%73%65%20%65%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%2E%73%74%79%6C%65%2E%63%75%72%73%6F%72%3D%22%64%65%66%61%75%6C%74%22%7D%77%69%6E%64%6F%77%2E%6F%6E%6C%6F%61%64%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%29%7D%0A%0A%66%75%6E%63%74%69%6F%6E%20%6D%6F%75%73%65%64%77%6E%28%65%29%7B%74%72%79%7B%69%66%28%65%76%65%6E%74%2E%62%75%74%74%6F%6E%3D%3D%32%7C%7C%65%76%65%6E%74%2E%62%75%74%74%6F%6E%3D%3D%33%29%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%63%61%74%63%68%28%65%29%7B%69%66%28%65%2E%77%68%69%63%68%3D%3D%33%29%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%7D%64%6F%63%75%6D%65%6E%74%2E%6F%6E%63%6F%6E%74%65%78%74%6D%65%6E%75%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%64%72%61%67%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%6D%6F%75%73%65%64%77%6E%0A%0A%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%22%6B%65%79%64%6F%77%6E%22%2C%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%65%2E%70%72%65%76%65%6E%74%44%65%66%61%75%6C%74%28%29%7D%7D%29%3B%64%6F%63%75%6D%65%6E%74%2E%6B%65%79%70%72%65%73%73%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%7D%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%0A%0A%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6B%65%79%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%65%3D%65%7C%7C%77%69%6E%64%6F%77%2E%65%76%65%6E%74%3B%69%66%28%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%32%33%7C%7C%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%38%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%7D%0A%3C%2F%73%63%72%69%70%74%3E%0A'));
    </Script>
<?php endif ?>
</body>
</html>