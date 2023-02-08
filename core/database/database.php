<?php
	
	namespace Core\Db;

	use Core\Db\Builder;

	/**
	 *	This class includes methods that execute sql queries.
	 *
	 *	@author ahmed hassan
	 *	@link https://91ahmed.github.io
	 */
	class Database extends Builder
	{
		/**
		 *	@var array, holds the database information.
		 */
		protected static $connect;

		/**
		 *	@var object, holds database connection.
		 */
		protected $pdo;

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
		public function first ()
		{
			$stmt = $this->pdo->prepare($this->query);
			$stmt->execute();

			$data = $stmt->fetchColumn();

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

			foreach ($this->data as $column => $value) 
			{
				$stmt->bindValue(':'.$column, $value);
			}

			$stmt->execute();	
		}
	}
?>