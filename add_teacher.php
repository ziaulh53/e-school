<?php
require_once('./admin_sidebar.php');
?>

<div class="p-6 w-full">
    <div class="bg-slate-100 h-full p-5">
        <h1 class="text-2xl font-semibold">Add Teacher</h1>
        <form class="w-[300px] mt-5" action="./functions/add_teacher.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="font-semibold block mb-1">Name</label>
                <input class="w-full border border-gray-400 rounded-md px-5 py-2" type="text" name="name" />
            </div>
            <div class="mb-3">
                <label class="font-semibold block mb-1">Description</label>
                <textarea class="w-full border border-gray-400 rounded-md px-5 py-2" type="email" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label class="font-semibold block mb-1">Image</label>
                <input type="file" name="image"/>
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