<?php

require_once('db.php');
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO 'username' (username, password) VALUES ('$login', '$password')";

$conn -> query($sql);
