<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");
} else {
    if ($_SESSION['usertype'] === 'student') {
        header("location: studenthome.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/output.css">
    <title>Admin</title>
</head>

<body>
    <header class="w-full bg-sky-600 h-[70px] flex justify-between items-center px-10">
        <a href="" class="text-white">Admin Dashboard</a>
        <div>
            <a href="./functions/logout.php" class="text-white cursor-pointer bg-sky-800 px-3 py-1 rounded-lg" type="button">Logout</a>
        </div>
    </header>
    <div class="flex">
        <aside class="bg-blue-950 w-[16%] min-h-[calc(100vh-70px)]">
            <ul class="p-3 text-center pt-14">
                <li class="list-none pb-[30px] text-lg text-white font-bold">
                    <a href="admission.php" class="hover:underline">Admission</a>
                </li>
                <li class="list-none pb-[30px] text-lg text-white font-bold">
                    <a href="add_student.php" class="hover:underline">Add Student</a>
                </li>
                <li class="list-none pb-[30px] text-lg text-white font-bold">
                    <a href="all_student.php" class="hover:underline">View Student</a>
                </li>
                <li class="list-none pb-[30px] text-lg text-white font-bold">
                    <a href="add_teacher.php" class="hover:underline">Add Teacher</a>
                </li>
                <li class="list-none pb-[30px] text-lg text-white font-bold">
                    <a href="all_teachers.php" class="hover:underline">View Teacher</a>
                </li>
                <li class="list-none pb-[30px] text-lg text-white font-bold">
                    <a href="" class="hover:underline">Add Course</a>
                </li>
                <li class="list-none pb-[30px] text-lg text-white font-bold">
                    <a href="" class="hover:underline">View Course</a>
                </li>
            </ul>
        </aside>