<?php
	
	namespace Core\Db;

	use Core\Db\Database;
	use Core\Db\Connect;

	/**
	 *	Database Model
	 *
	 *	@author ahmed hassan
	 *	@link https://91ahmed.github.io
	 */
	class Model extends Database
	{
		/**
		 *	Set the database connection.
		 *
		 *	@return object
		 */
		public function __construct ()
		{
			// Pdo connection
			$conn = new Connect();

			$conn->set('driver',   config('db_driver'));
			$conn->set('host',     config('db_host'));
			$conn->set('database', config('db_name'));
			$conn->set('user',     config('db_user'));
			$conn->set('password', config('db_password'));
			$conn->set('port',     config('db_port'));
			$conn->set('charset',  config('db_charset'));
			$conn->set('sslmode',  config('db_sslmode'));

			$this->pdo = $conn->pdo();
		}

		/**
		 *	Return current object.
		 *
		 *	@return object
		 */
		public static function execute ()
		{
			return new static();
		}
	}
?>