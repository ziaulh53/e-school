<?php
require_once('./admin_sidebar.php');
$user_id = $_GET['student_id'];
$host = 'localhost';

$user = "root";

$password = "";

$db = "e-school";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("connection error");
} else {
    $sql = "SELECT * FROM user WHERE id='$user_id'";
    $result = mysqli_query($data, $sql);
    $info = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $query = "UPDATE user SET username='$username', email='$email', phone='$phone', password='$password' WHERE id='$user_id'";
    $res = mysqli_query($data, $query);

    if($res){
        header("location: all_student.php");
    }


}

?>
<div class="p-6 w-full">
    <div class="bg-slate-100 h-full p-5">
        <h1 class="text-2xl font-semibold">Add Student</h1>
        <form class="w-[300px] mt-5" action="#" method="post">
            <div class="mb-3">
                <label class="font-semibold block mb-1">Username</label>
                <input class="w-full border border-gray-400 rounded-md px-5 py-2" type="text" name="username" value="<?php echo $info['username'] ?>" />
            </div>
            <div class="mb-3">
                <label class="font-semibold block mb-1">Email</label>
                <input class="w-full border border-gray-400 rounded-md px-5 py-2" type="email" name="email" value="<?php echo $info['email'] ?>" />
            </div>
            <div class="mb-3">
                <label class="font-semibold block mb-1">Phone</label>
                <input class="w-full border border-gray-400 rounded-md px-5 py-2" type="number" name="phone" value="<?php echo $info['phone'] ?>" />
            </div>
            <div>
                <label class="font-semibold block mb-1">Password</label>
                <input class="w-full border border-gray-400 rounded-md px-5 py-2" type="text" name="password" value="<?php echo $info['password'] ?>" />
            </div>
            <div class="text-center mt-3">
                <input class="px-3 py-1 text-white font-semibold bg-blue-700 rounded-lg cursor-pointer" type="submit" value="Update" name="update" />
            </div>
        </form>
    </div>
</div>
</div>


</body>

</html>