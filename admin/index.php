<?php 
    session_start();
    include "../model/pdo.php";
    include 'header.php';
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/cart.php";
    include "../model/thongke.php";
    include "../model/binhluan.php";
    include "../global.php";
    //controler
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            //controller danh mục
            case 'adddm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai = $_POST['tenloai'];
                    // $icon = $_POST['icon'];
                    insert_danhmuc($tenloai, "");
                    $thongbao = "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $list_danhmuc = show_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET["id"];
                    delete_danhmuc($id);
                }
                $list_danhmuc = show_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm': //lấy dữ liệu trên database xuống form
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                    $danhmuc = sua_danhmuc($id);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    // $icon = $_POST['icon'];
                    $id = $_POST['maloai'];
                    update_danhmuc($id, $tenloai);
                    $thongbao = "Cập nhật thành công";
                }
                $list_danhmuc = show_danhmuc();
                include 'danhmuc/list.php';
                break;

            //controller sanpham
            case 'addsp':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $giamgia = $_POST['giamgia'];
                    $filename = $_FILES['hinh']['name'];
                    $upload_dir = "../upload/";
                    $uploadfile = $upload_dir.$filename;
                    if(move_uploaded_file($_FILES['hinh']['tmp_name'], $uploadfile)){
                        //echo "Thành công";
                    }
                    $ngaynhap = $_POST['ngaynhap'];
                    // $dacbiet = $_POST['dacbiet'];
                    $loaisp = $_POST['loaisp'];
                    $mota = $_POST['mota'];
                    insert_sanpham($tensp, $giasp, $giamgia, $filename, $ngaynhap, $mota, $loaisp);
                    $thongbao = "Thêm thành công";
                }
                $list_danhmuc = show_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['OK'])&&($_POST['OK'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = "";
                    $iddm = "";
                }
                $list_danhmuc = show_danhmuc();
                $list_sanpham = show_sanpham($kyw, $iddm);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET["id"];
                    delete_sanpham($id);
                }
                $list_danhmuc = show_danhmuc();
                $list_sanpham = show_sanpham("", "");
                include "sanpham/list.php";
                break;
            case 'suasp': //lấy dữ liệu trên database xuống form
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                    $sanpham = sua_sanpham($id);
                }
                $list_danhmuc = show_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id = $_POST['masp'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $giamgia = $_POST['giamgia'];
                    $filename = $_FILES['hinh']['name'];
                    $upload_dir = "../upload/";
                    $uploadfile = $upload_dir.$filename;
                    if(move_uploaded_file($_FILES['hinh']['tmp_name'], $uploadfile)){
                        //echo "Thành công";
                    }
                    $ngaynhap = $_POST['ngaynhap'];
                    $loaisp = $_POST['loaisp'];
                    $mota = $_POST['mota'];
                    update_sanpham($id, $tensp, $giasp, $giamgia, $filename, $ngaynhap, $mota, $loaisp);
                    $thongbao = "Thêm thành công";
                }
                $list_danhmuc = show_danhmuc();
                $list_sanpham = show_sanpham("", "");
                include 'sanpham/list.php';
                break;
            
            // Controller tai khoan

            case 'listtk':
                $list_tk = loadall_tk();
                include 'taikhoan/list.php';
                break;
            case 'suatk':
                $ma_tk = $_GET['id'];
                $taikhoan = loadone_tk($ma_tk);
                include 'taikhoan/update.php';
                break;
            case 'updatetk':
                if(isset($_POST['capnhat'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $dia_chi = $_POST['dia_chi'];
                    $sdt = $_POST['sdt'];
                    $vai_tro = $_POST['vai_tro'];
                    update_taikhoan($username, $password, $name, $email, $dia_chi, $sdt, $vai_tro);
                }
                $list_tk = loadall_tk();
                include 'taikhoan/list.php';
                break;
            case 'xoatk':
                if(isset($_GET['id'])){
                    $id = $_GET["id"];
                    delete_taikhoan($id);
                }
                $list_tk = loadall_tk();
                include 'taikhoan/list.php';
                break;
            // Controller binh luan
            
            //Controller binh luan
            case 'listbl':
                $list_bl = show_all_comment();
                include 'binhluan/list.php';
                break;
            case 'xoabl':
                if(isset($_GET['ma_bl'])){
                    $ma_bl = $_GET['ma_bl'];
                    delete_comment($ma_bl);
                }
                include 'binhluan/list.php';
                break;

            
            // Controller đơn hàng
            case 'listdh':
                if(isset($_POST['OK'])){
                    $kyw = $_POST['kyw'];
                    $listbill = loadall_bill($kyw);
                }else{
                    $listbill = loadall_bill("");
                }
                include "donhang/list.php";
                break;
            case 'suadh':
                if(isset($_GET['id'])){
                    $id_bill = $_GET['id'];
                    $dh = loadone_bill($id_bill);
                    include "donhang/update.php";
                }
                if(isset($_POST['capnhat'])){
                    $tenkh = $_POST['tenkh'];
                    $sdt = $_POST['sdt'];
                    $diachi = $_POST['diachi'];
                    $giatri = $_POST['giatri'];
                    $ttdh = $_POST['ttdh'];
                    $id_bill = $_POST['id_bill'];
                    update_bill($tenkh, $sdt, $diachi, $giatri, $ttdh, $id_bill);
                    header("Location:index.php?act=listdh");
                }
                break;
            case 'xoadh':
                $id_bill = $_GET['id'];
                delete_bill($id_bill);
                header("Location:index.php?act=listdh");
                break;
            case 'xemdh':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $dh = loadone_bill($id);
                    $pro = loadcart_id_bill($id);
                    include 'donhang/detail.php';
                }
                break;
            case 'themdh':
                if(isset($_POST['themmoi'])){
                    $tenkh = $_POST['tenkh'];
                    $sdt = $_POST['sdt'];
                    $diachi = $_POST['diachi'];
                    $giatri = $_POST['giatri'];
                    $ttdh = $_POST['ttdh'];
                    $ma_tk = $_SESSION['user']['ma_tk'];
                    add_bill($tenkh, $sdt, $diachi, $giatri, $ttdh, $ma_tk);
                    header("Location:index.php?act=listdh");
                    
                }
                $list_sp = show_sp(); 
                include 'donhang/add.php';
                break;
            case 'addtocart':
                if(isset($_POST['themsp'])&&($_POST['themsp'])){
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
                $list_sp = show_sp(); 
                include 'donhang/add.php';
                break;
            case 'delete_cart':
                if(isset($_GET['id'])){
                    array_splice($_SESSION['mycart'], $_GET['id'], 1);
                    // array_splice(mảng truyền vào, vị trí pt đầu tiên xóa, số phần từ xóa);
                }else{
                    $_SESSION['mycart'] = [];
                }
                header('Location: index.php?act=addtocart');
                break;
            case 'bill':
                if(isset($_SESSION['user'])){
                    include 'donhang/bill.php';
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
                include 'donhang/billconfirm.php';
                $_SESSION['mycart'] = [];
                break;
            // Controller thong ke
            case 'thongke':
                $listtk = loadall_thongke();
                include 'thongke/list.php';
                break;
            case 'bieudo':
                $listtk = loadall_thongke();
                include 'thongke/bieudo.php';
                break;
            case 'sl_donhang':
                $all_bill = loadall_bill_2();
                $sl_theo_ngay = [];
                foreach($all_bill as $all_bill){
                    array_push($sl_theo_ngay, $all_bill['bill_ngay_dat']);
                }
                include 'thongke/bd_sl_donhang.php';
                break;
            case 'top_sp_buy':
                $top_buy_sp = top_sp_buy();
                include 'thongke/bd_topsp.php';
                break;
            case 'tk_doanhthu':
                $doanh_thu = doanhthu_ngay();
                $tong = [];
                foreach($doanh_thu as $doanh_thu){
                    // echo $doanh_thu['tong'];
                    array_push($tong, $doanh_thu['tong']);
                }
                $doanh_thu = doanhthu_ngay();
                $ngay = [];
                foreach($doanh_thu as $doanh_thu){
                    // echo $doanh_thu['ngay'];
                    array_push($ngay, $doanh_thu['ngay']);
                }
                include 'thongke/bd_doanhthu.php';
                break;
            default:
            header("Location:index.php?act=listdh");
                break;
        }
    }else{
        header("Location:index.php?act=listdh");
    }
    include 'footer.php';
?>