<?php
$conn = mysqli_connect('localhost','root','','employees');
if(!$conn){
    die("error".mysql_connect_error());
}
?>