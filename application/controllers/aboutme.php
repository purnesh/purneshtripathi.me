<?php
	class Aboutme extends CI_Controller{
		public function index(){
			$this->load->view('header');
			$this->load->view('inner');
			$this->load->view('nav_bar');
			$this->load->view('home');
			$this->load->view('footer');
		}
	}
?>
