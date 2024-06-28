<?php
    $sql = "SELECT *  FROM users where current_login = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $first_row = $result->fetch_assoc();
    }
    else {
        header("Location: log_in.php");
        $conn->close();
        exit;
    }
    $conn->close();
?>