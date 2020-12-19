<?php 
require_once('dbsupport.php')
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Employee manager</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  </head>
  <body>
  <?php
    require_once('header.php')
    ?>
  <div class="container-fluid">
      <div class="row">
      <table style="text-align: center;" class="table table-striped">
      <tr>
          <th >ID</th>
          <th >NAME</th>
          <th >ADDRESS</th>
          <th >SALARY</th>
          <th ></th>
          <th ></th>
      </tr>
  
  <?php
  if(isset($_GET['var']) && ($_GET['var']) !='')
  {
    $sql = 'select * from employees where name like "%'.$_GET['var'].'%"';
  }
  else
  {
    $sql = 'select * from employees';
  }
  $list =  executeresult($sql);
  foreach($list as $lists)
  {
    echo'<tr>
            <td >'.$lists['id'].'</td>
            <td >'.$lists['name'].'</td>
            <td >'.$lists['address'].'</td>
            <td >'.$lists['salary'].'$</td>
            <td><a href="input.php?id='.$lists['id'].'"<i class="far fa-edit"></i></a></td>
            <td><a href="delete.php?id='.$lists['id'].'"<i class="fas fa-trash-alt"></i></a></td>
        </tr> ';
  }
  ?>
</table>
      </div>
  </div>
  
<a href=""></a>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>