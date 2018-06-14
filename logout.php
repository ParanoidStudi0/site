<?php
include 'php/rb.php';
session_start();
if (isset($_SESSION['logged_user'])) {
	unset($_SESSION['logged_user']);
	session_destroy();
	header('Location: http://paranoidstudio/');
} else {
	echo "0_0";
} 
