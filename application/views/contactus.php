<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>
		<!--************************************
				Inner Banner Start
		*************************************-->
		<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/images/parallax/bgparallax-05.jpg">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>Contact Us</h1>
							<h2></h2>
							<ol class="tg-breadcrumb">
								<li><a href="<?php echo base_url(); ?>">Home</a></li>
								<li class="tg-active">Contact Us</li>
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
							<ul class="tg-contactinfo">
								<li>
									<span class="tg-contactinfoicon"><i class="fa fa-commenting-o"></i></span>
									<h2>Get in Touch</h2>
									<span>Telephone: <?php echo $contact[0]->telno; ?></span>
									<span>Mobile: <?php echo $contact[0]->phoneno; ?></span>
								</li>
								<li>
									<span class="tg-contactinfoicon"><i class="icon-map-marker"></i></span>
									<h2>Visit Our Location</h2>
									<address><?php echo $contact[0]->add1; ?> <?php echo $contact[0]->add2; ?></address>
								</li>
								<li>
									<span class="tg-contactinfoicon"><i class="icon-briefcase"></i></span>
									<h2>E-mail Us</h2>
									<span>Email: <?php echo $contact[0]->email; ?></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
		<?php $this->load->view('footer'); ?>
<?php $this->load->view('js-links');?>
