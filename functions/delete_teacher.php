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

if($_GET['teacher_id']){
    $user_id = $_GET['teacher_id'];
   $sql = "DELETE FROM teacher WHERE id='$user_id'";
   $result = mysqli_query($data, $sql);
   if($result){
    header("location: /student-management/all_teachers.php");
   }
}
