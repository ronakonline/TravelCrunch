<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
	<button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
		<i class="ion-close"></i>
	</button>

	<!-- LOGO -->
	<div class="topbar-left">
		<div class="text-center">
			<!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i>TravelCrunch</a>-->
			<a href="index.html" class="logo"><img src="<?php echo base_url();?>assets/admin/images/kns_logo.png" height="74" alt="logo"></a>
		</div>
	</div>

	<div class="sidebar-inner slimscrollleft">
		<div id="sidebar-menu">
			<ul>
				<li>
					<a href="<?php echo base_url();?>admin/Dashboard" class="waves-effect">
						<i class="mdi mdi-airplay"></i>
						<span> Dashboard <span class="badge badge-pill badge-primary float-right"></span></span>
					</a>
				</li>
				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Destinations </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="<?php echo base_url(); ?>admin/Destination/Add_Parent">Add Parent</a></li>
						<li><a href="<?php echo base_url(); ?>admin/Destination/List_Parent">All Parents</a></li>
						<li><a href="<?php echo base_url(); ?>admin/Destination/Add_Destination">Add Destination</a></li>
						<li><a href="<?php echo base_url(); ?>admin/Destination/List_Destination">All Destinations</a></li>
						<li><a href="<?php echo base_url(); ?>admin/Destination/Add_Widget">Add Widget</a></li>
												
					</ul>
				</li>
				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Travel </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="<?php echo base_url(); ?>admin/Destination/add_travelstyle">Add Travel Style</a></li>			
						<li><a href="<?php echo base_url(); ?>admin/Destination/add_traveldeals">Add Travel Deals</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
