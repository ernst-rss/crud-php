<?php
    $servername = "localhost";
    $username = "php_crud_user";
    $password = "p";
    $dbname = "crud_php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>