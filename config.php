<?php
$db_host = "localhost";
$db_user = "Login_page";
$db_password = "pradeep123";
$db_name = "my_database";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
