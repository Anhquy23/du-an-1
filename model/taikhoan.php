<?php
    function loadall_taikhoan(){
        $sql = "select * from taikhoan order by id desc";
        $listtaikhoan =pdo_query($sql);
        return $listtaikhoan;
    } 
    
    function insert_taikhoan($user,$pass,$email,$address,$tel){
        $sql = "INSERT INTO taikhoan(user,pass,email,address,tel) values('$user','$pass','$email','$address','$tel')";
        pdo_execute($sql);
    }

    function checkuser($user, $pass){
        $sql = "select * from taikhoan where user='".$user."' and pass='".$pass."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function checkemail($email){
        $sql = "select * from taikhoan where email='".$email."' ";
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function update_taikhoan($id,$user,$email,$address,$tel){
        $sql = "UPDATE taikhoan set user=' ".$user." ', email=' ".$email." ',address=' ".$address." ',tel=' ".$tel." 'where id=".$id;
        pdo_execute($sql);
    }

?>