<?php
	
	require_once  "HTML/QuickForm.php";

	$languages  =  array(
		'c#'  =>  'c#',
		'JavaScript'  =>  'JavaScript',
		'Perl'  =>  'Perl',
		'PHP'  =>  'PHP'
	);

	$form  =  new HTML_QuickForm("languages");

	$form->addElement('text',  'username',  'You  name:  ',array('size'  =>  20,  'maxlength'  =>  40));

	$form->addElement('text','email','E-mail address: ',array('size'  =>  20,  'maxlength'  =>  50));

	$select  =&  $form->addElement('select','languages','Your favorite <br   />programming languages:',$languages);

	$select ->setMultiple(1);

	$form->addElement('submit',null,'Submit!');

	$form->display();

?>