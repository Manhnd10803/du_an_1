<?php 
    include "../model/pdo.php";
    include 'header.php';
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/cart.php";
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
            
            // Controller binh luan
            
            
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
                include 'donhang/add.php';
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
                include 'thongke/bieudo_sl.html';
                break;
            case 'top_sp_buy':
                include 'thongke/bieudo_dn.html';
                break;
            case 'tk_doanhthu':
                include 'thongke/bieudo_dt.html';
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