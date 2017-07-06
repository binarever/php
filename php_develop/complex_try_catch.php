<<?php

	ini_set('display_errors', '1');
	
	 class My_Exception extends Exception
	 {
	 	
	 	function __construct($language,$errorcode)
	 	{
	 		
	 		$this->language  =  $language;

	 		$this->errorcode  =  $errorcode;

	 	}

	 	function getMessageMap()
	 	{

	 		$error=file("errors/".$this->language.".txt");

	 		foreach ($errors as $error) {
	 			
	 			list($key,$value)  explode(",", error,2);

	 			$errorArray[$key]  =  $value;

	 		}

	 		return $errorArraya[$this->errorcode];
	 	}

	 	try {

	 		throw new my_Exception("english", 4);
	 		
	 		
	 	} catch (My_Exception $e) {

	 		echo  $e->getMessageMap();
	 		
	 	}
	 } 
 ?>