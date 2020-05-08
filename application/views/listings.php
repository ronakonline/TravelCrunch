<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>
		<!--************************************
				Inner Banner Start
		*************************************-->
		<section class="tg-parallax tg-innerbanner" data-appear-top-offset="900" data-parallax="scroll" data-image-src="<?php echo base_url();?>uploads/images/destination/<?php echo $destinfo[0]->banner; ?>">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1><?php echo $destinfo[0]->name; ?></h1>
							<h2><?php echo $destinfo[0]->tagline; ?></h2>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--************************************
				Inner Banner End
		*************************************-->
<section class="tg-sectionspace tg-haslayout">
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

<section class="tg-aboutus">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="row">
			<figure data-vide-bg="poster: <?php echo base_url();?>uploads/images/destination/<?php echo $destinfo[0]->about1_image; ?>" data-vide-options="position: 0% 50%"><div style="position: absolute; z-index: -1; inset: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 0% 50%; background-image: url(<?php echo base_url();?>uploads/images/destination/<?php echo $destinfo[0]->about1_image; ?>);"><video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 0%; transform: translate(0%, -50%); visibility: hidden; opacity: 0; width: auto; height: 557px;"></video></div></figure>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="row">
			<div class="tg-textbox">
				<div class="tg-sectiontitle">
					<h2>A Little About <?php echo $destinfo[0]->name; ?></h2>
				</div>
				<div class="tg-description">
					<?php echo $destinfo[0]->about1; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
		<div class="row">
			<figure data-vide-bg="poster: <?php echo base_url();?>uploads/images/destination/<?php echo $destinfo[0]->about2_image; ?>" data-vide-options="position: 0% 50%"><div style="position: absolute; z-index: -1; inset: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 0% 50%; background-image: url(<?php echo base_url();?>uploads/images/destination/<?php echo $destinfo[0]->about2_image; ?>);"><video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 0%; transform: translate(0%, -50%); visibility: hidden; opacity: 0; width: auto; height: 557px;"></video></div></figure>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
		<div class="row">
			<div class="tg-textbox">
				<div class="tg-sectiontitle">
					<h2>A Little About <?php echo $destinfo[0]->name; ?></h2>
				</div>
				<div class="tg-description">
					<?php echo $destinfo[0]->about2; ?>
				</div>
			</div>
		</div>
	</div>
