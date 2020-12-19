<?php
    include("header.php");
    $id = $_GET['id'];
    require("config.php");
    
    // B2: Truy van
    $sql = "SELECT * FROM theloai WHERE ma_tloai='$id'";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    // echo $sql;
    // B3: Xy ly ket qua
    if(mysqli_num_rows($result)>0){
      $topic = mysqli_fetch_assoc($result);
    }
    
?>
      
      <main class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="processEditTopic.php" method="POST">
                      <div class="form-group">
                        <label for="">Mã thể loại</label>
                        <input type="text" name="ma_tloai" id="ma_tloai" class="form-control" value="<?php echo $topic['ma_tloai']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="">Tên thể loại</label>
                        <input type="text" name="ten_tloai" id="ten_tloai" class="form-control" value="<?php echo $topic['ten_tloai']; ?>">
                      </div>
                      <div class="form-group">
      
                        <input type="submit" name="btnEditTopic" id="btnEditTopic" class="form-control bg-success text-white" value="Save">
                      </div>
                    </form>
                    
                </div>
            </div>
      </main>

<?php
    include("footer.php");
?>