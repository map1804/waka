<?php
    //ADD
    function addsanpham($name,$price,$iddm,$idtg,$hot,$mota,$img){
        $sql = "INSERT INTO sanpham (name, price, iddm , idtacgia, hot, mota, img)
                VALUES ('$name','$price','$iddm','$idtg','$hot','$mota' ,'$img')";
        // use exec() because no results are returned
        $conn = connect();
        $conn->exec($sql);
    }
    //EDIT
    function editsanpham($id,$name,$price,$iddm,$idtg,$hot,$mota,$img){
        if($img != ""){
            $sql = "UPDATE sanpham SET 
                    name = '$name', price = '$price', iddm = '$iddm', 
                    idtacgia='$idtg', hot='$hot', mota='$mota', img='$img'    
                WHERE id='$id'";
        }
        else{
            $sql = "UPDATE sanpham SET 
                    name = '$name', price = '$price', iddm = '$iddm', 
                    idtacgia='$idtg', hot='$hot', mota='$mota' 
                WHERE id='$id'";
        }
        $conn = connect();
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    //DELETE
    function delsanpham($id)
    {
        $sql = "DELETE FROM sanpham where id=".$id;
        // use exec() because no results are returned
        $conn = connect();
        $conn->exec($sql);
    }
    // SHOW
    function showsanpham_danhmuc($iddm)
    {
        $sql = "select * from sanpham where 1";
        if($iddm > 0 ) $sql .= " AND iddm = ".$iddm;

        $conn = connect();

        $stmt = $conn->prepare($sql);
        $stmt->execute(); /*Hàm thực thi*/
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt -> fetchAll(); 
    }

    function showsanpham_view($hot,$sl){
        $sql = "select * from sanpham where 1";
        if($hot == 1){
            $sql .= " AND hot = 1";
        }
        if ($sl > 0) {
            $sql .= " order by view desc limit ".$sl;
        }
        $conn = connect();

        $stmt = $conn->prepare($sql);
        $stmt->execute(); /*Hàm thực thi*/
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt -> fetchAll();
 
    }
    function showsanpham_detail($idsp){
        $sql = "select * from sanpham where 1";
        if($idsp > 0 ) $sql .= " AND id = ".$idsp;

        $conn = connect();

        $stmt = $conn->prepare($sql);
        $stmt->execute(); /*Hàm thực thi*/
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt -> fetch(); //lấy ra 1
    }
?>