<?php 

session_start();

require_once 'db_connect.php';

// echo $_SESSION['userId'];

if(!isset($_SESSION['userId'])) {
	header('location: http://localhost/IMS/index.php');	
} 



?>