<?php
	class Projects extends CI_Controller{
		public function index(){
			$header_data['title'] = "Projects: Purnesh Tripathi";
			$header_data['name'] = "Projects";
			$this->load->view('header',$header_data);
			$this->load->view('projects');
			$this->load->view('footer');
		}
	}

?>
