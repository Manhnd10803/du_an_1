<?php
    function insert_sanpham($tensp, $giasp, $giamgia, $uploadfile, $ngaynhap, $mota, $loaisp){
        $sql = "INSERT INTO `product` (`ten_sp`, `gia_sp`, `giam_gia_sp`, `hinh_anh_sp`, `ngay_nhap`, `mo_ta_sp`, `ma_loai`) VALUES ('{$tensp}', '{$giasp}', '{$giamgia}', '{$uploadfile}', '{$ngaynhap}', '{$mota}', '{$loaisp}')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql = "DELETE FROM product WHERE `product`.`ma_sp` = {$id}";
        pdo_execute($sql);
    }
    function show_sanpham_home(){
        $sql = "SELECT * FROM `product` WHERE 1 order by `ma_sp` desc limit 0,10";
        return pdo_query($sql);
    }
    function show_sanpham_top10(){
        $sql = "SELECT * FROM `product` WHERE 1 order by `luot_xem` desc limit 0,10";
        return pdo_query($sql);
    }
    function show_sanpham($kyw, $iddm){
        $sql = "SELECT * FROM `product` WHERE 1";
        if($kyw!=""){
            $sql.= " and ten_sp like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.= " and ma_loai = '".$iddm."'";
        }
        $sql.= " order by `ma_sp` desc";
        return pdo_query($sql);
    }
    function sua_sanpham($id){
        $sql = "SELECT * FROM `product` WHERE `product`.`ma_sp` = {$id}";
        return pdo_query_one($sql);
    }
    function load_ten_dm($iddm){
        if($iddm>0){
            $sql = "SELECT * FROM `type` WHERE `type`.`ma_loai` = {$iddm}";
            $dm = pdo_query_one($sql);
            extract($dm);
            return $ten_loai;
        }else{
            return "";
        }
    }
    function sanpham_cungloai($id, $ma_loai){
        $sql = "SELECT * FROM `product` WHERE `product`.`ma_loai` = {$ma_loai} AND `product`.`ma_sp` <> {$id}";
        return pdo_query($sql);
    }
    function update_sanpham($id, $tensp, $giasp, $giamgia, $filename, $ngaynhap, $mota, $loaisp){
        if($filename != ""){
            $sql = "UPDATE `product` SET `ten_sp` = '{$tensp}', `gia_sp` = '{$giasp}', `giam_gia_sp` = '{$giamgia}', `hinh_anh_sp` = '{$filename}', `ngay_nhap` = '{$ngaynhap}', `mo_ta_sp` = '{$mota}', `ma_loai` = '{$loaisp}' WHERE `product`.`ma_sp` = {$id}";
        }else{
            $sql = "UPDATE `product` SET `ten_sp` = '{$tensp}', `gia_sp` = '{$giasp}', `giam_gia_sp` = '{$giamgia}', `ngay_nhap` = '{$ngaynhap}', `mo_ta_sp` = '{$mota}', `ma_loai` = '{$loaisp}' WHERE `product`.`ma_sp` = {$id}";
        }
        pdo_execute($sql);
    }
    function update_luot_xem($id){
        $sql = "UPDATE `product` SET `luot_xem` = `luot_xem` + 1 WHERE `product`.`ma_sp` = {$id}";
        pdo_execute($sql);
    }
?>