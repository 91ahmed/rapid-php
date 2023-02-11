<?php
	
	namespace App\Controller;

	use App\Model\User;

	class HomeController
	{
		
		public function index ()
		{

			$users = User::execute()->all()
						->where('id', '>', 1)
						->and('name', '!=', 'ahmed')
					    ->get();

			var_dump($users);
			exit();

			$rapid = (object) [
				'repo' => '91ahmed/Rapidmvc', 
				'author' => 'ahmed hassan', 
				'link' => 'https://github.com/91ahmed/Rapidmvc'
			];

			return view('home', compact('rapid'));
		}
	}
?>