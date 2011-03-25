<?php

	abstract class baseModel
	{
	
		/*
		* @registry object
		*/
		protected $registry;
		
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