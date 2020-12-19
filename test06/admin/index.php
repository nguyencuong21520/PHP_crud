<?php
include("header.php");
?>
<?php

require("config.php");
$sql = "SELECT * FROM employees";
$result = mysqli_query($conn, $sql);
$list = mysqli_fetch_all($result);
// echo "<pre>";
// echo var_dump($list);
// echo "</pre";
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>

      
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Lasary</th>
      <th scope="col">Create</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach($list as $data){
      echo "<tr>";
      echo "<th scope='row'>$data[0]</th>";
      echo "<td>$data[1]</td>";
      echo "<td>$data[2]</td>";
      echo "<td>$data[3]</td>";
      echo "<td><a href='create.php'><i class='fad fa-plus-circle'></i></a></td>";
      echo "<td><a href ='update.php?id=$data[0]'><i class='fal fa-pencil'></i></a></td>";
      echo "<td><a href='delete.php?id=$data[0]'><i class='fad fa-trash-alt'></i></a></td>";
    echo "</tr>";
  }

  ?>
</tbody>
</table>
<?php
include("footer.php")
?>