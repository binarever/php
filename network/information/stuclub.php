<!DOCTYPE html>
<html>
<head>
	<title>Add your student information</title>
</head>
<body>
<h1>fill the blank to add your student information</h1>
<form action="student.php" method="post">
	<p>
		name:<br   />
		<input type="text" id="name" name="name" size="20" maxlength="40"/>
	</p>
	<p>
		sex:<br   />
		<input type="text" id="sex" name="sex" size="20" maxlength="40"/>
	</p>
	<p>
		phone number:<br   />
		<input type="text" id="phone" name="phone" size="20" maxlength="40"/>
	</p>
	<p>
		e-mail:<br   />
		<input type="text" id="email" name="email" size="20" maxlength="40"/>
	</p>
	<p>
		studentnumber:<br  />
		<input type="text" id="stunum" name="stunum" size="20" maxlength="40"/ >
	</p>
	<p>
		joined club:<br   />
		<input type="text" id="club" name="club" size="20" maxlength="40"/>
	</p>
	<p>
		joined date:<br   />
		<input type="text" id="date" name="date" size="20" maxlength="40"/>
	</p>
	<input type="submit" id="submit" name="submit" value="Go!"/>
</form>
</body>
</html>