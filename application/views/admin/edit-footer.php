<!DOCTYPE html>
<html>
    <head>
		<?php $this->load->view('admin/css-links') ?>
	</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<!-- Begin page -->
<div id="wrapper">

	<?php $this->load->view('admin/aside'); ?>

	<!-- Start right Content here -->



	<div class="content-page">
		<!-- Start content -->
		<div class="content">


			<?php $this->load->view('admin/header'); ?>

			<div class="page-content-wrapper ">

				<div class="container-fluid">

					<div class="row">
						<div class="col-sm-12">
							<div class="page-title-box">
								<div class="btn-group float-right">
									<ol class="breadcrumb hide-phone p-0 m-0">
										<li class="breadcrumb-item"><a href="#">Site Setting</a></li>
										<li class="breadcrumb-item"><a href="#"><?php echo $title; ?></a></li>

									</ol>
								</div>
								<h4 class="page-title"><?php echo $title; ?></h4>
							</div>
						</div>
					</div>
					<!-- end page title end breadcrumb -->
					<div class="row">
						<div class="col-12">
							<div class="card m-b-30">
								<div class="card-body">
									<form method="post" action="update_footer" enctype="multipart/form-data">
									<div class="form-group">
										<label for="example-text-input" class="col col-form-label">About</label>
										<textarea class="form-control" name="about" ><?php echo $footer[0]->about; ?></textarea>
									</div>
									<div class="form-group">
										<label for="example-text-input" class="col col-form-label">Facebook</label>
										<input class="form-control" type="tel" name="facebook" id="fb" value="<?php echo $footer[0]->facebook; ?>" required>
									</div>
									<div class="form-group">
										<label for="example-text-input" class="col col-form-label">Instagram</label>
										<input class="form-control" type="text" name="instagram" id="insta" value="<?php echo $footer[0]->instagram; ?>" required>
									</div>
									<div class="form-group">
										<label for="example-text-input" class="col col-form-label">Twitter</label>
										<input class="form-control" type="text" name="twitter" id="twitter" value="<?php echo $footer[0]->twitter; ?>" required>
									</div>

									<div class="text-center">
										<button type="submit" class="btn btn-primary">Update</button>
									</div>
									</form>
								</div>

							</div>
						</div> <!-- end col -->
					</div> <!-- end row -->
				</div><!-- container -->

			</div> <!-- Page content Wrapper -->

		</div> <!-- content -->

		<?php $this->load->view('admin/footer'); ?>

	</div>
	<!-- End Right content here -->

</div>
<!-- END wrapper -->


<?php $this->load->view('admin/js-links') ?>
<script>
	function showImage(src,target) {
		var fr=new FileReader();
		// when image is loaded, set the src of the image where you want to display it
		fr.onload = function(e) { target.src = this.result; };

		src.addEventListener("change",function() {
			// fill fr with image data
			fr.readAsDataURL(src.files[0]);
			target.style.display="block";
		});
	}

	var src = document.getElementById("src");
	var target = document.getElementById("target");
	showImage(src,target);
</script>
<?php
if(isset($_SESSION['error'])){
	echo '<script>alertify.error("'.$_SESSION['error'].'"); </script>';
	unset($_SESSION['error']);
}elseif (isset($_SESSION['success'])){
	echo '<script>alertify.success("'.$_SESSION['success'].'");</script>';
	unset($_SESSION['success']);
}
?>
</body>
</html>
