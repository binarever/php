<?php
	ini_set('display_errors', '1');
	
	try 
	{

		$fh  =  fopen("contacts.txt", "r");

		if(!$fh)
		{

			throw new Exception("Couldn't open the file");
			
		}
	}

	catch (Exception  $e)
	{

		echo "Error (File : ".$e->getFile().",line". $e->getLine()."):".$e->getMassage();

	}

?>