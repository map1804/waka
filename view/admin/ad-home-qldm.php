
      
            <section>
                <h2>Thêm danh mục</h2>

                <form action="admin.php?act=qldm" method="post" class="flex-betw" enctype="multipart/form-data">
                    <!-- <div class="form-id">
                        <label for="id">ID</label>
                        <input type="text" name="id" id="id" required>
                    </div> -->
                    <div class="form-name">
                        <label for="name">Tên danh mục</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                
                    <input type="submit" value="ADD &#8595;" name="add">
                </form>
                <hr>
                <div class="table-show">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>FIX</th>
                        <th>DEL</th>
                    </tr>
                    <?php
                        
                        foreach($dsdm as $dm){
                            $linkedit = "admin.php?act=qldm&idedit=".$dm['id'];
                            $linkdel = "admin.php?act=qldm&iddel=".$dm['id'];
                            echo('
                                <tr>
                                    <td>'.$dm['id'].'</td>
                                    <td>'.$dm['name'].'</td>
                                    <td><button><a href="'.$linkedit.'">Sửa</a></button></td>
                                    <td><button><a href="'.$linkdel.'">Xoá</a></button></td>
                                </tr>
                            ');
                        }
                    ?>
                </table>
                </div>
            </section>
    