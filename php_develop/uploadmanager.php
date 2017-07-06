<?php

	define ("FILEREPOSITORY","/home/www/htdocs/class/classnotes/");

	if(is_uploaded_file($_FILES['classnotes']['tmp_name'])){
		if($_FILES['classnotes']['type']!="application/pdf"){
			echo "<p>Class notes must be upload in PDF format.</p>";
		}
		else{
			$name  =  $_POST['name'];
			$result  =  move_uploaded_file($_FILES['classnotes']['tmp_name'], FILEREPOSITORY."/$name.pdf");

			if($result==1)
				echo "<p>File successfully uploaded</p>";
			else
				echo "<p>There was a problem uploading the file.</p>";
		}
	}
?>