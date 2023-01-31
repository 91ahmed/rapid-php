<?php
	
	/**
	 *	Render the application views using blade template engine.
	 *	
	 *	@param string $view
	 *	@param array $data
	 *
	 *	@return void
	 */
	function view (string $view, array $data = []) 
	{
		$blade = new \Jenssegers\Blade\Blade(
			ROOT.'app'.DS.'view',
			ROOT.'cache'.DS.'blade'
		);

		echo $blade->render($view, $data);
	}

	/**
	 *	Translate the text to different languages using GoogleTranslate.
	 *	
	 *	@param string $text
	 *
	 *	@return string
	 */
	function trans (string $text) 
	{
		$result = $text;

		$trans = new \Statickidz\GoogleTranslate();
		$result = $trans->translate('en', 'ar', $text);

		return $result;
	}

	/**
	 *	Get data from the configuration file.
	 *	
	 *	@param string $key
	 *
	 *	@return string
	 */
	function config (string $key) 
	{
		$data = null;
		$file = ROOT.'config'.DS.'app.php';

		if (is_file($file) && file_exists($file)) 
		{
			$data = require_once($file);
		}

		return $data[$key];
	}
?>