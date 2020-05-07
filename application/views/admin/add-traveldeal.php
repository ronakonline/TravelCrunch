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
									<form  action="insert_traveldeal" method="post">
									<div class="form-group row">
										<div class="col-sm-6">
											<label for="example-text-input" class="">Parent</label>
											<select class="form-control" name="parent" id="parent" class="parent" required>
                                            	<option disabled selected>Select Parent</option>
												<?php foreach ($parents as $parent){ ?>
												<option value="<?php echo $parent->id?>"><?php echo $parent->name; ?></option>
												<?php } ?>
                                            </select>
										</div>

										<div class="col-sm-6">
											<label for="example-text-input" class="">Destination</label>
											
											<select class="col form-control" name="destination" id="destination" required>
												<option disabled selected>Select Parent First</option>
                                            </select>
										</div>
									</div>
									<div class="form-group">
										<label for="example-text-input" class="">Featured</label>
										<select class="form-control" name="featured">
											<option value="1">YES</option>
											<option value="2">No</option>
										</select>
									</div>
									<div class="form-group row">
										<div class="col-sm-6"> 
											<label for="example-text-input" class="">Offer</label>
											<div>
												<input class="form-control" type="text" name="offer" id="name" placeholder="In Percentage" required>
											</div>
										</div>
										<div class="col-sm-6"> 
											<label for="example-text-input" class="">Deal</label>
											<div>
												<input class="form-control" type="text" name="deal" id="name" placeholder="In Percentage" required>
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
	$(document).ready(function(){
		$('#parent').on('change', function(){
			var pid = $(this).val();
			if(pid) {
				$.ajax({
					type: 'POST',
					url: '<?php echo base_url();?>admin/Tour/getdestinationsgeneral',
					data: 'pid=' + pid,
					success: function (html) {
						$('#destination').html(html);

					}
				});
			}
		});
		// $('#destination1').on('change', function(){
		// 	var pid = $(this).val();
		// 	if(pid) {
		// 		$.ajax({
		// 			type: 'POST',
		// 			url: 'Tour/gettours',
		// 			data: 'pid=' + pid,
		// 			success: function (html) {
		// 				$('#tour1').html(html);

		// 			}
		// 		});
		// 	}
		// });
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
