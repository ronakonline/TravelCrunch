<!DOCTYPE html>
<html>
    <head>
		<?php $this->load->view('admin/css-links') ?>
		<!-- Dropzone css -->
        <link href="<?php echo base_url();?>assets/admin/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/admin/plugins/dropify/css/dropify.min.css" rel="stylesheet">
        <!-- Summernote css -->
        <link href="<?php echo base_url();?>assets/admin/plugins/summernote/summernote-bs4.css" rel="stylesheet" />
	</head>

	<script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
	<script>
		//Ajax for deleting Image

		function deleteimg(id) {
			var pid = id;
			if(pid) {
				$.ajax({
					type: 'POST',
					url: '<?php echo base_url('admin/Tour/delete_tgallery'); ?>',
					data: 'id=' + pid,
					success: function (html) {
						location.reload();
					}
				});

			}
		}

	</script>
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
										<li class="breadcrumb-item"><a href="#">Tour</a></li>
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
                                                        <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">General</a>
                                                    </li>

                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">OverView</a>
                                                    </li>

                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#itinerary" role="tab">Itinerary</a>
                                                    </li>

                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#details" role="tab">Details</a>
                                                    </li>

                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">FAQ</a>
                                                    </li>

                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">Gallery</a>
                                                    </li>
                                                </ul>
                
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<form action="<?php echo base_url('admin/Tour/update_tgeneral'); ?>" method="post" enctype="multipart/form-data">
															<input type="text" value="<?php echo $tour[0]->id; ?>" name="id" hidden>
                                                        		<div class="form-group">
																	<label>Title</label>
																	<div>
																		<input type="text" class="form-control" placeholder="Tour Title" name="name" value="<?php echo $tour[0]->title; ?>" required/>
																	</div>
																</div>
				                                                <div class="row">
		                                                            <div class="form-group col-sm-6">
					                                                    <label>Form</label>
					                                                    <div>
					                                                        <input type="text" class="form-control"  name="from" value="<?php echo $tour[0]->tfrom; ?>" required />
					                                                    </div>
					                                                </div>
					                                                <div class="form-group col-sm-6">
					                                                    <label>To</label>
					                                                    <div>
					                                                        <input type="text" class="form-control"  name="to" value="<?php echo $tour[0]->tto; ?>" required/>
					                                                    </div>
					                                                </div>
				                                                </div>
				                                                <div class="form-group ">
																	<label for="example-search-input" class="">Banner Image</label>
																	
																	<div class="input-group mt-2">
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" name="file1"  id="src" >
																			<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
																		</div>
																	</div>
																</div>
																<div class="form-group ">
																	<label for="example-search-input" class=""></label>
																		<div class="input-group mt-2">
																			<img id="target" height="200" width="250" src="<?php echo base_url('uploads/images/parent/').$tour[0]->bannerimg; ?>">
																		</div>
																</div>
																<div class="row">
		                                                            <div class="form-group col-sm-6">
					                                                    <label>Days</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Total Days" name="days" value="<?php echo $tour[0]->days; ?>" required/>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group col-sm-6">
					                                                    <label>Price</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Tour Price" name="price" value="<?php echo $tour[0]->price; ?>" required/>
					                                                    </div>
					                                                </div>
				                                                </div>
				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Update</button>
				                                                </div>
			                                            	</form>
                                                        </p>
                                                    </div><!-- General -->


                                                    <div class="tab-pane p-3" id="messages-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<form action="<?php echo base_url('admin/Tour/update_toverview'); ?>" method="post">
															<input type="text" value="<?php echo $tour[0]->id; ?>" name="id" hidden>
				                                                <div class="row">
									                                <div class="col-12">
									                                    <div class=" m-b-30">
								                                            <h4 class="mt-0 header-title">Over View</h4>
								                                            <!-- <p class="text-muted m-b-30 font-14">Super simple wysiwyg editor on bootstrap</p> -->
								            
								                                            <textarea class="summernote" name="overview"><?php echo $tour[0]->overview; ?></textarea>
									                                    </div>
									                                </div> <!-- end col -->
									                            </div> <!-- end row -->

				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Update</button>
				                                                </div>
			                                            	</form>
                                                        </p>
                                                    </div><!-- Over View -->


                                                    <div class="tab-pane p-3" id="itinerary" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<form action="<?php echo base_url('admin/Tour/update_titinerary'); ?>" method="post">
															<input type="text" value="<?php echo $tour[0]->id; ?>" name="tour" hidden>
															<div id="dayslist">
																<?php $i=0; foreach ($itinerary as $row){ ?>
																	<?php if($i==0){?>
																	<div id="itinerary<?php echo $i; ?>">
																		<div class="form-group">
																			<label>Title</label>
																			<div>
																				<input type="text" class="form-control" placeholder="Title" name="daytitle[]" id="daytitle1" value="<?php echo $row->title; ?>" required/>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-12">
																				<div class=" m-b-30">
																					<h4 class="mt-0 header-title">Description</h4>
																					<textarea class="summernote" name="daydetail[]" id="daydetail1" required><?php echo $row->descr; ?></textarea>
																				</div>
																			</div> <!-- end col -->
																		</div> <!-- end row -->
																	</div>
																	<?php }else{ ?>
																		<div id="itinerary<?php echo $i; ?>">
																			<div class="form-group">
																				<label>Title</label>
																				<div>
																					<input type="text" class="form-control" placeholder="Title" name="daytitle[]" id="daytitle1" value="<?php echo $row->title; ?>" required/>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<div class=" m-b-30">
																						<h4 class="mt-0 header-title">Description</h4>


																						<textarea class="summernote" name="daydetail[]" id="daydetail1" required><?php echo $row->descr; ?></textarea>
																						<button class="btn btn-outline-danger mt-2" name="removefaq" id="removefaq" type="button" onclick="delete_days('<?php echo $i; ?>')">-</button>
																					</div>
																				</div> <!-- end col -->
																			</div> <!-- end row -->
																		</div>
																	<?php } ?>
																	<?php $i+=1; } ?>
									                            </div>

									                            <div class="form-group">
				                                                	<button class="btn btn-outline-primary" name="adddays" id="adddays" type="button">+</button>
					                                            </div>

				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Submit</button>
				                                                </div>



			                                            	</form>
                                                        </p>
                                                    </div><!-- Itinerary -->
                                                    

                                                    <div class="tab-pane p-3" id="details" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<form action="<?php echo base_url('admin/Tour/update_tdetails'); ?>" method="post">
															<input type="text" value="<?php echo $tour[0]->id; ?>" name="id" hidden>

				                                                <div class="row">
									                                <div class="col-12">
									                                    <div class=" m-b-30">
								                                            <h4 class="mt-0 header-title">Details</h4>
								                                            <!-- <p class="text-muted m-b-30 font-14">Super simple wysiwyg editor on bootstrap</p> -->
								            
								                                            <textarea class="summernote" name="details"><?php echo $tour[0]->details; ?></textarea>

																		</div>
									                                </div> <!-- end col -->
									                            </div> <!-- end row -->
				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Update</button>
				                                                </div>
			                                            	</form>
                                                        </p>
                                                    </div><!-- Details -->



                                                    <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
															<form action="<?php echo base_url('admin/Tour/update_tfaq'); ?>" method="post">
																<input type="text" value="<?php echo $tour[0]->id; ?>" name="tour" hidden>
																	<div id="faqlist">
																		<?php $i=0; foreach ($faq as $row){ ?>
																			<div id="faq<?php echo $i; ?>">
																				<?php if($i==0){ ?>
																				<div class="form-group">
																					<label>Question</label>
																					<div>
																						<textarea class="form-control" rows="5" name="question[]" id="qiestion1" required><?php echo $row->question; ?></textarea>
																					</div>
																				</div>
																				<div class="form-group">
																					<label>Answer</label>
																					<div>
																						<textarea class="form-control" rows="5" name="answer[]" id="amswer1" required><?php echo $row->answer; ?></textarea>
																					</div>
																				</div>
																				<?php }else{ ?>
																				<div class="form-group">
																					<label>Question</label>
																					<div>
																						<textarea class="form-control" rows="5" name="question[]" id="qiestion1" required><?php echo $row->question; ?></textarea>
																					</div>
																				</div>
																				<div class="form-group">
																					<label>Answer</label>
																					<div>
																						<textarea class="form-control" rows="5" name="answer[]" id="amswer1" required><?php echo $row->answer; ?></textarea>
																						<button class="btn btn-outline-danger mt-2" name="removefaq" id="removefaq" type="button" onclick="delete_faq('+i+')">-</button>
																					</div>
																				</div>
																				<?php } ?>
				                                            				</div>
																		<?php $i+=1;} ?>
																	</div>
																		<div class="form-group">
																			<button class="btn btn-outline-primary" name="addfaq" id="addfaq" type="button">+</button>
																		</div>

																		<div class="form-group">
																			<button type="submit" class="btn btn-primary">Update</button>
																		</div>
			                                            			</form>
                                                   	    			 </p>
                                                   	 </div><!-- FAQ -->
                                                    

                                                    <div class="tab-pane p-3" id="settings-1" role="tabpanel">
														<?php for($i=0; $i<count($img); $i++) { ?>
															<form action="<?php echo base_url('admin/Tour/update_tgallery'); ?>" method="post" enctype="multipart/form-data">
																<div class="row">
																	<div class="col-xl-6">
																		<div class="card m-b-30">
																			<div class="card-body">
																				<input type="text" value="<?php echo $img[$i]->id; ?>" name="id" hidden>
																				<input type="text" value="<?php echo $tour[0]->id; ?>" name="tid" hidden>
																				<input type="file" name="img" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url('uploads/images/gallery/').$img[$i]->img; ?>" />
																				<div class="form-group m-t-15">
																					<div>
																						<button type="submit" class="btn btn-primary waves-effect waves-light">
																							Update
																						</button>
																						<button onclick="deleteimg(<?php echo $img[$i]->id; ?>);" type="button" class="btn btn-danger waves-effect m-l-5">
																							Delete
																						</button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</form>
														<?php } ?>

                                           
                                                    </div><!-- Gallery -->

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
        <!--Summernote js-->
        <script src="<?php echo base_url();?>assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
		<script>

			$(document).ready(function(){
				var i = <?php echo count($itinerary)+1; ?>

				$('#adddays').click(function(){
					i++;
					$('#dayslist').append('<div id="itinerary'+i+'"><div class="form-group"><label>Title</label><div><input type="text" class="form-control" placeholder="Title" name="daytitle[]" id="daytitle['+i+']" /></div></div><div class="row"><div class="col-12"><div class=" m-b-30"><h4 class="mt-0 header-title">Description</h4><textarea class="summernotenew" name="daydetail[]" id="daydetail['+i+']"></textarea><button class="btn btn-outline-danger mt-2" name="removefaq" id="removefaq" type="button" onclick="delete_days('+i+')">-</button></div></div></div></div>');
					$('.summernotenew').summernote({
						height: 300,
						minHeight: null,
						maxHeight: null,
						focus: true
					});
				});

			});

			function delete_days(no){
				var object = document.getElementById('itinerary'+no);
				object.remove();
			}

			$(document).ready(function(){
				var i = 1;

				$('#addfaq').click(function(){
					i++;
					$('#faqlist').append('<div id="faq'+i+'"><div class="form-group"><label>Question</label><div><textarea class="form-control" rows="5" name="question[]" id="question['+i+']" required></textarea></div></div><div class="form-group"><label>Answer</label><div><textarea class="form-control" rows="5" name="answer[]" id="answer['+i+']" required></textarea><button class="btn btn-outline-danger mt-2" name="removefaq" id="removefaq" type="button" onclick="delete_faq('+i+')">-</button></div></div></div>');
				});


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

	var src = document.getElementById("src");
	var target = document.getElementById("target");
	showImage(src,target);


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
