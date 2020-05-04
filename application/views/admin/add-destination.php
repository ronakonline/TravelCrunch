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
										<li class="breadcrumb-item"><a href="#">Destination</a></li>
										<li class="breadcrumb-item"><a href="#">Add-Destination</a></li>

									</ol>
								</div>
								<h4 class="page-title">Add Destination</h4>
							</div>
						</div>
					</div>
					<!-- end page title end breadcrumb -->
					<div class="row">
						<div class="col-12">
							<div class="card m-b-30">
								<div class="card-body">
									<form action="insert_destination" method="post" enctype="multipart/form-data">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Parent Destination</label>
										<div class="col-sm-10">
											<select class="form-control" name="parentname" id="parentname">
												<?php 
													foreach ($parentname as $name) {
														echo "<option value='$name->id'>$name->name</option>";
													}
												 ?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input class="form-control" type="text" id="Destination_name" name="Destination_name">
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">Tag Line</label>
										<div class="col-sm-10">
											<input class="form-control" type="search"  id="tagline" name="tagline">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Featured</label>
										<div class="col-sm-10">
											<select class="form-control" name="featured" id="featured">
												<option value='1'>YES</option>
												<option value='2'>NO</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">Banner Image</label>
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="file1" name="file1">
													<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">About 1</label>
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<textarea class="form-control" name="about1" id="about1"></textarea>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">About 1 Image</label>
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="file2" name="file2">
													<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">About 2</label>
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<textarea class="form-control" name="about2" id="about2"></textarea>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">About 2 Image</label>
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="file3" name="file3">
													<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<button type="Submit" class="btn btn-primary">Submit</button>
											</div>
										</div>
									</div>
								</div>
								</form>
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