<?php
	
	namespace App\Controller;

	use App\Model\User;

	class HomeController
	{
		
		public function index ()
		{
			$users = User::execute()->all()->get();

			var_dump($users);
			exit();

			return view('home', compact('welcome'));
		}
	}
?>