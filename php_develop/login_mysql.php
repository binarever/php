<?php

	function authenticate_user(){

		header('WWW-Authenticate: Basic realm="Secret Stash"');

		header("HTTP/1.0 401 Unauthorized");

	}

	if (!isset($_SERVER['PHP_AUTH_USER'])){

		authenticate_user();
	}
	else{

		mysql_connect("localhost","authenticator","secret")or die("Can't select database!");

		mysql_select_db("corporate")or die("Can't select database!");

		$query  =  "SELECT username ,pswd FROM userauth WHERE username='$_SERVER[PHP_AUTH_USER]'AND pawd=md5('$_SERVER[PHP_AUTH_PW]')";

		$result  =  mysql_query($query);
	}

	if (mysql_num_rows($result)==0){
		authenticate_user();
	}
	else{
		echo "Welcome to the secret archive!";
	}
?>