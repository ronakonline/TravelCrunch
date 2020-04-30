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
										<li class="breadcrumb-item"><a href="#">Add-Parent</a></li>

									</ol>
								</div>
								<h4 class="page-title">Add Parent</h4>
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
										<label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input class="form-control" type="text" name="name" id="name">
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">Banner Image</label>
										<div class="col-md-10 ">
											<div class="input-group mt-2">
												<div class="custom-file">
													<input type="file" class="custom-file-input" name="bannerimg" >
													<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
												</div>
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
