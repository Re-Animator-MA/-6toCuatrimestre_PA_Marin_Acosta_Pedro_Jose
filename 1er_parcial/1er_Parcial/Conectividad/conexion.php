<?php
require_once __DIR__ ."/config.php";
$conn = new mysqli($host, $user, $pass, $db_name);
if($conn -> connect_error){
    die("Conection failed: ". $conn -> connect_error);
}
$conn -> set_charset("UTF8");
?>