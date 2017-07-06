<?php

	session_start();

	if (!isset($_SESSION['username'])){

		if (!isset($_POST['username'])){

			$username  =  mysqli_real_escape_string($_POST['username']);

			$pswd  =  mysqli_real_escape_string($_POST['pswd']);

			mysql_connect("localhost","root","");

			mysql_select_db("mysql");

			$query  =  "SELECT username FROM users WHERE username='$username'AND pswd='$pswd'";

			$result  =  mysql_query($query);

			if (mysql_num_rows($result)==1){
				$_SESSION['username']  =  mysql_result($result, 0,$username);
				echo "You've successfully logged in.";
			}
		}
		else{
			include "login_mysqlsession.html";
		}
	}
	else
		printf("Welcome back,%s!",$_SESSION['username']);
?>