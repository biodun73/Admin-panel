<?php
include 'panel-data.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="colorpanel.css">
    </head>
    <body>
        <div class="panel">
            <h1>Admin Panel</h1>
            <form method="POST" action="">
                <input type="submit" name="submit1" value="Preview">
                <input type="submit" name="submit2" value="Log out">
            </form>
            <form method="POST" action="">
                <label>Identity Number</label><br>
                <input type="text" name="idnum"><br>
                <label>Firstname</label><br>
                <input type="text" name="first"><br>
                <label>Lastname</label><br>
                <input type="text" name="last"><br>
                <label>Status</label><br>
                <input type="text" name="status"><br>
                <label>Contact Address</label><br>
                <input type="text" name="contact"><br>
                <label>Phone Number</label><br>
                <input type="text" name="phone"><br>
                <label>Email Address</label><br>
                <input type="text" name="email"><br>
                <label>Comment</label><br>
                <textarea rows="10" cols="70" name="textarea"></textarea><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
        <?php
        $view = filter_input(INPUT_POST, 'submit1');
        $logout = filter_input(INPUT_POST, 'submit2');
        if (isset($view)) {
            header("Location:preview.php");
        }
        if (isset($logout)) {
            session_destroy();
            header("Location:index.php");
        }
        ?>
    </body>
</html>