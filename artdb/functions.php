<?php

$dbhost = 'localhost';
$dbname = 'artdatabase';
$dbuser = 'root';
$dbpass = 'root';

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($con->connect_error) die($connection->connect_error);


function queryMysql($query) {
    global $con;
    $result = $con->query($query);
    if (!$result)
        die($con->error);
    return $result;
}