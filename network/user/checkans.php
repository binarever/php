<?php
	$id=$_POST['id'];
	$flag=$_POST['flag'];
	$db=mysql_connect("localhost","root","question");
	if($id=="")
	{
		echo "<script type='text/javascript'>alert('Please input the id');</script>";
	}
	else if ($flag=="")
	{
		echo "<script type='text/javascript'>alert('Please input the flag');</script>";
	}
	else
	{
		$query  =  "SELECT flag FROM questions WHERE id='$id'";
		if ($query==$flag)
		{
			echo "Congratulations, you get the right answer!";
		}
		else
		{
			echo "Sorry, wrong answer!";
		}
	}
?>
