<?php include_once "./header.php"; ?>
<main>
<section class="bg-[#f5f6fa] min-h-[70rem]">
        <div class="min-h-[17rem] pt-[5rem] flex flex-col justify-center items-center">
            <p class="text-[2.3rem]">اشهر الكورسات</p>
            <p class="text-[1.1rem] text-gray-700 mt-7 ">مجموعة من اشهر كورساتنا</p>
        </div>
        
        <div class="flex flex-col md:flex-row justify-center items-center flex-wrap overflow-x-scroll  scroll-smooth gap-x-12 w-screen  md:min-h-[40rem] ">
            
            <?php
	// تأسيس اتصال مع قاعدة البيانات

	include "../../config/database.php";

	// استعلام لاسترداد الكورسات المحفوظة في قاعدة البيانات
	$sql = "SELECT * FROM courses";
	$result = $conn->query($sql);

	// عرض الكورسات المحفوظة
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			
            echo '<div class="shadow-2xl bg-white p-12 rounded-3xl min-h-full min-w-[25rem] max-w-[25rem]  mb-2 ">
                <img src="data:image/jpeg;base64,'.base64_encode($row["image"]).'" alt="" class="">';
                echo'<p class="m-2 overflow-y-auto max-h-24 text-[1.5rem]">' . $row["name"] . ' </p>';
                echo '<p class="m-2 overflow-y-scroll max-h-24 text-gray-600 text-[0.7rem]">'.$row["description"] .'</p>';
                
                echo'<p class="my-4 ml-[4rem] text-[#ff4848] inline-block">24$/month</p>
                
                <a href="./course.php?id='.$row["id"].'" id="'.$row["id"].'" class="text-[#ff4848]  px-3 py-1 text-[0.8rem] rounded-3xl text-center inline-block">subscribe now</a>
            </div>';
		}
	} else {
		echo "لا توجد كورسات متاحة";
	}

	$conn->close();
	?>
        </div>
        <div class="text-center mt-[4rem] md:mt-0">
            <a href="./addCourse.php" class=" bg-[#ff4848ee] text-white py-4 px-10 rounded-xl ">اضافة دورة </a>
        </div>
        
    </section>
</main>


<?php include_once "./footer.php"; ?>