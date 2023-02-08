<?php
	
	namespace App\Model;

	use Core\Db\Model;

	class User extends Model
	{
		protected static $table = 'users';

		protected static $connect = [
			'database' => 'ko'
		];
	}
?>