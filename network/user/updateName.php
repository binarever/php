<?php
	if(isset($_POST['submit']) && !empty($_POST['username'])) {
	$clean_username = clean_input($_POST['username']);
	$clean_user_id = clean_input($_POST['id']);
	$query = "SELECT * FROM users WHERE user_name = 'clean_username'";
    	$data = mysqli_query($dbc, $query);
		if (mysqli_num_rows($data) == 1) {
			$_SESSION['error_info'] = '用户名已存在';
			header('Location: edit.php');
		}
	$query = "UPDATE users SET user_name = '$clean_username' WHERE user_id = '$clean_user_id'";
	mysqli_query($dbc,$query) or die("updata error!");
	mysqli_close($dbc);
	$_SESSION['username'] = $clean_username;
	header('Location: edit.php');
	}
	else {
		not_find($_SERVER['PHP_SELF']);
	}
?>