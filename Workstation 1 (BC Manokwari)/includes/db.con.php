<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="Shut.Up.05";
$dbname="learning_databases";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

echo "Hello There !"
?>