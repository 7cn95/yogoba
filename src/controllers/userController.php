<?php
include "../models/users.php";


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];

$user = new Users();

if(isset($_POST)){
    echo $user->createNewUser($firstname,$lastname,$username,$password,$address,$gender,$dob);
    include_once '../views/404.html';
}
foreach($user->getAllUsers() as $u){
    echo $u['username']."\n";
}

?>