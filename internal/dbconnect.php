<?php
$user='root';
$pass='123456';
$host='localhost';
$db = 'bookstoredb';


$mysqli = new mysqli($host, $user, $pass, $db, null, '/home/student/it/2013/it134006/mysql/run/mysql.sock');
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . 
    $mysqli->connect_errno . ") " . $mysqli->connect_error;
}?>