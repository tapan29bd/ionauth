<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()	{
		$data['title'] = 'Application Login';
		$this->load->view('login', $data);
	}
}
