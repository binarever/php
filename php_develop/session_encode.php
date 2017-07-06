<?php

	session_start();
	$_SESSION['username']="jason";
	$_SESSION['loggedon']=date("M d Y H:i:s");

	$sessionVars=session_encode();

	echo $sessionVars;
?>