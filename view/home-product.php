<article>
   <div class="boxcenter">
   <section class="section-product">
        <div class="section-danhmuc__hot-top section-product__top">
            <h3>Tất cả</h3>
            <ul>
                <li><a href="">Tất cả</a></li>
                <li><a href="">Văn học</a></li>
                <li><a href="">Ngôn tình</a></li>
                <li><a href="">Kinh doanh</a></li>
                <li><a href="">Kỹ năng</a></li>
                <li><a href="">Sách nói</a></li>
            </ul>
        </div>
        <div class="section-danhmuc__hot-main section-product__main">
            <?php
                foreach ($sanpham_view_product as $sp_view) {
                    $link = "index.php?act=product-detail&idsp=".$sp_view['id'];
                    echo ('
                   
               <div class="section-danhmuc__hot-main__item">
                   <div class="hot-main__item-top">
                       <div class="top-img">
                           <a href="'.$link.'"><img src="../view/images/item/'.$sp_view['img'].'" alt=""></a>
                       </div>
                       <div class="top-inf">
                           <h5><a href="'.$link.'">'.$sp_view['name'].'</a></h5>
                           <p>Đang cập nhật</p>
                           <div class="vote">
                               <i class="fa fa-heart"></i>
                               <i class="fa fa-heart"></i>
                               <i class="fa fa-heart"></i>
                               <i class="fa fa-heart"></i>
                               <i class="fa fa-heart"></i>
                               <span>'.$sp_view['vote'].' votes</span>
                           </div>
                           <p>'.substr($sp_view['mota'],0,100).' ...</p>
                       </div>
                   </div>
                   <div class="hot-main__item-bot">
                       <p>'.$sp_view['view'].' lượt xem</p>
                   </div>
               </div>
                   
                   ');
                }
            ?>
            
            
        </div>
    </section>
   </div>
</article>