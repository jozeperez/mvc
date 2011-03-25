<?php

	abstract class baseController
	{
	
		/*
		* @registry object
		*/
		protected $registry;
		
		/*
		* @config object
		*/
		public $config;
		
		/*
		* @load object
		*/
		public $load;
		
		/*
		* @constructor
		*/
		function __construct( $registry )
		{
			$this->registry = $registry;
		}
		
		/**
		* @all controllers must contain an index method
		*/
		abstract function index();
	}

?>