<?php
include "../../config/database.php";

if(isset($_POST['uploadCourse'])){
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $name = $_POST['name'];
    $description = $_POST['description'];
    $tranner_name = $_POST['tranner_name'];
    $price =(float) $_POST['price'];


    $sql = "INSERT INTO courses (name,description,image,price,tranner_name) VALUES ('$name', '$description', '$image',$price,'$tranner_name')";
    if(mysqli_query($conn, $sql)){
        echo "تم حفظ البيانات والصورة بنجاح.";
        header('Location: ../views/courses.php');
        
    } else{
        echo "حدث خطأ أثناء حفظ البيانات: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>