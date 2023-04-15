<?php
// MySQL database configuration
define('DB_HOST', 'localhost'); // اسم المضيف (مثل: localhost)
define('DB_NAME', 'yogoba'); // اسم قاعدة البيانات
define('DB_USER', 'root'); // اسم مستخدم قاعدة البيانات
define('DB_PASSWORD', ''); // كلمة المرور لمستخدم قاعدة البيانات
define('DB_CHARSET', 'utf8mb4'); // ترميز قاعدة البيانات
define('DB_COLLATE', 'utf8mb4_unicode_ci'); // ترميز الجدول

// Create a connection to the database
$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_PERSISTENT => true,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".DB_CHARSET." COLLATE ".DB_COLLATE
];
try {
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
    echo "connected \n";
} catch (PDOException $e) {
    die("Failed to connect to database: ".$e->getMessage());
}

try{
    //$sql = "INSERT INTO `users` (username,password,gender) VALUE ('hussein','hhh','male');";
    //$pdo->exec($sql);
    //$sql = "CREATE TABLE `yogoba`.`users` (`ID` INT(6) NOT NULL AUTO_INCREMENT , `firstname` VARCHAR(30) NULL , `lastname` VARCHAR(30) NULL , `username` VARCHAR(30) NOT NULL , `password` TEXT NOT NULL , `address` VARCHAR(30) NULL , `gender` VARCHAR(6) NOT NULL , `dob` DATE NULL , `phone` VARCHAR(11) NULL , `status` INT NULL , `join` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`ID`)) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci; ";
    $sql = "SELECT * FROM users;";
    $res = $pdo->query($sql);
    
}catch(PDOException $e){
    die("error ".$e->getMessage());
}
?>
