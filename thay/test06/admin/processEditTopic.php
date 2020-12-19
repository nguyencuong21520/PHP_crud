<?php
    $ma_tloai  = $_POST['ma_tloai'];
    $ten_tloai = $_POST['ten_tloai'];
    
    require("config.php");
    // B2: Khai bao truy van
    
    $sql = "UPDATE theloai SET ten_tloai='$ten_tloai' WHERE ma_tloai = '$ma_tloai'";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location:list_topic.php");
    }
    


?>