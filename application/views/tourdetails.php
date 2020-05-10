<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>
<?php foreach ($tours as $tour){ ?>
		<?php if($tour->id == $tourid){ ?>
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo base_url();?>uploads/images/parent/<?php echo $tour->bannerimg; ?>">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="tg-content" class="tg-content">
							<div class="tg-tourbookingdetail">
								<div class="tg-bookinginfo">
									<h2><?php echo $tour->title; ?></h2>

									<div class="tg-pricearea">
										<span>From</span>
										<h4>$<?php echo $tour->price; ?><sub>/ per person</sub></h4>
									</div>


									<ul class="tg-tripinfo">
										<li><span class="tg-tourduration"><?php echo $tour->days; ?> Days</span></li>
										<li><span class="tg-tourduration tg-location"><?php echo $tour->tfrom; ?> to <?php echo $tour->tto; ?></span></li>

									</ul>

								</div>
								<div class="tg-sectionspace tg-haslayout">
									<div class="tg-themetabs tg-bookingtabs">
										<ul class="tg-themetabnav" role="tablist">
											<li role="presentation" class="active">
												<a href="#america" aria-controls="america" role="tab" data-toggle="tab">
													<span>Overview</span>
												</a>
											</li>
											<li role="presentation">
												<a href="#australia" aria-controls="australia" role="tab" data-toggle="tab">
													<span>Itinerary</span>
												</a>
											</li>
											<li role="presentation">
												<a href="#italy" aria-controls="italy" role="tab" data-toggle="tab">
													<span>FAQ</span>
												</a>
											</li>
											<li role="presentation">
												<a href="#india" aria-controls="india" role="tab" data-toggle="tab">
													<span>Gallery</span>
												</a>
											</li>
											<li role="presentation">
												<a href="#london" aria-controls="london" role="tab" data-toggle="tab">
													<span>Detail</span>
												</a>
											</li>
										</ul>
										<div class="tab-content tg-themetabcontent">
											<div role="tabpanel" class="tab-pane active tg-overviewtab" id="america" style=" background: none;" >
												<?php echo $tour->overview; ?>
											</div>
											<div role="tabpanel" class="tab-pane tg-itinerary" id="australia">
												<?php
												foreach ($tourdetails['touritinerary'] as $faq){
													?>
													<div class="tg-bookingdetail">
														<div class="tg-box">
															<div class="tg-accordion" role="tablist" aria-multiselectable="true">
																<div class="tg-panel">
																	<h4><?php echo $faq->title; ?></h4>
																	<div class="tg-panelcontent">
																		<div class="tg-description">
																			<?php echo $faq->descr; ?>
																		</div>
																	</div>
																</div>

															</div>
														</div>
													</div>
												<?php } ?>
											</div>
											<div role="tabpanel" class="tab-pane tg-locationtab" id="italy">

													<div class="tg-bookingdetail">
														<div class="tg-box">
															<div class="tg-accordion" role="tablist" aria-multiselectable="true">
																<?php
																	for($i=0; $i<count($tourdetails['tourfaq']); $i++){
																	if($i%2==0){
																	?>
																<div class="tg-panel">
																	<h4><?php echo $tourdetails['tourfaq'][$i]->question ?></h4>
																	<div class="tg-panelcontent">
																		<div class="tg-description">
																			<?php echo $tourdetails['tourfaq'][$i]->answer ?>
																		</div>
																	</div>
																</div>
																<?php } } ?>
															</div>
														</div>
													</div>
												<div class="tg-bookingdetail">
													<div class="tg-box">
														<div class="tg-accordion" role="tablist" aria-multiselectable="true">
															<?php
															for($i=0; $i<count($tourdetails['tourfaq']); $i++){
																if($i%2!=0){
																	?>
																	<div class="tg-panel">
																		<h4><?php echo $tourdetails['tourfaq'][$i]->question ?></h4>
																		<div class="tg-panelcontent">
																			<div class="tg-description">
																				<?php echo $tourdetails['tourfaq'][$i]->answer ?>
																			</div>
																		</div>
																	</div>
																<?php } } ?>
														</div>
													</div>
												</div>

											</div>
											<div role="tabpanel" class="tab-pane tg-gallerytab" id="india">
												<div class="tg-gallery">
													<ul>
														<?php
														foreach ($tourdetails['img'] as $row){
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
											<div role="tabpanel" class="tab-pane tg-reviewtab" id="london">
												<?php echo $tour->details; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</main>
		<!--************************************
				Main End
		*************************************-->
<?php }} ?>
<?php $this->load->view('footer'); ?>
<?php $this->load->view('js-links');?>
