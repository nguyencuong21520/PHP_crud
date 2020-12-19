<?php
require_once('dbsupport.php');
$name = $address = $salary = '';
$id;
if(!empty($_POST)){
    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
    }
    if(isset($_POST['address']))
    {
        $address = $_POST['address'];
    }
    if(isset($_POST['salary']))
    {
        $salary = $_POST['salary'];
    }
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
    }
    if ($id != '')
    {
        $sql = "update employees set name = '$name', address = '$address', salary = '$salary' where id = ".$id;
        
    }
    else
    {
        $sql = "insert into employees(name, address, salary) values ('$name','$address','$salary')";
    }
    execute($sql);
    header('location: index.php');
    die();
}
$id = '';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = 'select * from employees where id = '.$id;
    $list = executeresult($sql);
    if($list != null && count($list) >0){
        $lists = $list[0];
        $name = $lists['name'];
        $address = $lists['address'];
        $salary = $lists['salary'];
    }
    else{
        $id = '';
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
    require_once('header.php')
    ?>
  <div class="container">
        <div class="panel panel-primary">
        <div class="panel-body">
    <form method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?=$name?>" >
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="<?=$address?>" >
        </div>
        <div class="form-group">
            <label for="Salary">Salary</label>
            <input type="number" name="salary" id="salary" class="form-control" value="<?=$salary?>" >
        </div>
            <button class="btn btn-success">Save</button>
    </form>
    
      </div>
      </div>
  </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>