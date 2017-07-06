<form action="stuinfo.php" method="post" name="searchform">
	<p>
		search:<br   />
		<input type="text" id="search" name="search" size="20" maxlength="40"/>
	</p>
<select form="searchform" name="way">
  		<option value ="name">search by name</option>
  		<option value ="phonenum">search by phone number</option>
  		<option value="email">search by e-mail</option>
  		<option value="stunum">search by student number</option>
  		<option value ="club">search by club</option>
  		<option value ="date">search by date</option>
</select>
<input type="submit" id="submit" name="submit" value="search"/>
</form>