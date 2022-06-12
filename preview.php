<?php
include './view-data.php';
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
</head>
<body>
    <h1 style="text-align: center;">Information preview </h1>
    <div  style="width: 50%;margin: auto; background-color: red;margin-top: 50px;padding: 150px; ">        
        <form method="POST" action="" style="float: left">
            <input type="submit" name="submit" value="Back">
        </form>
        <form method="GET" action="">
            <input type="search" name="search" size="70">
            <input type="submit" name="submit" value="Search"><br><br>
        </form>
        <?php
        //display the table data
        echo "<table  style='border-bottom:2px solid black;'>";
        echo"<tr>";
        echo"<th>" . 'Identification Number' . "</th>";
        echo"<td>" . $_SESSION["id"] . "</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<th>" . 'Firstname' . "</th>";
        echo"<td>" . $_SESSION["first"] . "</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<th>" . 'Lastname' . "</th>";
        echo"<td>" . $_SESSION['last'] . "</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<th>" . 'Status' . "</th>";
        echo"<td>" . $_SESSION['stat'] . "</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<th>" . 'Contact' . "</th>";
        echo"<td>" . $_SESSION['contact'] . "</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<th>" . 'Phone Number' . "</th>";
        echo"<td>" . $_SESSION['phone'] . "</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<th>" . 'Email Address' . "</th>";
        echo"<td>" . $_SESSION['email'] . "</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<th>" . 'Comments' . "</th>";
        echo"<td>" . $_SESSION['textarea'] . "</td>";
        echo"</tr>";
        echo"</table>";
        ?>
        <?php
        $back = filter_input(INPUT_POST, 'submit');
        if (isset($back)) {
            header("Location:panel.php");
        }
        ?>
    </div>
</body>
</html>
