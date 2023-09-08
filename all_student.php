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
    $sql = "SELECT * FROM user WHERE usertype='student'";
    $result = mysqli_query($data, $sql);
}

?>
<div class="p-6 w-full">
    <div class="bg-slate-100 h-full p-5">
        <h1 class="text-2xl font-semibold">All Students</h1>

        <table class="w-full mt-5 p-2">
            <tr>
                <th class="border-2 border-gray-300 text-start px-3 py-1">Name</th>
                <th class="border-2 border-gray-300 text-start px-3 py-1">Email</th>
                <th class="border-2 border-gray-300 text-start px-3 py-1">Phone</th>
                <th class="border-2 border-gray-300 text-start px-3 py-1">Password</th>
                <th class="border-2 border-gray-300 text-start px-3 py-1">Action</th>
            </tr>
            <?php
            while ($info = $result->fetch_assoc()) {
            ?> <tr>
                    <td class="border border-gray-300 px-3 py-2">
                        <?php
                        echo $info['username'];
                        ?>
                    </td>
                    <td class="border border-gray-300 px-3 py-2">
                        <?php
                        echo $info['email'];
                        ?>
                    </td>
                    <td class="border border-gray-300 px-3 py-2">
                        <?php
                        echo $info['phone'];
                        ?>
                    </td>
                    <td class="border border-gray-300 px-3 py-2">
                        <?php
                        echo $info['password'];
                        ?>
                    </td>
                    <td class="border border-gray-300 px-3 py-2">
                        <?php
                        echo "<span class='bg-red-500 px-2 py-1 text-white text-sm'><a onClick=\"javascript:return confirm('Are you sure?');\" href='./functions/delete_student.php?student_id={$info['id']}'>Delete</a></span> 
                        <span class='bg-green-800 px-2 py-1 text-white text-sm ml-2'><a href='update_student.php?student_id={$info['id']}'>Edit</a></span>";
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