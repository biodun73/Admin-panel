<?php
session_start();
include 'login.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="color.css">
    </head>
    <body>
        <div class="log">
            <form method="post" action="">
                <input type="text" name="username" placeholder="Username"><!-- username -->
                <input type="password" name="password" placeholder="Password"><!-- Password -->
                <input type="submit" name="submit" value="Login">
            </form>
        </div>
        <?php
     
        ?>
    </body>
</html>
