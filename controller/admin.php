<?php
    include "../model/connect.php";
    include "../globle.php";

    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/tacgia.php";

        connect();


    include "../view/admin/ad-header.php";
        if(isset($_GET['act'])){
            $act = $_GET['act'];
            switch ($act) {
                case 'qldm':
                    //ADD dm
                    if (isset($_POST['add']) && ($_POST['add'])) {
                        $name = $_POST['name'];
                        adddanhmuc($name);
                    }
                    //EDIT dm
                    if((isset($_GET['idedit']))&&($_GET['idedit'] > 0)){
                            
                    }
                    //DEL dm
                    if((isset($_GET['iddel']))&&($_GET['iddel'] > 0)){
                        deldanhmuc($_GET['iddel']);
                    }
                    $dsdm = showdanhmuc();
                    include "../view/admin/ad-home-qldm.php";
                    break;
                case 'qltg':
                    //ADD tg
                    if (isset($_POST['add']) && ($_POST['add'])) {
                        $name = $_POST['name'];
                        addtacgia($name);
                    }
                    //EDIT tg
                    if((isset($_GET['idedit']))&&($_GET['idedit'] > 0)){
                        
                    }
                    //DEL tg
                    if((isset($_GET['iddel']))&&($_GET['iddel'] > 0)){
                        deltacgia($_GET['iddel']);
                    }
                    $dstg = showtacgia();
                    include "../view/admin/ad-home-qltg.php";
                    break;
                case 'qlsp':
                        //Lay sp
                        $dsdm = showdanhmuc();
                        $dstg = showtacgia();

                        //add sp
                        if(isset($_POST['add']) && ($_POST['add'])){
                            $name = $_POST['name'];
                            $price = $_POST['price'];
                            $iddm = $_POST['iddm'];
                            $idtg = $_POST['idtg'];
                            if(isset($_POST['hot'])) $hot = 1;
                            else $hot =0;
                            $mota = $_POST['mota'];

                            $img = $_FILES['img']['name'];

                            $target_file = $pathimg . basename($img); 
                            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                $err_img = "OKE";  
                            } else {
                                $err_img = "";                           
                            }
                            
                            addsanpham($name,$price,$iddm,$idtg,$hot,$mota,$img);
                        }
                        //EDIT sp
                        if((isset($_GET['idedit']))&&($_GET['idedit'] > 0)){
                                $detail_sp = showsanpham_detail($_GET['idedit']);                                
                        }
                        if((isset($_POST['edit']))&&($_POST['edit'])){
                            $id = $_POST['id'];
                            $name = $_POST['name'];
                            $price = $_POST['price'];
                            $iddm = $_POST['iddm'];
                            $idtg = $_POST['idtg'];
                            if(isset($_POST['hot'])) $hot = 1;
                                else $hot =0;
                            $mota = $_POST['mota'];
                            if($_FILES['img']['name'] != ""){
                                $img = $_FILES['img']['name'];
                                $target_file = $pathimg . basename($img); 
                                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                    $err_img = "OKE";  
                                } else {
                                    $err_img = "";                           
                                }
                            }
                            else{
                                $img = "";
                            }

                            editsanpham($id,$name,$price,$iddm,$idtg,$hot,$mota,$img);

                        }
                        //DEL sp
                        if((isset($_GET['iddel']))&&($_GET['iddel'] > 0)){
                            delsanpham($_GET['iddel']);
                        }
                        //show danh sach sp
                        $dssp = showsanpham_view(0,0);
                        include "../view/admin/ad-home-qlsp.php";   
                    break;
                
                                            
                default:
                        include "../view/admin/ad-home.php";
                    break;
            }
        }
        else include "../view/admin/ad-home.php";
    include "../view/admin/ad-footer.php";


?>