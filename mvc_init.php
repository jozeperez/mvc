<?php

 /*** include the controller class ***/
 include __SITE_PATH . '/system/' . 'baseController.class.php';
 
 /*** include the model class ***/
 include __SITE_PATH . '/system/' . 'baseModel.class.php';

 /*** include the registry class ***/
 include __SITE_PATH . '/system/' . 'registry.class.php';

 /*** include the router class ***/
 include __SITE_PATH . '/system/' . 'router.class.php';
 
 /*** include config ***/
  include __SITE_PATH . '/config/' . 'config.php';
  include __SITE_PATH . '/system/' . 'configObject.class.php';
  
 /*** include loader ***/
  include __SITE_PATH . '/system/' . 'load.class.php';
  
 // a new registry object
 $registry = new registry;
 
 // add PDO database
 $registry->db = ( $config['db']['doLoad'] ) ? new PDO( "mysql:host=" . $config['db']['server'] . ";dbname=" . $config['db']['database'], $config['db']['username'], $config['db']['password'] ) : FALSE;
	
 // add config
 $registry->config = new configObject( $config );
 
 // add loader
 $registry->load = new load( $registry->config );

?>