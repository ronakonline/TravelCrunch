<body class="tg-home tg-homevone">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
			Loader Start
*************************************-->
<div class="loader">
	<div class="span">
		<div class="location_indicator"></div>
	</div>
</div>
<!--************************************
			Loader End
*************************************-->
<!--************************************
			Loader Start
*************************************-->
<div class="loader">
	<div class="span">
		<div class="location_indicator"></div>
	</div>
</div>
<!--************************************
			Loader End
*************************************-->
<!--************************************
		Mobile Menu Start
*************************************-->
<nav id="menu">
	<ul>
		<li><a href="<?php echo base_url(); ?>"><?php echo $nav[0]->name; ?></a></li>
		<li><a href="<?php echo base_url('Destinations'); ?>"><?php echo $nav[1]->name; ?></a>
		</li>
		<li><a href="javascript:void(0);"><?php echo $nav[2]->name; ?></a>
			<div>
				<ul>
					<?php foreach ($travelstyle as $row){ ?>
						<li ><a href="#" style="font-size: 15px;"><?php echo $row->name; ?></a>

							<ul>

								<?php for ($i=0; $i<$tparent; $i++){
									$tdests = trim($row->pid,"[]");
									$tdest = explode(",",$tdests);
									if(in_array($parents[$i]->id,$tdest)) {?>
										<li><a href="<?php echo base_url('Travelstyle/').$parents[$i]->id."/".$row->id; ?>" style="color:rgb(120,120,120)"><?php echo $parents[$i]->name; ?></a></li>
									<?php } }?>
							</ul>
						</li>
					<?php } ?>
				</ul>
			</div>
		</li>
		<li><a href="<?php echo base_url('Traveldeals'); ?>"><?php echo $nav[3]->name; ?></a></li>
		<li><a href="<?php echo base_url('Contact');?>"><?php echo $nav[4]->name; ?></a></li>
	</ul>
</nav>
<!--************************************
		Mobile Menu End
*************************************-->
<!--************************************
		Wrapper Start
*************************************-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
	<!--************************************
			Header Start
	*************************************-->
	<header id="tg-header" class="tg-header tg-haslayout">
		<div class="container-fluid">
			<div class="row">

				<div class="tg-navigationarea tg-headerfixed">
					<strong class="tg-logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/').$settings[0]->logo;?>" alt="company logo here"></a></strong>
					<div class="tg-socialsignin">
						<div class="tg-userbox">
							<a id="tg-btnsignin" class="tg-btn" href="#tg-loginsingup"><span>sign in</span></a>
							<div class="dropdown tg-dropdown">
								<button class="tg-btndropdown" id="tg-dropdowndashboard" type="button" data-toggle="dropdown">
									<img src="<?php echo base_url();?>assets/images/author/img-01.jpg" alt="image description">
									<span>john smith</span>
									<i class="fa fa-caret-down"></i>
								</button>
								<ul class="dropdown-menu tg-dropdownusermenu" aria-labelledby="tg-dropdowndashboard">
									<li><a href="dashboard.html">Dashboard</a></li>
									<li><a href="dashboard.html">Edit Profile</a></li>
									<li><a href="javascript:void(0);">Sign Out</a></li>
								</ul>
							</div>
						</div>
					</div>
					<nav id="tg-nav" class="tg-nav" style="bottom: 0px;">
						<div class="navbar-header">
							<a href="#menu" class="navbar-toggle collapsed">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
						</div>
						<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
							<ul>
								<li class="current-menu-item"><a href="<?php echo base_url();?>"><?php echo $nav[0]->name; ?></a></li>
								<li class="menu-item-has-children current-menu-item menu-item-has-mega-menu"><a href="<?php echo base_url('Destinations'); ?>"><?php echo $nav[1]->name; ?></a>
									<div class="mega-menu">
										<div class="row">
											<?php for($i=0; $i<count($parents); $i++){ ?>
												<div class="" style="white-space: -moz-pre-wrap; width: 11.10%; float: left">
													<ul>
														<li><a href="#" style="font-size: 15px;"><?php echo $parents[$i]->name; ?></a></li>
														<?php for($j=0; $j<count($destinations); $j++)  { ?>
															<?php if($destinations[$j]->parent==$parents[$i]->id){ ?>
																<li><a href="<?php echo base_url('Listings/').$destinations[$j]->id.'/'.$destinations[$j]->name; ?>" style="color: rgb(120,120,120)"> <?php echo $destinations[$j]->name; ?></a></li>
															<?php }} ?>
													</ul>
												</div>
											<?php } ?>
										</div>
									</div>
								</li>
								<li class="menu-item-has-children current-menu-item menu-item-has-mega-menu"><a href="#"><?php echo $nav[2]->name; ?></a>
									<div class="mega-menu">
										<div class="row " >
											<?php foreach ($travelstyle as $row){ ?>
												<div class="" style="white-space: -moz-pre-wrap; width: 16%; float: left">
													<ul>
														<li ><a href="#" style="font-size: 15px;"><?php echo $row->name; ?></a>
														</li>
														<?php for ($i=0; $i<$tparent; $i++){
															$tdests = trim($row->pid,"[]");
															$tdest = explode(",",$tdests);
															if(in_array($parents[$i]->id,$tdest)) {?>
																<li><a href="<?php echo base_url('Travelstyle/').$parents[$i]->id."/".$row->id; ?>" style="color:rgb(120,120,120)"><?php echo $parents[$i]->name; ?></a></li>
															<?php } }?>
													</ul>
												</div>
											<?php } ?>
										</div>
									</div>
								</li>

								<li class=" current-menu-item"><a href="<?php echo base_url('Traveldeals'); ?>"><?php echo $nav[3]->name; ?></a>
								</li>
								<li class="menu-item-has-children current-menu-item"><a href="<?php echo base_url(); ?>Contact"><?php echo $nav[4]->name; ?></a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!--************************************
			Header End
	*************************************-->

