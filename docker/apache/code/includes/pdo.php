<?php
$host = "localhost";
$port = "3306";
$database = "testcakephp";
$user = "nathanlepron";
$password = "myw4kh5b&";

$db = new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connexion à la base de donnée
$db->exec("SET NAMES UTF8");
?>