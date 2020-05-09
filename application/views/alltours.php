<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>
<!--************************************
		Inner Banner Start
*************************************-->
<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/images/parallax/bgparallax-06.jpg">
	<div class="tg-sectionspace tg-haslayout">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>Destinations</h1>
					<h2>Explore Tours By Destinations</h2>
					<ol class="tg-breadcrumb">
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li class="tg-active">Destinations</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<!--************************************
		Inner Banner End
*************************************-->
<!--************************************
		Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-sectionspace tg-haslayout">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="tg-content" class="tg-content">
					<div class="tg-sectiontitle">
						<h2>All Tours</h2>
					</div>

					<div class="tg-listing tg-shopgrid">
						<div class="row">
							<?php foreach ($tours as $tour){?>
								<?php if($did == $tour->did){ ?>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<div class="tg-product">
											<div class="tour">
												<figure class="tour"><a href="<?php echo base_url('Tourdetails/').$tour->id; ?>"><img src="<?php echo base_url('uploads/images/parent/').$tour->bannerimg; ?>" alt="image destinations"></a></figure>
											</div>
											<div class="tg-productcontent">
												<?php if(strlen($tour->title<=31)){ ?>
												<div class="tg-producttitle" style="padding-bottom: 40px;">
													<h3><a href="<?php echo base_url('Tourdetails/').$tour->id; ?>"><?php echo $tour->title; ?></a></h3>
												</div>
												<?php }else{ ?>
													<div class="tg-producttitle" >
														<h3><a href="<?php echo base_url('Tourdetails/').$tour->id; ?>"><?php echo $tour->title; ?></a></h3>
													</div>
												<?php } ?>
												<div class="tg-description">
													<p><?php echo $tour->tfrom.'    <i class="fa fa-plane"></i> '.  $tour->tto; ?></p>
												</div>
												<div class="tg-productfoot">
													<div class="tg-durationrating">
														<span class=""><?php echo $tour->days." Days"; ?></span>

													</div>
													<div class="tg-pricearea">
														<h4>$<?php echo $tour->price; ?></h4>
													</div>
												</div>
											</div>
											<a class="tg-btnaddtocart" href="<?php echo base_url('Tourdetails/').$tour->id; ?>">
												<i class="fa fa-plane"></i>
												<span>View Tour</span>
											</a>
										</div>
									</div>
								<?php }} ?>
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
<?php $this->load->view('footer'); ?>
<?php $this->load->view('js-links');?>
