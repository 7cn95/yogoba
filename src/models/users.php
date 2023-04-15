<?php 
include "../../config/database.php";

class Users{
    
    //! get functions
    public function getAllUsers(){
        global $pdo;
        try {
            return $pdo->query("SELECT * FROM users;");
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function getUserByUsername($username){
        global $pdo;
        try {
            return $pdo->query("SELECT * FROM users WHERE username = ".$username.";");
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    //! set functions
    public function createNewUser($firstname,$lastname,$username,$password,$address,$gender,$dob){
        global $pdo;
        try {
            //$sql = "INSERT INTO users (firstname , lastname , username ,password , address ,gender , dob) VALUE (".$firstname.",".$lastname.",".$username.",".$password.",".$address.",".$gender.",".$dob.");";
            $sql = "INSERT INTO `users` (username,password,gender) VALUE ('".$username."','".$password."','".$gender."');";
            $pdo->exec($sql);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    //! update user


    // check
    public function loginCheck($username,$password){
        global $pdo;
        try {
            return $pdo->exec("SELECT * FROM users WHERE username = ".$username."AND password ".$password.";");
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>