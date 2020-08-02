
    <section>
        <h2>Thêm tác giả</h2>

        <form action="admin.php?act=qltg" method="post" class="flex-betw" enctype="multipart/form-data">
            <!-- <div class="form-id">
                <label for="id">ID</label>
                <input type="text" name="id" id="id" required>
            </div> -->
            <div class="form-name">
                <label for="name">Tên tác giả</label>
                <input type="text" name="name" id="name" required >
            </div>
        
            <input type="submit" value="ADD &#8595;" name="add">
        </form>
        <hr>
        <div class="table-show">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>FIX</th>
                <th>DEL</th>
            </tr>
            </thead>
            <?php
                
                foreach($dstg as $tg){
                    $linkedit = "admin.php?act=qltg&idedit=".$tg['id'];
                    $linkdel = "admin.php?act=qltg&iddel=".$tg['id'];
                    echo('
                        <tr>
                            <td>'.$tg['id'].'</td>
                            <td>'.$tg['name'].'</td>
                            <td><button><a href="'.$linkedit.'">Sửa</a></button></td>
                            <td><button><a href="'.$linkdel.'">Xoá</a></button></td>
                        </tr>
                    ');
                }
            ?>
        </table>
        </div>
    </section>
