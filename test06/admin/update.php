
<?php
include("header.php");
?>
<?php
require("config.php");
$id = $_GET['id'];
$sql = "select * from employees where id ='$id' ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $data = mysqli_fetch_assoc($result);
    // $data = mysqli_fetch_all($result);
}
if(isset($_POST['upp'])){
if(isset($_POST["id"])){
    $name  = $_POST['name'];
    $address  = $_POST['address'];
    $salary  = $_POST['salary'];
    
    
    $sql = "UPDATE employees SET name='$name', address='$address', salary='$salary' WHERE id='$id'";

    if(mysqli_query($conn,$sql)){
        header("Location:index.php");
    }
    
}}

?>

<form  method = "post">
  <div class="form-group">
    <label for="ID">ID</label>
    <input  class="form-control" id="ID" name="id" value = "<?php echo $id ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input  class="form-control" id="exampleInputPassword1" name="name" value ="<?php echo $data['name']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input class="form-control" id="exampleInputPassword1" name="address" value ="<?php echo $data['address']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Lasary</label>
    <input  class="form-control" id="exampleInputPassword1" name ="salary" value ="<?php echo $data['salary'] ?>">
  </div>

  <button type="submit" name ="upp" class="btn btn-primary">Submit</button>
</form>


<?php

include("footer.php");
?>