<?php
	class Database extends PDO{
		private static $_instance=null;

		private  function __construct()
		{
			parent::__construct(APP_DB_DSN,APP_DB_USER,APP_DB_PASSWORD);
		}

		public static function getInstance()
		{
			if (!(self::$_instance instanceof Database)){
				self::$_instance = new Database();
			}

			return self::$_instance;
		}
	}

	traits Singleton{
		private static $_instance=null;

		public static function getInstance()
		{
			$class=__CLASS__;

			if(!(self::$_instance instanceof __CLASS__)){

				self::$_instance=new $class;
			}

			return self::$_instance;
		}
	}

	class DBWirteConnection extends PDO{
		use Singleton;

		private function __construct()
		{
			parent::__construct(APP_DB_WRITE_DSN,APP_DB_WRITE_USER,APP_DB_WRITE_PASSWORD);
		}
	}

	class DBReadConnection extends PDO{
		use Singleton;

		private function __construct()
		{
			parent::__construct(APP_DB_READ_DSN,APP_DB_READ_USER,APP_DB_READ_PASSWORD);
		}
	}
?>