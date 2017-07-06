<?php
	$changeid=$_POST['changeid'];
	$changeaddress=$_POST['changeaddress'];
	$changeflag=$_POST['changeflag'];
	$db=new mysqli();
	$db->mysql_connect("localhost","root","question") or die("Cannot connect to the database!");

	if ($changeid=="")
	{
		echo "ID cannot be blank!";
	}

	if ($changeid!=""&&$changeflag==""&&$changeaddress=="")
	{
		echo "Please input something different in the messagebox!";
	}

	if ($changeid!=""&&$changeflag!=""&&$changeaddress=="")
	{
		$query="DELETE flag FROM questions WHERE id='$changeid'";
		$result=$db->mysql_query($query);

		if(!$result)
		{
			echo "Cannot delete the word!";
			exit();
		}

		$query="INSERT into questions(flag) values '$changeflag' WHERE id='$changeid'";
		$result=$db->mysql_query($query);
		if ($result)
		{
			echo "execute successfully";
		}
		else
		{
			echo "execute faily";
		}
	}

	if ($changeid!=""&&$changeflag==""&&$changeaddress!="")
	{
		$query="DELETE address FROM questions WHERE id='$changeid'";
		$result=$db->mysql_query($query);

		if(!$result)
		{
			echo "Cannot delete the word!";
			exit();
		}

		$query="INSERT into questions(address) values '$changeaddress' WHERE id='$changeid'";
		if ($result)
		{
			echo "execute successfully";
		}
		else
		{
			echo "execute faily";
		}
	}
	$db->close();
?>