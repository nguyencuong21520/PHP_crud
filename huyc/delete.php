<?php
require_once('dbsupport.php');
$id = $_GET['id'];
$sql = "delete from employees where id = '$id'";
echo $sql;
execute($sql);
header("location: index.php");
die();
 ?>