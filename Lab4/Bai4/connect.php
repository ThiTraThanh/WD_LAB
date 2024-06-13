<?php
$connect = new mysqli('localhost','root','','quanlynhanvien');
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
//Chọn hệ ký tự là utf8 để có thể in ra tiếng Việt.
$connect->set_charset('utf8'); //csdl tiếng việt

