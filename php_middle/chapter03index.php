<?php
	require 'chapter03ServiceFunction.php';

	if (isset($__GET['method'])){
		switch ($__GET['method']) {
			case 'countWords':
				$response=chapter03ServiceFunction::countWords($__GET['words']);
				break;
			case 'getDisplayName':
				$response=chapter03ServiceFunction::getdisplayName($__GET['first_name'],$__GET['last_name']);
				break;
			default:
				$response="Unknown Method";
				break;
		}
	}
	else{
		$response="Unknown Method";
	}

	header('Content-Type:application/json');
	echo json_encode($response);
?>