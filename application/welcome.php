<?php

	class welcome extends baseController
	{	
		private function __autoload()
		{
			// Load model
			$this->load->model( "welcome_model" );	
		}
		
		public function index()
		{
			// Display greeting
			$this->greeting = 'Welcome to PHPRO MVC';
			echo $this->greeting;
			
			// Load model
			$this->load->model( "welcome_model" );
			
			// Test model
			$this->welcome_model->index();
		}
		
		public function test()
		{
			$this->load->view( 'template', array( 'title' => 'Arlo sucks like aol' ) );
		}
		
		public function testDB()
		{
			// Autoload
			$this->__autoload();
			
			$this->welcome_model->loadHymnTitles();
		}
	}

?>