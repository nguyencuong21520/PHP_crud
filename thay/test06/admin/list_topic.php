<?php
    include("header.php");
?>
      
      <main class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        // Quy trinh 4 buoc:
                        require("config.php");
                        // B2: Khai bao truy van SQL
                        $sql = "SELECT * FROM theloai";
                        mysqli_set_charset($conn,'UTF8');
                        $result = mysqli_query($conn,$sql);
                        // B3: Xu ly ket qua
                        if(mysqli_num_rows($result)>0){
                            $post_list = mysqli_fetch_all($result);
                        }
                    ?>
                        <h4>DANH SÁCH THỂ LOẠI</h4>
                        <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên tác gỉa</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                        foreach($post_list as $post){
                            echo '<tr>';
                            echo    '<td scope="row">'.$post[0].'</td>';
                            echo    '<td>'.$post[1].'</td>';
                            echo    '<td><a href="editTopic.php?id='.$post[0].'"><i class="far fa-edit"></i></a></td>';
                            echo    '<td><a href="deleteTopic.php?id='.$post[0].'"><i class="fas fa-trash-alt"></i></a></td>';
                            echo    '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                    

                    
                </div>
            </div>
      </main>

<?php
    include("footer.php");
?>