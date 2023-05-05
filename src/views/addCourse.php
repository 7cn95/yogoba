<?php include"./header.php";?>


<div class="min-h-[40rem] flex flex-col justify-center items-center my-[6rem]">
    <p class="text-[#333] text-[3rem] mb-[8rem]">اضافة دورة جديدة</p>
    <form method="post" action="../controllers/CourseController.php" enctype="multipart/form-data">
        <label for="name">اسم الكورس:</label>
        <input type="text" id="name" name="name" class="border-[1.5px] border-[#ff4848] w-[20rem] h-9 rounded-3xl p-6"><br><br>
        <label for="description">وصف الكورس:</label>
        <textarea id="description" name="description" rows="3" class="border-[1.5px] border-[#ff4848] w-[20rem] rounded-3xl p-4"></textarea><br><br>
        <label for="tranner_name">مدرب الكورس:</label>
        <input type="text" id="tranner_name" name="tranner_name" class="border-[1.5px] border-[#ff4848] w-[20rem] h-9 rounded-3xl p-6"></input><br><br>
        <label for="price">سعر الكورس:</label>
        <input type="number" id="price" name="price" class="border-[1.5px] border-[#ff4848] w-[20rem] h-9 rounded-3xl p-6"></input><br><br>
        <label for="image">صورة الكورس:</label>
        <input type="file" id="image" name="image"><br><br>
        <input type="submit" value="رفع الكورس" class="bg-[#ff4848] text-white rounded-2xl px-4 py-2 cursor-pointer" name="uploadCourse">
    </form>
</div>

<?php include"./footer.php";?>