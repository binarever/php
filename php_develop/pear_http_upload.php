<?php

	require ('HTTP/Upload.php');

	$upload  =  new HTTP_Upload ();

	$file  =  $upload->getFiles('classnotes');

	if ($file->isValid()){
		$file->moveTo('/home/httpd/html/uploads');
		echo "File successfully uploads";
	}
	else
		echo $file->errorMsg();
?>