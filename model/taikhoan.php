<?php
    function insert_taikhoan($username, $password, $name, $email){ //them tài khoản
        $sql = "INSERT INTO `account` (`ma_tk`, `mat_khau`, `ho_ten`, `email`, `role`) VALUES ('{$username}', '{$password}', '{$name}', '{$email}', '0')";
        pdo_execute($sql);
    }
    function check_taikhoan($username, $password){ //kiểm tra tài khoản để dăng nhập
        $sql = "SELECT * FROM `account` WHERE `account`.`ma_tk` = '{$username}' AND `account`.`mat_khau` = '{$password}'";
        return pdo_query_one($sql);
    }
    function check_email($email){ //kiểm tra email để lấy lại mk
        $sql = "SELECT * FROM `account` WHERE `account`.`email` = '{$email}'";
        return pdo_query_one($sql);
    }
    function update_matkhau($email, $password){ // mật khẩu mới
        $sql = "UPDATE `account` SET `mat_khau` = '{$password}' WHERE `account`.`email` = '{$email}'";
        pdo_execute($sql);
    }
    function loadone_tk($username){ //load thông tin tài khoản
        $sql = "SELECT * FROM `account` WHERE `account`.`ma_kh` = '{$username}'";
        return pdo_query_one($sql);
    }
    function loadall_tk(){ //load danh sách tài khoản
        $sql = "SELECT * FROM `account`";
        return pdo_query($sql);
    }
    function update_taikhoan($username, $password, $name, $email, $vai_tro){ //
        $sql = "UPDATE `account` SET `mat_khau` = '{$password}', `ho_ten` = '{$name}', `email` = '{$email}'";
        if(is_numeric($vai_tro)){
            $sql.= ", `role` = '{$vai_tro}'";
        }
        $sql.= "WHERE `account`.`ma_kh` = '{$username}'";
        pdo_execute($sql);
    }
    function delete_taikhoan($id){
        $sql = "DELETE FROM account WHERE `account`.`ma_kh` = '{$id}'";
        pdo_execute($sql);
    } 
?>