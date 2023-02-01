<?php
	
	namespace Services\App;

	/**
	 * The application class.
	 */
	class Services
	{

		private $files = [
			'helpers/app',
			'helpers/generator',
			'bootstrap/autoload',
			'vendor/autoload',
			'config/ini',
			'routes/web'
		];

		public function __construct (string $root)
		{
			$this->addFiles($root);
		}

		public function addFiles (string $root)
		{
			foreach ($this->files as $file) 
			{
				require_once $root.str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $file).'.php';
			}
		}
	}
?>