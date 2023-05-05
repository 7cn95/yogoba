<?php
// MySQL database configuration
define('DB_HOST', 'localhost'); // اسم المضيف (مثل: localhost)
define('DB_NAME', 'yogoba'); // اسم قاعدة البيانات
define('DB_USER', 'root'); // اسم مستخدم قاعدة البيانات
define('DB_PASSWORD', ''); // كلمة المرور لمستخدم قاعدة البيانات
define('DB_CHARSET', 'utf8mb4'); // ترميز قاعدة البيانات
define('DB_COLLATE', 'utf8mb4_unicode_ci'); // ترميز الجدول

// Create a connection to the database
$conn = mysqli_connect(DB_HOST,DB_USER,'',DB_NAME);
if(!$conn->stat()){
    die("faild to connection");
}


?>