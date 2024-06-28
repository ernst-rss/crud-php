<?php
    include 'config.php';

    $sql = "SELECT *  FROM users where current_login = 1";
    $result = $conn->query($sql);
    $first_row = $result->fetch_assoc();
    $id = $first_row["id"];

    if ($_POST['action'] == "update") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'";
        $result = $conn->query($sql);

        header("Location: menu.php");
        $conn->close();
        exit;
    }

    elseif ($_POST['action'] == "delete") {
        $sql = "DELETE FROM users WHERE id='$id'";
        $result = $conn->query($sql);

        header("Location: log_in.php");
        $conn->close();
        exit;
    }

?>