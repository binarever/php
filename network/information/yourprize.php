<!DOCTYPE html>
<html>
<head>
	<title>Add my competition experience</title>
</head>
<body>
<h1>fill the blank to add your competition</h1>
<form action="addprize.php" method="post">
	<p>
		name:<br   />
		<input type="text" id="name" name="name" size="20" maxlength="40"/>
	</p>
	<p>
		student number:<br  />
		<input type="text" id="stunum" name="stunum" size="20" maxlength="40"/>
	</p>
	<p>
		competition name:<br   />
		<input type="text" id="comname" name="comname" size="20" maxlength="40"/>
	</p>
	<p>
		your prize:<br   />
		<input type="text" id="prize" name="prize" size="20" maxlength="40"/>
	</p>
	<input type="submit" id="submit" name="submit" value="Go!"/>
</form>
</body>
</html>