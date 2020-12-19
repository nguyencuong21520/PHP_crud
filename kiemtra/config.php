<?php
$conn = mysqli_connect('localhost','root','','drugs');
if(!$conn){
    die("error".mysql_connect_error());
}
?>