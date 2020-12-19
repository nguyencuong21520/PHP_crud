<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
  </head>
  <body>
      <?php
      //ket noi data
    
      $connection = mysqli_connect('localhost', 'root', '', 'music');
      if(!$connection){
          die('error');
      }
      //khai bao truy van
      $sql = "SELECT baiviet.ma_bviet, baiviet.tieude, tacgia.ten_tgia, baiviet.ngayviet, baiviet.ten_bhat,
       theloai.ten_tloai, baiviet.tomtat   from baiviet, theloai, tacgia where baiviet.ma_tgia=tacgia.ma_tgia and baiviet.ma_tloai=theloai.ma_tloai ";
      $result = mysqli_query($connection, $sql);
      //lay ket qua
      $users = mysqli_fetch_all($result);
     echo "
      <div class= 'container text-center'>
        <h1 style='margin-top: 20px'>Danh sách các bài viết</h1>
        <hr style='margin: 20px'>
      </div>
      ";
     foreach($users as $user){
       echo "
        <div class='container'>
          <div class='row'>
            <div class='col-4' style='display: flex; flex-direction: column; align-items:flex-end'>
              <p>Mã bài viết:</p>
              <p>Tiêu đề:</p>
              <p>Tác giả:</p>
              <p>Ngày viết:</p>
              <p>Bài hát:</p>
              <p>Thể loại:</p>
              <p>Tóm tắt:</p>
            </div>
            <div class='col-8'>
            <p>$user[0]</p>
            <p>$user[1]</p>
            <p>$user[2]</p>
            <p>$user[3]</p>
            <p>$user[4]</p>
            <p>$user[5]</p>
            <p>$user[6]</p>
          </div>
          </div>
          <div>
            <hr style='border: 1px solid black; width:fit_content;'>
          </div>
        </div>
          ";
     }
      //dong cong ket noi
      mysqli_close($connection); 
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>