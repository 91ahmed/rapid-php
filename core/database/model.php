<?php
	
	namespace Core\Db;

	use Core\Db\Database;
	use Core\Db\Connect;

	/**
	 *	Database Model, this class includes methods that execute sql queries.
	 *
	 *	@author ahmed hassan
	 *	@link https://91ahmed.github.io
	 */
	class Model extends Builder
	{

		/**
		 *	@var object, holds PDO object.
		 */
		protected $pdo;

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
		 *	Execute sql query (fetch all columns).
		 *
		 *	@return resource
		 */
		public function get ()
		{
			$stmt  = $this->pdo->prepare($this->query);
			$stmt->execute();

			$data = $stmt->fetchAll();

			return $data;
		}

		/**
		 *	Execute sql query (fetch single column).
		 *
		 *	@return resource
		 */
		public function column ()
		{
			$stmt = $this->pdo->prepare($this->query);
			$stmt->execute();

			$data = $stmt->fetchColumn();

			return $data;
		}

		/**
		 *	Execute sql query (fetch single row).
		 *
		 *	@return resource
		 */
		public function first ()
		{
			$stmt = $this->pdo->prepare($this->query);
			$stmt->execute();

			$data = $stmt->fetch();

			return $data;
		}

		/**
		 *	Execute sql query to insert and update data.
		 *
		 *	@return void
		 */
		public function save ()
		{
			$stmt = $this->pdo->prepare($this->query);

			if (!empty($this->data)) 
			{
				foreach ($this->data as $column => $value) 
				{
					$stmt->bindValue(':'.$column, $value);
				}
			}

			$stmt->execute();	
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