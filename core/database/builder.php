<?php
	
	namespace Core\Db;

	/**
	 *	sql query builder
	 *
	 *	@author ahmed hassan
	 *	@link https://91ahmed.github.io
	 */
	class Builder
	{
		/**
		 *	@var string, Holds the SQL Query.
		 */
		protected $query;

		/**
		 *	@var array, Holds the array of data.
		 */
		protected $data;

		/**
		 *	@var string, Holds the database table.
		 */
		protected static $table;

		public function select ($columns)
		{
			$this->query = "SELECT ".$columns." FROM ".static::$table."";
			return $this;
		}

		public function all ()
		{
			$this->query = "SELECT * FROM ".static::$table."";
			return $this;
		}

		public function truncate ()
		{
			$this->query = "TRUNCATE TABLE ".static::$table."";
			return $this;
		}

		public function useIndex ($index) 
		{
			$this->query .= " USE INDEX (".$index.")";
			return $this;
		}

		public function forceIndex ($index)
		{
			$this->query .= " FORCE INDEX (".$index.")";
			return $this;
		}

		public function ignoreIndex ($index)
		{
			$this->query .= " IGNORE INDEX (".$index.")";
			return $this;
		}

		public function join ($table, $column1, $operator, $column2)
		{
			$this->query .= " INNER JOIN ".$table." ON ".$column1." ".$operator." ".$column2."";
			return $this;
		}
		
		public function leftJoin ($table, $column1, $operator, $column2)
		{
			$this->query .= " LEFT JOIN ".$table." ON ".$column1." ".$operator." ".$column2."";
			return $this;
		}
		
		public function rightJoin ($table, $column1, $operator, $column2)
		{
			$this->query .= " RIGHT JOIN ".$table." ON ".$column1." ".$operator." ".$column2."";
			return $this;
		}

		public function crossJoin ($table)
		{
			$this->query .= " CROSS JOIN ".$table."";
			return $this;
		}

		public function union ($table, $columns)
		{
			$this->query .= " UNION SELECT ".$columns." FROM ".$table."";
			return $this;
		}

		public function unionAll ($table, $columns)
		{
			$this->query .= " UNION ALL SELECT ".$columns." FROM ".$table."";
			return $this;
		}

		public function where ($column, $operator, $value)
		{
			$this->query .= " WHERE ".$column." ".$operator." '".$value."'";
			return $this;
		}

		public function whereIsNull ($column)
		{
			$this->query .= " WHERE ".$column." IS NULL";
			return $this;
		}

		public function whereIsNotNull ($column)
		{
			$this->query .= " WHERE ".$column." IS NOT NULL";
			return $this;
		}

		public function whereLike (string $column, string $pattern)
		{
			$this->query .= " WHERE ".$column." LIKE "."'".$pattern."'";
			return $this;
		}

		public function whereIn (string $column, $value)
		{
			if (is_array($value)) {
				$value = implode("', '", $value);
				$this->query .= " WHERE ".$column." IN ('".$value."')";
			} else {
				$this->query .= " WHERE ".$column." IN (".$value.")";
			}

			return $this;
		}
		
		public function or ($column, $operator, $value)
		{
			$this->query .= " OR ".$column." ".$operator." '".$value."'";
			return $this;
		}
		
		public function and ($column, $operator, $value)
		{
			$this->query .= " AND ".$column." ".$operator." '".$value."'";
			return $this;
		}
		
		public function groupBy ($columns)
		{
			$this->query .= " GROUP BY ".$columns."";
			return $this;
		}

		public function having ($column, $operator, $value)
		{
			$this->query .= " HAVING ".$column." ".$operator." '".$value."'";

			return $this;
		}

		public function orderBy ($columns, $order = 'DESC')
		{
			$this->query .= " ORDER BY ".$columns." ".strtoupper($order)."";
			return $this;
		}

		public function limit ($number)
		{
			$this->query .= ' LIMIT '.$number.'';
			return $this;
		}

		public function custom ($query)
		{
			$this->query = $query;
			return $this;
		}

		public function delete ()
		{
			$this->query = 'DELETE FROM '.static::$table.'';
			return $this;
		}

		public function insert (array $data)
		{
			$this->data = $data;

			$this->query = 'INSERT INTO '. static::$table . ' (';

			foreach ($data as $column => $value) {
				$this->query .= $column.', ';
			}

			$this->query = trim($this->query, ', ');
			$this->query .= ') VALUES (';

			foreach ($data as $column => $value) {
				$this->query .= ':'.$column.', ';
			}

			$this->query = trim($this->query, ', ');
			$this->query .= ')';

			return $this;
		}

		public function update (array $data)
		{	
			$this->data = $data;

			$this->query = 'UPDATE ' . static::$table . ' SET ';
			
			foreach ($data as $column => $value) {
				$this->query .= $column . " = :". $column . ", ";
			}

			$this->query = trim($this->query, ', ');
			
			return $this;
		}
	}
?>