<?php
    function insert_taikhoan($user,$pass,$email,$address,$tel){
        $sql = "INSERT INTO taikhoan(user,pass,email,address,tel) values('$user','$pass','$email','$address','$tel')";
        pdo_execute($sql);
    }

    function checkuser($user, $pass){
        $sql = "select * from taikhoan where user='".$user."' and pass='".$pass."'";
        $dm = pdo_query_one($sql);
        return $dm;
    }

?>