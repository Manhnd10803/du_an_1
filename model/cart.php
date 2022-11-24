<?php
    function insert_bill($ma_kh, $hoten, $diachi, $sdt, $email, $pttt, $ngaydathang, $tongdonhang){
        $sql = "INSERT INTO `bill` (`ma_tk`, `bill_ho_ten`, `bill_dia_chi`, `bill_sdt`, `bill_email`, `bill_pttt`, `bill_ngay_dat`, `bill_tong_tien`) VALUES ('$ma_kh', '$hoten', '$diachi', '$sdt', '$email', '$pttt', '$ngaydathang', '$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function insert_cart($ma_kh, $ma_hh, $img, $name, $price, $soluong, $thanhtien, $mau_sac, $thong_so, $idbill){
        $sql = "INSERT INTO `cart` (`ma_tk`, `ma_sp`, `hinh_anh_sp`, `ten_sp`, `gia_sp`, `so_luong`, `thanh_tien`, `mau_sac`, `thong_so`, `id_bill`) VALUES ('$ma_kh', '$ma_hh', '$img', '$name', '$price', '$soluong', '$thanhtien', '$mau_sac','$thong_so', '$idbill')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function loadone_bill($id){
        $sql = "select * from bill where id=".$id;
        $bill = pdo_query_one($sql);
        return $bill;
    }
    function loadall_bill($kyw){
        if(isset($kyw) && $kyw!=""){
            $sql = "select * from bill where id =".$kyw;
        }else{
            $sql = "select * from bill order by id desc";
        }
        $bill = pdo_query($sql);
        return $bill;
    }
    function loadall_bill_2(){
        $sql = "select * from bill order by bill_ngay_dat desc";
        $bill = pdo_query($sql);
        return $bill;
    }
    function loadbill_user($ma_kh){
        $sql = "select * from bill where ma_tk like '%".$ma_kh."%'";
        $bill = pdo_query($sql);
        return $bill;
    }
    function loadcart_id_bill($id_bill){
        $sql = "select * from cart where id_bill = ".$id_bill;
        $cart = pdo_query($sql);
        return $cart;
    }
    function loadall_cart_count($idbill){
        $sql = "select * from cart where id_bill = ".$idbill;
        $bill = pdo_query($sql);
        return sizeof($bill);
    }
    function delete_bill($id_bill){
        $sql = "DELETE FROM cart WHERE `cart`.`id_bill` = {$id_bill}";
        $sql2 = "DELETE FROM bill WHERE `bill`.`id` = {$id_bill}";
        pdo_execute($sql);
        pdo_execute($sql2);
    }
    function update_bill($tenkh, $sdt, $diachi, $giatri, $ttdh, $id){
        $sql = "UPDATE `bill` SET `bill_ho_ten` = '$tenkh', `bill_dia_chi` = '$diachi', `bill_sdt` = '$sdt', `bill_tong_tien` = '$giatri', `bill_trang_thai` = '$ttdh' WHERE `bill`.`id` = {$id}";
        pdo_execute($sql);
    }
    function loadall_thongke(){
        $sql = "SELECT type.ma_loai AS maloai, type.ten_loai AS tenloai, COUNT(product.ma_sp) AS countsp, MIN(product.gia_sp) AS minsp, MAX(product.gia_sp) AS maxsp, AVG(product.gia_sp) AS avgsp FROM product LEFT JOIN type ON type.ma_loai = product.ma_loai GROUP BY type.ma_loai ORDER BY type.ma_loai DESC;";
        $listtk = pdo_query($sql);
        return $listtk;
    }
?>