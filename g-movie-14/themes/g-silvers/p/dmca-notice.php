<?php 
/**
 * The template for displaying page dmca
 *
 * @package G-Silvers
 * @subpackage tmdbtwo
 * @since TMDB Two 1.0
 */
$hack_title = 'DMCA Notice';
$hack_description = "If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site.";
get_header(); ?>

<!-- Page Header -->
    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title">DMCA Policy</h2>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<!-- faq-banner -->
	<div class="faq">
		
			<div class="container">	<p style="background-color: #666;padding: 10px; margin-top: 10px;">Please use <a href="https://docs.google.com/forms/d/e/1FAIpQLScc-EzYRvFWIx93fJ0E0JXchAmLzjhLXKRG5jkVhBuk4x_KqQ/viewform" rel="nofollow">THIS FORM</a> if you want to report about DMCA Policy.</p>
									<p><strong><?=$_SERVER['HTTP_HOST']?></strong> respects the intellectual property of others. <strong><?=$_SERVER['HTTP_HOST']?></strong> takes matters of Intellectual Property very seriously and is committed to meeting the needs of content owners while helping them manage publication of their content online. It should be noted that <strong><?=$_SERVER['HTTP_HOST']?></strong> is a simple search engine of TV series available at a wide variety of third party websites.</p>


									<p>If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site, you may notify our copyright agent, as set forth in the <strong>Digital Millennium Copyright Act</strong> of 1998 (DMCA). For your complaint to be valid under the DMCA, you must provide the following information when providing notice of the claimed copyright infringement:</p>


									<ul>
										<li>A physical or electronic signature of a person authorized to act on behalf of the copyright owner Identification of the copyrighted work claimed to have been infringed</li>


										<li>Identification of the material that is claimed to be infringing or to be the subject of the infringing activity and that is to be removed</li>


										<li>Information reasonably sufficient to permit the service provider to contact the complaining party, such as an address, telephone number, and, if available, an electronic mail address</li>


										<li>A statement that the complaining party "in good faith believes that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or law"</li>


										<li>A statement that the "information in the notification is accurate", and "under penalty of perjury, the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed"</li>
									</ul>


									<p>The above information must be submitted as a written, faxed or emailed notification using <a href="https://docs.google.com/forms/d/e/1FAIpQLScc-EzYRvFWIx93fJ0E0JXchAmLzjhLXKRG5jkVhBuk4x_KqQ/viewform"><strong>this form</strong></a>


									</p><div class="modal fade" id="modal-dmca">
										<div class="modal-dialog">
											<div class="modal-content" style="margin-top: 259px;">
												<form action="" id="dmca-form" method="post" name="dmca-form">
													<input name="dmca-post" type="hidden" value="1">

													<div class="modal-header bg-primary">
														<button aria-hidden="true" class="close" data-dismiss="modal" type="button">×</button>

														<h3 class="text-shadow text-center"><strong>DMCA Notice</strong>
														</h3>
													</div>


													<div class="modal-body">
														<div class="input-group">
															<span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user"></span> Name</span><input aria-describedby="sizing-addon1" class="form-control" name="dmca-name" placeholder="Real Name" type="text">
														</div>


														<div class="input-group">
															<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-envelope"></span> Email</span><input aria-describedby="sizing-addon2" class="form-control" name="dmca-email" placeholder="Valid Email Address" type="text">
														</div>


														<div class="input-group">
															<span class="input-group-addon" id="sizing-addon3"><span class="glyphicon glyphicon-copyright-mark"></span> IMDB ID</span><input aria-describedby="sizing-addon3" class="form-control" name="dmca-imdb" placeholder="ex. tt1234567" type="text">
														</div>


														<div class="input-group">
															<textarea class="form-control" name="dmca-reason" placeholder="State your claims here..." rows="5"></textarea>
														</div>


														<div class="input-group">
															<div class="checkbox">
																<label><input name="dmca-agree" type="checkbox"> I have read and agree with <strong>Privacy</strong> and <strong>DMCA Policy</strong></label>
															</div>
														</div>
													</div>


													<div class="modal-footer">
														<div class="pull-right">
															<button aria-hidden="true" class="btn btn-default" data-dismiss="modal">Cancel</button><button class="btn btn-primary" type="submit">Submit</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>


									<p class="alert alert-warning">WE CAUTION YOU THAT UNDER FEDERAL LAW, IF YOU KNOWINGLY MISREPRESENT THAT ONLINE MATERIAL IS INFRINGING, YOU MAY BE SUBJECT TO HEAVY CIVIL PENALTIES. THESE INCLUDE MONETARY DAMAGES, COURT COSTS, AND ATTORNEYS' FEES INCURRED BY US, BY ANY COPYRIGHT OWNER, OR BY ANY COPYRIGHT OWNER'S LICENSEE THAT IS INJURED AS A RESULT OF OUR RELYING UPON YOUR MISREPRESENTATION. YOU MAY ALSO BE SUBJECT TO CRIMINAL PROSECUTION FOR PERJURY.</p>


									<p>This information should not be construed as legal advice, for further details on the information required for valid DMCA notifications, see 17 U.S.C. 512(c)(3).</p>
								</div>
								<!-- .page-content -->
	</div>
<!-- //faq-banner -->
    
    
    



<?php get_footer(); ?>