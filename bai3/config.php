<?php

// Thông tin kết nối CSDL
$host = 'localhost';
$username = 'root';
$password = 'mysql';
$database= 'lab1';

  $conn = new mysqli($host,$username,$password,$database);
  
if ($conn->connect_error){
    die("ket noi csdl that bai:".$conn->connect_error);
}
?>