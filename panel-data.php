<?php

$localhost = "localhost";
$username = "root";
$password = "";
$database = "project";

$con = mysqli_connect($localhost, $username, $password, $database);

if (!$con) {
    echo"connection failed" . mysqli_error();
}
$idnum = filter_input(INPUT_POST, "idnum");
$first = filter_input(INPUT_POST, "first");
$last = filter_input(INPUT_POST, "last");
$status = filter_input(INPUT_POST, "status");
$contact = filter_input(INPUT_POST, "contact");
$phone = filter_input(INPUT_POST, "phone");
$email = filter_input(INPUT_POST, "email");
$textarea = filter_input(INPUT_POST, "textarea");

if (empty($idnum)||empty($first) || empty($last) || empty($status) || empty($contact) || empty($phone) || empty($email) || empty($textarea)) {
    echo '';
} else {
    $insert = "INSERT INTO panel(idnum,firstn,lastn,stat,contact,phone,email,textarea) "
            . "VALUES('$idnum','$first','$last','$status','$contact','$phone','$email','$textarea')";
    $query = mysqli_query($con, $insert);
    $_SESSION['query'] = $query;
}