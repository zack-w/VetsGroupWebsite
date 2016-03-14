<?php

	class MY_Controller extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			
			//Setup Database
			$this->load->database();
			
			// Load Libraries
			$this->load->library('ion_auth');
			
			// Load Models
			$this->load->model('ion_auth_model');
			$this->load->model('page_model');
			$this->load->model('navigation_model');
			
			//Load Helpers
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->helper('date');
		}
		
		public function dispHeader() {
			$this->load->view( "includes/header", array(
				"nav_info" => $this->navigation_model->navData,
			) );
		}
		
		public function dispFooter( $data = null ) {
			$this->load->view( "includes/footer", $data );
		}
	}
?>