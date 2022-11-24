<div class="content">
    <article>
        <div class="danhmuc">
            <?php foreach($danhmuc as $danhmuc){
            ?>
            <a href="index.php?act=sanpham_dm&iddm=<?php echo $danhmuc['ma_loai']?>"><?php echo $danhmuc['icon']?> <?php echo $danhmuc['ten_loai']?></a>
            <?php }?>
            <a href="">Dịch vụ, hỗ trợ</a>
            <a href="">Thông tin hữu ích</a>
        </div>
        <div class="slider">
            <!-- <img src="image/Cate-banner-10-nam-TV-tang-MLKK.png" alt=""> -->
            <iframe src="view/slider2.html" frameborder="0"></iframe>
        </div>
    </article>
    <div class="topsp spmoi">
        <div class="spcungloai">
            <p>Sản phẩm <?php echo $tendm?></p>
        </div>
        <section class="list-product">
            <?php foreach($dssp as $dssp){
            ?>
            <div class="product">
                <img src="<?php echo $img_home.$dssp['hinh_anh_sp']?>" alt="">
                <a href="index.php?act=sanphamct&id=<?php echo $dssp['ma_sp']?>"><?php echo $dssp['ten_sp']?></a>
                <div class="price">
                    <p><?php echo $dssp['giam_gia_sp']?>đ <del><?php echo $dssp['gia_sp']?>đ</del></p>
                    <p class="save">Tiết kiệm <?php echo ($dssp['gia_sp']-$dssp['giam_gia_sp'])?>đ</p>
                </div>
                <form action="index.php?act=sanphamct&id=<?php echo $dssp['ma_sp']?>" method="POST">
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