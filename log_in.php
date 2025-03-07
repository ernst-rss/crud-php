<?php
    include 'config.php';

    $sql = "UPDATE users SET current_login = '0' WHERE id > 0";
    $result = $conn->query($sql);
    $conn->close();


?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        
        <div class="container">
            <form method="post" action="auth.php">
                <div class="row m-3 p-3">
                    <label class="col-md-3">Username</label>
                    <input type="text" name="username" class="col-md-9" required>
                </div>

                <div class="row m-3 p-3">
                    <label class="col-md-3">Password</label>
                    <input type="password" name="password" class="col-md-9" required>
                </div>

                <div class="row">
                    <button type="submit" name="action" value="login" class="btn btn-primary m-3">Log in</button>
                    <button type="submit" name="action" value="signup" class="btn btn-primary m-3">Sign Up</button>
                </div>
            </form>
        </div>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    </body>
</html>