<html>
	<head>
	<?php
		require_once("http://127.0.0.1/network/sys/config.php");
		require_once("http://127.0.0.1/network/header.php");
	?>
	<meta http-equiv="content-Type" content="text/html; charset=gb2312">
	<title>Welcome</title>
	</head>
	<body>
	<h1>Register</h1>
	<form method="post" action="register_1.php">
	<div class="div">
		<div class="text">
		username:<input type="text" name="username"></div>
		<div class="text">
		password:<input type="password" name="password"></div>
		<div class="text">
		password again:<input type="password" name="pwd_again"></div>
		<input type="submit" value="submit">
		<input type="reset" value="reset">
	</div>
	<?php
		require_once("http://127.0.0.1/network/footer.php");
	?>
	</body>
</html>
