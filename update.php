<?php

include 'db_connection.php';



if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $user_id = $_POST['user_id'];
    $s_name = $_POST['name'];
    $f_name = $_POST['f-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    $update_sql = "UPDATE `users` SET `name`='$s_name',`f_name`='$f_name',`email`='$email',`password`='$password',`dob`='$dob',`gender`='$gender' WHERE id = $user_id";
    $connection->query($update_sql);

    header('location: mySqlPHP.php');
}
