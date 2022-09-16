<?php

//SECTION session started
session_start();

//SECTION Checking if already logged in
if (isset($_SESSION['userid'])) {
} else {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard || Sarigama</title>

    <script src="https://kit.fontawesome.com/3b6311e0b4.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="./../css/main.css">
</head>

<body class="adminDashboard">
    <div class="sidebar">
        <div class="brand">
            <i class="fas fa-music"></i>
            Sarigama
        </div>
        <div class="menu">
            <strong class="title">MENU</strong>
            <ul>
                <li>
                    <i class="fas fa-home"></i>
                    Home
                </li>
                <li>
                    <i class="fa fa-music"></i>
                    Artists
                </li>
                <li>
                    <i class="fas fa-camera"></i>
                    Movies
                </li>
                <li>
                    <i class="fas fa-user"></i>
                    Users
                </li>
            </ul>
        </div>
    </div>
    <div class="content">

    </div>
</body>

</html>