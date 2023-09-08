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
    $name = $_POST['name'];
    $description = $_POST['description'];
    $file = $_FILES['image']['name'];
    $dst = "../image/".$file;
    $dst_db = "image/".$file;
    move_uploaded_file($_FILES['image']['tmp_name'],$dst);

    $sqlCheck = "SELECT * FROM teacher WHERE name = '$name'";
    $check = mysqli_query($data, $sqlCheck);

    $count= mysqli_num_rows($check);
    if($count===1){
        echo "<script type='text/javascript'>
        function goTo(){
            window.history.back()
        }
        alert('Teacher already exist', goTo());
        </script>";
    } else {
        $sql = "INSERT INTO teacher(name,description,image) VALUES ('$name', '$description', '$dst_db')";
        $result = mysqli_query($data, $sql);
        if($result){
            header('location: /student-management/all_teachers.php');

        }
    }
   
}

?>