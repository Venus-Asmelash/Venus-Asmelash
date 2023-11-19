<?php
$servername = "localhost";
$usrename ="root";
$password="";
$dbname="venus";

$conn = new mysqli($servername, $usrename, $password, $dbname);

echo "The Database Connection is working!";

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?> 