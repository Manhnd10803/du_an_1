<div class="chitietsp">
    <div class="trai">
        <img src="<?php echo $img_home.$onesp['hinh_anh_sp']?>" alt="">
        <div class="thongtin">
            <p class="A">
                Thông tin chi tiết
            </p>
            <p class="B">
                <?php echo $onesp['mo_ta_sp']?>
            </p>
        </div>
    </div>
    <div class="phai">
        <p class="tieude"><?php echo $onesp['ten_sp']?></p>
        <p class="luotxem"><i class="fa-solid fa-eye"></i> <?php echo $onesp['luot_xem']?> lượt xem</p>
        <hr>
        <p class="dongia">Giá: <?php echo $onesp['giam_gia_sp']?>đ</p>
        <del class="giamgia"><?php echo $onesp['gia_sp']?>đ</del><br>
        <a href="">
        <form action="index.php?act=addtocart" method="post">
            <div class="gio_hang_chon_mau">
                <p>Chọn màu : </p>
                        <input type="radio" name="mau_sac" value="Vàng" class="input_mau" required> <label class="mau_label" for="">Vàng</label>
                        <input type="radio" name="mau_sac" value="Bạc" class="input_mau" required> <label class="mau_label" for="">Bạc</label>
                        <input type="radio" name="mau_sac" value="Xám" class="input_mau" required> <label class="mau_label" for="">Xám</label>
            </div>
            
            <div class="gio_hang_chon_mau">
                        <p>Chọn bộ nhớ trong : </p>
                            <input type="radio" name="thong_so" value="Bản 128GB" class="input_mau" required> <label class="mau_label" for="">Bản 128GB</label>
                            <input type="radio" name="thong_so" value="Bản 256GB"  class="input_mau" required> <label class="mau_label" for="">Bản 256GB</label>
                            <input type="radio" name="thong_so" value="Bản 512GB" class="input_mau" required> <label class="mau_label" for="">Bản 512GB</label>
            </div>
                        
            <button class="muangay">
                <p style="font-size: 18px; font-weight: bold;">MUA NGAY</p>
                <p style="font-size: 15px;">Giao hàng tận nơi</p>
            </button>
        </a>
        <div class="giohang_mua_ngay">
                <input type="hidden" value="<?php echo $img_home.$onesp['hinh_anh_sp']?>" name="hinh">
                <input type="hidden" value="<?php echo $onesp['ten_sp']?>" name="ten">
                <input type="hidden" value="<?php echo $onesp['giam_gia_sp']?>" name="dongia">
                <input type="hidden" value="<?php echo $onesp['ma_sp']?>" name="ma_hh">
                <input onclick="check()" type="submit" value="THÊM VÀO GIỎ HÀNG" class="addtocart" name="submit">

            <a href=""><button>MUA TRẢ GÓP</button></a>
        </div>
        </form>
        <p class="goimua">Gọi đặt ngay <span style="color: #2F80ED;">1800.0000</span> (08h - 21h)</p>
    </div>
</div>
<div class="content">
    <div class="spcungloai" style="margin-top: 20px;">
        <p>BÌNH LUẬN</p>
    </div>
    <iframe src="view/binhluan/binhluan.php?ma_hh=<?php echo $onesp['ma_sp']?>" frameborder="0" style="width: 100%; height: 250px;"></iframe>
</div>
<div class="content">
    <div class="topsp spmoi">
        <div class="spcungloai">
            <p>SẢN PHẨM CÙNG LOẠI</p>
        </div>
        <section class="list-product">
            <?php foreach($sp_cl as $sp_cl){
            ?>
            <div class="product">
                <img src="<?php echo $img_home.$sp_cl['hinh_anh_sp']?>" alt="">
                <a href="index.php?act=sanphamct&id=<?php echo $sp_cl['ma_sp']?>"><?php echo $sp_cl['ten_sp']?></a>
                <div class="price">
                    <p><?php echo $sp_cl['giam_gia_sp']?>đ <del><?php echo $sp_cl['gia_sp']?>đ</del></p>
                    <p class="save">Tiết kiệm <?php echo ($sp_cl['gia_sp']-$sp_cl['giam_gia_sp'])?>đ</p>
                </div>
                <form action="index.php?act=sanphamct&id=<?php echo $sp_cl['ma_sp']?>" method="POST">
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

