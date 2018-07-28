<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
	}

	public function index()
	{
		$data['result'] = "INVALID";
		$this->load->view('index', $data);
	}

	public function add_account()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$account_name = $this->input->post('account_name');

		$result = $this->api_model->add_sbaccount($username, $password, $account_name);
		$data['result'] = $result;
		$this->load->view('index', $data);

		/*if($input == "add")
		{
			$result = $this->api_model->add_account();
			$data['result'] = $result;
			$this->load->view('index', $data);
		}
		else
		{
			$result = $this->api_model->branch_atm();
			$data['result'] = $result;
			$this->load->view('index', $data);
		}*/

		/*$result = $this->api_model->add_account();
		$data['result'] = $result;
		$this->load->view('index', $data);*/

		//$data['result'] = $input;
		//$this->load->view('index', $data);
	}
}
