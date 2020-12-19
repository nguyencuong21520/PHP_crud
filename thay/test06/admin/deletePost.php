<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    // Quy trinh 4 buoc:
    // B1: Ket noi toi Database Server
    $conn = mysqli_connect('localhost','admin','abcabc','music');
    if(!$conn){
        die("Kết nối thất bại ".mysqli_connect_error());
    }
    // B2: Khai bao truy van SQL
    $sql = "DELETE FROM baiviet WHERE ma_bviet = '$id'";
    if(mysqli_query($conn,$sql)){
        header("Location:index.php");
    }
?>