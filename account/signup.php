<?php
session_start();

include("connection.php");
include("functions.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // data was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //save to db;
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
        
        
        mysqli_query($con, $query);

        header("Location: login.php");
    }
    else {
        echo "Please enter some valid information";
    }
};


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ERGs Recoveries" />
    <meta property="og:description" content="Official Grand Theft Auto V Recovery Service. Our service has the most fast, trustworthy and cheap recovery packages. Our menus don't get banned and your info is never saved." />
    <meta property="og:url" content="https://cheapgta.com" />
    <meta property="og:image" content="/images/icon.png" />
    <title>GTA 5 Recovery Service</title>


    <link href="/css/custom.min.css" rel="stylesheet"> <!-- Bootstrap 5 custom sass file (compiled)-->
    <link href="/css/stylesheet.css" rel="stylesheet">
    <link href="/css/specific.css" rel="stylesheet">
    <link href="/images/icon.png" rel="icon">
</head>

<body>

    <form method="POST" style="border: 3px solid black;">
        <div>
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="user_name">
        </div>

        <div>
            <label class="form-label">Password</label>
            <input type="text" class="form-control" placeholder="Password" name="password">
        </div>
        <input class="btn btn-primary" value="Login" type="submit">
    </form>
</body>

</html>