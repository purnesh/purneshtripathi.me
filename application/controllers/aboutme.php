<?php
	class Aboutme extends CI_Controller{
		public function index(){
			$header_data['title'] = "About Me: Purnesh Tripathi";
			$header_data['name'] = "About Me";
			$this->load->view('header', $header_data);
			$this->load->view('aboutme');
			$this->load->view('footer');
		}
	}
?>
