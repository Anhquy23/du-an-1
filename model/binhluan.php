<?php
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
        $sql = "INSERT INTO binhluan (noidung,iduser,idpro,ngaybinhluan) VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function delete_binhluan($id){
        $sql = "delete from binhluan where id =".$id;
        pdo_execute($sql);
    }
    function loadall_binhluan(){
        $sql = "SELECT * FROM binhluan WHERE idpro=".$_SESSION['idpro'];
        $listbl= pdo_query($sql);
        return $listbl;
    }
    function binhluan(){
        $sql = " select * from binhluan ";
        $listbinhluan = getAll($sql);
        return $listbinhluan;
    }
?>