<?php
    function insert_danhmuc($tenloai, $icon){
        $sql = "INSERT INTO `type` (`ten_loai`) VALUES ('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql = "DELETE FROM `type` WHERE `type`.`ma_loai` = {$id}";
        pdo_execute($sql);
    } 
    function show_danhmuc(){    
        $sql = "SELECT * FROM `type`";
        return pdo_query($sql);
    }
    function sua_danhmuc($id){
        $sql = "SELECT * FROM `type` WHERE `type`.`ma_loai` = {$id}";
        return pdo_query_one($sql);
    }
    function update_danhmuc($id, $tenloai){
        $sql = "UPDATE `type` SET `ten_loai` = '{$tenloai}' WHERE `type`.`ma_loai` = {$id}";
        pdo_execute($sql);
    }
?>