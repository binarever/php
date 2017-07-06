<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
<form method="post" action="addquestion.php">
	add:
	<div class="div">
	address:<input type="text" name="addaddress"></div>
	<div class="div">
	flag:<input type="text" name="addflag"></div>
	<div class="button">
	<input type="submit" value="submit">
	</div>
<form method="post" action="changequestion.php">
	change:
	<div class="div">
	id:<input type="text" name="changeid"></div>
	<div class="div">
	address:<input type="text" name="changeaddress"></div>
	<div class="div">
	flag:<input type="text" name="changeflag"></div>
	<div class="button">
	<input type="submit" value="submit">
	</div>
<form method="post" action="deletequestion.php">
	delete:
	<div class="div">
	id:<input type="text" name="deleteid"></div>
	<div class="button">
	<input type="submit" value="submit">
	</div>
</body>
</html>