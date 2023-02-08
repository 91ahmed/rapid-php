<?php
	
	namespace App\Controller;

	class HomeController
	{
		
		public function index ()
		{
			$users = (object) [
				'repo' => '91ahmed/Rapidmvc', 
				'author' => 'ahmed hassan', 
				'email' => 'ahmedh12491@gmail.com'
			];

			return view('home', compact('users'));
		}
	}
?>