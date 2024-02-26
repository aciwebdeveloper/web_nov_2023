<?php
session_start();
include 'db_connection.php';



if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST['login_button']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fetch_query = "SELECT * FROM users WHERE email = '$email' and password = '$password' ";
        $result = $connection->query($fetch_query);

        if ($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];

            header('location: ./mySqlPHP.php');
        }
        else
        {
            $_SESSION['error'] = 'Your Email or Password Invalid!!';
            header('location: hospital');
        }

    }
    else
    {
        $s_name = $_POST['name'];
        $f_name = $_POST['f-name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO `users` (`name`, `f_name`, `email`, `password`, `dob`, `gender`) VALUES ('$s_name', '$f_name', '$email', '$password', '$dob', '$gender')";
        $connection->query($sql);

        header('location: hospital');

    }

}

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    $user_id = $_GET['user_id'];
   $mydeleteSql = "DELETE FROM users WHERE id = $user_id";
    $connection->query($mydeleteSql);

    header('location: mySqlPHP.php');

}

class abc{
    function __construct(){

    }
}

$abc= new abc();
