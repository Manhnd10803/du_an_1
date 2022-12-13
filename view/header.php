<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/3c4fa98e07.js" crossorigin="anonymous"></script>
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/dangnhap.css">
    <title>Smobile</title>
</head>
<body>
    <div class="container">
        <header>
            <a href="index.php" class="logo">Smobile</a>
            <form action="index.php?act=sanpham_dm" method="post">
                <input type="text" placeholder="Bạn cần tìm gì hôm nay?" class="A" name="kyw">
                <input type="submit" value="Tìm kiếm" class="B">
            </form>
            <a href="index.php?act=viewcart"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a>
            <a href="index.php?act=mybill"><i class="fas fa-history"></i> Tra cứu đơn hàng</a>
            <ul>
                <li>
                <?php if(isset($_SESSION['user'])){ 
                    extract($_SESSION['user'])
                ?>
                    <a href=""><i class="fas fa-user"></i> Xin chào: <?php echo $ma_tk?></a>
                    <ul>
                        <li><a href="index.php?act=capnhattk">Cập nhật tài khoản</a></li>
                        <li><a href="index.php?act=dangxuat">Đăng xuất</a></li>
                        <?php if($_SESSION['user']['role']==1){
                        ?>
                        <li><a href="index.php?act=quantri">Quản trị SMobile</a></li>
                        <?php }?>
                    </ul>
                <?php }else{ ?>
                    <a href="index.php?act=dangnhap"><i class="fas fa-user"></i> Tài khoản</a>
                <?php }?>
                </li>
            </ul>
            <a href=""><i class="fas fa-phone-volume"></i> Gọi mua</a>
        </header>
        <nav>
            <div class="A">
                <a href=""><i class="fas fa-list"></i> Danh mục sản phẩm</a>
            </div>
            <div class="B">
                <a href="index.php?act=gioithieu">Giới thiệu</a>
            </div> <span>|</span>
            <div class="B">
                <a href="index.php?act=lienhe">Liên hệ</a>
            </div> <span>|</span>
            <div class="B">
                <a href="index.php?act=gopy">Góp ý</a>
            </div> <span>|</span>
            <div class="B">
                <a href="index.php?act=hoidap">Hỏi đáp</a>
            </div>
        </nav>
        