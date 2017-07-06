<html>
	<head>
	<?php
		require_once("http://127.0.0.1/network/sys/config.php");
		require_once("http://127.0.0.1/network/header.php");
	?>
	<meta http-equiv="content-Type" content="text/html; charset=gb2312">
	<title>welcome</title>
	</head>
	<body>
	<h1>login</h1>
	<form method="post" action="check.php">
	<div class="div">
	username:<input type="text" name="username"></div>
	<div class="div">
	password:<input type="password" name="password"></div>
	<div class="button">
	<input type="submit" value="submit">
	<input type="reset" value="reset">
	<a href="register.php">register</a>
	</div>
	</div>
	</form>
	<?php
		require_once("http://127.0.0.1/network/footer.php");
	?>
	</body>
</html>