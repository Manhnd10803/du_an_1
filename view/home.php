<div class="content">
    <article>
        <div class="danhmuc">
            <?php foreach($danhmuc as $danhmuc){
            ?>
            <a href="index.php?act=sanpham_dm&iddm=<?php echo $danhmuc['ma_loai']?>"> <?php echo $danhmuc['ten_loai']?></a>
            <?php }?>
            <a href="">Dịch vụ, hỗ trợ</a>
            <a href="">Thông tin hữu ích</a>
        </div>
        <div class="slider">
            <!-- <img src="image/Cate-banner-10-nam-TV-tang-MLKK.png" alt=""> -->
            <iframe src="view/slider2.html" frameborder="0"></iframe>
        </div>
    </article>
    <div class="topsp">
        <img src="view/image/top-sp.png" alt="" class="daumuc">
        <section class="list-product">
            <?php foreach($top10sp as $top10sp){
            ?>
            <div class="product">
                <img src="<?php echo $img_home.$top10sp['hinh_anh_sp']?>" alt="">
                <a href="index.php?act=sanphamct&id=<?php echo $top10sp['ma_sp']?>"><?php echo $top10sp['ten_sp']?></a>
                <div class="price">
                    <p><?php echo $top10sp['giam_gia_sp']?>đ <del><?php echo $top10sp['gia_sp']?>đ</del></p>
                    <p class="save">Tiết kiệm <?php echo ($top10sp['gia_sp']-$top10sp['giam_gia_sp'])?>đ</p>
                </div>
                <form action="index.php?act=sanphamct&id=<?php echo $top10sp['ma_sp']?>" method="POST">
                    <!-- <input type="hidden" value="<?php echo $img_home.$top10sp['hinh_anh_sp']?>" name="hinh">
                    <input type="hidden" value="<?php echo $top10sp['ten_sp']?>" name="ten">
                    <input type="hidden" value="<?php echo $top10sp['giam_gia_sp']?>" name="dongia">
                    <input type="hidden" value="<?php echo $top10sp['ma_hh']?>" name="ma_hh"> -->
                    <input type="submit" value="Mua ngay" class="addtocart" name="submit">
                </form>
            </div>
            <?php }?>
        </section>
    </div>
    <div class="topsp spmoi">
        <img src="view/image/sp-moi.png" alt="" class="daumuc">
        <section class="list-product">
            <?php foreach($spnew as $spnew){
            ?>
            <div class="product">
                <img src="<?php echo $img_home.$spnew['hinh_anh_sp']?>" alt="">
                <a href="index.php?act=sanphamct&id=<?php echo $spnew['ma_sp']?>"><?php echo $spnew['ten_sp']?></a>
                <div class="price">
                    <p><?php echo $spnew['giam_gia_sp']?>đ <del><?php echo $spnew['gia_sp']?>đ</del></p>
                    <p class="save">Tiết kiệm <?php echo ($spnew['gia_sp']-$spnew['giam_gia_sp'])?>đ</p>
                </div>
                <form action="index.php?act=sanphamct&id=<?php echo $top10sp['ma_sp']?>" method="POST">
                    <!-- <input type="hidden" value="<?php echo $img_home.$top10sp['hinh_anh_sp']?>" name="hinh">
                    <input type="hidden" value="<?php echo $top10sp['ten_sp']?>" name="ten">
                    <input type="hidden" value="<?php echo $top10sp['giam_gia_sp']?>" name="dongia">
                    <input type="hidden" value="<?php echo $top10sp['ma_hh']?>" name="ma_hh"> -->
                    <input type="submit" value="Mua ngay" class="addtocart" name="submit">
                </form>
            </div>
            <?php }?>
        </section>
    </div>
</div>