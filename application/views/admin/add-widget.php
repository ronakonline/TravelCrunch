<!DOCTYPE html>
<html>
    <head>
		<?php $this->load->view('admin/css-links') ?>
		<!-- Dropzone css -->
        <link href="<?php echo base_url();?>assets/admin/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/admin/plugins/dropify/css/dropify.min.css" rel="stylesheet">
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
                                                        <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">Packing</a>
                                                    </li>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#seo" role="tab">SEO Tags</a>
                                                    </li>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">Gallery</a>
                                                    </li>
                                                </ul>
                
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<form action="insert_overview" method="post">
                                                        		<div class="form-group">
																	<label>Destination</label>
																	<div>
																		<select class="form-control" name="destinationname" id="destinationname">
																			<?php 
																				foreach ($destinationname as $name) {
																					echo "<option value='$name->id'>$name->name</option>";
																				}
																			 ?>
																		</select>
																	</div>
																</div>
	                                                            <div class="form-group">
				                                                    <label>Overview-left</label>
				                                                    <div>
				                                                        <textarea class="form-control" rows="5" name="oleft" id="oleft" required></textarea>
				                                                    </div>
				                                                </div>
				                                                <div class="form-group">
				                                                    <label>Overview-right</label>
				                                                    <div>
				                                                        <textarea class="form-control" rows="5" name="oright" id="oright" required></textarea>
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
                                                            <form action="insert_faq" method="post">
                                                            	<div class="form-group">
																	<label>Destination</label>
																	<div>
																		<select class="form-control" name="destinationname" id="destinationname">
																			<?php 
																				foreach ($destinationname as $name) {
																					echo "<option value='$name->id'>$name->name</option>";
																				}
																			 ?>
																		</select>
																	</div>
																</div>
																<div id="faq">
		                                                            <div class="form-group">
					                                                    <label>Question</label>
					                                                    <div>
					                                                        <textarea class="form-control" rows="5" name="question[1]" id="qiestion1" required></textarea>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>Answer</label>
					                                                    <div>
					                                                        <textarea class="form-control" rows="5" name="answer[1]" id="amswer1" required></textarea>
					                                                    </div>
					                                            	</div>
				                                            	</div>
				                                            	<div id="faqlist"></div>
				                                            	<div class="form-group">
				                                                	<button class="btn btn-outline-primary" name="addfaq" id="addfaq" type="button">+</button>
					                                            </div>
				                                            
				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Submit</button>
				                                                </div>
			                                            	</form>
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane p-3" id="messages-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                            <form action="insert_packing" method="post">
                                                            	<div class="form-group">
																	<label>Destination</label>
																	<div>
																		<select class="form-control" name="destinationname" id="destinationname">
																			<?php 
																				foreach ($destinationname as $name) {
																					echo "<option value='$name->id'>$name->name</option>";
																				}
																			 ?>
																		</select>
																	</div>
																</div>
                                                            	<div class="row">
                                                            	<div class="col-sm-6">
                                                            		<h3 class="text-center">LEFT</h3>
		                                                            <div class="form-group">
					                                                    <label>1st Title</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Type something" name="title1" required />
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>Description</label>
					                                                    <div>
					                                                        <textarea class="form-control" rows="5" name="desc1" required></textarea>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>2nd Title</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Type something" name="title2" required/>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>Description</label>
					                                                    <div>
					                                                        <textarea class="form-control" rows="5" name="desc2" required></textarea>
					                                                    </div>
					                                                </div>
					                                            </div>

					                                            <div class="col-sm-6">
					                                            	<h3 class="text-center">RIGHT</h3>
					                                            	<div class="form-group">
					                                                    <label>1st List</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Type something" name="list1" id="list1" />
					                                                    </div>
					                                                </div>
					                                                <div class="form-group" id="1_list">
					                                                    <label>Item</label>
					                                                    <div>
					                                                        <input type="text" class="form-control name_list" name="item1[]" id="item" required>
																			<div id="itemlist1"></div>
					                                                        <button class="btn btn-outline-primary" name="add" id="add" type="button">+</button>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>2nd List</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Type something" name="list2" id="list2" required/>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>Item</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" name="item2[]" id="item" required>
					                                                        <div id="itemlist2"></div>
					                                                        <button class="btn btn-outline-primary" name="add1" id="add1" type="button">+</button>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>3rd List</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Type something" name="list3" id="list3" />
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>Item</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" name="item3[]" id="item" required>
					                                                        <div id="itemlist3"></div>
					                                                        <button class="btn btn-outline-primary" name="add2" id="add2" type="button">+</button>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>4th List</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Type something" name="list4" id="list4" required/>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>Item</label>
					                                                    <div>
					                                                        <input type="text" class="form-control"  name="item4[]" id="item" required>
					                                                    </div>
					                                                    <div id="itemlist4"></div>
					                                                        <button class="btn btn-outline-primary" name="add3" id="add3" type="button">+</button>
					                                                </div>
					                                            </div>
					                                        	</div>
				                                                <div class="text-center m-t-15">
					                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
					                                            </div>
			                                            	</form>
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane p-3" id="seo" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<form action="insert_seotags" method="post">
                                                        		<div class="form-group">
																	<label>Destination</label>
																	<div>
																		<select class="form-control" name="destinationname" id="destinationname">
																			<?php 
																				foreach ($destinationname as $name) {
																					echo "<option value='$name->id'>$name->name</option>";
																				}
																			 ?>
																		</select>
																	</div>
																</div>
				                                                <div class="form-group">
																	<label for="example-text-input" class="col col-form-label">Meta Title</label>
																	<input class="form-control" type="text" name="tags" id="tags">
																</div>
																<div class="form-group">
																	<label for="example-text-input" class="col col-form-label">Meta Description</label>
																	<textarea rows="5" class="form-control" name="metatags" id="metatags"></textarea>
																</div>
																<div class="form-group">
																	<label class="col col-form-label">KeyWords</label>
																	<textarea rows="5" class="form-control" name="keywords" id="keywords"></textarea>
																</div>
																<div class="form-group">
																	<label for="example-text-input" class="col col-form-label">Indexing</label>
																	<select class="form-control" name="indexing" id="indexing">
																		<option value="1" selected>Yes</option>
																		<option value="0">No</option>
																	</select>
																</div>

																<div class="form-group">
																	<label for="example-text-input" class="col col-form-label">Follow</label>
																	<select class="form-control" name="follow" id="follow">
																		<option value="1" selected>Yes</option>
																		<option value="0">No</option>
																	</select>
																</div>
				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Submit</button>
				                                                </div>
			                                            	</form>
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                                    	<form action="insert_gallery" method="post" enctype="multipart/form-data">
                                                    		<div class="form-group">
																<label>Destination</label>
																<div>
																	<select class="form-control" name="destination" id="destinationname">
																		<?php 
																			foreach ($destinationname as $name) {
																				echo "<option value='$name->id'>$name->name</option>";
																			}
																		 ?>
																	</select>
																</div>
															</div>

							                                    <div class="card m-b-30">
							                                        <div class="card-body">
							                                            
							                                            
							                                            <input type="file" name="files[]" id="input-file-now" class="dropify" multiple />
							                                        </div>
							                                    </div>
							    
					                                            <div class="text-center m-t-15">
					                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Upload Files</button>
					                                            </div>
			                                            </form>
                                                        
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

		<?php $this->load->view('admin/footer'); ?>

	</div>
	<!-- End Right content here -->

