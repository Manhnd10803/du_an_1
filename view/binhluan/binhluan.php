<?php 
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $ma_sp = $_REQUEST['ma_sp'];
    // Biến này là một mảng kết hợp, lưu trữ thông tin chứa trong biến $_GET, $_POST và $_COOKIE
    $list_comment  = show_comment($ma_sp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/3c4fa98e07.js" crossorigin="anonymous"></script>
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        table td span{
            margin: 0 3px;
        }
        .container{
            padding: 20px;
            padding-bottom: 0;
            background-color: white;
        }
        form{
            display: flex;
            justify-content: space-between;
        }
        form input{
            width: 84%;
            height: 25px;
            font-size: 16px;
            border: none;
            outline: none;
            border-radius: 3px;
        }
        form .submit{
            width: 14%;
            height: 40px;
            background-color: #ED3324;
            color: white;
            font-size: 19px;
        }
        form .submit:hover{
            background-color: #FE0000;
        }
        .dangnhap_bl{
            background-color: white;
            padding-left: 20px;
        }
        .dangnhap_bl p{
            font-size: 20px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <?php 
                foreach($list_comment as $comment){
            ?>
            <tr>
                <td><i class="fa-solid fa-user"></i> <span><?php echo $comment['ma_tk']?></span> <i class="fa-solid fa-calendar-days"></i> <span><?php echo $comment['ngay_bl']?></span></td>
            </tr>
            <tr>
                <td><?php echo $comment['noi_dung']?></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <?php
        if(isset($_SESSION['user'])){
            $check_binh_luan = check_binh_luan($_SESSION['user']['ma_tk'], $ma_sp);
            if(is_array($check_binh_luan)){
                $check_binh_luan2 = check_binh_luan2($_SESSION['user']['ma_tk'], $ma_sp);
                if(!is_array($check_binh_luan2)){
            ?>
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <!-- $_SERVER['PHP_SELF'] Trả về tên file của file đang được chạy. -->
                    <input type="hidden" name="ma_sp" value="<?php echo $ma_sp?>">
                    <input type="text" placeholder="Nhập bình luận" name="noi_dung" style="padding: 20px;">
                    <input type="submit" name="submit" class="submit">
                </form>
            <?php
                }else{
                ?>
                    <div class="dangnhap_bl">
                        <p style="color: #EE1E25;">Bạn đã bình luận sản phẩm rồi</p>
                    </div>
                <?php    
                }
            }else {
            ?>
                <div class="dangnhap_bl">
                    <p style="color: #EE1E25;">Mua sản phẩm để bình luận</p>
                </div>
            <?php    
            }
        }else{
        ?>
        <div class="dangnhap_bl">
            <p style="color: #EE1E25;">Đăng nhập để bình luận</p>
        </div>
        <?php
        }
    ?>
    <?php
        if(isset($_POST['submit']) && $_POST['submit']){
            $ma_tk = $_SESSION['user']['ma_tk'];
            $ma_sp = $_POST['ma_sp'];
            $noi_dung = $_POST['noi_dung'];
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $ngay_binh_luan =  date('d/m/Y');
            add_comment($noi_dung, $ma_tk, $ngay_binh_luan, $ma_sp);
        }
    ?>
</body>
</html>
