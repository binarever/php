<?php
	
	require_once "HTML/QuickForm.php";

	$form  =  new HTML_QuickForm("login");

	$form->addElement('text','username','Your name: ',array('size'=>20,'maxlength'=>40));

	$form->addElement('text','email','E-mail address: ',array('size'=>20,'maxlength'=>40));

	$form->addRule('username','Please provide your username.','required',null,'client');

	$form->addElement('submit',null,'Submit!');

	if($form->validate())
	{
		echo "Welcome to the restricted site,".htmlspecialchars($form->exportValue('username')).".";
	}

	$form->display()
?>