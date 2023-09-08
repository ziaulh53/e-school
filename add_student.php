<?php
require_once('./admin_sidebar.php');
?>
<div class="p-6 w-full">
    <div class="bg-slate-100 h-full p-5">
        <h1 class="text-2xl font-semibold">Add Student</h1>
        <form class="w-[300px] mt-5" action="./functions/add_student.php" method="post">
            <div class="mb-3">
                <label class="font-semibold block mb-1">Username</label>
                <input class="w-full border border-gray-400 rounded-md px-5 py-2" type="text" name="username" />
            </div>
            <div class="mb-3">
                <label class="font-semibold block mb-1">Email</label>
                <input class="w-full border border-gray-400 rounded-md px-5 py-2" type="email" name="email" />
            </div>
            <div class="mb-3">
                <label class="font-semibold block mb-1">Phone</label>
                <input class="w-full border border-gray-400 rounded-md px-5 py-2" type="number" name="phone" />
            </div>
            <div>
                <label class="font-semibold block mb-1">Password</label>
                <input class="w-full border border-gray-400 rounded-md px-5 py-2" type="password" name="password" />
            </div>
            <div class="text-center mt-3">
                <input class="px-3 py-1 text-white font-semibold bg-blue-700 rounded-lg cursor-pointer" type="submit" value="Add" name="add" />
            </div>
        </form>
    </div>
</div>
</div>


</body>

</html>