</div>
<!-- END wrapper -->

<!-- Dropzone js -->
		<?php $this->load->view('admin/js-links') ?>
		<script src="<?php echo base_url();?>assets/admin/plugins/dropzone/dist/dropzone.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/dropify/js/dropify.min.js"></script>
		<script>
			$(document).ready(function(){
				var i = 1;

				$('#addfaq').click(function(){
					i++;
					$('#faqlist').append('<div id="faq'+i+'"><div class="form-group"><label>Question</label><div><textarea class="form-control" rows="5" name="question['+i+']" id="question['+i+']" required></textarea></div></div><div class="form-group"><label>Answer</label><div><textarea class="form-control" rows="5" name="answer['+i+']" id="answer['+i+']" required></textarea><button class="btn btn-outline-danger mt-2" name="removefaq" id="removefaq" type="button" onclick="delete_faq('+i+')">-</button></div></div></div>');
				})
			});			

			function delete_faq(no){
				var object = document.getElementById('faq'+no);
				object.remove();
			}

			$(document).ready(function(){
				var i = 1;
				$('#add').click(function(){

					i++;
					$('#itemlist1').append('<input type="text" class="form-control name_list mt-3" name="item1[]" id="item'+i+'" required><button class="btn btn-outline-danger remove mb-2" name="remove" id="remove'+i+'" type="button" onclick="delete_item('+i+')">-</button>');
				});
				$('#add1').click(function(){

					i++;
					$('#itemlist2').append('<input type="text" class="form-control name_list mt-3" name="item2[]" id="item'+i+'" ><button class="btn btn-outline-danger remove mb-2" name="remove" id="remove'+i+'" type="button" onclick="delete_item('+i+')">-</button>');
				});
				$('#add2').click(function(){

					i++;
					$('#itemlist3').append('<input type="text" class="form-control name_list mt-3" name="item3[]" id="item'+i+'" ><button class="btn btn-outline-danger remove mb-2" name="remove" id="remove'+i+'" type="button" onclick="delete_item('+i+')">-</button>');
				});
				$('#add3').click(function(){

					i++;
					$('#itemlist4').append('<input type="text" class="form-control name_list mt-3" name="item4[]	" id="item'+i+'" ><button class="btn btn-outline-danger remove mb-2" name="remove" id="remove'+i+'" type="button" onclick="delete_item('+i+')">-</button>');
				});
			});

			function delete_item(no){
				var object = document.getElementById("item"+no);
				var object2 = document.getElementById("remove"+no);
				object.remove();
				object2.remove();
			}

        </script>
        <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
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
