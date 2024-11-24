<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address']

$mysqli = new mysqli('rds-hostname', 'username', 'password', 'databasename');
if ($mysqli->connect_errno) {
    die('Failed to connect to MySQL: ' . $mysqli->connect_error);
}

$query = "INSERT INTO customers (name, email, phone) VALUES ('$name', '$email', '$phone','$address')";
if (!$result = $mysqli->query($query)) {
    die('Error executing query: ' . $mysqli->error);
}

$mysqli->close();

echo 'Customer information saved successfully!';
?>