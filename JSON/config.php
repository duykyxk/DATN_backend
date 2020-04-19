<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "family";
/////////////////////////////////////////////connection .///////////////////////////////////////////
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$serveradd='http://'.$_SERVER['SERVER_NAME'].'/app_dashoard/';

define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_NAME','map');
 define('DB_HOST','localhost');