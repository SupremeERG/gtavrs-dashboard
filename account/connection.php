<?php

$dbhost = "150.238.207.10";
$dbuser = "supremee_admin";
$dbpwd = "PK\$MI^uZQMYN";
$dbname = "supremee_accs";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname))
{
    die("failed to connect $dbpwd");
}







?>