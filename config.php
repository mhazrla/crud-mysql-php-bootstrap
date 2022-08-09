<?php 

//Web Config
$WEB_CONFIG = [
 'app_name' => 'AKN D P1', 
 'base_url' => 'http://localhost/bootstrap-mysql-php/'
];

//DB Config
$DB_CONFIG = [
 'host' => 'localhost',
 'user' => 'root',
 'passwd' => '',
 'db_name' => 'simak'
];  
$connect = mysqli_connect($DB_CONFIG['host'], $DB_CONFIG['user'], $DB_CONFIG['passwd'], $DB_CONFIG['db_name']);

 ?>