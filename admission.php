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
    $sql = "SELECT * FROM admission";
    $result = mysqli_query($data, $sql);
}

?>
<div class="p-6 w-full">
    <div class="bg-slate-100 h-full p-5">
        <h1 class="text-2xl font-semibold">Applied For Admission</h1>

        <table class="w-full mt-5 p-2">
            <tr>
                <th class="border-2 border-gray-300 text-start px-3 py-1">Name</th>
                <th class="border-2 border-gray-300 text-start px-3 py-1">Email</th>
                <th class="border-2 border-gray-300 text-start px-3 py-1">Phone</th>
                <th class="border-2 border-gray-300 text-start px-3 py-1">Message</th>
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
                        echo $info['message'];
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