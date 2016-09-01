

	<section id="fh5co-home" data-section="home" style="background-color: #118dc6;">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1 class="to-animate">Application for Emergency</h1>
							<h2 class="to-animate">You can save your family and your life by planning.</h2>
							<div class="call-to-action">
							
								<a href="#" class="download to-animate">Download</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="fh5co-explore" data-section="explore">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Explore Our Application</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="fh5co-explore">
			<div class="container" style="margin-left: 40px">
				<div class="row">
					<div class="col-md-7 col-md-push-5 to-animate-2">
						<img class="img-responsive web-panel" src="<?php echo base_url(); ?>application/views/union/images/work_2.png" alt="work">
					</div>
					<div class="col-md-5 col-md-pull-7 to-animate-2">
						<div class="mt">
							<h3>Friendly User Web Panel</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. </p>
							<ul class="list-nav">
								<li><i class="fa fa-check" aria-hidden="true"></i>Far far away, behind the word</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>There live the blind texts</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Separated they live in bookmarksgrove</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Semantics a large language ocean</li>
								<li><i class="fa fa-check" aria-hidden="true"></i></i>A small river named Duden</li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="fh5co-explore fh5co-explore-bg-color">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-pull-1 to-animate-3">
						<img class="img-responsive phone" src="<?php echo base_url(); ?>application/views/union/images/app.png" alt="work">
					</div>
					<div class="col-md-5 to-animate-3">
						<div class="mt">
							<div>
								<h4><i class="fa fa-hourglass-half" aria-hidden="true"></i>Disaster Planning Feature</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
							<div>
								<h4><i class="fa fa-suitcase" aria-hidden="true"></i>Kits Disaster Management System</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
							<div>
								<h4><i class="fa fa-refresh" aria-hidden="true"></i>Online and Offline Capability</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="fh5co-testimony" data-section="testimony">
		<div class="container">
			<div class="row">
				<div class="col-md-12 to-animate">
					<div class="wrap-testimony">
						<div class="owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="<?php echo base_url(); ?>application/views/union/images/person2.jpg" alt="user">
									</figure>
									<blockquote>
										<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
									</blockquote>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="<?php echo base_url(); ?>application/views/union/images/person3.jpg" alt="user">
									</figure>
									<blockquote>
										<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
									</blockquote>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="<?php echo base_url(); ?>application/views/union/images/person2.jpg" alt="user">
									</figure>
									<blockquote>
										<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
									</blockquote>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="getting-started getting-started-1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 to-animate">
					<h3>Getting Started</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				<div class="col-md-6 to-animate-2">
					<div class="call-to-action text-right">
					 <?php

					    $session_data = $this->session->userdata('session_data'); 
					    if($session_data == '') {


					 ?>
						<a href="#" class="sign-up">Sign Up For Free</a>
					 <?php 
					}else {

				    ?>		

						 <a href="<?php echo base_url(); ?>users" class="sign-up">Go to Admin</a>
					<?php
					}

					 ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

	<section id="fh5co-services" data-section="services">
		<div class="fh5co-services">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">Our Services</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove. </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="box-services">
							<i class="icon-chemistry to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>Complete Disaster Details</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in.</p>
							</div>
						</div>

						<div class="box-services">
							<i class="icon-energy to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>Prevention and Awareness</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-services">
							<i class="icon-trophy to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>Realtime Notification</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in.</p>
							</div>
						</div>

						<div class="box-services">
							<i class="icon-paper-plane to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>Community Content Control</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-services">
							<i class="icon-people to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>Web and Mobile Application</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in.</p>
							</div>
						</div>

						<div class="box-services">
							<i class="icon-screen-desktop to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>Looks Amazing on Devices</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="call-to-action text-center to-animate"><a href="#" class="btn btn-learn">Learn More</a></div>
			</div>
		</div>
	</section>	



	<section id="fh5co-faq" data-section="faq">
		<div class="fh5co-faq">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">Common Questions</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">Everything you need to know before you get started</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="box-faq to-animate-2">
							<h3>What is Union?</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
						<div class="box-faq to-animate-2">
							<h3>I have technical problem, who do I email? </h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
						<div class="box-faq to-animate-2">
							<h3>How do I use Bato features?</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>

					<div class="col-md-6">
						<div class="box-faq to-animate-2">
							<h3>What language are available?</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
						<div class="box-faq to-animate-2">
							<h3>Can I have a username that is already taken?</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
						<div class="box-faq to-animate-2">
							<h3>Is Union free?</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<hr>

	<section id="fh5co-trusted" data-section="trusted">
		<div class="fh5co-trusted">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">Trusted By</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">We’re trusted by these popular companies</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					 <div class="col-md-2 col-sm-3 col-xs-6 col-sm-offset-0 col-md-offset-1">
					 	<div class="partner-logo to-animate-2">
					 		<img src="<?php echo base_url(); ?>application/views/union/images/logo1.png" alt="Partners" class="img-responsive">
					 	</div>
					 </div>
				    <div class="col-md-2 col-sm-3 col-xs-6">
				    	<div class="partner-logo to-animate-2">
				    		<img src="<?php echo base_url(); ?>application/views/union/images/logo2.png" alt="Partners" class="img-responsive">
						</div>
				    </div>
				    <div class="col-md-2 col-sm-3 col-xs-6">
				    	<div class="partner-logo to-animate-2">
				    		<img src="<?php echo base_url(); ?>application/views/union/images/logo3.png" alt="Partners" class="img-responsive">
				    	</div>
				    </div>
				    <div class="col-md-2 col-sm-3 col-xs-6">
				    	<div class="partner-logo to-animate-2">
				    		<img src="<?php echo base_url(); ?>application/views/union/images/logo4.png" alt="Partners" class="img-responsive">
				    	</div>
				    </div>
				    <div class="col-md-2 col-sm-12 col-xs-12">
				    	<div class="partner-logo to-animate-2">
				    		<img src="<?php echo base_url(); ?>application/views/union/images/logo5.png" alt="Partners" class="img-responsive">
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</section>

	

	<div id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4 to-animate">
					<h3 class="section-title">About Us</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
				
				</div>

				<div class="col-md-4 to-animate">
					<h3 class="section-title">Our Address</h3>
					<ul class="contact-info">
						<li><i class="fa fa-map-o" aria-hidden="true"></i></i>198 West 21th Street, Suite 721 New York NY 10016</li>
						<li><i class="icon-phone"></i>+ 1235 2355 98</li>
						<li><i class="icon-envelope"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="fa fa-rss" aria-hidden="true"></i><a href="#">www.yoursite.com</a></li>
					</ul>
					<h3 class="section-title">Connect with Us</h3>
					<ul class="social-media">
						<li><a href="#" class="facebook"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="dribbble"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" class="github"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4 to-animate">
					<h3 class="section-title">Drop us a line</h3>
					<form class="contact-form">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="name" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	

	
	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>application/views/union/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url(); ?>application/views/union/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url(); ?>application/views/union/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url(); ?>application/views/union/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url(); ?>application/views/union/js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="<?php echo base_url(); ?>application/views/union/js/owl.carousel.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="<?php echo base_url(); ?>application/views/union/js/google_map.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="<?php echo base_url(); ?>application/views/union/js/main.js"></script>

	<script type="text/javascript">
		
		 function admin() {

		 	  window.location = <?php echo base_url(); ?>+'/users';
		 }
	</script>

	</body>
</html>

