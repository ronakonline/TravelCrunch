<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?php echo $title; ?></title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url();?>assets/admin/images/favicon.ico">
        <link href="<?php echo base_url();?>assets/admin/plugins/morris/morris.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/admin/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet" type="text/css">
        <!-- DataTables -->
        <link href="<?php echo base_url();?>assets/admin/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/admin/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url();?>assets/admin/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

            <!-- Begin page -->
            <div id="wrapper">

                <?php $this->load->view('admin/aside'); ?>

    	        <!-- Startright Content here -->

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
                                            <table id="datatable" class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Parent Name</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>Asia</td>
                                                    <td>Tiger Nixon</td>
                                                    <td><li class="fa fa-edit p-2 text-info" style="font-size: 30px"></li><li class="fa fa-trash p-2 text-danger" style="font-size: 30px"></li></td>
                                                </tr>
                                                <tr>
                                                    <td>USA</td>
                                                    <td>Garrett Winters</td>
                                                    <td><li class="fa fa-edit p-2 text-info" style="font-size: 30px"></li><li class="fa fa-trash p-2 text-danger" style="font-size: 30px"></li></td>
                                                </tr>
                                                <tr>
                                                    <td>Australia</td>
                                                    <td>Ashton Cox</td>
                                                   <td><li class="fa fa-edit p-2 text-info" style="font-size: 30px"></li><li class="fa fa-trash p-2 text-danger" style="font-size: 30px"></li></td>
                                                </tr>
                                                <tr>
                                                    <td>North America</td>
                                                    <td>Cedric Kelly</td>
                                                    <td><li class="fa fa-edit p-2 text-info" style="font-size: 30px"></li><li class="fa fa-trash p-2 text-danger" style="font-size: 30px"></li></td>
                                                </tr>
                                                <tr>
                                                    <td>Asia</td>
                                                    <td>Airi Satou</td>
                                                    <td><li class="fa fa-edit p-2 text-info" style="font-size: 30px"></li><li class="fa fa-trash p-2 text-danger" style="font-size: 30px"></li></td>
                                                </tr>
                                                <tr>
                                                    <td>Australia</td>
                                                    <td>Brielle Williamson</td>
                                                    <td><li class="fa fa-edit p-2 text-info" style="font-size: 30px"></li><li class="fa fa-trash p-2 text-danger" style="font-size: 30px"></li></td>
                                                </tr>
                                                <tr>
                                                    <td>North America</td>
                                                    <td>Herrod Chandler</td>
                                                    <td><li class="fa fa-edit p-2 text-info" style="font-size: 30px"></li><li class="fa fa-trash p-2 text-danger" style="font-size: 30px"></li></td>
                                                </tr>
                                                <tr>
                                                    <td>Asia</td>
                                                    <td>Rhona Davidson</td>
                                                    <td><li class="fa fa-edit p-2 text-info" style="font-size: 30px"></li><li class="fa fa-trash p-2 text-danger" style="font-size: 30px"></li></td>
                                                </tr>
                                                <tr>
                                                    <td>Australia</td>
                                                    <td>Colleen Hurst</td>
                                                    <td><li class="fa fa-edit p-2 text-info" style="font-size: 30px"></li><li class="fa fa-trash p-2 text-danger" style="font-size: 30px"></li></td>
                                                </tr>
                                                <tr>
                                                    <td>Asia</td>
                                                    <td>Sonya Frost</td>
                                                    <td><li class="fa fa-edit p-2 text-info" style="font-size: 30px"></li><li class="fa fa-trash p-2 text-danger" style="font-size: 30px"></li></td>
                                                </tr>
                                                <tr>
                                                    <td>North America</td>
                                                    <td>Jena Gaines</td>
                                                    <td><li class="fa fa-edit p-2 text-info" style="font-size: 30px"></li><li class="fa fa-trash p-2 text-danger" style="font-size: 30px"></li></td>
                                                </tr>
                                                <tr>
                                                    <td>Australia</td>
                                                    <td>Quinn Flynn</td>
                                                    <td><li class="fa fa-edit p-2 text-info" style="font-size: 30px"></li><li class="fa fa-trash p-2 text-danger" style="font-size: 30px"></li></td>
        										</tr>
                                                </tbody>
                                            </table>
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
	    <!-- jQuery  -->
        <script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/detect.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/fastclick.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/waves.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/jquery.scrollTo.min.js"></script>

        <!-- Required datatable js -->
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
 
         <!-- Datatable init js -->
         <script src="<?php echo base_url();?>assets/admin/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>assets/admin/js/app.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable2').DataTable();  
            } );
        </script>
    </body>
</html>
