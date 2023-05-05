<?php include "./header.php"; ?>
<main>
<section class="bg-[#f5f6fa] min-h-[50rem]">
           
    <?php
    include "../../config/database.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM courses WHERE id = $id";
        $result = $conn->query($sql);

	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
            echo ' <div class="p-7">';
            echo ' <img src="data:image/jpeg;base64,'.base64_encode($row["image"]).'" alt="" class="w-[32rem]"> ';
            echo ' <h1 class="my-3 text-[2rem]">'.$row["name"].'</h1> ';
            echo ' <p class="my-3 text-[1.2rem] md:w-[32rem]">الوصف<br>'.$row["description"].'</p> ';
            echo ' <p class="my-3 text-[1.2rem]">اسم المدرب <br>'.$row["tranner_name"].'</p> ';
            echo ' <p class="my-3 text-[1.2rem]">التققيم<br>'.$row["rate"].'</p> ';
            echo ' <p class="my-3 text-[1.2rem]">السعر<br>'.$row["price"].'</p> ';
            echo ' </div> ';
            
        }
    }
}
    
    ?>
</section>
</main>
<?php include "./footer.php";?>