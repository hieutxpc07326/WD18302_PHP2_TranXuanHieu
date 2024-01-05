<?php

include 'config.php';

function tuyensinh() {
  global $conn;
  $sql = "SELECT * FROM don_xet_tuyen";

  $result = mysqli_query($conn, $sql);
  $tuyensinh = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  return $tuyensinh;
}

?>