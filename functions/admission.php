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


echo isset($_POST['apply']);
if(isset($_POST['apply'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO admission(name,email,phone,message) VALUES ('$name', '$email', '$phone', '$message')";
    $result = mysqli_query($data, $sql);
    if($result){
        header("location: /student-management");
    }
}

?>