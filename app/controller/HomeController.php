<?php
	
	namespace App\Controller;

	class HomeController
	{
		
		public function index ()
		{
			$welcome = 'Hello Home Page';

			return view('home', compact('welcome'));
		}
	}
?>