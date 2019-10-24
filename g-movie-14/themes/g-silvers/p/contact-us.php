<?php 
$hack_title = 'Contact Us';
$hack_description = "Please feel free to contact us using the form below.";
get_header(); ?>
<div id="main">
																						<div class="container">
<div class="row">
	<section id="primary" class="col-md-12">
		<article>
			<header class="page-header">
				<h1 class="page-title">Contact Us</h1>
			</header>
			<div class="page-content">
				<div class="row">
					<div class="col-md-4">
						<p>Someone finds it difficult to understand your creative idea? There is a better visualisation, share your views with us. It is quick and easy, just drop us a line and ask for anything with which you think we could be helpful. We’re looking forward to hearing from you. Remember, it’s good to talk!</p>
					</div>
					<div class="col-md-8">
						<form id="contact-form" action="https://g-silvers.website/post.php" method="POST" class="clearfix">
							<div class="input-group">
								<span class="input-group-addon" id="sizing-addon1">
									<span class="icon-user"></span>
								</span>
								<input type="text" class="form-control required" name="contact-name" placeholder="Your Real Name" aria-describedby="sizing-addon1" required>
								</div>
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">
										<span class="icon-envelope"></span>
									</span>
									<input type="text" class="form-control required" name="contact-email" placeholder="Your Valid Email Address" aria-describedby="sizing-addon2" required>
									</div>
									<div class="input-group">
										<span class="input-group-addon" id="sizing-addon3">
											<span class="icon-pin"></span>
										</span>
										<input type="text" class="form-control required" name="contact-title" placeholder="Give your message a title" aria-describedby="sizing-addon3" required>
										</div>
										<div class="input-group">
											<textarea class="form-control required" name="contact-message" rows="5" placeholder="Your Message..." required></textarea>
										</div>
										<div class="input-group">
											<div class="text-right">
												<button class="btn btn-primary" type="submit">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</article>
				</section>
			</div>
		</div>
	</div>
<?php get_footer(); ?>