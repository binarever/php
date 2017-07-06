<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'question';
$dbc = mysqli_connect($host, $username, $password, $database);
if (!$dbc)
{
	die('Could not connect: ' . mysql_error());
}

session_start();
include_once('lib.php');
?>