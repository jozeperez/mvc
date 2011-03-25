<?
	class configObject
	{
		public function __construct( $config )
		{
			$this->config = $config;
		}
		
		public function item( $key )
		{
			if( array_key_exists( $key, $this->config ) )
				return $this->config[$key];
			return false;	
		}
		
		private $config;
	}
?>