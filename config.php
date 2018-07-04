<?php
require 'php/rb.php';
 R::setup('mysql:host=127.0.0.1;dbname=fsociety', 'root', '');
 session_start();

 if (!R::testConnection() ) {
 	exit('Нет соединения с базой данных :c');
 }
?>