<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Homepage extends MY_Controller {

		public function index() {
			$this->dispHeader();
			
			echo $this->uri->segment( 3 );
			
			// Add the slideshow
			$this->load->view( "slideshow" );
			
			// Load the homepage content
			$pageInfo = $this->page_model->getPage( "homepage" );
			
			$this->load->view( "homepage", array(
				"mainContent" => $pageInfo[ 0 ]->Content,
			) );
			
			$this->dispFooter();
		}
		
	}

?>