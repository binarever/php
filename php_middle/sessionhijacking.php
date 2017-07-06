<?php
	if(!isset($__COOKIE[session_name])){
		session_start();
		$__SESSION['HTTP_USER_AGENT']=$__SERVER['HTTP_USER_AGENT'];
	}else{
		session_start();
		if($__SESSION['HTTP_USER_AGENT']!=$__SERVER['HTTP_USER_AGENT']){
			//Force the user to re-authenticate
		}
	}
?>