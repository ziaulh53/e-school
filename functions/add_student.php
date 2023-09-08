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

if(isset($_POST['add'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $sqlCheck = "SELECT * FROM user WHERE username = '$username'";
    $check = mysqli_query($data, $sqlCheck);

    $count= mysqli_num_rows($check);
    if($count===1){
        echo "<script type='text/javascript'>
        function goTo(){
            window.history.back()
        }
        alert('User already exist', goTo());
        </script>";
    } else {
        $sql = "INSERT INTO user(username,phone,email,usertype,password) VALUES ('$username', '$phone', '$email', 'student', '$password')";
        $result = mysqli_query($data, $sql);
        if($result){
            header('location: /student-management/add_student.php');

        }
    }
   
}

?>