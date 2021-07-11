<?php
session_start();

if(isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
}

header("Location: login.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ERGs Recoveries" />
    <meta property="og:description" content="Official Grand Theft Auto V Recovery Service. Our service has the most fast, trustworthy and cheap recovery packages. Our menus don't get banned and your info is never saved." />
    <meta property="og:url" content="https://cheapgta.com" />
    <meta property="og:image" content="/images/icon.png" />
    <title>GTA 5 Recovery Service</title>
    <link href="/images/icon.png" rel="icon">
</head>

</html>