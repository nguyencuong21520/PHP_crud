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
                        $sql = "SELECT * FROM baiviet";
                        mysqli_set_charset($conn,'UTF8');
                        $result = mysqli_query($conn,$sql);
                        // B3: Xu ly ket qua
                        if(mysqli_num_rows($result)>0){
                            $post_list = mysqli_fetch_all($result);
                        }
                    ?>
                        <h4>DANH SÁCH BÀI VIẾT</h4>
                        <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Tóm tắt</th>
                                <th>Tên bài hát</th>
                                <th>Ngày viết</th>
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
                            echo    '<td>'.$post[4].'</td>';
                            echo    '<td>'.$post[2].'</td>';
                            echo    '<td>'.$post[7].'</td>';
                            echo    '<td><a href="editPost.php?id='.$post[0].'"><i class="far fa-edit"></i></a></td>';
                            echo    '<td><a href="deletePost.php?id='.$post[0].'"><i class="fas fa-trash-alt"></i></a></td>';
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