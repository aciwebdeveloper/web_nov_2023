<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Handling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>



<?php

//how to connect database in php

$server = 'localhost';
$db_name = 'web_11_2023';
$username = 'root';
$password = '';

$connection = new mysqli($server, $username, $password, $db_name);

if ($connection->connect_error)
{
    echo 'Not Connected '.$connection->error;
    die();
}
//  * = denote (All)

$mySql = "SELECT * FROM users WHERE status=1 ";
$result = $connection->query($mySql);
?>
<div class="container">
    <div class="row">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Father Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">DOB</th>
            <th scope="col">Status</th>
            <th scope="col">Created At</th>
        </tr>
        </thead>
        <tbody>
        <?php


        if ($result->num_rows > 0)
        {
            while ($row  = $result->fetch_assoc())
            {
                echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['f_name'].'</td>';
                echo '<td>'.$row['email'].'</td>';
                echo '<td>'.$row['password'].'</td>';
                echo '<td>'.$row['dob'].'</td>';
                echo '<td>'.$row['status'].'</td>';
                echo '<td>'.$row['created_at'].'</td>';
                echo '</tr>';
            }
        }


        ?>

        </tbody>
    </table>

    </div>

</div>

