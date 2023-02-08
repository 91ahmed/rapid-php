<?php
	
	namespace App\Controller;

	class HomeController
	{
		
		public function index ()
		{
			$rapid = (object) [
				'repo' => '91ahmed/Rapidmvc', 
				'author' => 'ahmed hassan', 
				'link' => 'https://github.com/91ahmed/Rapidmvc'
			];

			return view('home', compact('rapid'));
		}
	}
?>