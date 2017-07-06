<?php

	require ('HTTP/Upload.php');

	$upload  =  new HTTP_Upload();

	$file  =  $upload->getFiles('classnotes');

	$props  =  $file->getProp();

	print_r($props);
?>