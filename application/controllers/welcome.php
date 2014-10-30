<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * @author Purnesh Tripathi <purnesh.xyz@gmail.com>
	 * @copyright 2014 Natural Log Zero
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('inner_home');
		$this->load->view('nav_bar');
		$this->load->view('home');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
