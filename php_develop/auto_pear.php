<?php

	require 'HTML/QuickForm.php';

	$teams  =  array('Steelers','Seahawks','Steel Curtains');

	$form  =  new HTML_QuickForm();

	$element  =  & $form->addElement('autocomplete','teams','Favorite Football Team:');

	$element->setOptions($teams);

	$form->display();
?>