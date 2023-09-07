<?php
session_start();

$host = 'localhost';

$user = "root";

$password = "";

$db = "e-school";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '" . $name . "' AND password='" . $pass . "'";
    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);


    if ($row["usertype"] === 'student') {
        $_SESSION['username'] = $name;
        $_SESSION['usertype'] = 'student';
        header("location: /student-management/studenthome.php");
    } elseif ($row["usertype"] === 'admin') {
        $_SESSION['username'] = $name;
        $_SESSION['usertype'] = 'admin';

        header("location: /student-management/adminhome.php");
    } else {
        $message =  "username or password dont match";
        $_SESSION['loginMessage'] = $message;
        header("location: /student-management/login.php");
    }
    exit();
}
