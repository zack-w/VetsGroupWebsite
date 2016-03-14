<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Page extends MY_Controller {

		public function getPage() {
			$this->dispHeader();
			
			// Load the homepage content
			$pageInfo = $this->page_model->getPage( $this->uri->segment( 2 ) );
			
			$this->load->view( "standardContent", array(
				"content" => $pageInfo[ 0 ]->Content,
			) );
			
			$this->dispFooter();
		}
		
	}

?>