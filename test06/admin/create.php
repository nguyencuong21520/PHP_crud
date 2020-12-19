<?php
    include("header.php");
?>
<?php
 require("config.php");
 if(isset($_POST["cre"])){
   $name = $_POST["name"];
   $address = $_POST["address"];
   $salary = $_POST["salary"];
  $sql = "insert into employees(name,address, salary) value ('$name','$address','$salary')";

  $create = mysqli_query($conn,$sql);
  if($create){
    header('location:index.php');
  }
  else{
    echo "Error";
  }
 }
?>
<form method = "post">
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input  class="form-control" id="exampleInputPassword1" name="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input class="form-control" id="exampleInputPassword1" name="address" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Salary</label>
    <input  class="form-control" id="exampleInputPassword1" name ="salary" placeholder="Salary">
  </div>

  <button type="submit" name="cre" class="btn btn-primary">Submit</button>
  <button class="btn btn-default"><a href="./index.php">Cancel</a></button>

</form>
<?php
include("footer.php");
?>
