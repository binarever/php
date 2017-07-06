<?php
/*This is the main page.
*This page includes the configuration file,
*the template , and any content-specific modules.
*/

//Require the configuration file before any PHP code:
require('./includes/config.inc.php');

//Validate what page to show:
if(isset($_GET['p'])){
	$p=$_GET['p'];
}
elseif(isset($_POST['p'])){
	$p=$_POST['p'];
}
else{
	$p=NULL;
}

//Determine what page to display
switch($p){
	case 'about':
		$page='about.inc.php';
		break;

	case 'contact':
		$page='contact.inc.php';
		$page_title='Contact Us';
		break;

	case 'search':
		$page='search.inc.php';
		$page_title='Search Results';
		break;

	default:
		$page='main.inc.php';
		$page_title='Site Home Page';
		break;

} //End of main switch.

//Make sure the file exist
if(!file_exists('./modules'.$page)){
	$page='main.inc.php';
	$page_title='Site Home Page';
}

//Include the header file
include('./includes/header.html');

//Include the contact-specific module:
//$page is determined from the above switch.
include('./modules'.$page);

//Include the footer file to complete the template:
include('./includes/footer.html');

?>