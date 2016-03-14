<?php

	class Navigation_model extends CI_Model {
	
		public $navData = array();
	
		// Get Page by Name
		function __construct() {
			parent::__construct();
			
			// Load Nav Information
			foreach( $this->db->get( "navigation" )->result() as $row ) {
				$row->URL = str_replace( "{{BASE}}", base_url(), $row->URL );
				
				if( $row->Type == 1 ) {
					$this->navData[ $row->ID ] = array( "name" => $row->Name, "url" => $row->URL, "children" => array() );
				} elseif( $row->Type == 2 && isset( $this->navData[ $row->Parent ] ) ) {
					array_push( $this->navData[ $row->Parent ][ "children" ], array( "name" => $row->Name, "url" => $row->URL ) );
				}
			}
		}
	
	}
	
?>