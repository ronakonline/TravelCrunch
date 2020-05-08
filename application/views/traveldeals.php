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
						<h1>Travel Deals</h1>
						<h2></h2>
						<ol class="tg-breadcrumb">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li class="tg-active">Travel Deals</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--************************************
			Inner Banner End
	*************************************-->
<?php foreach ($deals as $deal){ ?>
<section class="tg-sectionspace  tg-haslayout" style="padding-top: 60px;padding-bottom: 25px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="tg-sectionhead tg-sectionheadvtwo">
					<div class="tg-sectiontitle">
						<h2>Tours with <?php echo $deal->offer; ?> % Discout on</h2>
					</div>
					<div class="tg-description">
						<p><?php echo $deal->deal; ?></p>
					</div>
				</div>
				<div id="tg-populartoursslider" class="tg-populartoursslider tg-populartours tg-populartoursvtwo owl-carousel">
					<?php foreach ($tours as $tour){ ?>
						<?php if($deal->did = $tour->did){ ?>
						<div class="item tg-populartour">
						<figure><a href="<?php echo base_url('Tourdetails/').$tour->id; ?>"><img src="<?php echo base_url('uploads/images/parent/').$tour->bannerimg;?>" alt="image destinations" style="height: 255px;"></a>
							<span class="tg-descount"><?php echo $deal->offer; ?>% Off</span>
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
					<?php }} ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('js-links');?>
