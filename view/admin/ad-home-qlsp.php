
      
            <section>
            <?php
                if(isset($_GET['idedit']) && ($_GET['idedit']) >0 ){
                    if($detail_sp['hot'] == 1) {
                        $c1= "checked";
                    }
                    else {
                        $c1= "";
                    }

                    $img = $pathimg.$detail_sp['img'];
                        if(is_file($img)){

                            $img = '<img src="'.$img.'" alt="" style="width: 30px">';
                        }

                    ?>
                <h2>Sửa sản phẩm</h2>
                <form action="admin.php?act=qlsp" method="post" class="flex-betw" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$detail_sp['id']?>">
                    <div class="form-name">
                        <label for="name">Tên sản phẩm</label>
                        <input type="text" name="name" id="name" value="<?=$detail_sp['name']?>">
                    </div>
                    <div class="form-price">
                        <label for="price">Giá (USD)</label>
                        <input type="text" name="price" id="price" value="<?=$detail_sp['price']?>">
                    </div> 

                    <div class="form-iddm">
                        <label for="iddm">ID danh mục</label>
                        <select name="iddm" id="iddm">
                            
                            <?php
                                foreach ($dsdm as $dm) {
                                    if($detail_sp['iddm'] == $dm['id']){
                                        $s1 = "selected";
                                    }
                                    else{
                                        $s1 = "";
                                    }
                                    echo('
                                        <option value="'.$dm['id'].'" '.$s1.'>'.$dm['name'].'</option>
                                    ');
                                } ?>
                        </select>
                    </div>
                    <div class="form-idtg">
                        <label for="idtg">ID tác giả</label>
                        <select name="idtg" id="idtg">
                            <?php
                                    foreach ($dstg as $tg) {
                                        echo('
                                            <option value="'.$tg['id'].'">'.$tg['name'].'</option>
                                        ');
                                    } ?>
                        </select>
                    </div>
                    <div class="form-hot">
                        <label for="hot">HOT</label>
                        <input type="checkbox" name="hot" id="hot" <?=$c1?>>
                    </div>
                    <div class="form-mota">
                        <label for="mota">Mô tả</label>
                        <input type="text" name="mota" id="mota" value="<?=$detail_sp['mota']?>">
                    </div>
                    <div class="form-hinh">
                        <label for="img">Hình ảnh</label>
                        <input type="file" name="img" id="img">
                    </div>

                    <?=$img?>

                    <input type="submit" value="FIX &#174;" name="edit">
                </form>
            <?php
                }else{
                    ?>
                <h2>Thêm sản phẩm</h2>
                <form action="admin.php?act=qlsp" method="post" class="flex-betw" enctype="multipart/form-data">
                    <!-- <div class="form-id">
                        <label for="id">ID</label>
                        <input type="text" name="id" id="id" required>
                    </div> -->
                    <div class="form-name">
                        <label for="name">Tên sản phẩm</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="form-price">
                        <label for="price">Giá (USD)</label>
                        <input type="text" name="price" id="price" required>
                    </div> 
                    <div class="form-iddm">
                        <label for="iddm">ID danh mục</label>
                        <select name="iddm" id="iddm">
                            
                            <?php
                                foreach ($dsdm as $dm) {
                                    echo('
                                        <option value="'.$dm['id'].'">'.$dm['name'].'</option>
                                    ');
                                } ?>
                        </select>
                    </div>
                    <div class="form-idtg">
                        <label for="idtg">ID tác giả</label>
                        <select name="idtg" id="idtg">
                            <?php
                                    foreach ($dstg as $tg) {
                                        echo('
                                            <option value="'.$tg['id'].'">'.$tg['name'].'</option>
                                        ');
                                    } ?>
                        </select>
                    </div>
                    <div class="form-hot">
                        <label for="hot">HOT</label>
                        <input type="checkbox" name="hot" id="hot">
                    </div>
                    <div class="form-mota">
                        <label for="mota">Mô tả</label>
                        <input type="text" name="mota" id="mota">
                    </div>
                    <div class="form-hinh">
                        <label for="img">Hình ảnh</label>
                        <input type="file" name="img" id="img">
                    </div>
                    <input type="submit" value="ADD &#8595;" name="add">
                </form>
            <?php
                }
            ?>
                <hr>
                <div class="table-show">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>IDdm</th>
                                <th>IDtg</th>
                                <th>HOT</th>
                                <th>Mota</th>
                                <th>IMG</th>
                                <th>EDIT</th>
                                <th>DEL</th>
                            </tr>
                        </thead>
                        <?php
                            foreach($dssp as $sp){
                                $img = '<img src="'.$pathimg.$sp['img'].'" alt="">';
                                $linkedit = "admin.php?act=qlsp&idedit=".$sp['id'];
                                $linkdel = "admin.php?act=qlsp&iddel=".$sp['id'];
                                echo('
                                    <tr>
                                        <td>'.$sp['id'].'</td>
                                        <td>'.$sp['name'].'</td>
                                        <td>'.$sp['price'].'</td>
                                        <td>'.$sp['iddm'].'</td>
                                        <td>'.$sp['idtacgia'].'</td>
                                        <td>'.$sp['hot'].'</td>
                                        <td>'.substr($sp['mota'],0,100).' ...</td>
                                        <td>'.$img.'</td>
                                        <td><button><a href="'.$linkedit.'">Sửa</a></button></td>
                                        <td><button><a href="'.$linkdel.'">Xoá</a></button></td>
                                    </tr>
                                ');
                            }
                        ?>
                    </table>
                </div>
            </section>
    