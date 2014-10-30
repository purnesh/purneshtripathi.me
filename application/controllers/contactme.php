<?php
	class Contactme extends CI_Controller{
		public function index(){
			$header_data['title'] = "Contact Me: Purnesh Tripathi";
			$header_data['name'] = "Contact Me";
			$this->load->view('header', $header_data);
			$this->load->view('contactme');
			$this->load->view('footer');
		}
	}
?>
