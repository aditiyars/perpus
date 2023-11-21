<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	public function index()
	{
		$this->load->helper('url');
		// $this->load->view('landingpage/header');
		$this->load->view('landingpage/home');
		// $this->load->view('landingpage/footer');
	}
	
	public function library()
	{
		$this->load->helper('url');
		$this->load->view('landingpage/header');
		$this->load->view('landingpage/library');
		$this->load->view('landingpage/footer');
	}

}

?>
