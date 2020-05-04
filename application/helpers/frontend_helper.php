<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('frontend_data')) {
	function frontend_data()
	{
		// get main CodeIgniter object
		$ci = get_instance();
		$ci->load->model('DestinationM');
		$data['parents'] = $ci->DestinationM->listparents();
		$data['destinations'] = $ci->DestinationM->listdestinations();
		$data['tdestination'] = count($data['destinations']);
		$data['travelstyle'] = $ci->DestinationM->listtravelstyle();
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
		return $data;
	}
}

