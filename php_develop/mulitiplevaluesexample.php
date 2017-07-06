<?php

	if (isset($_POST['submit'])) {
		# code...
		echo "You like the following languages:<br   />";

		foreach ($_POST['languages'] AS $language) {
			# code...
			$language  =  htmlentities($language);

			echo "$language<br   />";
		}
	}
?>