<?php
	class log_Factory{
		public function getLog($type='file',array $options)
		{
			$type=strtolower($type);

			$class = "Log_".ucfirst($type);

			require_once str_replace('_', DIRECTORY_SEPARATOY, $class).'.php';

			$log=new $class($options);

			switch ($type){
				case 'file':
					$log->setPath($option['location']);
					break;
				case 'mysql':
					$log->setUser($options['username']);
					$log->setPassword($options['password']);
					$log->setDBName($options['location']);
					break;
				case 'sqlite':
					$log->setDBPath($options['location']);
					break;
			}

			return $log;
		}
	}
?>