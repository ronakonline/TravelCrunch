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
                                                        <a class="nav-link active" data-toggle="tab" href="#general" role="tab">General</a>
                                                    </li>
													<?php if(count($dest['overview'])>=1){ ?>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#home-1" role="tab">Over View</a>
                                                    </li>
													<?php } ?>
													<?php if(count($dest['faq'])>=1){ ?>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">FAQ</a>
                                                    </li>
													<?php } ?>
													<?php if(count($dest['packing'])>=1){ ?>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">Packing</a>
                                                    </li>
													<?php } ?>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#seo" role="tab">SEO Tags</a>
                                                    </li>
													<?php if(count($dest['img'])>=1){ ?>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">Gallery</a>
                                                    </li>
													<?php } ?>
                                                </ul>
                
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                	<div class="tab-pane active p-3" id="general" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<form action="<?php echo base_url('admin/Destination/update_dgeneral'); ?>" method="post" enctype="multipart/form-data">
																
																<div class="form-group row">
																	<label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
																	<div class="col-sm-10">
																		<input class="form-control" type="text" id="Destination_name" name="name" value="<?php echo $dest[0]->name; ?>" required>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="example-search-input" class="col-sm-2 col-form-label">Tag Line</label>
																	<div class="col-sm-10">
																		<input class="form-control" type="search"  id="tagline" name="tagline" value="<?php echo $dest[0]->tagline ?>" required>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-2 col-form-label">Featured</label>
																	<div class="col-sm-10">
																		<select class="form-control" name="featured" id="featured" required>
																			<?php 
																			if ($dest[0]->featured == 1) {
																				echo "<option value='1' selected>Yes</option>
																					<option value='2'>No</option>";
																			}
																			else{
																				echo "<option value='1'>Yes</option>
																					<option value='2' selected>No</option>";
																			} ?>
																		</select>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="example-search-input" class="col-sm-2 col-form-label">Banner Image</label>
																	<div class="col-md-10 ">
																		<div class="input-group mt-2">
																			<div class="custom-file">
																				<input type="file" class="custom-file-input" id="src" name="file1" >
																				<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="example-search-input" class="col-sm-2 col-form-label"></label>
																	<div class="col-md-10 ">
																		<div class="input-group mt-2">
																			<img id="target" height="200" width="250" src="<?php echo base_url('uploads/images/destination/').$dest[0]->banner; ?>">
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="example-search-input" class="col-sm-2 col-form-label">About 1</label>
																	<div class="col-md-10 ">
																		<div class="input-group mt-2">
																			<textarea rows="3" class="form-control" name="about1" id="about1" required><?php echo $dest[0]->about1 ?></textarea>
																		</div>
																	</div>
																</div>
																
																<div class="form-group row">
																	<label for="example-search-input" class="col-sm-2 col-form-label">About 1 Image</label>
																	<div class="col-md-10 ">
																		<div class="input-group mt-2">
																			<div class="custom-file">
																				<input type="file" class="custom-file-input" id="src2" name="file2" >
																				<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="example-search-input" class="col-sm-2 col-form-label"></label>
																	<div class="col-md-10 ">
																		<div class="input-group mt-2">
																			<img id="target2" height="200" width="250" src="<?php echo base_url('uploads/images/destination/').$dest[0]->about1_image; ?>">
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="example-search-input" class="col-sm-2 col-form-label">About 2</label>
																	<div class="col-md-10 ">
																		<div class="input-group mt-2">
																			<textarea rows="3" class="form-control" name="about2" id="about2"><?php echo $dest[0]->about2 ?></textarea>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="example-search-input" class="col-sm-2 col-form-label">About 2 Image</label>
																	<div class="col-md-10 ">
																		<div class="input-group mt-2">
																			<div class="custom-file">
																				<input type="file" class="custom-file-input" id="src3" name="file3">
																				<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="example-search-input" class="col-sm-2 col-form-label"></label>
																	<div class="col-md-10 ">
																		<div class="input-group mt-2">
																			<img id="target3" height="200" width="250" src="<?php echo base_url('uploads/images/destination/').$dest[0]->about2_image; ?>">
																		</div>
																	</div>
																</div>
															<input type="text" value="<?php echo $dest[0]->id; ?>" name="id" hidden>
																<div class="form-group row">
																	<div class="col-md-10 ">
																		<div class="input-group mt-2">
																			<button type="Submit" class="btn btn-primary">Update</button>
																		</div>
																	</div>
																</div>
															</form>
                                                        </p>
                                                    </div>
													<?php if(count($dest['overview'])>=1){ ?>
                                                    <div class="tab-pane p-3" id="home-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<form action="<?php echo base_url('admin/Destination/update_doverview'); ?>" method="post">
																<?php foreach ($dest['overview'] as $ov) {

																} ?>
	                                                            <div class="form-group">
				                                                    <label>Overview-left</label>
				                                                    <div>
				                                                        <textarea class="form-control" rows="5" name="oleft" id="oleft" required><?php echo $ov->oleft; ?></textarea>
				                                                    </div>
				                                                </div>
				                                                <div class="form-group">
				                                                    <label>Overview-right</label>
				                                                    <div>
				                                                        <textarea class="form-control" rows="5" name="oright" id="oright" required><?php echo $ov->oright; ?></textarea>
				                                                    </div>
				                                                </div>
															<input type="text" value="<?php echo $dest[0]->id; ?>" name="id" hidden>
				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Update</button>
				                                                </div>
			                                            	</form>
                                                        </p>
                                                    </div>
													<?php } ?>
													<?php if(count($dest['faq'])>=1){ ?>
                                                    <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                            <form action="<?php echo base_url('admin/Destination/update_dfaq'); ?>" method="post">
																<div id="faqlist">
																	<?php $i=1; foreach ($dest['faq'] as $row) { ?>
																		<input type="text" value="<?php echo $dest[0]->id; ?>" name="did" hidden>
																	<div id="faq<?php echo $i;?>">
			                                                            <div class="form-group">
						                                                    <label>Question</label>
						                                                    <div>
						                                                        <textarea class="form-control" rows="5" name="question[]" id="qiestion<?php echo $i;?>" required><?php echo $row->question; ?></textarea>
						                                                    </div>
						                                                </div>
						                                                <div class="form-group">
						                                                    <label>Answer</label>
						                                                    <div>
						                                                        <textarea class="form-control" rows="5" name="answer[]" id="amswer<?php echo $i;?>" required><?php echo $row->answer; ?></textarea>
																				<button class="btn btn-outline-danger mt-2" name="removefaq" id="removefaq" type="button" onclick="delete_faq('<?php echo $i;?>')">-</button>
						                                                    </div>
						                                            	</div>
																	</div>
																	<?php $i+=1; } ?>
				                                            	</div>
				                                            	<div class="form-group">
				                                                	<button class="btn btn-outline-primary" name="addfaq" id="addfaq" type="button">+</button>
					                                            </div>
				                                            
				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Update</button>
				                                                </div>
			                                            	</form>
                                                        </p>
                                                    </div>
													<?php } ?>
													<?php if(count($dest['packing'])>=1){ ?>
                                                    <div class="tab-pane p-3" id="messages-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                            <form action="insert_packing" method="post">
                                                            	<div class="row">
                                                            	<div class="col-sm-6">
                                                            		<h3 class="text-center">LEFT</h3>
		                                                            <div class="form-group">
					                                                    <label>1st Title</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Type something" name="title1" value="<?php echo $dest['packing'][0]->title1; ?>" required />
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>Description</label>
					                                                    <div>
					                                                        <textarea class="form-control" rows="5" name="desc1" required><?php echo $dest['packing'][0]->desc1; ?></textarea>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>2nd Title</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Type something" name="title2" value="<?php echo $dest['packing'][0]->title2; ?>" required/>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>Description</label>
					                                                    <div>
					                                                        <textarea class="form-control" rows="5" name="desc2" required><?php echo $dest['packing'][0]->desc2; ?></textarea>
					                                                    </div>
					                                                </div>
					                                            </div>

					                                            <div class="col-sm-6">
					                                            	<h3 class="text-center">RIGHT</h3>
					                                            	<div class="form-group">
					                                                    <label>1st List</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Type something" name="list1" id="list1" value="<?php echo $dest['packing'][0]->list1; ?>" />
					                                                    </div>
					                                                </div>
					                                                <div class="form-group" id="1_list">
					                                                    <label>Item</label>
					                                                    <div>
																			<?php
																			$list = trim($dest['packing'][0]->item1,"[]");
																			$list1 = explode(",",$list); ?>
																			<?php $i=0; foreach ($list1 as $row){ ?>
					                                                       		 <input type="text" class="form-control name_list" name="item1[]" id="item<?php echo $i;?>" value="<?php echo $row; ?>" required>
																				 <?php if(count($list1)!=1){ ?>
																				 <button class="btn btn-outline-danger remove mb-2" name="remove" id="remove<?php echo $i;?>" type="button" onclick="delete_item('<?php echo $i;?>')">-</button>
																			<?php } $i+=1; } ?>
																			<div id="itemlist1"></div>
					                                                        <button class="btn btn-outline-primary" name="add" id="add" type="button">+</button>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>2nd List</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Type something" name="list2" id="list2" value="<?php echo $dest['packing'][0]->list2; ?>" required/>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>Item</label>
					                                                    <div>
																			<?php
																			$list = trim($dest['packing'][0]->item2,"[]");
																			$list2 = explode(",",$list); ?>
																			<?php  foreach ($list2 as $row){ ?>
																				<input type="text" class="form-control name_list" name="item1[]" id="item<?php echo $i;?>" value="<?php echo $row; ?>" required>
																				<?php if(count($list2)!=1){ ?>
																				<button class="btn btn-outline-danger remove mb-2" name="remove" id="remove<?php echo $i;?>" type="button" onclick="delete_item('<?php echo $i;?>')">-</button>
																				<?php } $i+=1; } ?>
					                                                        <div id="itemlist2"></div>
					                                                        <button class="btn btn-outline-primary" name="add1" id="add1" type="button">+</button>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>3rd List</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Type something" name="list3" id="list3" <?php echo $dest['packing'][0]->list3; ?> required />
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>Item</label>
					                                                    <div>
																			<?php
																			$list = trim($dest['packing'][0]->item3,"[]");
																			$list3 = explode(",",$list); ?>
																			<?php foreach ($list3 as $row){ ?>
																				<input type="text" class="form-control name_list" name="item1[]" id="item<?php echo $i;?>" value="<?php echo $row; ?>" required>
																				<?php if(count($list3)!=1){ ?>
																				<button class="btn btn-outline-danger remove mb-2" name="remove" id="remove<?php echo $i;?>" type="button" onclick="delete_item('<?php echo $i;?>')">-</button>
																				<?php } $i+=1; } ?>
																			<div id="itemlist3"></div>
																			<button class="btn btn-outline-primary" name="add3" id="add3" type="button">+</button>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>4th List</label>
					                                                    <div>
					                                                        <input type="text" class="form-control" placeholder="Type something" name="list4" id="list4" value="<?php echo $dest['packing'][0]->list4; ?>" required/>
					                                                    </div>
					                                                </div>
					                                                <div class="form-group">
					                                                    <label>Item</label>
					                                                    <div>
																			<?php
																			$list = trim($dest['packing'][0]->item4,"[]");
																			$list4 = explode(",",$list); ?>
																			<?php  foreach ($list4 as $row){ ?>
																				<input type="text" class="form-control name_list" name="item1[]" id="item<?php echo $i;?>" value="<?php echo $row; ?>" required>
																				<?php if(count($list4)!=1){ ?>
																				<button class="btn btn-outline-danger remove mb-2" name="remove" id="remove<?php echo $i;?>" type="button" onclick="delete_item('<?php echo $i;?>')">-</button>
																				<?php } $i+=1; } ?>
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
													<?php } ?>
                                                    <div class="tab-pane p-3" id="seo" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<form action="insert_seotags" method="post">
				                                                <div class="form-group">
				                                                    <label>SEO Tags(Seprate with "COMA")</label>
				                                                    <div>
				                                                        <textarea class="form-control" rows="5" name="tags" id="tags" required><?php echo $dest['seo'][00]->tags; ?></textarea>
				                                                    </div>
				                                                </div>
				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Submit</button>
				                                                </div>
			                                            	</form>
                                                        </p>
                                                    </div>
													<?php if(count($dest['img'])>=1){ ?>
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
													<?php } ?>

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
	var src2 = document.getElementById("src2");
	var target2 = document.getElementById("target2");
	showImage(src2,target2);
	var src3 = document.getElementById("src3");
	var target3 = document.getElementById("target3");
	showImage(src3,target3);

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
