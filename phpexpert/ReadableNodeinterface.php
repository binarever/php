<?php
	interface ReadableNode{
		public function isread();
		public function markAsRead();
		public function markAsUnread();
	};
?>