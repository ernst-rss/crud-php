<?php
    include 'config.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($_POST['action'] == "login") {

        $sql = "SELECT *  FROM users where username = '$username' AND password = '$password' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $sql = "UPDATE users SET current_login = '1' where username = '$username' AND password = '$password' ";
            $result = $conn->query($sql);
            $conn->close();
        }
        else {
            header("Location: log_in.php");
            $conn->close();
            exit;
        }
    }

    elseif ($_POST['action'] == "signup") {
        
        $sql = "SELECT *  FROM users where username = '$username' AND password = '$password' ";
        $result = $conn->query($sql);

        if ($result->num_rows == 0) {
            $sql = "INSERT INTO users (username, password, current_login) VALUES ('$username', '$password', '1')";
            $result = $conn->query($sql);
            $conn->close();
        }
        else {
            header("Location: log_in.php");
            $conn->close();
            exit;
        }
    }

    header("Location: menu.php");
    exit;
?>