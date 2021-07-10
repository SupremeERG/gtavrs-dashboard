<?php

$dbhost = "localhost";
$dbuser = "supremee_admin";
$dbpwd = "PK\$MI^uZQMYN";
$dbname = "supremee_accs";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname))
{
    die("failed to connect $dbpwd");
}







?>