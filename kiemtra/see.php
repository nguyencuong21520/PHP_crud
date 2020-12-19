<?php
include("header.php");
?>
<?php
require("config.php");
$id = $_GET['id'];
$sql = "select * from drugs where id ='$id' ";
$lists = mysqli_query($conn,$sql);
$data = mysqli_fetch_all($lists);

foreach($data as $a){
    echo "
    <div class='card'>
  <div class='card-header'>
    <strong>$a[1]</strong>
  </div>
  <ul class='list-group list-group-flush'>
    <li class='list-group-item'><strong>ID:</strong> $a[0]</li>
    <li class='list-group-item'><strong>Loại Thuốc:</strong> $a[2]</li>
    <li class='list-group-item'><strong>Mã Vạch:</strong> $a[3]</li>
    <li class='list-group-item'><strong>Liều Lượng:</strong> $a[4]</li>
    <li class='list-group-item'><strong>Mã:</strong> $a[5]</li>
    <li class='list-group-item'><strong>Giá Nhập:</strong> $a[6]</li>
    <li class='list-group-item'><strong>Giá Bán</strong> $a[7]</li>
    <li class='list-group-item'><strong>Trạng Thái Hạn Sử Dụng:</strong> $a[8]</li>
    <li class='list-group-item'><strong>Công Ty:</strong> $a[9]</li>
    <li class='list-group-item'><strong>Ngày Sản Xuất: </strong>$a[10]</li>
    <li class='list-group-item'><strong>Ngày Hết Hạn: </strong>$a[11]</li>
    <li class='list-group-item'><strong>Nơi Sản Xuất: </strong>$a[12]</li>
    <li class='list-group-item'><strong>Số Lượng: </strong>$a[13]</li>


  </ul>
</div>
    ";
}

?>



<button style="margin-top:50px;"  class="btn btn-secondary"><a href="index.php"> Home</a></button>
<?php
include("footer.php");
?>