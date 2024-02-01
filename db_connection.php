<?php

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