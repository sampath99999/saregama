<?php

//SECTION session started
session_start();

//SECTION Checking if already logged in
if(isset($_SESSION['userid'])){}else{
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
</head>
<body class="admin">
    <div class="header">
        <div class="left">
            <div class="brand">
                Sarigama
            </div>
        </div>
    </div>
</body>
</html>