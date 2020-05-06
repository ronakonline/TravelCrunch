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
										<li class="breadcrumb-item"><a href="#">Travel Deals</a></li>
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
									<form method="post" action="insertparent" enctype="multipart/form-data">
									<div class="form-group row">
										<div class="col-sm-6">
											<label for="example-text-input" class="">Parent</label>
											<select class="js-example-basic-multiple col" name="states[]">
												<option value="AL">Alabama</option>
												...
												<option value="WY">Wyoming</option>
											</select>
										</div>
										<div class="col-sm-6">
											<label for="example-text-input" class="">Destination</label>
											<select class="js-example-basic-multiple col" name="states[]" multiple="multiple">
												<option value="AL">Alabama</option>
												...
												<option value="WY">Wyoming</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="example-text-input" class="">Featured</label>
											<select class="form-control">
												<option value="1">YES</option>
												<option value="0">No</option>
											</select>
									
									</div>
									<div class="form-group row">
										<div class="col-sm-6"> 
											<label for="example-text-input" class="">Offer</label>
											<div>
												<input class="form-control" type="text" name="name" id="name" placeholder="In Percentage" required>
											</div>
										</div>
										<div class="col-sm-6"> 
											<label for="example-text-input" class="">Deal</label>
											<div>
												<input class="form-control" type="text" name="name" id="name" placeholder="In Percentage" required>
											</div>
										</div>
									</div>
										<div class="form-group row">
											<label for="example-search-input" class="col-sm-2 col-form-label"></label>
											<div class="col-md-10 ">
												<div class="input-group mt-2">
													<img id="target" height="200" width="250" style="display: none">
												</div>
											</div>
										</div>

									<div class="text-center">
										<button type="submit" class="btn btn-primary">Submit</button>
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
	$(document).ready(function() {
		$('.js-example-basic-multiple').select2();
	});
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
