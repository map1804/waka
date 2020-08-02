<?php
    //  ADD DU LIEU
    function addtacgia($name){
        $sql = "INSERT INTO tacgia (name)
                VALUES ('$name')";
        // use exec() because no results are returned
        $conn = connect();
        $conn->exec($sql);
    }
    //XOA DU LIEU
    function deltacgia($id)
    {
        $sql = "DELETE FROM tacgia where id=".$id ;
        $conn = connect();
        $conn->exec($sql);
    }
    //SHOW DU LIEU
    function showtacgia(){
        $sql = "select * from tacgia";
        $conn = connect();

        $stmt = $conn->prepare($sql);
        $stmt->execute(); /*Hàm thực thi*/
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt -> fetchAll();
 
    }

?>
