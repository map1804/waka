<article>
        <div class="boxcenter">
            <section class="section-banner">
                <img src="../view/images/banner/988_new.jpg" alt="">
                <div class="section-banner__icon icon-left"><i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
                <div class="section-banner__icon icon-right"><i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
            </section>
            <section class="section-danhmuc">
                <div class="section-danhmuc__menu">
                    <div class="section-danhmuc__menu-title">
                        <h4>DANH MỤC</h4>
                        <i class="fa fa-bars"></i>
                    </div>
                    <ul>
                        <?php
                            // var_dump($danhmuc);
                            $i = 0;
                            foreach ($danhmuc as $dm) {
                                $i++;
                                $link = "index.php?act=product&idcatalog=".$dm['id'];
                                echo ('
                                <li>
                                    <a href="'.$link.'">'.$dm['name'].'</a>
                                    <div class="submenu">'.$i.'</div>
                                </li>
                                ');
                            }
                        ?>
                    </ul>
                </div>
                <div class="section-danhmuc__hot">
                    <div class="section-danhmuc__hot-top">
                        <h3>Miễn phí HOT</h3>
                        <ul>
                            <li><a href="">Tất cả</a></li>
                            <li><a href="">Văn học</a></li>
                            <li><a href="">Ngôn tình</a></li>
                            <li><a href="">Kinh doanh</a></li>
                            <li><a href="">Kỹ năng</a></li>
                            <li><a href="">Sách nói</a></li>
                        </ul>
                    </div>
                    <div class="section-danhmuc__hot-main">
                        <?php 
                        // var_dump($sanpham_view);
                            foreach ($sanpham_view_home as $sp_view) {
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
                </div>
            </section>
            <section class="section-lichphathanh">
                <img src="../view/images/test-js.PNG" alt="">
            </section>
            <section class="section-sachdecu">
                <div class="section-sachdecu__top">
                    <h3>Mới trong tuần</h3>
                    <a href="">Xem tất cả</a>
                </div>
                <div class="section-sachdecu__main">
                    <div class="section-sachdecu__main-icon icon-left"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                    <div class="section-sachdecu__main-icon icon-right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    
                    <?php
                        foreach ($sanpham_view_home as $sp_news) {
                             $link = "index.php?act=product&idsp=".$sp_news['id'];
                             echo ('

                            <div class="section-sachdecu__main-item">
                                <a href="'.$link.'"><img src="../view/images/item/'.$sp_news['img'].'" alt=""></a>
                                <div class="section-sachdecu__main-item__inf">
                                    <div class="section-sachdecu__main-item__inf-top">
                                        <p>'.$sp_news['name'].'</p>
                                        <span>Niệm Niệm </span>
                                    </div>
                                    <div class="section-sachdecu__main-item__inf-bot">
                                        <p>5.00/5</p><span>('.$sp_news['vote'].' votes)</span>
                                    </div>
                                </div>
                            </div>
                    
                            
                            ');
                        }
                    ?>
                    
                </div>

            </section>
            <section class="section-danhmuc">
                <div class="section-danhmuc__menu">
                    <div class="section-danhmuc__menu-title">
                        <h4>BXH THÁNG 07/2020</h4>
                        <i class="fa fa-bar-chart"></i>
                    </div>
                    <ul>
                        <img src="../view/images/top1.jpg" alt="">
                        <li class="danhmuc-bxh danhmuc-bxh-top1">
                            <div class="danhmuc-bxh-left">
                                <div class="danhmuc-bxh-left__stt" style="color: red;">1</div>
                                <div class="danhmuc-bxh-left__avt"><img src="../view/images/avt.jpg" alt=""></div>
                                <div class="danhmuc-bxh-left__name">sherry8</div>
                            </div>
                            <p class="danhmuc-bxh-right" style="color: red;">11.571 phút</p>
                        </li>
                        <li class="danhmuc-bxh">
                            <div class="danhmuc-bxh-left">
                                <div class="danhmuc-bxh-left__stt" style="color: orange;">2</div>
                                <div class="danhmuc-bxh-left__avt"><img src="../view/images/avt.jpg" alt=""></div>
                                <div class="danhmuc-bxh-left__name">baokun97</div>
                            </div>
                            <p class="danhmuc-bxh-right" style="color: orange;">11.474 phút</p>
                        </li>
                        <li class="danhmuc-bxh">
                            <div class="danhmuc-bxh-left">
                                <div class="danhmuc-bxh-left__stt" style="color:rgb(69, 150, 69);">3</div>
                                <div class="danhmuc-bxh-left__avt"><img src="../view/images/avt.jpg" alt=""></div>
                                <div class="danhmuc-bxh-left__name">nguyenthi</div>
                            </div>
                            <p class="danhmuc-bxh-right" style="color:rgb(69, 150, 69);">11.374 phút</p>
                        </li>
                        <li class=" danhmuc-bxh ">
                            <div class="danhmuc-bxh-left ">
                                <div class="danhmuc-bxh-left__stt ">4</div>
                                <div class="danhmuc-bxh-left__avt "><img src="../view/images/avt.jpg " alt=" "></div>
                                <div class="danhmuc-bxh-left__name ">fb418486_</div>
                            </div>
                            <p class="danhmuc-bxh-right ">11.215 phút</p>
                        </li>
                        <li class="danhmuc-bxh ">
                            <div class="danhmuc-bxh-left ">
                                <div class="danhmuc-bxh-left__stt ">5</div>
                                <div class="danhmuc-bxh-left__avt "><img src="../view/images/avt.jpg " alt=" "></div>
                                <div class="danhmuc-bxh-left__name ">giahan08852</div>
                            </div>
                            <p class="danhmuc-bxh-right ">10.974 phút</p>
                        </li>
                        <li class="danhmuc-bxh ">
                            <div class="danhmuc-bxh-left ">
                                <div class="danhmuc-bxh-left__stt ">6</div>
                                <div class="danhmuc-bxh-left__avt "><img src="../view/images/avt.jpg " alt=" "></div>
                                <div class="danhmuc-bxh-left__name ">nguyen11999</div>
                            </div>
                            <p class="danhmuc-bxh-right ">9.574 phút</p>
                        </li>
                        <li class="danhmuc-bxh ">
                            <div class="danhmuc-bxh-left ">
                                <div class="danhmuc-bxh-left__stt ">7</div>
                                <div class="danhmuc-bxh-left__avt "><img src="../view/images/avt.jpg " alt=" "></div>
                                <div class="danhmuc-bxh-left__name ">echop***</div>
                            </div>
                            <p class="danhmuc-bxh-right ">9.647 phút</p>
                        </li>
                        <li class="danhmuc-bxh ">
                            <div class="danhmuc-bxh-left ">
                                <div class="danhmuc-bxh-left__stt ">8</div>
                                <div class="danhmuc-bxh-left__avt "><img src="../view/images/avt.jpg " alt=" "></div>
                                <div class="danhmuc-bxh-left__name ">trangiang2</div>
                            </div>
                            <p class="danhmuc-bxh-right ">7.385 phút</p>
                        </li>
                        <li class="danhmuc-bxh ">
                            <div class="danhmuc-bxh-left ">
                                <div class="danhmuc-bxh-left__stt ">9</div>
                                <div class="danhmuc-bxh-left__avt "><img src="../view/images/avt.jpg " alt=" "></div>
                                <div class="danhmuc-bxh-left__name ">tel_0778640</div>
                            </div>
                            <p class="danhmuc-bxh-right ">6.345 phút</p>
                        </li>
                        <li class="danhmuc-bxh ">
                            <div class="danhmuc-bxh-left ">
                                <div class="danhmuc-bxh-left__stt ">10</div>
                                <div class="danhmuc-bxh-left__avt "><img src="../view/images/avt.jpg " alt=" "></div>
                                <div class="danhmuc-bxh-left__name ">tel_0778640</div>
                            </div>
                            <p class="danhmuc-bxh-right ">6.001 phút</p>
                        </li>
                    </ul>
                </div>
                <div class="section-danhmuc__hot ">
                    <div class="section-danhmuc__hot-top ">
                        <h3>Đọc nhiều nhất</h3>
                        <ul>
                            <li><a href=" ">Tất cả</a></li>
                            <li><a href=" ">Kỹ năng làm việc</a></li>
                            <li><a href=" ">Hiện đại</a></li> 
                            <li><a href=" ">Nuôi dạy con</a></li>
                            <li><a href=" ">Quản trị - Lãnh đạo</a></li>
                            <li><a href=" ">Truyện dài - Tiểu thuyết</a></li>
                        </ul>
                    </div>
                    
                    <div class="section-danhmuc__hot-main ">
                        <?php 
                        // var_dump($sanpham_hot);
                            foreach ($sanpham_hot as $sp_hot) {
                             $link = "index.php?act=product-detail&idsp=".$sp_hot['id'];
                             echo ('
                        <div class="section-danhmuc__hot-main__item">
                            <div class="hot-main__item-top">
                                <div class="top-img">
                                    <a href="'.$link.'"><img src="../view/images/item/'.$sp_hot['img'].'" alt=""></a>
                                </div>
                                <div class="top-inf">
                                    <h5><a href="'.$link.'">'.$sp_hot['name'].'</a></h5>
                                    <p>Đang cập nhật</p>
                                    <div class="vote">
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <span>'.$sp_hot['vote'].' votes</span>
                                    </div>
                                    <p>'.substr($sp_hot['mota'],0,100).' ...</p>
                                </div>
                            </div>
                            <div class="hot-main__item-bot">
                                <p>'.$sp_hot['view'].' lượt xem</p>
                            </div>
                        </div>                            
                            ');
                            }
                        ?>
                    </div>
                </div>
            </section>
            <section class="section-sachdecu ">
            <div class="section-sachdecu__top">
                    <h3>HOT trong tuần</h3>
                    <a href="">Xem tất cả</a>
                </div>
                <div class="section-sachdecu__main">
                    <div class="section-sachdecu__main-icon icon-left"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                    <div class="section-sachdecu__main-icon icon-right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    
                    <?php
                        foreach ($sanpham_hot_inweek as $sp_hot) {
                             $link = "index.php?act=product-detail&idsp=".$sp_hot['id'];
                             echo ('

                            <div class="section-sachdecu__main-item">
                                <a href="'.$link.'"><img src="../view/images/item/'.$sp_hot['img'].'" alt=""></a>
                                <div class="section-sachdecu__main-item__inf">
                                    <div class="section-sachdecu__main-item__inf-top">
                                        <p>'.$sp_hot['name'].'</p>
                                        <span>Niệm Niệm </span>
                                    </div>
                                    <div class="section-sachdecu__main-item__inf-bot">
                                        <p>5.00/5</p><span>('.$sp_hot['vote'].' votes)</span>
                                    </div>
                                </div>
                            </div>
                    
                            
                            ');
                        }
                    ?>
                    
                </div>
            </section>
            <section class="section-danhmuc "></section>
        </div>
        <div class="banner ">
            <div class="banner-name">
                <p>TRUYỆN</p>
                <p>TRANH</p>
            </div>
            <div class="banner-title">
                "MẸ EM RẤT ĐẸP, MẸ CÓ MỘT MẮT, MỘT MŨI, MỘT MIỆNG, MỘT TAY, CÁI NÀO CŨNG RẤT ĐẸP... VỚI MỘT TAY, MẸ CHO EM MỘT MÁI NHÀ. VỚI MỘT MẮT, MẸ CHO EM THẤY ÁNH SÁNG... VÀ VỚI MỘT TRÁI TIM, MẸ CHO EM TRỌN VẸN YÊU THƯƠNG."
            </div>
            <i class="fa fa-angle-left" class="banner-boxicon banner-boxicon__left" aria-hidden="true"></i>

            <div class="banner-item">
                <img src="../view/images/item/11.jpg" alt="">
            </div>
            <div class="banner-item">
                <img src="../view/images/item/11.jpg" alt="">
            </div>
            <div class="banner-item">
                <img src="../view/images/item/11.jpg" alt="">
            </div>
            <div class="banner-item">
                <img src="../view/images/item/11.jpg" alt="">
            </div>
            <i class="fa fa-angle-right" class="banner-boxicon banner-boxicon__right" aria-hidden="true"></i>


        </div>
        <div class="boxcenter ">
            <section class="section-sachdecu ">
                <a href="index.php?act=product-detail">detail</a>
            </section>
            <section class="section-sachdecu">
                <div class="section-sachdecu__top">
                    <h3>Mới trong tuần</h3>
                    <a href="">Xem tất cả</a>
                </div>
                <div class="section-sachdecu__main">
                    <div class="section-sachdecu__main-icon icon-left"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                    <div class="section-sachdecu__main-icon icon-right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    
                    <?php
                        foreach ($sanpham_view_home as $sp_news) {
                             $link = "index.php?act=product&idsp=".$sp_news['id'];
                             echo ('

                            <div class="section-sachdecu__main-item">
                                <a href="'.$link.'"><img src="../view/images/item/'.$sp_news['img'].'" alt=""></a>
                                <div class="section-sachdecu__main-item__inf">
                                    <div class="section-sachdecu__main-item__inf-top">
                                        <p>'.$sp_news['name'].'</p>
                                        <span>Niệm Niệm </span>
                                    </div>
                                    <div class="section-sachdecu__main-item__inf-bot">
                                        <p>5.00/5</p><span>('.$sp_news['vote'].' votes)</span>
                                    </div>
                                </div>
                            </div>
                    
                            
                            ');
                        }
                    ?>
                    
                </div>

            </section>
        </div>
        <div class="news-end "></div>
    </article>