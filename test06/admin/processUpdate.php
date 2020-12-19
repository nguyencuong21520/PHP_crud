<?php
    require("config.php");
    $name  = $_POST['name'];
    $address  = $_POST['address'];
    $salary  = $_POST['salary'];
    $id = $_POST['id'];
    
    
    $sql = "UPDATE employees SET name='$name', address='$address', salary='$salary' WHERE id='$id'";
    mysqli_set_charset($conn,'UTF8');

    if(mysqli_query($conn,$sql)){
        header("Location:index.php");
    }
?>
