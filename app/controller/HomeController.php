<?php
	
	namespace App\Controller;

	class HomeController
	{
		
		public function index ()
		{
			$rapid = (object) [
				'repo' => '91ahmed/Rapidmvc', 
				'author' => 'ahmed hassan', 
				'link' => 'https://91ahmed.github.io'
			];

			return view('home', compact('rapid'));
		}
	}
?>