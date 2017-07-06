<?php
	require("NODECLASS.php");

	class ForumTopic extends Node{
		private $debugMessage;

		public function __construct(){
			parent::__construct();
			$this->debug(__CLASS__."constructor called.");
		}

		public function __destruct(){
			$this->debug(__CLASS__."destructor called.");
			parent::__destruct();
		}

		public function getView(){
			return "This is a view into ".__CLASS__;
		}
	}

	$forum=new ForumTopic();
?>