<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "PHP_SIMPLE_PROJECT";
$conn = new msqli($host, $user, $pass, $db);
if($conn->connect_error) {
    echo "Failed to connect to database (DB)".$conn->connect_error;
}
?>