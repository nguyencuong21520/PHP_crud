<?php
include("header.php");
?>
<?php

require("config.php");
$sql = "SELECT * FROM drugs";
$result = mysqli_query($conn, $sql);
$list = mysqli_fetch_all($result);
?>
<div style="display:flex; justify-content: space-around;    margin: 30px 0px;">
<h1>Danh Sách Các Loại Thuốc</h1>
<button type="button" class="btn btn-success"><a style="color: white;" href="create.php">Thêm Mới </a></button>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>

      
      <th scope="col">Tên Thuốc</th>
      <th scope="col">Loại Thuốc</th>
      <th scope="col">Trạng Thái Sử Dụng</th>
      <th scope="col">Giá Bán</th>
      <th scope="col">Chi Tiết</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach($list as $data){
      echo "<tr>";
      echo "<th scope='row'>$data[0]</th>";
      echo "<td>$data[1]</td>";
      echo "<td>$data[2]</td>";
      echo "<td>$data[8]</td>";
      echo "<td>$data[7]</td>";
      echo "<td><a href ='see.php?id=$data[0]'><i class='fad fa-info-circle'></i></a></td>";
      echo "<td><a href ='update.php?id=$data[0]'><i class='fal fa-pencil'></i></a></td>";
      echo "<td data-toggle='modal' data-target='#exampleModal'><i class='fad fa-trash-alt'></i></td>";
      echo"
      <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog' role='document'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
            <div class='modal-body'>
              Bạn có Thực Sự Muốn Xóa?
            </div>
            <div class='modal-footer'>
              <button type='button' class='btn btn-secondary' data-dismiss='modal'><a href='index.php'>Hủy</a></button>
              <button type='button' class='btn btn-danger'><a href='delete.php?id=$data[0]'>Xóa</a></button>
            </div>
          </div>
        </div>
      </div>";
    echo "</tr>";
  }

  ?>
</tbody>
</table>
<?php
include("footer.php")
?>