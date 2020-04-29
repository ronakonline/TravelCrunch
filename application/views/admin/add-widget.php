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
									<div class="col-md-12 col-lg-12">
                                        <div class="card m-b-30">
                                            <div class="card-body">
                
                                                <!-- <h4 class="mt-0 header-title">Justify Tabs</h4>
                                                <p class="text-muted m-b-30 font-14">Use the tab JavaScript plugin—include
                                                    it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                                                    file—to extend our navigational tabs and pills to create tabbable panes
                                                    of local content, even via dropdown menus.</p> -->
                
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-pills nav-justified" role="tablist">
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">Over View</a>
                                                    </li>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">FAQ</a>
                                                    </li>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">Messages</a>
                                                    </li>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">Settings</a>
                                                    </li>
                                                </ul>
                
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<form>
	                                                            <div class="form-group">
				                                                    <label>Overview-left</label>
				                                                    <div>
				                                                        <textarea required class="form-control" rows="5"></textarea>
				                                                    </div>
				                                                </div>
				                                                <div class="form-group">
				                                                    <label>Overview-right</label>
				                                                    <div>
				                                                        <textarea required class="form-control" rows="5"></textarea>
				                                                    </div>
				                                                </div>
				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Submit</button>
				                                                </div>
			                                            	</form>
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                            <form>
	                                                            <div class="form-group">
				                                                    <label>Question</label>
				                                                    <div>
				                                                        <textarea required class="form-control" rows="5"></textarea>
				                                                    </div>
				                                                </div>
				                                                <div class="form-group">
				                                                    <label>Answer</label>
				                                                    <div>
				                                                        <textarea required class="form-control" rows="5"></textarea>
				                                                    </div>
				                                                </div>
				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Submit</button>
				                                                </div>
			                                            	</form>
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane p-3" id="messages-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                            <form>
	                                                            <div class="form-group">
				                                                    <label>Question</label>
				                                                    <div>
				                                                        <textarea required class="form-control" rows="5"></textarea>
				                                                    </div>
				                                                </div>
				                                                <div class="form-group">
				                                                    <label>Answer</label>
				                                                    <div>
				                                                        <textarea required class="form-control" rows="5"></textarea>
				                                                    </div>
				                                                </div>
				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Submit</button>
				                                                </div>
			                                            	</form>
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                            <form>
	                                                            <div class="form-group">
				                                                    <label>Question</label>
				                                                    <div>
				                                                        <textarea required class="form-control" rows="5"></textarea>
				                                                    </div>
				                                                </div>
				                                                <div class="form-group">
				                                                    <label>Answer</label>
				                                                    <div>
				                                                        <textarea required class="form-control" rows="5"></textarea>
				                                                    </div>
				                                                </div>
				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Submit</button>
				                                                </div>
			                                            	</form>
                                                        </p>
                                                    </div>

                                                </div>
                
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