<?php
include "../../config/database.php";

if(isset($_POST['create_account'])){
$image = addslashes(file_get_contents($_FILES['img']['tmp_name']));
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];


try{
$sql ="INSERT INTO `account` (full_name,profile_img,username,password,email,gender,dob)VALUE('$fullname','$image','$username','$password','$email','$gender','$dob');";
$conn->query($sql);
$conn->close();
echo "done added";
}catch(mysqli_sql_exception $e){
    echo $e->getMessage();
}
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $sql = "SELECT * FROM `account` WHERE username='$username' AND password = '$password';";
        $res = $conn->query($sql);
        if($res->fetch_assoc()){
            setcookie('user', '1234567', time() + 7200, "/php/yogoba");
            header("Location: ../views/home.php ");
        }
        else{
            header("Location: ../views/login.php ");
        }
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
    }
}

if(isset($_GET['logout'])){
    echo $_COOKIE["user"];
    setcookie('user', "", time() - 3600);
    header("Location: ../views/home.php ");
}
?>