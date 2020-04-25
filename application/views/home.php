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
								<div class="tg-description">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-themetabs tg-themetabsvtwo">
								<ul class="tg-themetabnav" role="tablist">
									<li role="presentation" class="active"><a href="#northamerica" role="tab" data-toggle="tab"><strong style="color:black;">North america</strong></a></li>
									<li role="presentation"><a href="#europe" aria-controls="europe" role="tab" data-toggle="tab"><strong style="color:black;">Europe</strong></a></li>
									<li role="presentation"><a href="#africa" aria-controls="africa" role="tab" data-toggle="tab"><strong style="color:black;">africa</strong></a></li>
									<li role="presentation"><a href="#asia" aria-controls="asia" role="tab" data-toggle="tab"><strong style="color:black;">asia</strong></a></li>
									<li role="presentation"><a href="#southamerica" aria-controls="southamerica" role="tab" data-toggle="tab"><strong style="color:black;">south america</strong></a></li>
								</ul>
								<div class="tab-content tg-themetabcontent">
									<div role="tabpanel" class="tab-pane active" id="america">
										<div class="tg-topdestinationslider tg-populardestinations owl-carousel">
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-11.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Paris</a></h3>
														<div class="tg-description">
															<p>Beautiful City in the World</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-12.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Dubai</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-13.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Istanbul</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-14.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">london</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="europe">
										<div class="tg-topdestinationslider tg-populardestinations owl-carousel">
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-11.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Paris</a></h3>
														<div class="tg-description">
															<p>Beautiful City in the World</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-12.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Dubai</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-13.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Istanbul</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-14.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">london</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="africa">
										<div class="tg-topdestinationslider tg-populardestinations owl-carousel">
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-11.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Paris</a></h3>
														<div class="tg-description">
															<p>Beautiful City in the World</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-12.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Dubai</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-13.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Istanbul</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-14.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">london</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="asia">
										<div class="tg-topdestinationslider tg-populardestinations owl-carousel">
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-11.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Paris</a></h3>
														<div class="tg-description">
															<p>Beautiful City in the World</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-12.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Dubai</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-13.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Istanbul</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-14.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">london</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="southamerica">
										<div class="tg-topdestinationslider tg-populardestinations owl-carousel">
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-11.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Paris</a></h3>
														<div class="tg-description">
															<p>Beautiful City in the World</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-12.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Dubai</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-13.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">Istanbul</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
											<div class="item tg-populardestination">
												<figure>
													<a href="javascript:void(0);"><img src="<?php echo base_url(); ?>assets/images/tours/img-14.jpg" alt="image destinations"></a>
													<figcaption>
														<h3><a href="javascript:void(0);">london</a></h3>
														<div class="tg-description">
															<p>in the streets of London</p>
														</div>
													</figcaption>
												</figure>
											</div>
										</div>
									</div>
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
								<div class="tg-tourdestination tg-tourdestinationbigbox">
									<figure>
										<a href="javascript:void(0);">
											<img src="<?php echo base_url();?>assets/images/destination/img-01.jpg" alt="image destinations">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>Ice Adventure Vacations</h2>
												</div>
												<div class="tg-description">
													<p>your best vacation ever</p>
												</div>
											</div>
										</a>
									</figure>
								</div>
								<div class="tg-tourdestination">
									<figure>
										<a href="javascript:void(0);">
											<img src="<?php echo base_url();?>assets/images/destination/img-02.jpg" alt="image destinations">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>National Park</h2>
												</div>
											</div>
										</a>
									</figure>
								</div>
								<div class="tg-tourdestination">
									<figure>
										<a href="javascript:void(0);">
											<img src="<?php echo base_url();?>assets/images/destination/img-03.jpg" alt="image destinations">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>Adult Vacations</h2>
												</div>
											</div>
										</a>
									</figure>
								</div>
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
										<h2><span>01</span>Luxury Hotels</h2>
									</div>
									<div class="tg-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>02</span>Tourist Guide</h2>
									</div>
									<div class="tg-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>03</span>Flights Tickets</h2>
									</div>
									<div class="tg-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
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
									<a class="tg-btnvtwo" href="javascript:void(0);">All Tours</a>
								</div>
								<div id="tg-populartoursslider" class="tg-populartoursslider tg-populartours owl-carousel">
									<div class="item tg-populartour">
										<figure>
											<a href="tourbookingdetail.html"><img src="<?php echo base_url();?>assets/images/tours/img-01.jpg" alt="image destinations"></a>
											<span class="tg-descount">25% Off</span>
										</figure>
										<div class="tg-populartourcontent">
											<div class="tg-populartourtitle">
												<h3><a href="tourbookingdetail.html">City Tours in Europe, Paris</a></h3>
											</div>
											<div class="tg-description">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
											</div>
											<div class="tg-populartourfoot">
												<div class="tg-durationrating">
													<span class="tg-tourduration">7 Days</span>
													<span class="tg-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<div class="tg-pricearea">
													<del>$2,800</del>
													<h4>$2,500</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="item tg-populartour">
										<figure><a href="tourbookingdetail.html"><img src="<?php echo base_url();?>assets/images/tours/img-02.jpg" alt="image destinations"></a></figure>
										<div class="tg-populartourcontent">
											<div class="tg-populartourtitle">
												<h3><a href="tourbookingdetail.html">Best of Canada Tours and Travel</a></h3>
											</div>
											<div class="tg-description">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
											</div>
											<div class="tg-populartourfoot">
												<div class="tg-durationrating">
													<span class="tg-tourduration">7 Days</span>
													<span class="tg-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<div class="tg-pricearea">
													<span>from</span>
													<h4>$600</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="item tg-populartour">
										<figure><a href="tourbookingdetail.html"><img src="<?php echo base_url();?>assets/images/tours/img-03.jpg" alt="image destinations"></a></figure>
										<div class="tg-populartourcontent">
											<div class="tg-populartourtitle">
												<h3><a href="tourbookingdetail.html">Italy – 3 Days in Rome, Golden Gate</a></h3>
											</div>
											<div class="tg-description">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
											</div>
											<div class="tg-populartourfoot">
												<div class="tg-durationrating">
													<span class="tg-tourduration">7 Days</span>
													<span class="tg-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<div class="tg-pricearea">
													<span>from</span>
													<h4>$1,430</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="item tg-populartour">
										<figure><a href="tourbookingdetail.html"><img src="<?php echo base_url();?>assets/images/tours/img-04.jpg" alt="image destinations"></a></figure>
										<div class="tg-populartourcontent">
											<div class="tg-populartourtitle">
												<h3><a href="tourbookingdetail.html">Best of Canada Tours and Travel</a></h3>
											</div>
											<div class="tg-description">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
											</div>
											<div class="tg-populartourfoot">
												<div class="tg-durationrating">
													<span class="tg-tourduration">7 Days</span>
													<span class="tg-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<div class="tg-pricearea">
													<span>from</span>
													<h4>$600</h4>
												</div>
											</div>
										</div>
									</div>
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
								<figure><img src="<?php echo base_url();?>assets/images/placeholder/placeholder-01.png" alt="image destinations"></figure>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 tg-verticalmiddle">
								<div class="tg-ourdestinationcontent">
									<div class="tg-sectiontitle tg-sectiontitleleft">
										<h2>Popular Tours</h2>
									</div>
									<div class="tg-description"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer adipiscing elit, sed diam nonummy nibh...</p></div>
									<ul class="tg-destinations">
										<li>
											<a href="tourcatagory.html">
												<h3>Europe</h3>
												<em>(05)</em>
											</a>
										</li>
										<li>
											<a href="tourcatagory.html">
												<h3>Africa</h3>
												<em>(15)</em>
											</a>
										</li>
										<li>
											<a href="tourcatagory.html">
												<h3>Asia</h3>
												<em>(12)</em>
											</a>
										</li>
										<li>
											<a href="tourcatagory.html">
												<h3>Oceania</h3>
												<em>(02)</em>
											</a>
										</li>
										<li>
											<a href="tourcatagory.html">
												<h3>North America</h3>
												<em>(08)</em>
											</a>
										</li>
										<li>
											<a href="tourcatagory.html">
												<h3>South America</h3>
												<em>(27)</em>
											</a>
										</li>
									</ul>
									<a class="tg-btn" href="tourcatagory.html"><span>all destinations</span></a>
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
					Destination Start
			*************************************-->
			<section class="tg-sectionspace tg-zerotoppadding tg-haslayout">
				<div class="container">
					<div class="row">
						<div id="tg-destinationsslider" class="tg-destinationsslider tg-destinations owl-carousel">
							<div class="item tg-destination">
								<figure>
									<a href="tourbookingdetail.html"><img src="<?php echo base_url();?>assets/images/destination/img-04.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="tourbookingdetail.html">Paris</a></h2>
										<div class="tg-description">
											<p>in the streets of London</p>
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="tourbookingdetail.html"><img src="<?php echo base_url();?>assets/images/destination/img-05.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="tourbookingdetail.html">Egypt</a></h2>
										<div class="tg-description">
											<p>in the streets of London</p>
										</div>
									</figcaption>
								</figure>
								<figure>
									<a href="tourbookingdetail.html"><img src="<?php echo base_url();?>assets/images/destination/img-06.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="tourbookingdetail.html">London</a></h2>
										<div class="tg-description">
											<p>in the streets of London</p>
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="javascript:void(0);"><img src="<?php echo base_url();?>assets/images/destination/img-07.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">Istanbul</a></h2>
										<div class="tg-description">
											<p>Beautiful Mosque</p>
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="javascript:void(0);"><img src="<?php echo base_url();?>assets/images/destination/img-04.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">Paris</a></h2>
										<div class="tg-description">
											<p>in the streets of London</p>
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="javascript:void(0);"><img src="<?php echo base_url();?>assets/images/destination/img-05.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">Egypt</a></h2>
										<div class="tg-description">
											<p>in the streets of London</p>
										</div>
									</figcaption>
								</figure>
								<figure>
									<a href="javascript:void(0);"><img src="<?php echo base_url();?>assets/images/destination/img-06.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">London</a></h2>
										<div class="tg-description">
											<p>in the streets of London</p>
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="javascript:void(0);"><img src="<?php echo base_url();?>assets/images/destination/img-07.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">Istanbul</a></h2>
										<div class="tg-description">
											<p>Beautiful Mosque</p>
										</div>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Destination End
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
