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
							<div class="tg-topdestinations">
								<div class="row">
									<?php foreach ($destinations as $row){ ?>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<div class="tg-topdestination">
											<figure style="height: 290px;">
												<a href="<?php echo base_url();?>Alltours/<?php echo $row->id; ?>" class="tg-btnviewall">View All Tours</a>
												<a href="<?php echo base_url();?>Alltours/<?php echo $row->id; ?>"><img src="<?php echo base_url('uploads/images/destination/').$row->banner;?>" alt="image description" style="height: 290px;"></a>
												<figcaption>
													<h2><a href="<?php echo base_url();?>Alltours/<?php echo $row->id; ?>"><?php echo $row->name; ?></a></h2>
												</figcaption>
											</figure>
										</div>
									</div>
									<?php } ?>
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