</section>
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-sectionspace tg-haslayout" style="padding-top: 0px;">
			<div class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="tg-content" class="tg-content">
							<div class="tg-tourbookingdetail">

								<div class="tg-sectionspace tg-haslayout">
									<div class="tg-themetabs tg-bookingtabs">
										<ul class="tg-themetabnav" role="tablist">
											<?php if(count($destinfo['overview'])>=1){ ?>
											<li role="presentation" >
												<a href="#america" aria-controls="america" role="tab" data-toggle="tab">
													<span>Overview</span>
												</a>
											</li>
											<?php } ?>
											<li role="presentation">
												<a href="#australia" aria-controls="australia" role="tab" data-toggle="tab">
													<span>FAQ</span>
												</a>
											</li>
											<li role="presentation">
												<a href="#italy" aria-controls="italy" role="tab" data-toggle="tab">
													<span>Packing</span>
												</a>
											</li>
											<li role="presentation" class="active">
												<a href="#london" aria-controls="london" role="tab" data-toggle="tab">
													<span>Reviews</span>
												</a>
											</li>
											<?php if(count($destinfo['img'])>=1){ ?>
											<li role="presentation">
												<a href="#india" aria-controls="india" role="tab" data-toggle="tab">
													<span>Gallery</span>
												</a>
											</li>
											<?php } ?>
										</ul>
										<div class="tab-content tg-themetabcontent">
											<div role="tabpanel" class="tab-pane  tg-overviewtab" id="america">
												<div class="tg-bookingdetail">
													<div class="tg-box">

														<div class="tg-description">
															<?php echo $destinfo['overview'][0]->oleft; ?>

														</div>
													</div>

												</div>
												<div class="tg-bookingdetail tg-bookingdetailstyle">
													<div class="tg-box">
														<div class="tg-description">
															<?php echo $destinfo['overview'][0]->oright; ?>

														</div>
													</div>
												</div>

											</div>
											<div role="tabpanel" class="tab-pane tg-itinerary" id="australia">
												<?php
												foreach ($destinfo['faq'] as $faq){
												?>
												<div class="tg-bookingdetail">
													<div class="tg-box">
														<div class="tg-accordion" role="tablist" aria-multiselectable="true">
															<div class="tg-panel">
																<h4><?php echo $faq->question ?></h4>
																<div class="tg-panelcontent">
																	<div class="tg-description">
																		<?php echo $faq->answer ?>
																	</div>
																</div>
															</div>

														</div>
													</div>
												</div>
												<?php } ?>
											</div>
											<div role="tabpanel" class="tab-pane tg-locationtab row" id="italy" style="padding-left: 10px;">
												<div class="tg-bookingdetail col-sm-6">
													<div class="tg-box">
														<h2><?php echo $destinfo['packing'][0]->title1; ?></h2>
														<div class="tg-description">
															<p><?php echo $destinfo['packing'][0]->desc1; ?></p>
														</div>
													</div>
													<div class="tg-box">
														<h2><?php echo $destinfo['packing'][0]->title2; ?></h2>
														<div class="tg-description">
															<p><?php echo $destinfo['packing'][0]->desc2; ?></p>

														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="row">
														<div class="tg-bookingdetail">
															<div class="tg-box ">
																<h3><?php echo $destinfo['packing'][0]->list1 ?></h3>
																<div class="tg-description">
																	<ul class="tg-liststyle">
																		<?php $list = explode(",",$destinfo['packing'][0]->item1);
																		for($i=0; $i<count($list); $i++){ ?>
																		<li><span><?php  echo trim($list[$i],'[]'); ?></span></li>
																		<?php } ?>

																	</ul>
																</div>
															</div>
														</div>
														<div class="tg-bookingdetail">
															<div class="tg-box ">
																<h3><?php echo $destinfo['packing'][0]->list2 ?></h3>
																<div class="tg-description">
																	<ul class="tg-liststyle">
																		<?php $list = explode(",",$destinfo['packing'][0]->item2);
																		for($i=0; $i<count($list); $i++){ ?>
																			<li><span><?php  echo trim($list[$i],'[]'); ?></span></li>
																		<?php } ?>

																	</ul>
																</div>
															</div>
														</div>
													</div>
													<br><br>
													<div class="row">
														<div class="tg-bookingdetail">
															<div class="tg-box ">
																<h3><?php echo $destinfo['packing'][0]->list3 ?></h3>
																<div class="tg-description">
																	<ul class="tg-liststyle">
																		<?php $list = explode(",",$destinfo['packing'][0]->item3);
																		for($i=0; $i<count($list); $i++){ ?>
																			<li><span><?php  echo trim($list[$i],'[]'); ?></span></li>
																		<?php } ?>

																	</ul>
																</div>
															</div>
														</div>
														<div class="tg-bookingdetail">
															<div class="tg-box ">
																<h3><?php echo $destinfo['packing'][0]->list4 ?></h3>
																<div class="tg-description">
																	<ul class="tg-liststyle">
																		<?php $list = explode(",",$destinfo['packing'][0]->item4);
																		for($i=0; $i<count($list); $i++){ ?>
																			<li><span><?php  echo trim($list[$i],'[]'); ?></span></li>
																		<?php } ?>

																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane active tg-reviewtab" id="london">
												<div class="tg-reviewsarea">
													<form class="tg-formtheme tg-formreviews">
														<fieldset class="tg-filterby">
															<div class="tg-durationrating">
																<em>(3 Review)</em>
																<span class="tg-stars"><span></span></span>
															</div>
															<span class="tg-select">
																<select>
																	<option>Filter by</option>
																	<option>Rating</option>
																	<option>New</option>
																	<option>date</option>
																</select>
															</span>
														</fieldset>
														<fieldset class="tg-reviews">
															<ul>
																<li>
																	<div class="tg-review">
																		<div class="tg-author">
																			<figure class="tg-authorimg">
																				<img src="<?php echo base_url();?>assets/images/avatars/img-01.jpg" alt="image description">
																			</figure>
																			<div class="tg-authorinfo">
																				<h3>Katie</h3>
																				<span>Family Vacation</span>
																				<span class="tg-stars"><span></span></span>
																			</div>
																		</div>
																		<div class="tg-reviewcontent">
																			<div class="tg-reviewhead">
																				<span class="tg-tourduration">January 25, 2017</span>
																				<a class="tg-btnhelpfull" href="#"><i class="icon-thumb-up"></i>Helpful</a>
																			</div>
																			<div class="tg-description">
																				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu.</p>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="tg-review">
																		<div class="tg-author">
																			<figure class="tg-authorimg">
																				<img src="<?php echo base_url();?>assets/images/avatars/img-01.jpg" alt="image description">
																			</figure>
																			<div class="tg-authorinfo">
																				<h3>Katie</h3>
																				<span>Family Vacation</span>
																				<span class="tg-stars"><span></span></span>
																			</div>
																		</div>
																		<div class="tg-reviewcontent">
																			<div class="tg-reviewhead">
																				<span class="tg-tourduration">January 25, 2017</span>
																				<a class="tg-btnhelpfull" href="#"><i class="icon-thumb-up"></i>Helpful</a>
																			</div>
																			<div class="tg-description">
																				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu.</p>
																				<p>First, please don’t fall sick. However, if in case something does catchup with you, we will airlift you to hospital but your insurance will have to pay for this. Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut liquam massa nisl quis neque.</p>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="tg-review">
																		<div class="tg-author">
																			<figure class="tg-authorimg">
																				<img src="<?php echo base_url();?>assets/images/avatars/img-01.jpg" alt="image description">
																			</figure>
																			<div class="tg-authorinfo">
																				<h3>Katie</h3>
																				<span>Family Vacation</span>
																				<span class="tg-stars"><span></span></span>
																			</div>
																		</div>
																		<div class="tg-reviewcontent">
																			<div class="tg-reviewhead">
																				<span class="tg-tourduration">January 25, 2017</span>
																				<a class="tg-btnhelpfull" href="#"><i class="icon-thumb-up"></i>Helpful</a>
																			</div>
																			<div class="tg-description">
																				<p>What a magical place, even better than I imagined! Teresa and Daniella were so helpful and awesome</p>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="tg-review">
																		<div class="tg-author">
																			<figure class="tg-authorimg">
																				<img src="<?php echo base_url();?>assets/images/avatars/img-01.jpg" alt="image description">
																			</figure>
																			<div class="tg-authorinfo">
																				<h3>Katie</h3>
																				<span>Family Vacation</span>
																				<span class="tg-stars"><span></span></span>
																			</div>
																		</div>
																		<div class="tg-reviewcontent">
																			<div class="tg-reviewhead">
																				<span class="tg-tourduration">January 25, 2017</span>
																				<a class="tg-btnhelpfull" href="#"><i class="icon-thumb-up"></i>Helpful</a>
																			</div>
																			<div class="tg-description">
																				<p>Very nice place</p>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="tg-review">
																		<div class="tg-author">
																			<figure class="tg-authorimg">
																				<img src="<?php echo base_url();?>assets/images/avatars/img-01.jpg" alt="image description">
																			</figure>
																			<div class="tg-authorinfo">
																				<h3>Katie</h3>
																				<span>Family Vacation</span>
																				<span class="tg-stars"><span></span></span>
																			</div>
																		</div>
																		<div class="tg-reviewcontent">
																			<div class="tg-reviewhead">
																				<span class="tg-tourduration">January 25, 2017</span>
																				<a class="tg-btnhelpfull" href="#"><i class="icon-thumb-up"></i>Helpful</a>
																			</div>
																			<div class="tg-description">
																				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo First, please don’t fall sick. However, if in case something does catchup.</p>
																			</div>
																		</div>
																	</div>
																</li>
															</ul>
														</fieldset>
														<fieldset class="tg-formleavereview">
															<div class="tg-leavereviewhead">
																<h2>Leave your Comment</h2>
																<div class="tg-durationrating">
																	<h3>Your Rating</h3>
																	<span class="tg-stars"><span></span></span>
																</div>
															</div>
															<div class="tg-reviewformarea">
																<div class="form-group">
																	<input type="text" name="fullname" class="form-control" placeholder="Full Name">
																</div>
																<div class="form-group">
																	<input type="email" name="email" class="form-control" placeholder="Email Address">
																</div>
																<div class="form-group">
																	<textarea placeholder="">Your Comment</textarea>
																</div>
																<div class="form-group">
																	<a class="tg-btn" href="#"><span>submit</span></a>
																</div>
															</div>
														</fieldset>
													</form>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane tg-gallerytab" id="india">
												<div class="tg-gallery">
													<ul>
														<?php
															foreach ($destinfo['img'] as $row){
														?>
														<li>
															<figure>
																<a href="<?php echo base_url();?>uploads/images/gallery/<?php echo $row->img; ?>" data-rel="prettyPhoto[instagram]">
																	<img class="img-thumbnail" src="<?php echo base_url();?>uploads/images/gallery/<?php echo $row->img; ?>" alt="image decruoton" >
																</a>
															</figure>
														</li>
														<?php } ?>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-sectiontitle tg-sectiontitleleft">
							<h2>Popular Tours</h2>
							<a class="tg-btnvtwo" href="javascript:void(0);">All Tours</a>
						</div>
						<div id="tg-populartoursslider" class="tg-populartoursslider tg-populartours tg-populartoursvtwo owl-carousel">
							<?php foreach ($tours as $tour){ ?>
									<div class="item tg-populartour">
										<figure><a href="<?php echo base_url('Tourdetails/').$tour->id; ?>"><img src="<?php echo base_url('uploads/images/gallery/').$tour->bannerimg;?>" alt="image destinations" style="height: 255px;"></a>

										</figure>
										<div class="tg-populartourcontent">
											<div class="tg-populartourtitle">
												<h3><a href="<?php echo base_url('Tourdetails/').$tour->id; ?>"><?php echo $tour->title; ?></a></h3>
											</div>
											<div class="tg-description">
												<p><?php echo substr($tour->overview,0,150); ?>...</p>
											</div>
											<div class="tg-populartourfoot">
												<div class="tg-durationrating">
													<span class="tg-tourduration"><?php echo $tour->days; ?> Days</span>
												</div>
												<div class="tg-pricearea">
													<span>from</span>
													<h4>$<?php echo $tour->price; ?></h4>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
						</div>
					</div>
				</div>

			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
<?php $this->load->view('footer'); ?>
<?php $this->load->view('js-links');?>
