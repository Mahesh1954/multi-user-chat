<?php
$conn = new mysqli("localhost", "username", "password", "chatapp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
?>