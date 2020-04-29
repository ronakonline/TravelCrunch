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

									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Parent Destination</label>
										<div class="col-sm-10">
											<select class="form-control">
												<option>Select</option>
												<option>Asia</option>
												<option>South Africa</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input class="form-control" type="text" id="example-text-input">
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">Tag Line</label>
										<div class="col-sm-10">
											<input class="form-control" type="search"  id="example-search-input">
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">Banner Image</label>
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="inputGroupFile04">
													<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">About 1</label>
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<textarea class="form-control"></textarea>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">About 1 Image</label>
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="inputGroupFile04">
													<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">About 2</label>
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<textarea class="form-control"></textarea>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">About 2 Image</label>
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="inputGroupFile04">
													<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<button class="btn btn-primary">Submit</button>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div> <!-- end col -->
					</div> <!-- end row -->
				</div><!-- container -->

			</div> <!-- Page content Wrapper -->

		</div> <!-- content -->

		<footer class="footer">
			© 2018 Annex by Mannatthemes.
		</footer>

	</div>
	<!-- End Right content here -->

</div>
<!-- END wrapper -->


<?php $this->load->view('admin/js-links') ?>
</body>
</html>