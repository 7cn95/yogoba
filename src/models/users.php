<?php 
include "../../config/database.php";

class Users{
    
    //! get functions
    public function getAllUsers(){
        global $conn;
        try {
            $result = $conn->query("SELECT * FROM account;");
            return $data = $result->fetch_all(MYSQLI_ASSOC);
        } catch (mysqli_sql_exception $e) {
            return $e->getMessage();
        }
    }
    public function getUserByUsername($username){
        global $conn;
        try {
            $res = $conn->query("SELECT * FROM account WHERE username = ".$username.";");
            return $res->fetch_all(MYSQLI_ASSOC);
        } catch (mysqli_sql_exception $e) {
            return $e->getMessage();
        }
    }

    //! set functions  
     public function createNewUser($full_name,$username,$password,$email,$gender,$address,$phone_num,$dob,$profile_img){
        global $conn;
        try {
            $sql = "INSERT INTO account (full_name,username,password,email,gender,address,phone_number,dob,profile_img) VALUES ( $full_name,$username,$password,$email,$gender,$address,$phone_num,$dob,$profile_img );";
            return $conn->query($sql);
        } catch (mysqli_sql_exception $e) {
            return $e->getMessage();
        }
    }

    //! update user


    //? check
    public function loginCheck($username,$password){
        global $conn;
        try {
            $res = $conn->query("SELECT * FROM account WHERE username = ".$username."AND password ".$password.";");
            return $res->fetch_all(MYSQLI_ASSOC);
        } catch (mysqli_sql_exception $e) {
            return $e->getMessage();
        }
    }
}
?>