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
    } else {
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/images/icon.png" class="icon" alt="GTA V Recovery Service">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shortcut
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">some recovery pkg</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Another action</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/store/checkout">Checkout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="center" style="margin-top: 6em;">
        <form method="POST" style="border: 3px solid black;">
            <div>
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="user_name">
            </div>

            <div>
                <label class="form-label">Password</label>
                <input type="text" class="form-control" placeholder="Password" name="password">
            </div>
            <input class="btn btn-primary" value="Create Account" type="submit">
        </form>
    </div>
</body>

</html>