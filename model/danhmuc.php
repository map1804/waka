<?php
    //  ADD DU LIEU
    function adddanhmuc($name){
        $sql = "INSERT INTO danhmuc (name)
                VALUES ('$name')";
        // use exec() because no results are returned
        $conn = connect();
        $conn->exec($sql);
    }
    //XOA DU LIEU
    function deldanhmuc($id){
        $sql = "DELETE FROM danhmuc where id=".$id ;
        $conn = connect();
        $conn->exec($sql);
    }
    // SHOW DANH MUC
    function showdanhmuc(){
        $sql = "select * from danhmuc";
        $conn = connect();

        $stmt = $conn->prepare($sql);
        $stmt->execute(); /*Hàm thực thi*/
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt -> fetchAll();
 
    }
    function soluongsp_danhmuc($id){
        $sql = "select count * from sanpham where iddm".$id;
        $conn = connect();

        $stmt = $conn->prepare($sql);
        $stmt->execute(); /*Hàm thực thi*/
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt -> fetch();
    }

?>