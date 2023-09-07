<?php
session_start();
if(isset($_SESSION['username'])){
    if($_SESSION['usertype']==='student'){
        header("location: studenthome.php"); 
    }
    if($_SESSION['usertype']==='admin'){
        header("location: adminhome.php"); 
    }
    exit();
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/output.css">
    <title>Document</title>
</head>

<body background="./img/school2.jpg" class="bg-no-repeat bg-cover bg-fixed">
    <div class="w-[400px] m-auto">
        <form action="./functions/login_check.php" method="post" class="mt-[100px] bg-slate-50 p-4">
            <div class="bg-slate-400 py-3 mb-3">
                <h2 class="text-center text-white text-xl font-semibold">Login Form</h2>
                <h4>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo  $_SESSION['loginMessage']
                    ?>
                </h4>
            </div>
            <div class="mb-3">
                <label class="mb-2">Username</label>
                <input class="form-input" name="username" />
            </div>
            <div>
                <label>Password</label>
                <input class="form-input" name="password" />
            </div>
            <div class="text-center mt-3">
                <input class="px-3 py-1 text-white font-semibold bg-blue-700 rounded-lg" type="submit" name="submit" />
            </div>
        </form>
    </div>
</body>

</html>