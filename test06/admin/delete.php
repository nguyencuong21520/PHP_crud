<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
require("config.php");

$sql = "delete from employees where id = '$id'";
if(mysqli_query($conn, $sql)){
    header("location:index.php");
}
?>