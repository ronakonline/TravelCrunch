<!DOCTYPE html>
<html>
    <head>
		<?php $this->load->view('admin/css-links') ?>
		<!-- Summernote css -->
        <link href="<?php echo base_url();?>assets/admin/plugins/summernote/summernote-bs4.css" rel="stylesheet" />
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
									<form method="post" action="update_homepage" enctype="multipart/form-data">
										<div class="text-center"><h3>Slider </h3></div>
										<div class="form-group row">
											<label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
											<div class="col-sm-10">
												<input class="form-control" type="text" name="title" id="name" value="<?php echo $sitesetting[0]->title1; ?>" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="example-text-input" class="col-sm-2 col-form-label">Tagline</label>
											<div class="col-sm-10">
												<input class="form-control" type="text" name="tagline" id="name" value="<?php echo $sitesetting[0]->tagline1; ?>" required>
											</div>
										</div>
											
										<div class="form-group row">
											<label for="example-search-input" class="col-sm-2 col-form-label">Image</label>
											<div class="col-md-10 ">
												<div class="input-group mt-2">
													<div class="custom-file">
														<input type="file" class="custom-file-input" name="file1"  id="src" >
														<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="example-search-input" class="col-sm-2 col-form-label"></label>
											<div class="col-md-10 ">
												<div class="input-group mt-2">
													<img id="target" height="200" width="250" src="<?php echo base_url('assets/images/slider/').$sitesetting[0]->slide1; ?>">
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="example-search-input" class="col-sm-2 col-form-label">Image</label>
											<div class="col-md-10 ">
												<div class="input-group mt-2">
													<div class="custom-file">
														<input type="file" class="custom-file-input" name="file2"  id="src1" >
														<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="example-search-input" class="col-sm-2 col-form-label"></label>
											<div class="col-md-10 ">
												<div class="input-group mt-2">
													<img id="target1" height="200" width="250" src="<?php echo base_url('assets/images/slider/').$sitesetting[0]->slide2; ?>">
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="example-search-input" class="col-sm-2 col-form-label">Image</label>
											<div class="col-md-10 ">
												<div class="input-group mt-2">
													<div class="custom-file">
														<input type="file" class="custom-file-input" name="file3"  id="src2" >
														<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="example-search-input" class="col-sm-2 col-form-label"></label>
											<div class="col-md-10 ">
												<div class="input-group mt-2">
													<img id="target2" height="200" width="250" src="<?php echo base_url('assets/images/slider/').$sitesetting[0]->slide3; ?>">
												</div>
											</div>
										</div>

										<div class="text-left">
											<button type="submit" class="btn btn-primary">Update</button>
										</div>
									</form>

								</div>
							</div>
							<div class="card m-b-30">
								<div class="card-body">
									<div class="text-center"><h3>Features Division</h3></div><br>
									<form method="post" action="update_features" enctype="multipart/form-data">
										<div class="form-group row">
											<div class="col-sm-6">
												<label for="example-text-input" class="col col-form-label">Title</label>
												<input class="form-control" type="text" name="ftitle1" id="telno" value="<?php echo $sitesetting[0]->ftitle1; ?>" required>
											</div>
											<div class="col-sm-6">
												<label for="example-text-input" class="col col-form-label">Feature 1</label>
												<input class="form-control" type="text" name="feature1" id="name" value="<?php echo $sitesetting[0]->feature1; ?>" required>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<label for="example-text-input" class="col col-form-label">Title</label>
												<input class="form-control" type="text" name="ftitle2" id="name" value="<?php echo $sitesetting[0]->ftitle2; ?>" required>
											</div>
											<div class="col-sm-6">
												<label for="example-text-input" class="col col-form-label">Feature 2</label>
												<input class="form-control" type="text" name="feature2" id="feature2" value="<?php echo $sitesetting[0]->feature2; ?>" required>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col col-form-label">Title</label>
												<input class="form-control" type="text" name="ftitle3" id="ftitle3" value="<?php echo $sitesetting[0]->ftitle3; ?>" required>
											</div>
											<div class="col-sm-6">
												<label for="example-text-input" class="col col-form-label">Feature 3</label>
												<input class="form-control" type="text" name="feature3" id="name" value="<?php echo $sitesetting[0]->feature3; ?>" required>
											</div>
										</div>

										<div class="text-left">
											<button type="submit" class="btn btn-primary">Update</button>
										</div>
									</form>
								</div>
							</div>

							<div class="card m-b-30">
								<div class="card-body">
									<div class="text-center"><h3>Division</h3></div>
									<form method="post" action="update_homediv" enctype="multipart/form-data">

										<div class="form-group row">
											<label for="example-search-input" class="col-sm-2 col-form-label">Banner Image</label>
											<div class="col-md-10 ">
												<div class="input-group mt-2">
													<div class="custom-file">
														<input type="file" class="custom-file-input" name="bannerimg"  id="src3" >
														<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="example-search-input" class="col-sm-2 col-form-label"></label>
											<div class="col-md-10 ">
												<div class="input-group mt-2">
													<img id="target3" height="200" width="250" src="<?php echo base_url('assets/images/placeholder/').$sitesetting[0]->homedivimg; ?>">
												</div>
											</div>
										</div>

										<div class="form-group row">
			                                <label class="col-sm-2 col-form-label">Note</label>
			                                <div class="col">    
			                                	<div class="input-group mt-2">
		                                            <textarea class="summernote" name="homedivtext"><?php echo $sitesetting[0]->homedivtext; ?></textarea>
		                                        </div>
			                                </div>
			                            </div> <!-- end row -->
										
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
<!--Summernote js-->
<script src="<?php echo base_url();?>assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function(){
        $('.summernote').summernote({
            height: 300,                 
            minHeight: null,             
            maxHeight: null,             
            focus: true                 
        });

    });
</script>
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
	function showImage1(src1,target1) {
		var fr=new FileReader();
		// when image is loaded, set the src of the image where you want to display it
		fr.onload = function(e) { target1.src = this.result; };

		src1.addEventListener("change",function() {
			// fill fr with image data
			fr.readAsDataURL(src1.files[0]);
			target1.style.display="block";
		});
	}
	function showImage2(src2,target2) {
		var fr=new FileReader();
		// when image is loaded, set the src of the image where you want to display it
		fr.onload = function(e) { target2.src = this.result; };

		src2.addEventListener("change",function() {
			// fill fr with image data
			fr.readAsDataURL(src2.files[0]);
			target.style.display="block";
		});
	}
	function showImage3(src3,target3) {
		var fr=new FileReader();
		// when image is loaded, set the src of the image where you want to display it
		fr.onload = function(e) { target3.src = this.result; };

		src3.addEventListener("change",function() {
			// fill fr with image data
			fr.readAsDataURL(src3.files[0]);
			target.style.display="block";
		});
	}

	var src = document.getElementById("src");
	var target = document.getElementById("target");
	showImage(src,target);
	var src1 = document.getElementById("src1");
	var target1 = document.getElementById("target1");
	showImage1(src1,target1);
	var src2 = document.getElementById("src2");
	var target2 = document.getElementById("target2");
	showImage2(src2,target2);
	var src3 = document.getElementById("src3");
	var target3 = document.getElementById("target3");
	showImage3(src3,target3);

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
