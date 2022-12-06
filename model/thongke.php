<?php
function top_sp_buy()
{
    $sql = "select count(cart.ma_sp) as sl_sp, ma_sp, ten_sp from cart group by cart.ma_sp ORDER BY `sl_sp` DESC LIMIT 5
    ";
    return pdo_query($sql);
}
function loadall_thongke()
{
    $sql = "SELECT type.ma_loai AS maloai, type.ten_loai AS tenloai, COUNT(product.ma_sp) AS countsp, MIN(product.gia_sp) AS minsp, MAX(product.gia_sp) AS maxsp, AVG(product.gia_sp) AS avgsp FROM product LEFT JOIN type ON type.ma_loai = product.ma_loai GROUP BY type.ma_loai ORDER BY type.ma_loai DESC;";
    $listtk = pdo_query($sql);
    return $listtk;
}
function doanhthu_ngay(){
    $sql = "SELECT sum(bill.bill_tong_tien) as tong, bill.bill_ngay_dat as ngay from bill group by bill.bill_ngay_dat desc LIMIT 7";
    return pdo_query($sql);
}
?>