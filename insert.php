<?php

include 'db_connection.php';



if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $s_name = $_POST['name'];
    $f_name = $_POST['f-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `users` (`name`, `f_name`, `email`, `password`, `dob`, `gender`) VALUES ('$s_name', '$f_name', '$email', '$password', '$dob', '$gender')";
    $connection->query($sql);

    header('location: mySqlPHP.php');
}

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    $user_id = $_GET['user_id'];
   $mydeleteSql = "DELETE FROM users WHERE id = $user_id";
    $connection->query($mydeleteSql);

    header('location: mySqlPHP.php');

}