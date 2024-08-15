<?php 
// Hostname
$host = "school-test-db.cfcgomeoy6xy.us-east-2.rds.amazonaws.com";
// Username
$uname = "admin";
// Password
$pw = "Declan123";
// Database Name
$dbname = "simple_attendance_db";

try{
    $conn = new MySQLi($host, $uname, $pw, $dbname);
}catch(Exception $e){
    echo "Database Connection Failed: <br>";
    print_r($e->getMessage());
    exit;
}
?>