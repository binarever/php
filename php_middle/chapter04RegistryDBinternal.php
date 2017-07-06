<?php
	abstract class DBConnection extends PDO{
		static public function getInstance($name=null)
		{
			$class = get_called_class();

			$name=(!is_null($name))?:$class;
			if(!Registry::contains($name)){
				$instance=new $class();
				Registry::set($instance,$name);
			}

			return Registry::get($name);
		}
	}

	class DBWriteConnection extends DBConnection {
		public function __construct()
		{
			parent::__construct(APP_DB_WRITE_DSN,APP_DB_WRITE_USER,APP_DB_WRITE_PASSWORD);
		}
	}

	class DBReadConnection extends DBConnection{
		public function __construct()
		{
			parent::__construct(APP_DB_READ_DSN,APP_DB_READ_USER,APP_DB_READ_PASSWORD);
		}
	}
?>