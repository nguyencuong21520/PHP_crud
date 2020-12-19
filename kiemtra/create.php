
<?php
include("header.php");
?>
<?php
require("config.php");

if(isset($_POST['cre'])){
    $name  = $_POST['name'];
    $type  = $_POST['type'];
    $barcode  = $_POST['barcode'];
    $dose  = $_POST['dose'];
    $code  = $_POST['code'];
    $cost_price  = $_POST['cost_price'];
    $selling_price  = $_POST['selling_price'];
    $expiry  = $_POST['expiry'];
    $company_name  = $_POST['company_name'];
    $production_date  = $_POST['production_date'];
    $expiration_date  = $_POST['expiration_date'];
    $place  = $_POST['place'];
    $quantity  = $_POST['quantity'];

    // $SqlCheckDup = "EXISTS(select name from drugs where name like '$name')";
    // if(mysqli_query($conn,$SqlCheckDup)){
    //   $sql = "UPDATE drugs SET name='$name', type='$type', barcode='$barcode' ,dose='$dose' ,code='$code' , cost_price='$cost_price', 
    //   selling_price='$selling_price', expiry='$expiry', company_name='$company_name', production_date='$production_date', expiration_date='$expiration_date',
    //   place='$place', quantity='$quantity'   where id='$id'";
    // }
    // else{
    //   $sql = "insert into drugs (name,type, barcode,dose,code,cost_price,selling_price,expiry,company_name,production_date,expiration_date,place,quantity)
    // value ('$name','$type','$barcode','$dose','$code','$cost_price','$selling_price','$expiry','$company_name','$production_date','$expiration_date','$place','$quantity')";
    // }

    
    
    $sql = "insert into drugs (name,type, barcode,dose,code,cost_price,selling_price,expiry,company_name,production_date,expiration_date,place,quantity)
    value ('$name','$type','$barcode','$dose','$code','$cost_price','$selling_price','$expiry','$company_name','$production_date','$expiration_date','$place','$quantity')";

    if(mysqli_query($conn,$sql)){
        header("Location:index.php");
    }
    else{
        echo "ERROR";
    }
    
}

?>

<form  method = "post">
  <div class="form-group">
    <label for="ID1">Tên Thuốc</label>
    <input  class="form-control" id="ID1" name="name"  >
  </div>
  <div class="form-group">
    <label for="ID2">Loại Thuốc</label>
    <input  class="form-control" id="ID2" name="type"  >
  </div>
  <div class="form-group">
    <label for="ID3">Mã Vạch</label>
    <input  class="form-control" id="ID3" name="barcode" >
  </div>
  <div class="form-group">
    <label for="ID4">Liều Lượng</label>
    <input  class="form-control" id="ID4" name="dose" >
  </div>
  <div class="form-group">
    <label for="ID5">Mã</label>
    <input  class="form-control" id="ID5" name="code">
  </div>
  <div class="form-group">
    <label for="ID6">Giá Nhập</label>
    <input  class="form-control" id="ID6" name="cost_price"  >
  </div>
  <div class="form-group">
    <label for="ID7">Giá Bán</label>
    <input  class="form-control" id="ID7" name="selling_price" >
  </div>
  <div class="form-group">
    <label for="ID9">Trạng Thái Hạn Sử Dụng</label>
    <input  class="form-control" id="ID9" name="expiry">
  </div>
  <div class="form-group">
    <label for="ID10">Công Ty</label>
    <input  class="form-control" id="ID10" name="company_name">
  </div>
  <div class="form-group">
    <label for="ID11">Ngày Sản Xuất</label>
    <input  class="form-control" id="ID11" name="production_date">
  </div>
  <div class="form-group">
    <label for="ID">Ngày Hết Hạn</label>
    <input  class="form-control" id="ID" name="expiration_date" >
  </div>
  <div class="form-group">
    <label for="ID">Nơi Sản Xuất</label>
    <input  class="form-control" id="ID" name="place">
  </div>
  <div class="form-group">
    <label for="ID">Số Lượng</label>
    <input  class="form-control" id="ID" name="quantity">
  </div>



  <button type="submit" name ="cre" class="btn btn-primary">Submit</button>
 <button  class="btn btn-secondary"><a href="index.php"> Cancel</a></button>
</form>


<?php

include("footer.php");
?>