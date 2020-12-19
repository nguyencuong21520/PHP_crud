<?php
require_once('config.php');

function execute($sql)
{
    $conn = mysqli_connect(Host, Username, password, database);
    
    mysqli_query($conn, $sql);

    mysqli_close($conn);
}
function executeresult($sql){
    $conn = mysqli_connect(Host, Username, password, database);

    $resultset = mysqli_query($conn, $sql);
    $list =[];
    while($row = mysqli_fetch_array($resultset, 1)){
        $list[] = $row;
    }
    mysqli_close($conn);
    return $list;
}
?>