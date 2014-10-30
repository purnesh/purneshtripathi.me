<?php
	class Projects extends CI_Controller{
		public function index(){
			$header_data['title'] = "Projects: Purnesh Tripathi";
			$header_data['name'] = "Projects";
			$this->load->view('header',$header_data);
			$this->load->view('projects');
			$this->load->view('footer');
		}

		public function details($name_of_project){
			$header_data['title'] = "Projects: Purnesh Tripathi";
			$project_names = array('keylogger_resist' => "Keylogger Resist",
							'natural_log_zero' => "Natural Log Zero",
							'atcad' => "Automatic Ticket Cancellation and Acceptance Device",
							'iecs' => "Intelligent Electricity Control System");
			$header_data['name'] = $project_names[$name_of_project];
			$this->load->view('header',$header_data);
			$this->load->view($name_of_project);
			$this->load->view('footer');

		}
	}

?>
