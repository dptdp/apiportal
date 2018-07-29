<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class content_handler extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
	}

	public function home()
	{
		$data['result'] = "INVALID";
		$this->load->view('home', $data);
	}
}
