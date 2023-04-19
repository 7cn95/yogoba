<?php include_once "./header.php"; ?>
<main>
<section class="bg-[#f5f6fa] min-h-[70rem]">
        <div class="min-h-[17rem] py-[7rem] flex flex-col justify-center items-center">
            <p class="text-[2.3rem]">اشهر الكورسات</p>
            <p class="text-[1.1rem] text-gray-700 mt-7 ">مجموعة من اشهر كورساتنا</p>
        </div>
        
        <div class="flex flex-col md:flex-row justify-center items-center flex-wrap overflow-x-scroll  scroll-smooth gap-x-12 w-screen max-h-[40rem] md:min-h-[40rem] ">
            <?php 
                for($i=0;$i<3;$i++){
                    echo '<div class="shadow-2xl bg-white p-12 rounded-3xl min-h-full min-w-[25rem] max-w-[25rem]  mb-2 ">
                <img src="../../public/img/c1.webp" alt="" class="">
                <p class="m-2 overflow-y-auto max-h-24 text-[1.5rem]">Lorem ipsum dolor sit </p>
                <p class="m-2 overflow-y-scroll max-h-24 text-gray-600 text-[0.7rem]">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla nesciunt maiores voluptate, totam ipsum repudiandae dignissimos obcaecati tempora molestiae quas, sapiente possimus quis quisquam dolorum magnam sint. Rerum, dolorem eum.</p>
                
                <p class="my-4 ml-[4rem] text-[#ff4848] inline-block">24$/month</p>
                
                <a href="" class="text-[#ff4848]  px-3 py-1 text-[0.8rem] rounded-3xl text-center inline-block">subscribe now</a>
            </div>';
                }
            ?>
        </div>
        <div class="text-center mt-[4rem] md:mt-0">
            <a href="" class=" bg-[#ff4848ee] text-white py-4 px-10 rounded-xl ">تصفح المزيد</a>
        </div>
        
    </section>
</main>
<?php include_once "./footer.php"; ?>