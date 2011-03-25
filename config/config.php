<?php
	/*** configuration data members ***/
	$config['base_url'] = "http://www.jozeperez.com/";//localhost/~jozeperez/Jozeperez.com@HG/";//"http://www.jozeperez.com/mvc/";	#required
	
	/*** databse configuration ***/
	$config['db']['server'] = '';//'localhost';
	$config['db']['username'] = '';//'joze_hymnsaccess';
	$config['db']['password'] = '';//'hymns';
	$config['db']['database'] = '';//'joze_hymns';
	$config['db']['doLoad'] = 
		$config['db']['server'] != "" &&
		$config['db']['username'] != "" &&
		$config['db']['password'] != "" &&
		$config['db']['database'] != "";
?>