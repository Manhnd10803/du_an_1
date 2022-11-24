<?php
    session_start();
    include 'model/danhmuc.php';
    include 'model/sanpham.php';
    include 'model/pdo.php';
    include 'model/taikhoan.php';
    include 'model/cart.php';
    include 'global.php';
    include 'view/header.php';

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

    $spnew = show_sanpham_home();
    $danhmuc = show_danhmuc();
    $top10sp = show_sanpham_top10();

    if(isset($_GET['act']) && ($_GET['act']!="")){
        $act = $_GET['act'];
        switch($act){
            case 'mybill':
                if(isset($_SESSION['user'])){
                    $listbill = loadbill_user($_SESSION['user']['ma_kh']);
                    include 'view/cart/mybill.php';
                }else{
                    header('Location:index.php?act=dangnhap');
                }
                break;
            case 'billconfirm':
                if(isset($_POST['submit'])){
                    $hoten = $_POST['hoten'];
                    $diachi = $_POST['diachi'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $ngaydathang = date('d/m/Y');
                    $tongdonhang = $_POST['tongtien'];
                    $pttt = $_POST['thanhtoan'];
                    $ma_kh = $_SESSION['user']['ma_tk'];
                    $idbill = insert_bill($ma_kh, $hoten, $diachi, $sdt, $email, $pttt, $ngaydathang, $tongdonhang);
                    foreach ($_SESSION['mycart'] as $cart){
                        insert_cart($_SESSION['user']['ma_tk'], $cart[5], $cart[0], $cart[1], $cart[2], $cart[3], $cart[4], $cart[6], $cart[7], $idbill);
                    }
                }
                $bill = loadone_bill($idbill);
                include 'view/cart/billconfirm.php';
                $_SESSION['mycart'] = [];
                break;
            case 'bill':
                if(isset($_SESSION['user'])){
                    include 'view/cart/bill.php';
                }else{
                    header('Location:index.php?act=dangnhap');
                }
                break;
            case 'delete_cart':
                if(isset($_GET['id'])){
                    array_splice($_SESSION['mycart'], $_GET['id'], 1);
                }else{
                    $_SESSION['mycart'] = [];
                }
                header('Location: index.php?act=viewcart');
                break;
            case 'viewcart':
                include 'view/cart/viewcart.php';
                break;
                case 'addtocart':
                    if(isset($_POST['submit'])&&($_POST['submit'])){
                        $hinh = $_POST['hinh'];
                        $ten = $_POST['ten'];
                        $dongia = $_POST['dongia'];
                        $soluong = 1;
                        $thanhtien = $dongia * $soluong;
                        $ma_hh = $_POST['ma_hh'];
                        $mau_sac = $_POST['mau_sac'];
                        $thong_so = $_POST['thong_so'];
                        $array_pro = [$hinh, $ten, $dongia, $soluong, $thanhtien, $ma_hh, $mau_sac, $thong_so];
                        array_push($_SESSION['mycart'], $array_pro);
                    }
                    include 'view/cart/viewcart.php';
                    break;
            case 'quantri':
                header('Location:admin/index.php');
                break;
            case 'dangxuat':
                unset($_SESSION['user']);
                header('Location:index.php');
                break;
            case 'quenmk':
                if(isset($_POST['submit'])){
                    $email = $_POST['email'];
                    $check_mk = check_email($email);
                    if(is_array($check_mk)){
                        $password = $_POST['password'];
                        update_matkhau($email, $password);
                        $thongbao = "Cập nhật mật khẩu mới thành công!";
                    }else{
                        $thongbao2 = "Email không tồn tại!";
                    }
                }
                include 'view/taikhoan/quenmk.php';
                break;
            case 'capnhattk':
                $username = $_SESSION['user']['ma_kh'];
                $taikhoan = loadone_tk($username);
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    update_taikhoan($username, $password, $name, $email, '');
                    $_SESSION['user'] = check_taikhoan($username, $password);
                    $thongbao = "Đã cập nhật thành công!";
                }
                include "view/taikhoan/capnhattk.php";
                break;
            case 'dangky':
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    insert_taikhoan($username, $password, $name, $email);
                    $thongbao = "Đã đăng ký thành công!";
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap':
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $checktk = check_taikhoan($username, $password);
                    if(is_array($checktk)){
                        $_SESSION['user'] = $checktk;
                        header('Location: index.php');
                    }else{
                        $thongbao2 = "Tài khoản không tồn tại!";
                    }
                }
                include "view/taikhoan/dangnhap.php";
                break;
            case 'sanpham_dm':
                if(isset($_POST['kyw']) && $_POST['kyw']!=""){
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && $_GET['iddm']>0){
                    $iddm = $_GET['iddm'];
                }else{
                    $iddm = 0;
                }
                $dssp = show_sanpham($kyw, $iddm);
                $tendm = load_ten_dm($iddm);
                include "view/sanpham_dm.php";
                break;
            case 'sanphamct':
                if(isset($_GET['id']) && $_GET['id']>0){
                    $id = $_GET['id'];
                    update_luot_xem($id);
                    $onesp = sua_sanpham($id);
                    extract($onesp);
                    $sp_cl = sanpham_cungloai($id, $ma_loai);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    }else{
        include 'view/home.php';
    }
    include 'view/footer.php';
?>