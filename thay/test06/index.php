<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Quy trinh 4 buoc:
    // B1: Ket noi toi Database Server
    $conn = mysqli_connect('localhost','admin','abcabc','music');
    if(!$conn){
        die("Kết nối thất bại ".mysqli_connect_error());
    }
    // B2: Khai bao truy van SQL
    $sql = "SELECT baiviet.ma_bviet, baiviet.tieude, tacgia.ten_tgia,
            baiviet.ngayviet, baiviet.ten_bhat,theloai.ten_tloai,baiviet.tomtat
            FROM baiviet, tacgia, theloai 
            WHERE baiviet.ma_tgia = tacgia.ma_tgia AND baiviet.ma_tloai = theloai.ma_tloai";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    // B3: Xu ly ket qua
    if(mysqli_num_rows($result)>0){
        $post_list = mysqli_fetch_all($result);
    }
?>
    <div class="container">
    <?php
        foreach($post_list as $post){
    ?>
        <div class="post">
        <div><span>Mã bài viết:</span><span><?php echo $post[0]; ?></span></div>
        <div><span>Tiêu đề:</span><span><?php echo $post[1]; ?></span></div>
        <div><span>Tác giả:</span><span><?php echo $post[2]; ?></span></div>
        <div><span>Ngày viết:</span><span><?php echo $post[3]; ?></span></div>
        <div><span>Bài hát:</span><span><?php echo $post[4]; ?></span></div>
        <div><span>Thể loại:</span><span><?php echo $post[5]; ?></span></div>
        <div><span>Tóm tắt:</span><span><?php echo $post[6]; ?></span></div>
        </div>
        <hr>
    <?php
    // B4: Dong ket noi
    mysqli_close($conn);
        }
    ?>
    </div>


</body>
</html>