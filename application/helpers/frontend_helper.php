<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('frontend_data')) {
	function frontend_data()
	{
		// get main CodeIgniter object
		$ci = get_instance();
		$ci->load->model('DestinationM');
		$ci->load->model('TourM');
		$ci->load->model('SitesettingM');
		$data['parents'] = $ci->DestinationM->listparents();
		$data['destinations'] = $ci->DestinationM->listdestinations();
		$data['tdestination'] = count($data['destinations']);
		$data['tparent'] = count($data['parents']);
		$data['travelstyle'] = $ci->DestinationM->listtravelstyle();
		$data['tdp'] = $ci->DestinationM->tdestbyparent(); // Gives Total Destinations by Parent
		$data['tours'] = $ci->TourM->listtours();
		$data['contact'] = $ci->SitesettingM->list_contact();
		$data['deals'] = $ci->DestinationM->alldeals();
		$data['settings'] = $ci->SitesettingM->listsitesetting();
		$data['nav'] = $ci->SitesettingM->editlist_navbar();
		$data['footer'] = $ci->SitesettingM->editlist_footer();

		return $data;
	}
}

if (! function_exists('destination_data')) {
	function destination_data($id)
	{
		// get main CodeIgniter object
		$ci = get_instance();
		$ci->load->model('DestinationM');
		$data = $ci->DestinationM->getdest($id);
		$data['img'] = $ci->DestinationM->getgallery($id);
		$data['overview'] = $ci->DestinationM->getoverview($id);
		$data['faq'] = $ci->DestinationM->getfaq($id);
		$data['packing'] = $ci->DestinationM->getpacking($id);
		$data['seo'] = $ci->DestinationM->listseo($id);
		return $data;
	}
}

if (! function_exists('tour_data')) {
	function tour_data($id)
	{
		// get main CodeIgniter object
		$ci = get_instance();
		$ci->load->model('TourM');
		$data['touritinerary'] = $ci->TourM->touritinerary($id);
		$data['tourfaq'] = $ci->TourM->tourfaq($id);
		$data['img'] = $ci->TourM->tourimg($id);
		return $data;
	}
}

if (! function_exists('travelstyle_data')) {
	function travelstyle_data($id)
	{
		// get main CodeIgniter object
//		$ci = get_instance();
//		$ci->load->model('DestinationM');
//		$data = $ci->DestinationM->gettoursbydestination($id);
//		return $data;
	}
}
