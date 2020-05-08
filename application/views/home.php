<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>
		<!--************************************
				Home Slider Start
		*************************************-->
		<div class="tg-bannerholder">
			<div class="tg-slidercontent">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>Experience the Wonder</h1>
							<h2>People don’t take trips, trips take People</h2>
							<form class="tg-formtheme tg-formtrip">
								<fieldset>
									<div class="form-group">
										<div class="tg-select">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Destinations">Destinations</option>
												<option data-tokens="All Areas">All Areas</option>
												<option data-tokens="Bayonne">Bayonne</option>
												<option data-tokens="Greenville">Greenville</option>
												<option data-tokens="Manhattan">Manhattan</option>
												<option data-tokens="Queens">Queens</option>
												<option data-tokens="The Heights">The Heights</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="tg-select">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Adventure Type">Adventure Type</option>
												<option data-tokens="Ice Adventure Vacations">Ice Adventure Vacations</option>
												<option data-tokens="National Park">National Park</option>
												<option data-tokens="Adult Vacations">Adult Vacations</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="tg-select">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Travel Month">Travel Month</option>
												<option data-tokens="January">January</option>
												<option data-tokens="February">February</option>
												<option data-tokens="March">March</option>
												<option data-tokens="April">April</option>
												<option data-tokens="May">May</option>
												<option data-tokens="June">June</option>
												<option data-tokens="July">July</option>
												<option data-tokens="August">August</option>
												<option data-tokens="September">September</option>
												<option data-tokens="October">October</option>
												<option data-tokens="November">November</option>
												<option data-tokens="December">December</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="tg-select">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Duration">Duration</option>
												<option data-tokens="2 weeks">2 weeks</option>
												<option data-tokens="3 weeks">3 weeks</option>
												<option data-tokens="4 weeks">4 weeks</option>
												<option data-tokens="5 weeks">5 weeks</option>
												<option data-tokens="6 weeks">6 weeks</option>
												<option data-tokens="7 weeks">7 weeks</option>
												<option data-tokens="8 weeks">8 weeks</option>
												<option data-tokens="9 weeks">9 weeks</option>
												<option data-tokens="10 weeks">10 weeks</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<button class="tg-btn" type="submit"><span>find tours</span></button>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="tg-homeslider" class="tg-homeslider owl-carousel tg-haslayout">
				<figure class="item" data-vide-bg="poster: <?php echo base_url();?>assets/images/slider/img-01.jpg" data-vide-options="position: 0% 50%"></figure>
				<figure class="item" data-vide-bg="poster: <?php echo base_url();?>assets/images/slider/img-02.jpg" data-vide-options="position: 0% 50%"></figure>
				<figure class="item" data-vide-bg="poster: <?php echo base_url();?>assets/images/slider/img-03.jpg" data-vide-options="position: 0% 50%"></figure>
			</div>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
		<!--************************************
					Our Destination Start
			*************************************-->
			<section class="tg-sectionspace  tg-haslayout" style="padding-bottom: 0px;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead tg-sectionheadvtwo">
								<div class="tg-sectiontitle">
									<h2>Top Destinations</h2>
								</div>

							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-themetabs tg-themetabsvtwo">
								<ul class="tg-themetabnav" role="tablist">
								<?php $i=0; foreach ($parents as $row){?>
									<?php if($i<4 and $row->featured==1){
										if($i==0){?>
									<li role="presentation" class="active"><a href="#<?php echo str_replace(' ','',$row->name); ?>" role="tab" data-toggle="tab"><strong style="color:black;"><?php echo $row->name; ?></strong></a></li>
										<?php }else{ ?>
											<li role="presentation" class=""><a href="#<?php echo str_replace(' ','',$row->name); ?>" role="tab" data-toggle="tab"><strong style="color:black;"><?php echo $row->name; ?></strong></a></li>
									<?php } $i+=1; } }?>
								</ul>
								<div class="tab-content tg-themetabcontent">
									<?php $i=0; foreach ($parents as $row){?>
										<?php if($i<4 and $row->featured==1){ ?>
											<?php if($i==0) {?>
											<div role="tabpanel" class="tab-pane active" id="<?php echo str_replace(' ','',$row->name); ?>">
												<div class="tg-topdestinationslider tg-populardestinations owl-carousel">
													<?php foreach ($destinations as $dest){ ?>
														<?php if($dest->parent==$row->id) {?>
													<div class="item tg-populardestination">
														<figure>
															<a href="<?php echo base_url('Listings/').$dest->id."/".$dest->name; ?>"><img src="<?php echo base_url('uploads/images/destination/').$dest->banner; ?>" alt="image destinations" style="height: 202px;"></a>
															<figcaption>
																<h3><a href="<?php echo base_url('Listings/').$dest->id."/".$dest->name; ?>"><?php echo $dest->name; ?></a></h3>
																<div class="tg-description">
																	<p><?php echo $dest->tagline; ?></p>
																</div>
															</figcaption>
														</figure>
													</div>
													<?php } }?>
												</div>
											</div>
												<?php }else{ ?>
												<div role="tabpanel" class="tab-pane" id="<?php echo str_replace(' ','',$row->name); ?>">
													<div class="tg-topdestinationslider tg-populardestinations owl-carousel">
														<?php foreach ($destinations as $dest){ ?>
															<?php if($dest->parent==$row->id) {?>
																<div class="item tg-populardestination">
																	<figure>
																		<a href="javascript:void(0);"><img src="<?php echo base_url('uploads/images/destination/').$dest->banner; ?>" alt="image destinations" style="height: 202px;"></a>
																		<figcaption>
																			<h3><a href="javascript:void(0);"><?php echo $dest->name; ?></a></h3>
																			<div class="tg-description">
																				<p><?php echo $dest->tagline; ?></p>
																			</div>
																		</figcaption>
																	</figure>
																</div>
															<?php } }?>
													</div>
												</div>
										<?php } $i+=1; } }?>


								</div>
							</div>
						</div>
					</div>
				</div>
				
			</section>
			<!--************************************
					Our Destination End
			*************************************-->	
		<!--************************************
					Advantures Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout" style="padding-top: 0px;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-toursdestinations">
								<?php $i=0; foreach ($travelstyle as $row){ ?>
									<?php if($i<3) {?>
										<?php if($i==0) {?>
										<div class="tg-tourdestination tg-tourdestinationbigbox">
											<figure>
												<a href="javascript:void(0);">
													<img src="<?php echo base_url('uploads/images/destination/').$row->bannerimg;?>" alt="image destinations" style="height: 465px;">
													<div class="tg-hoverbox">
														<div class="tg-adventuretitle">
															<h2><?php echo $row->name;?></h2>
														</div>
													</div>
												</a>
											</figure>
										</div>
										<?php }else{ ?>
											<div class="tg-tourdestination">
												<figure>
													<a href="javascript:void(0);">
														<img src="<?php echo base_url('uploads/images/destination/').$row->bannerimg;?>" alt="image destinations" style="height: 227px;">
														<div class="tg-hoverbox">
															<div class="tg-adventuretitle">
																<h2><?php echo $row->name;?></h2>
															</div>
														</div>
													</a>
												</figure>
											</div>
									<?php }$i+=1; } }?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Advantures End
			*************************************-->
			<!--************************************
					Features Start
			*************************************-->
			<section class="tg-sectionspace tg-zerotoppadding tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-features">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>01</span><?php echo $settings[0]->ftitle1; ?></h2>
									</div>
									<div class="tg-description">
										<p><?php echo $settings[0]->feature1; ?></p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>02</span><?php echo $settings[0]->ftitle2; ?></h2>
									</div>
									<div class="tg-description">
										<p><?php echo $settings[0]->feature2; ?></p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>03</span><?php echo $settings[0]->ftitle3; ?></h2>
									</div>
									<div class="tg-description">
										<p><?php echo $settings[0]->feature3; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Features End
			*************************************-->
			<!--************************************
					Popular Tour Start
			*************************************-->
			<section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/images/parallax/bgparallax-01.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectiontitle tg-sectiontitleleft">
									<h2>Popular Tours</h2>
								</div>
								<div id="tg-populartoursslider" class="tg-populartoursslider tg-populartours owl-carousel">
									<?php foreach ($tours as $row){ ?>
										<div class="item tg-populartour">
										<figure>
											<a href="<?php echo base_url('Tourdetails/').$row->id;?>"><img src="<?php echo base_url('uploads/images/parent/').$row->bannerimg;?>" alt="image destinations" style="height: 225.867px;"></a>
<!--											<span class="tg-descount">25% Off</span>-->
										</figure>
										<div class="tg-populartourcontent">
											<div class="tg-populartourtitle">
												<h3><a href="<?php echo base_url('Tourdetails/').$row->id;?>"><?php echo $row->title; ?></a></h3>
											</div>
											<div class="tg-description">
												<p><?php echo substr($row->overview,0,90); ?>...</p>
											</div>
											<div class="tg-populartourfoot">
												<div class="tg-durationrating">
													<span class="tg-tourduration"><?php echo $row->days; ?> Days</span>

												</div>
												<div class="tg-pricearea">
													<h4>$<?php echo $row->price; ?></h4>
												</div>
											</div>
										</div>
									</div>
									<?php } ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Popular Tour End
			*************************************-->
			<!--************************************
					Our Destination Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-ourdestination">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 tg-verticalmiddle">
								<figure><img src="<?php echo base_url();?>assets/images/placeholder/<?php echo $settings[0]->homedivimg; ?>" alt="image destinations"></figure>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 tg-verticalmiddle">
								<div class="tg-ourdestinationcontent">

									<div class="tg-description"><p><?php echo $settings[0]->homedivtext; ?></p></div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Our Destination End
			*************************************-->

			<!--************************************
					Call To Action Start
			*************************************-->
			<section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/images/parallax/bgparallax-02.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-calltoaction">
									<div class="tg-pattern"><img src="<?php echo base_url();?>assets/images/patternw.png" alt="image destination"></div>
									<h2>Get 10% Off on your Next Travel</h2>
									<div class="tg-description"><p>Travel between 22 April to 21 May and get existing offers along with a sure 10% cash discount</p></div>
									<a class="tg-btn" href="javascript:void(0);"><span>Explore Tour</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Call To Action End
			*************************************-->
			<!--************************************
					Our Guides Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<div class="tg-sectiontitle">
									<h2>Meet The Guides</h2>
								</div>
								<div class="tg-description">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer.</p>
								</div>
							</div>
							<div id="tg-guidesslider" class="tg-guidesslider tg-guides owl-carousel">
								<div class="item tg-guide">
									<figure><img src="<?php echo base_url();?>assets/images/Guides/img-01.jpg" alt="image destination"></figure>
									<div class="tg-guidecontent">
										<div class="tg-guidecontenthead">
											<h3>Martin Blake</h3>
											<h4>Adventure Master</h4>
											<ul class="tg-socialicons tg-socialiconsvtwo">
												<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
											</ul>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
										</div>
									</div>
								</div>
								<div class="item tg-guide">
									<figure><img src="<?php echo base_url();?>assets/images/Guides/img-02.jpg" alt="image destination"></figure>
									<div class="tg-guidecontent">
										<div class="tg-guidecontenthead">
											<h3>Martin Blake</h3>
											<h4>Adventure Master</h4>
											<ul class="tg-socialicons tg-socialiconsvtwo">
												<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
											</ul>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
										</div>
									</div>
								</div>
								<div class="item tg-guide">
									<figure><img src="<?php echo base_url();?>assets/images/Guides/img-03.jpg" alt="image destination"></figure>
									<div class="tg-guidecontent">
										<div class="tg-guidecontenthead">
											<h3>Martin Blake</h3>
											<h4>Adventure Master</h4>
											<ul class="tg-socialicons tg-socialiconsvtwo">
												<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
											</ul>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
										</div>
									</div>
								</div>
								<div class="item tg-guide">
									<figure><img src="<?php echo base_url();?>assets/images/Guides/img-01.jpg" alt="image destination"></figure>
									<div class="tg-guidecontent">
										<div class="tg-guidecontenthead">
											<h3>Martin Blake</h3>
											<h4>Adventure Master</h4>
											<ul class="tg-socialicons tg-socialiconsvtwo">
												<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
											</ul>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
										</div>
									</div>
								</div>
								<div class="item tg-guide">
									<figure><img src="<?php echo base_url();?>assets/images/Guides/img-02.jpg" alt="image destination"></figure>
									<div class="tg-guidecontent">
										<div class="tg-guidecontenthead">
											<h3>Martin Blake</h3>
											<h4>Adventure Master</h4>
											<ul class="tg-socialicons tg-socialiconsvtwo">
												<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
											</ul>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
										</div>
									</div>
								</div>
								<div class="item tg-guide">
									<figure><img src="<?php echo base_url();?>assets/images/Guides/img-03.jpg" alt="image destination"></figure>
									<div class="tg-guidecontent">
										<div class="tg-guidecontenthead">
											<h3>Martin Blake</h3>
											<h4>Adventure Master</h4>
											<ul class="tg-socialicons tg-socialiconsvtwo">
												<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
											</ul>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Our Guides End
			*************************************-->
			<!--************************************
					Our Partners Start
			*************************************-->
			<section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/images/parallax/bgparallax-03.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-ourpartners">
									<div class="tg-pattern"><img src="<?php echo base_url();?>assets/images/patternw.png" alt="image destination"></div>
									<h2>Our Partners</h2>
									<ul class="tg-partners">
										<li><figure><a href="javascript:void(0);"><img src="<?php echo base_url();?>assets/images/partners/img-01.png" alt="image destinations"></a></figure></li>
										<li><figure><a href="javascript:void(0);"><img src="<?php echo base_url();?>assets/images/partners/img-02.png" alt="image destinations"></a></figure></li>
										<li><figure><a href="javascript:void(0);"><img src="<?php echo base_url();?>assets/images/partners/img-03.png" alt="image destinations"></a></figure></li>
										<li><figure><a href="javascript:void(0);"><img src="<?php echo base_url();?>assets/images/partners/img-04.png" alt="image destinations"></a></figure></li>
										<li><figure><a href="javascript:void(0);"><img src="<?php echo base_url();?>assets/images/partners/img-05.png" alt="image destinations"></a></figure></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Our Partners End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
<?php $this->load->view('footer'); ?>
<?php $this->load->view('js-links');?>
