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
										<li class="breadcrumb-item"><a href="#">SEO</a></li>
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
									<form method="post" action="inserttravelstyle" enctype="multipart/form-data">

										<div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Page</label>
                                            <div class="col-md-10 ">
                                                <select class="form-control" name="destinationname" id="destinationname">
                                                	<option></option>
                                                </select>
                                            </div>
                                        </div>
										

										<div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tags</label>
                                            <div class="col-md-10 ">
                                                <textarea class="form-control" rows="5" name="question[1]" id="qiestion1" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Meta Tags</label>
                                            <div class="col-md-10 ">
                                                <textarea class="form-control" rows="5" name="question[1]" id="qiestion1" required></textarea>
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
