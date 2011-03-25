<?php

	class welcome_model extends baseModel
	{	
		function index()
		{
			// Display confirmation
			echo 'Model loaded.';
		}
		
		function loadHymnTitles()
		{
			$hymns = $this->registry->db->query( "SELECT `HYMN_TITLE` FROM `hymn_objects`" );
			while( $r = $hymns->fetch( PDO::FETCH_ASSOC ) )
			{
				echo $r['HYMN_TITLE']."<br />";
			}	
		}
	
	}

?>