<?php
	$deleteid=$_POST['deleteid'];
	$db=new mysqli();
	$db->mysql_connect("localhost","root","question");

	if($db->connect_error)
	{
		echo "Cannot connect to the database!";
		exit();
	}

	if ($deleteid=="")
	{
		echo "ID cannot be blank!";
	}

	if ($changeid!=""&&$changeflag!=""&&$changeaddress=="")
	{
		$query="DELETE  FROM questions WHERE id='$deleteid'";
		$result=$db->mysql_query($query);

		if ($result)
		{
			echo "execute successfully";
		}
		else
		{
			echo "execute faily";
		}
		exit();
	}

	$db->close();
?>