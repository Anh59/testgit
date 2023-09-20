<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link rel="stylesheet" href="csshead.css">
</head>
<body>
  




<?php
    include "head.php"
?>


<div class="Noidung"> 


    <div  class="left">
        
        <?php 
        include "list.php"
        ?>

    </div>

    <div class="right">
        <p>
            
                                <?php
                            require_once "mysql1.php";

                            // Số tin tức trên mỗi trang và trang hiện tại
                            $per_page = 10;
                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

                            // Tính toán vị trí bắt đầu lấy dữ liệu
                            $start = ($current_page - 1) * $per_page;


                            //check tìm kiếm 
                            if(isset($_GET["seach"])){
                                        $key = $_GET["textseach"];
                                        $sql = " SELECT * FROM news WHERE id LIKE '%$key%' OR title LIKE '%$key%' OR content LIKE '%$key%' OR author LIKE '%$key%'
                                        ORDER BY id DESC LIMIT $start, $per_page";
                                            
                                }
                                else{
                                        $sql = "SELECT * FROM news ORDER BY id DESC LIMIT $start, $per_page";
                                                
                                    }


                                                
                            // Truy vấn dữ liệu tin tức cho trang hiện tại
                           
                            $rs = mysqli_query($connect, $sql);

                        ?>

                        <form method="get">
                             <input type="text" name="textseach" placeholder="nhập từ khóa tìm kiếm ">
                            <input type="submit" name="seach" value="tim kiem "> </input>
                        </form>

                      
                        

                        <?php 
                      
                        ?>


                        <table border='1px'>
                            <tr>
                                <td>id</td>
                                <td>title</td>
                                <td>content</td>
                                <td>author</td>
                                <td>images</td>
                            </tr>

                            <?php
                            if (mysqli_num_rows($rs) > 0) {
                                while ($r = mysqli_fetch_array($rs)) {
                                    ?>
                                    <tr>
                                        <td><a href="chitiet.php"></a><?php echo $r['id'] ?></td>
                                        <!-- <td><a href="chitiet.php"></a> </td> -->
                                    
                                        <td><a href="chitiet.php?id=<?php echo $r['id']?>"><?php echo $r['title'] ?></a></td>

                                        

                                        <td><?php echo $r['content'] ?></td>
                                        <td><?php echo $r['author'] ?></td>
                                        <td><a href="<?php echo $r['images'] ?>" target="blank"> link ảnh</a></td>

                                        <td><a href="loginmysql.php?id=<?php echo $r['id']?>">Thêm</a></td>
                                        <td><a href="sua.php?id=<?php echo $r['id']?>">Sửa</a></td>

                                        

                                        <td>
                                         <a href="delete.php?id=<?php echo $r['id']?>" onclick="return confirmDel();">Xoa</a>
                                        </td>

                                        
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </table>

                            <script>
                                   function confirmDel() {
                                            return confirm("Ban co muon xoa khong?");
                                        }
                            </script>


                        <?php

                        // Truy vấn để tính tổng số tin tức
                                $sql = "SELECT COUNT(*) AS total FROM news";
                                $rs = mysqli_query($connect, $sql);
                                $total_records = mysqli_fetch_assoc($rs)['total'];

                                // Tính tổng số trang
                                $total_pages = ceil($total_records / $per_page);

                                // Tạo các liên kết phân trang
                                for ($i = 1; $i <= $total_pages; $i++) {
                                    echo "<a href='phantrang.php?page=$i'>$i</a> ";
                                }

                        ?>

        </p>
    </div>

</div>



<?php
    include "footer.php"
?>

</body>
</html>