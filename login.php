<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "project";

$con = mysqli_connect($localhost, $username, $password, $database);

if (!$con) {
    echo"connection failed" . mysqli_error();
} 
$user = filter_input(INPUT_POST, "username");
$pass = filter_input(INPUT_POST, "password");
$select = "SELECT username,passw FROM login WHERE username = '$user' AND passw = '$pass' ";
$query = mysqli_query($con, $select);
while ($row = mysqli_fetch_assoc($query)) {
    $_SESSION["user"] = $row["username"];
    $_SESSION["password"] = $row["passw"];
    if(empty($_SESSION["user"]) || empty($_SESSION["password"])){
        echo '';
    }
    else{
        header("Location:panel.php");
    }
}

