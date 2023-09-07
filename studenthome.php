<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location: login.php");

} else {
    if($_SESSION['usertype']==='admin'){
        header("location: adminhome.php"); 
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student dashboard</title>
</head>
<body>
    <div>
        student home
    </div>
    <a href="./functions/logout.php">Logout</a>
</body>
</html>