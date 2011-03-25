<?
	class load
	{
		
	/*
	* PRIVATE DATA 
	*/
		private $ob_level;
		private $config;
		private $cached_loaded_vars;
		
	/*
	* PUBLIC METHODS
	*/
	
		/*
		* @load constructor
		* @params array (configurations)
		* @return void
		* @access public
		*/
		public function __construct( $config )
		{
			// get ob level
			$this->ob_level  = ob_get_level();
			
			// set global configurations
			$this->config =& $config;
			
			// initiate loaded vars
			$this->cached_loaded_vars = array();
		}
		
		/*
		* @model loader
		* @param string $model
		* @return void
		* @access public
		*/
		public function model( $model )
		{
			// remove .php if present
			$model = str_replace( ".php", "", $model );
			
			// load only if not previously loaded
			if( !isset( $this->$model ) )
			{
				// verify that file exist
				if( file_exists( __SITE_PATH . '/model/' . $model . '.php' ) )
				{
					// load file
					include __SITE_PATH . '/model/' . $model . '.php';
					
					// add to current object
					$this->$model = new $model( $this->registry );
				}
				else
				{
					echo $model.".php<br />";
					die( 'Model Not Found' );	
				}	
			}
		}
		
		/*
		* @view loader
		* @param string $view
		* @return void
		* @access public
		*/
		public function view( $view, $vars = array() )
		{
			// remove .php if present
			$view = str_replace( ".php", "", $view );
			
			// verify that file exist
			if( file_exists( __SITE_PATH . '/view/' . $view . '.php' ) )
			{
				// extract variables, make them accessible to template
				$this->cached_loaded_vars = array_merge( $this->cached_loaded_vars, $vars );
				extract( $this->cached_loaded_vars );
				
				// buffer output
				ob_start();
				
				// load file
				include __SITE_PATH . '/view/' . $view . '.php';
				
				// flush buffer
				ob_end_flush();
			}
			else
			{
				echo $view.".php<br />";
				die( 'View Not Found' );	
			}
		}
	}
?>