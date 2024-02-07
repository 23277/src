<?php
$servername ="localhost";
$username ="charity23000";
$password ="wTiAl03s";
$dbname ="wp_charity23000";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




?>