<?php
	$name=addslashes($_POST['name']);
	$stunum=addslashes($_POST['stunum']);
	$comname=addslashes($_POST['comname']);
	$prize=addslashes($_POST['prize']);

	$conn=mysql_connect('localhost','root','') or die("Cannot connect to the database!");
	mysql_select_db('question');

	$query="INSERT into competition(name,stunum,comname,prize) values('$name','$stunum','$comname','$prize')";

	$result = mysql_query($query,$conn);

	if($result)
	{
		echo "<script type='text/javascript'>alert('insert your information successfully,Congratulations!');location='competition.php';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('fail to insert your information,sorry,please try again!');location='yourprize.html';</script>";
	}
?>