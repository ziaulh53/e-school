<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/output.css">
    <title>e school</title>
</head>

<body>
    <nav class="bg-sky-500 w-full h-[70px]">
        <div class="flex h-[70px] justify-between items-center px-5 md:px-10">
            <div class="text-2xl text-white font-bold">E-School</div>
            <ul class="p-0">
                <li class="inline-block mr-2 text-white"><a href="">Home</a></li>
                <li class="inline-block mr-2 text-white"><a href="">Contact</a></li>
                <li class="inline-block mr-2 text-white"><a href="">Admission</a></li>
                <li class="inline-block text-white bg-green-500 px-3 py-1"><a href="login.php">Login</a></li>
            </ul>
        </div>

    </nav>

    <section>
        <label class="absolute text-white bg-blue-800 top-[28%] left-[38%] px-10 py-2 text-xl">We Teach Students with Care</label>
        <img class="w-full h-[300px]" src="./img/school_management.jpg" />
    </section>

    <section class="px-5 md:px-10 pt-14">
        <div class="grid grid-cols-12 gap-10">
            <div class="col-span-4">
                <img class="w-full h-[250px]" src="./img/school2.jpg" />
            </div>
            <div class="col-span-8">
                <h1 class="text-3xl font-semibold mb-5">Welcome To E-School</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos earum vitae quas rem, tenetur quo provident tempore magnam fugiat? Quod quis cupiditate aut voluptatum asperiores amet nihil quos ipsum esse veniam rerum incidunt iusto ipsa odio dolor numquam, temporibus cumque dignissimos facere perspiciatis qui dolorem ea eius deserunt. Recusandae, itaque.</p>
            </div>
        </div>
    </section>
    <section class="px-5 md:px-10 pt-14">
        <h1 class="text-3xl font-semibold mb-5 text-center">Our Teachers</h1>
        <div class="grid grid-cols-12 gap-10">
            <div class="col-span-4">
                <img class="w-[90%] h-[200px]" src="./img/teacher1.jpg" />
                <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure labore</p>
            </div>
            <div class="col-span-4">
                <img class="w-[90%] h-[200px]" src="./img/teacher2.jpg" />
                <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure labore</p>
            </div>
            <div class="col-span-4">
                <img class="w-[90%] h-[200px]" src="./img/teacher3.jpg" />
                <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure labore</p>
            </div>
        </div>
    </section>
    <section class="px-5 md:px-10 pt-14">
        <h1 class="text-3xl font-semibold mb-5 text-center">Our Courses</h1>
        <div class="grid grid-cols-12 gap-10">
            <div class="col-span-4">
                <img class="w-[90%] h-[200px]" src="./img/web.jpg" />
                <h2 class="font-bold text-xl mt-5">Web Development</h2>
            </div>
            <div class="col-span-4">
                <img class="w-[90%] h-[200px]" src="./img/graphic.jpg">
                <h2 class="font-bold text-xl mt-5">Graphic Design</h2>
            </div>
            <div class="col-span-4">
                <img class="w-[90%] h-[200px]" src="./img/marketing.png" />
                <h2 class="font-bold text-xl mt-5">Digital Marketing</h2>
            </div>
        </div>
    </section>
    <section class="px-5 md:px-10 py-14">
        <h1 class="text-3xl font-semibold mb-5 text-center">Admission Form</h1>

        <form class="w-[300px] m-auto" action="./functions/admission.php" method="post">
            <div class="mb-3">
                <label class="font-semibold block mb-1">Name</label>
                <input class="w-full border border-gray-400 rounded-md px-5 py-2" type="text" name="name" />
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
                <label class="font-semibold block mb-1">Message</label>
                <textarea class="w-full min-h-[100px] border border-gray-400 rounded-md px-5 py-2" name="message"></textarea>
            </div>
            <div class="text-center mt-3">
                <input class="px-3 py-1 text-white font-semibold bg-blue-700 rounded-lg cursor-pointer" type="submit" value="Apply" name="apply"/>
            </div>
        </form>
    </section>
    <footer class="bg-black h-[70px] w-full">
        <h2 class="text-2xl text-white text-center leading-[70px]">All @copyright reserved by E-School IT</h2>
    </footer>

</body>

</html>