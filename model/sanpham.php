<?php

    function insert_sanpham($tensp,$giasp,$hinhsp,$mota,$iddm){
        $sql = "INSERT INTO sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinhsp','$mota','$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql = "delete from sanpham where id =".$id;
        pdo_execute($sql);
    }

    function loadall_sanpham($kyw,$iddm){
        $sql = "select * from sanpham where 1"; 
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm = '".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham =pdo_query($sql);
        return $listsanpham;
    }

    function loadone_sanpham($id){
        $sql = "select * from sanpham where id =".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }

    function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinhsp){
        if($hinhsp!=""){
            $sql = "UPDATE sanpham set iddm=' ".$iddm." ', name=' ".$tensp." ',price=' ".$giasp." ',mota=' ".$mota." ',img=' ".$hinhsp." 'where id=".$id;
        }else{
            $sql = "UPDATE sanpham set iddm=' ".$iddm." ', name=' ".$tensp." ',price=' ".$giasp." ',mota=' ".$mota." 'where id=".$id;
        }
        pdo_execute($sql);
    }
?>