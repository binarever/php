<?php
	session_start();
	if ($__POST&&$__POST['token']==$__SESSION['token']){
		//process form submission
	}else{
		$token=uniqid(rand(),true);
		$__SESSION['token']=$token;
	}
?>

<form method="post" action="http://example.com/oneclickpurchase.php">
	<input type="hidden" name="token" value="<?php echo $token; ?>" />
	<input type="hidden" name="product_id" value="12345"/ >
	<input type="submit" value="1-Click Purchase" / >
</form>