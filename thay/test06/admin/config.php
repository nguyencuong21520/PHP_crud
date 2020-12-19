<?php
    // B1: Ket noi toi Database Server
    $conn = mysqli_connect('localhost','admin','abcabc','music');
    if(!$conn){
        die("Kết nối thất bại ".mysqli_connect_error());
    }


?>