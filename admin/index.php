<?php
//SECTION Starting Session
session_start();

//SECTION Checking if already logged in
if(isset($_SESSION['userid'])){
    header('Location: admin/dashboard.php');
}

//SECTION Initiliazing Variables
$username = $password = "";

//SECTION Checking if Method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //SECTION Importing Modules Needed
    include_once "./important.php";

    //SECTION Getting Username and Password
    $username = $_POST["username"];
    $password = $_POST["password"];

    //SECTION Connecting to server
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //SECTION making and running Query
    $sql = "SELECT * FROM admin WHERE username='" . $username . "'";
    $result = $conn->query($sql);

    //SECTION getting query data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            
            //SECTION checking password
            if (md5($password) == $row['password']) {
                $_SESSION["userid"] = openssl_encrypt($row["id"],"AES-128-ECB", $encryptPassword);
                header('Location: dashboard.php');
            } else {
                echo "<style>.warning{display: block!important}</style>";
            }

        }
    } else {
        echo "<style>.warning{display: block!important}</style>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link rel="stylesheet" href="./../css/main.css">
</head>

<body class="admin">
    <div class="centerDiv">
        <p class="welcome">Welcome</p>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdQTJJdAulsFetW0hRcXdapptLEY1KKijciQ&usqp=CAU" alt="" class="namaste">
        <p class="warning">Wrong Username or Password!</p>
        <div class="logindiv">
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <input type="text" name="username" placeholder="Username...">
                <input type="password" name="password" placeholder="Password...">
                <button class="loginBtn">LOGIN</button>
            </form>
        </div>
    </div>
</body>

</html>