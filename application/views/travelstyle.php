<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>

<!--************************************
			Inner Banner Start
	*************************************-->
<?php foreach ($travelstyle as $row){
	if($row->id == $tid){?>
<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo base_url('uploads/images/destination/').$row->bannerimg; ?>">
	<div class="tg-sectionspace tg-haslayout">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1><?php echo $row->name; ?></h1>
					<h2></h2>
					<br><br>
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
						<h2>Tours For You</h2>
					</div>
					<div class="tg-listing tg-shopgrid">
						<div class="row">
							<?php foreach ($tours as $tour){ ?>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-product">
									<figure><a href="shopdetail.html"><img src="<?php echo base_url('uploads/images/destination/').$tour->banner; ?>" alt="image destinations"></a></figure>
									<div class="tg-productcontent">
										<div class="tg-producttitle">
											<h3><a href="shopdetail.html"><?php echo $tour->name; ?></a></h3>
										</div>
										<div class="tg-description">
											<p><?php echo $tour->tagline; ?></p>
										</div>
										<div class="tg-productfoot">
											<div class="tg-durationrating">
												<span class="tg-wishlist">Wishlist</span>
												<span class="tg-stars"><span></span></span>
												<em>(3 Review)</em>
											</div>
											<div class="tg-pricearea">
												<del>$2,800</del>
												<h4>$2,500</h4>
											</div>
										</div>
									</div>
									<a class="tg-btnaddtocart" href="javascript:void(0);">
										<i class="icon-icons240"></i>
										<span>View Tour</span>
									</a>
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
<?php }} ?>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('js-links');?>
