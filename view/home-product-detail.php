<!-- <?php
    if(!is_array($sp_detail)) echo 'Sản phẩm chưa được cập nhật';
    else {
        var_dump($sp_detail);
        $name = $sp_detail['name'];
        $mota = $sp_detail['mota'];
        // $img = $pathing.$sp_detail['img'];
        //     if (is_file($img)) {
        //         $img = '<img src="'.$img.'" alt="">';
        //     }
        //     else $img = 'loading...!';
?>        

<article>
    <div class="boxcenter">
        <section class="section-product-detail">
            <div class="detail-img">
                <img src="../view/images/item/<?php $sp_detail['img']?>" alt="">
            </div>
            <div class="detail-inf">
                <h2><?php  $sp_detail['name']; ?></h2>
                <p>Tác giả: ... </p>
                <p>Thể loại: ...</p>
                <p>Nhà xuất bản: ...</p>
                <p>Ngày cập nhật: ...</p>
                <p>Gói cước áp dụng WAKA VIP</p>
                <button>Đọc Sách</button>   
                <p>mota</p>
            </div>
        </section>
    </div>
</article>

<?php
}
?> -->

<?php 
     if(!is_array($sp_detail)) echo 'Sản phẩm chưa được cập nhật';
     else {
         echo ('
         <article>
         <div class="boxcenter">
             <section class="section-product-detail">
                 <div class="detail-img">
                     <img src="../view/images/item/'.$sp_detail['img'].'" alt="">
                 </div>
                 <div class="detail-inf">
                     <h2>'.$sp_detail['name'].'</h2>
                     <p>Tác giả: ... </p>
                     <p>Thể loại: ...</p>
                     <p>Nhà xuất bản: ...</p>
                     <p>Ngày cập nhật: ...</p>
                     <p>Gói cước áp dụng WAKA VIP</p>
                     <button>Đọc Sách</button>   
                     <p>'.$sp_detail['mota'].'</p>
                 </div>
             </section>
         </div>
     </article>
         ');
     }
?>