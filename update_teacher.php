<?php
require_once('./admin_sidebar.php');
$user_id = $_GET['teacher_id'];
$host = 'localhost';

$user = "root";

$password = "";

$db = "e-school";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("connection error");
} else {
    $sql = "SELECT * FROM teacher WHERE id='$user_id'";
    $result = mysqli_query($data, $sql);
    $info = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $file = $_FILES['image']['name'];
    echo $file;
    if (empty($file)) {
        $dst_db = $info['image'];
    } else {
        $dst = "./image/" . $file;
        $dst_db = "image/" . $file;
        move_uploaded_file($_FILES['image']['tmp_name'], $dst);
    }

    $query = "UPDATE teacher SET name='$name', description='$description', image='$dst_db' WHERE id='$user_id'";
    $res = mysqli_query($data, $query);

    if ($res) {
        header("location: all_teachers.php");
    }
}
?>
<div class="p-6 w-full">
    <div class="bg-slate-100 h-full p-5">
        <h1 class="text-2xl font-semibold">Add Student</h1>
        <form class="w-[300px] mt-5" action="#" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="font-semibold block mb-1">Name</label>
                <input class="w-full border border-gray-400 rounded-md px-5 py-2" type="text" name="name" value="<?php echo $info['name'] ?>" />
            </div>
            <div class="mb-3">
                <label class="font-semibold block mb-1">Description</label>
                <textarea class="w-full border border-gray-400 rounded-md px-5 py-2" name="description"><?php echo $info['description'] ?></textarea>
            </div>
            <div class="mb-3">
                <label class="font-semibold block mb-1">Image</label>
                <img class="h-[100px]" src="<?php echo $info['image'] ?>" />
                <input type="file" name="image" />
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