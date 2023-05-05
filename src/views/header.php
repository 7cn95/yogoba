<!doctype html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/output.css">
    <link rel="stylesheet" href="../../public/css/main.css">
    
    <!-- FONTS -->
    
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body class=" from-[#fbc2eb] to-[#a6c1ee] h-screen">
    <header class="bg-white pt-3 pb-3 shadow-lg relative z-[2]">
        <nav class="flex justify-between items-center w-[92%] mx-auto ">
            <div class="h-12">
                <img class="w-[160px] text-center cursor-pointer" src="../../public/img/yogoba.png" alt="...">
            </div>
            <div
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-1000%] md:w-auto  w-full flex items-center px-5 ">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-[#ff4848]" href="/php/yogoba/">الرئيسية</a>
                    </li>
                    <li>
                        <a class="hover:text-[#ff4848]" href="./courses.php">الدورات</a>
                    </li>
                    <li>
                        <a class="hover:text-[#ff4848]" href="#">العلاج الطبيعي</a>
                    </li>
                    <li>
                        <a class="hover:text-[#ff4848]" href="#">تواصل معنا</a>
                    </li>
                    <li>
                        <a class="hover:text-[#ff4848]" href="#">من نحن</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <?php 
                if(!isset($_COOKIE['user'])){
                    echo '<button class="bg-[#ff4848] text-white px-5 py-2 rounded-full hover:bg-[#f91d1d] hover:outline-1 hover:outline hover:outline-[#333]"><a href="/php/yogoba/src/views/login.php">تسجيل دخول</a></button>';
                }else{
                    echo '<button class="text-[#ff4848] px-5 py-2 rounded-full hover:outline-1 hover:outline hover:outline-[#333]"><a href="/php/yogoba/src/controllers/userController.php?logout=true">تسجيل خروج</a></button>';
                }
                ?>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
    </header>



