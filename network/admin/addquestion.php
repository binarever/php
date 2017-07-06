<?php
	$addaddress=$_POST['addaddress'];
	$addflag=$_POST['addflag'];
	$db=new mysqli();
	$db->mysql_connect("localhost","root","question");
	if($db->connect_error)
	{
		echo "Cannot connect to the mysql!";
	}
	$query="INSERT into user values('$addaddress','$addflag')";
	$result=$db->mysql_query($query);
	if(!$result)
	{
		echo "Cannot add the word!"
	}
	$db->close();
?>