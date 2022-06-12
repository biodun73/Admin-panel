<?php
session_start();
$localhost = "localhost";
$username = "root";
$password = "";
$database = "project";

$con = mysqli_connect($localhost, $username, $password, $database);

if (!$con) {
    echo"connection failed" . mysqli_error();
}
$search = filter_input(INPUT_GET, 'search');
$select = "SELECT * FROM panel WHERE idnum like '%$search%'";
$query = mysqli_query($con, $select);
while ($row = mysqli_fetch_assoc($query)) {
    $_SESSION['id'] = $row['idnum'];
    $_SESSION['first'] = $row['firstn'];
    $_SESSION['last'] = $row['lastn'];
    $_SESSION['stat'] = $row['stat'];
    $_SESSION['contact'] = $row['contact'];
    $_SESSION['phone'] = $row['phone'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['textarea'] = $row['textarea'];     
}

