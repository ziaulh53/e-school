<?php
require_once('./admin_sidebar.php');
$host = 'localhost';

$user = "root";

$password = "";

$db = "e-school";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("connection error");
} else {
    $sql = "SELECT * FROM teacher";
    $result = mysqli_query($data, $sql);
}

?>
<div class="p-6 w-full">
    <div class="bg-slate-100 h-full p-5">
        <h1 class="text-2xl font-semibold">All Teachers</h1>

        <table class="w-full mt-5 p-2">
            <tr>
                <th class="border-2 border-gray-300 text-start px-3 py-1">Name</th>
                <th class="border-2 border-gray-300 text-start px-3 py-1">Description</th>
                <th class="border-2 border-gray-300 text-start px-3 py-1">Image</th>
                <th class="border-2 border-gray-300 text-start px-3 py-1">Action</th>
            </tr>
            <?php
            while ($info = $result->fetch_assoc()) {
            ?> <tr>
                    <td class="border border-gray-300 px-3 py-2">
                        <?php
                        echo $info['name'];
                        ?>
                    </td>
                    <td class="border border-gray-300 px-3 py-2">
                        <?php
                        echo $info['description'];
                        ?>
                    </td>
                    <td class="border border-gray-300 px-3 py-2">
                        <img class="h-[70px] w-full object-cover" alt="teacher" src="<?php echo $info['image']; ?>" />
                    </td>

                    <td class="border border-gray-300 px-3 py-2">
                        <?php
                        echo "<span class='bg-red-500 px-2 py-1 text-white text-sm'><a onClick=\"javascript:return confirm('Are you sure?');\" href='./functions/delete_teacher.php?teacher_id={$info['id']}'>Delete</a></span> 
                        <span class='bg-green-800 px-2 py-1 text-white text-sm ml-2'><a href='update_teacher.php?teacher_id={$info['id']}'>Edit</a></span>";
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>
    </div>
</div>
</div>


</body>

</html>