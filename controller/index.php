<?php
    include "../model/connect.php";
    include "../globle.php";

    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/tacgia.php";

        connect();
    $danhmuc = showdanhmuc();

    $sanpham_view_home = showsanpham_view(0,6);
    $sanpham_hot = showsanpham_view(1,9);
    $sanpham_hot_inweek = showsanpham_view(1,6);
    


    include "../view/header.php";
        if(isset($_GET['act'])){
            $act = $_GET['act'];
            switch ($act) {
                case 'product':
                        if(isset($_GET['idcatalog']) && ($_GET['idcatalog'] >0)){
                            $sanpham_view_product = showsanpham_danhmuc($_GET['idcatalog']);
                    }
                        else $sanpham_view_product = showsanpham_view(0,12);
                        
                        include "../view/home-product.php";
                    break;
                case 'product-detail':
                    if(isset($_GET['idsp']) && ($_GET['idsp'] >0)){
                        $sp_detail = showsanpham_detail($_GET['idsp']);
                    }
                    include "../view/home-product-detail.php";
                    break;
                case 'about':
                        include "../view/home-about.php";
                    break;
                case 'contact':
                        include "../view/home-contact.php";
                    break;
                case 'news':
                        include "../view/home-news.php";
                    break;
                                            
                default:
                        include "../view/home.php";
                    break;
            }
        }
        else include "../view/home.php";
    include "../view/footer.php";


?>