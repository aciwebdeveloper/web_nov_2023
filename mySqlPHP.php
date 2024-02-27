<?php
//session_start();
//session_destroy();
//if (!isset($_SESSION['user_id']))
//{
//    header('location: hospital');
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Handling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="row" style="margin-top: 40px;">
        <a href="./class-3.php" class="btn btn-info mb-2" style="text-align: right; margin: 5px;width: 100px"> Add Student</a>
    <table class="table border table-striped table-border">
        <thead>
        <tr class="text-center">
            <th scope="col" class="text-center">ID</th>
            <th scope="col" class="text-center">Name</th>
            <th scope="col" class="text-center">Father Name</th>
            <th scope="col" class="text-center">Email</th>
            <th scope="col" class="text-center">Password</th>
            <th scope="col" class="text-center">DOB</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col" class="text-center">Created At</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php


        if ($result->num_rows > 0)
        {
            while ($row  = $result->fetch_assoc())
            {
                echo '<tr class="text-center">';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['f_name'].'</td>';
                echo '<td>'.$row['email'].'</td>';
                echo '<td>'.$row['password'].'</td>';
                echo '<td>'.$row['dob'].'</td>';
                echo '<td>'.$row['status'].'</td>';
                echo '<td>'.$row['created_at'].'</td>';
                echo '<td><a class="" href="./insert.php?user_id='.$row['id'].'"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>  <a style="margin-left: 5px;" href="./edit_form.php?user_id='.$row['id'].'"><i class="fa fa-edit text-info" aria-hidden="true"></i></a></td>';
                echo '</tr>';
            }
        }


        ?>

        </tbody>
    </table>

    </div>

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

