<?php  
    function add_comment($noi_dung, $ma_tk, $ngay_binh_luan, $ma_sp){
        $sql = "INSERT INTO `commentary` (`ma_bl`, `noi_dung`, `ma_tk`, `ngay_bl`, `ma_sp`) VALUES (NULL, '{$noi_dung}', '{$ma_tk}', '{$ngay_binh_luan}', '{$ma_sp}')";
        return pdo_execute($sql);
    }
    function show_comment($ma_sp){
        $sql = "SELECT * FROM `commentary` WHERE `ma_sp` = '{$ma_sp}'";
        return pdo_query($sql);
    }
    function check_binh_luan($ma_tk, $ma_sp){
        $sql = "SELECT * FROM `cart` WHERE `ma_sp` = '{$ma_sp}' and `ma_tk` = '{$ma_tk}'";
        return pdo_query_one($sql);
    }
    function check_binh_luan2($ma_tk, $ma_sp){
        $sql = "SELECT * FROM `commentary`  WHERE `ma_sp` = '{$ma_sp}' and `ma_tk` = '{$ma_tk}'";
        return pdo_query_one($sql);
    }
    function show_all_comment(){
        $sql = "SELECT * FROM `commentary`";
        return pdo_query($sql);
    }
    function delete_comment($ma_bl){
        $sql = " DELETE FROM commentary WHERE `commentary`.`ma_bl` = '{$ma_bl}'";
        return pdo_execute($sql);
    }
?>