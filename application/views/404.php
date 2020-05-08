<?php $this->load->view('css-links'); ?>

<!--************************************
		Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
	<div class="tg-404error" style=" background: url(<?php echo base_url();?>assets/images/img-02.jpg) no-repeat center center fixed;">
		<div class="container">
			<div class="row">
				<div class="tg-404errorcontent">
					<h1>404</h1>
					<h2>Page not Found</h2>
					<div class="tg-description">
						<p>Sorry but the page that you are looking for does not exist...</p>
					</div>
					<a class="tg-btn" href="<?php echo base_url(); ?>"><span>go back to home</span></a>
				</div>
			</div>
		</div>
	</div>
</main>
<!--************************************
		Main End
*************************************-->
<?php $this->load->view('js-links');?>
