<?php 
// Hostname
$host = "school-db.cdi6ms4egwbi.us-west-1.rds.amazonaws.com";
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