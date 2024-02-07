<?php
$servername ="php24-db-1";
$username ="crud_app";
$password ="charity4945";
$dbname ="crud_app";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




?>