		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-fourcolumns">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgettext">
								<div class="tg-widgettitle">
									<h3>About Travlu</h3>
								</div>
								<div class="tg-widgetcontent">
									<div class="tg-description">
										<p><?php echo $footer[0]->about; ?></p>
									</div>
									<span><?php echo $contact[0]->phoneno; ?></span>
									<a href="#"><?php echo $contact[0]->email; ?></a>
									<ul class="tg-socialicons tg-socialiconsvtwo">
										<li><a href="<?php echo $footer[0]->facebook; ?>" target="_blank"><i class="icon-facebook-logo-outline"></i></a></li>
										<li><a href="<?php echo $footer[0]->instagram; ?>" target="_blank"><i class="icon-instagram-social-outlined-logo"></i></a></li>
										<li><a href="<?php echo $footer[0]->twitter; ?>" target="_blank"><i class="icon-twitter-social-outlined-logo"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" style="padding-left: 70px;">
							<div class="tg-footercolumn tg-widget tg-widgetdestinations">
								<div class="tg-widgettitle">
									<h3>Quick Links</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li><a href="<?php echo base_url(); ?>"><?php echo $nav[0]->name; ?></a></li>
										<li><a href="<?php echo base_url('Destinations'); ?>"><?php echo $nav[1]->name; ?></a></li>
										<li><a href="<?php echo base_url('Traveldeals'); ?>"><?php echo $nav[3]->name; ?></a></li>
										<li><a href="<?php echo base_url('Contact'); ?>"><?php echo $nav[4]->name; ?></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgetdestinations">
								<div class="tg-widgettitle">
									<h3>Top Destinations</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<?php for ($i=0; $i<5; $i++){ //print_r($destinations);?>
										<li><a href="javascript:void(0);"><?php echo $destinations[$i]->name; ?></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgetnewsletter">
								<div class="tg-widgettitle">
									<h3>Newsletter</h3>
								</div>
								<div class="tg-widgetcontent">
									<div class="tg-description"><p>Sign up for our mailing list to get latest updates and offers</p></div>
									<form class="tg-formtheme tg-formnewsletter">
										<fieldset>
											<input type="email" name="email" class="form-control" placeholder="Your Email">
											<button type="submit"><img src="<?php echo base_url();?>assets/images/icons/icon-08.png" alt="image destinations"></button>
										</fieldset>
									</form>
									<span>We respect your privacy</span>
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<p>Designed and Developed By <a href="https://knswebsolutions.com" target="_blank">KNS Web Solutions</a></p>

						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->

	<!--************************************
			Login Singup Start
	*************************************-->
	<div id="tg-loginsingup" class="tg-loginsingup" data-vide-bg="poster: images/singup-img.jpg" data-vide-options="position: 0% 50%">
		<div class="tg-contentarea tg-themescrollbar">
			<div class="tg-scrollbar">
				<button type="button" class="close">x</button>
				<div class="tg-logincontent">
					<nav id="tg-loginnav" class="tg-loginnav">
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
						</ul>
					</nav>
					<div class="tg-themetabs">
						<ul class="tg-navtbs" role="tablist">
							<li role="presentation" class="active"><a href="#home" data-toggle="tab">Already Registered</a></li>
							<li role="presentation"><a href="#profile" data-toggle="tab">New to Travleu ?</a></li>
						</ul>
						<div class="tg-tabcontent tab-content">
							<div role="tabpanel" class="tab-pane active fade in" id="home">
								<form class="tg-formtheme tg-formlogin">
									<fieldset>
										<div class="form-group">
											<label>Name or Email <sup>*</sup></label>
											<input type="text" name="firstname" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											<label>Password <sup>*</sup></label>
											<input type="password" name="password" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											<div class="tg-checkbox">
												<input type="checkbox" name="remember" id="rememberpass">
												<label for="rememberpass">Remember Me</label>
											</div>
											<span><a href="#">Lost your password?</a></span>
										</div>
										<button class="tg-btn tg-btn-lg"><span>update profile</span></button>
									</fieldset>
								</form>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<form class="tg-formtheme tg-formlogin">
									<fieldset>
										<div class="form-group">
											<label>Name or Email <sup>*</sup></label>
											<input type="text" name="firstname" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											<label>Password <sup>*</sup></label>
											<input type="password" name="password" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											<label>Confirm Password <sup>*</sup></label>
											<input type="password" name="password" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											<div class="tg-checkbox">
												<input type="checkbox" name="remember" id="remember">
												<label for="remember">Remember Me</label>
											</div>
											<span><a href="#">Lost your password?</a></span>
										</div>
										<button class="tg-btn tg-btn-lg"><span>update profile</span></button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
					<div class="tg-shareor"><span>or</span></div>
					<div class="tg-signupwith">
						<h2>Sign in With...</h2>
						<ul class="tg-sharesocialicon">
							<li class="tg-facebook"><a href="#"><i class="icon-facebook-1"></i><span>Facebook</span></a></li>
							<li class="tg-twitter"><a href="#"><i class="icon-twitter-1"></i><span>Twitter</span></a></li>
							<li class="tg-googleplus"><a href="#"><i class="icon-google4"></i><span>Google+</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			Login Singup End
	*************************************-->
