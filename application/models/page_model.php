<?php

	class Page_model extends CI_Model {
	
		// Get Page by Name
		function getPage( $nameOrId ) {
			return $this->db->get_where( 'pages', array( ( is_numeric( $nameOrId )?( 'ID' ):( 'SysName' ) ) => $nameOrId ) )->result();
		}
	
	}
	
?>