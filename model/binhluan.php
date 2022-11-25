<?php
        // function insert_binhluan($tenloai){
        //     $sql = "INSERT INTO danhmuc(name) values('$tenloai')";
        //     pdo_execute($sql);
        // }
    
        function delete_binhluan($id){
            $sql = "delete from binh_luan where id =".$id;
            pdo_execute($sql);
        }
            
        function loadall_binhluan(){
            $sql = "select * from binh_luan order by id desc";
            $listbl =pdo_query($sql);
            return $listbl;
        }


?>