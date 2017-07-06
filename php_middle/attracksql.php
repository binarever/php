<?php
	if($__POST){
		$pdo=new PDO();
		$query='SELECT user_id FROM users WHERE username=" '.$__POST['username'].' " AND password= " '.$__POST['password'].' " ';
		$result=$pdo->query($query);
		if($user_id=$result->fetchColumn()){
			session_start();
			$__SESSION['user_id']=$user_id;
			//User is logged in,redirect to a different page
		}else{
			//Invaild login credentials,display an error
		}
	}
?>