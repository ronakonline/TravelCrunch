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
										<li class="breadcrumb-item"><a href="#">Travel Style</a></li>
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
									<form method="post" action="<?php echo base_url('admin/Destination/updatetravelstyle'); ?>" enctype="multipart/form-data">

									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input class="form-control" type="text" name="name" id="name" value="<?php echo $edit_travelstyle[0]->name; ?>" required>
										</div>
									</div>
										
										<div class="form-group row">
											<label for="example-text-input" class="col-sm-2 col-form-label">Featured</label>
											<div class="col-sm-10">
												<select class="form-control" name="featured">
													<?php if($edit_travelstyle[0]->featured == 1){
														echo "<option value='1' selected>YES</option>
														  		<option value='2'>No</option>";	
														}
														else{
															echo "<option value='1'>YES</option>
														  		<option value='2' selected>No</option>";	
														} 

												?>
												</select>
											</div>
										</div>


									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">Banner Image</label>
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<div class="custom-file">
													<input type="file" class="custom-file-input" name="bannerimg"  id="src" >
													<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
												</div>
											</div>
										</div>
									</div>
										<div class="form-group row">
											<label for="example-search-input" class="col-sm-2 col-form-label"></label>
											<div class="col-md-10 ">
												<div class="input-group mt-2">
													<img id="target" height="200" width="250" src="<?php echo base_url('uploads/images/destination/').$edit_travelstyle[0]->bannerimg; ?>">
												</div>
											</div>
										</div>
									<input type="text" name="id" value="<?php echo $edit_travelstyle[0]->id; ?>" hidden>
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

	$(document).ready(function() {
		$('.js-example-basic-multiple').select2();
	});
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
