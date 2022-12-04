<div class="chon_sp">
<form action="index.php?act=addtocart" method="post">
            <label for="">Thêm sản phẩm</label>
            <select name="id_san_pham">
                <?php foreach($list_sp as $sp){
                ?> 
                <option value="<?php echo $sp['ma_sp']?>"><?php echo $sp['ten_sp']?></option>
                <?php }?>
            </select>

            <div class="gio_hang_chon_mau">
                <p>Chọn màu :</p>
                        <input type="radio" name="mau_sac" value="Vàng" class="input_mau" required> <p class="mau_label" for="">Vàng</p>
                        <input type="radio" name="mau_sac" value="Bạc" class="input_mau" required> <p class="mau_label" for="">Bạc</p>
                        <input type="radio" name="mau_sac" value="Xám" class="input_mau" required> <p class="mau_label" for="">Xám</p>
            </div>
            <div class="gio_hang_chon_mau">
                        <p>Chọn bộ nhớ trong : </p>
                        <input type="radio" name="thong_so" value="Bản 128GB"  class="input_mau" required> <p class="mau_label" for="">Bản 128GB</p>
                            <input type="radio" name="thong_so" value="Bản 256GB"  class="input_mau" required> <p class="mau_label" for="">Bản 256GB</p>
                            <input type="radio" name="thong_so" value="Bản 512GB" class="input_mau" required> <p class="mau_label" for="">Bản 512GB</p>
            </div>
            <input type="submit" name="themsp" value="Thêm vào giỏ hàng" class="button">
        </form>
</div>
<div class="content">
    <div style="background-color: white;">
    <?php if($_SESSION['mycart']==[]){
    ?>
        <h3>Giỏ hàng trống</h3>
    <?php }else{
    ?>
        <h3>Giỏ hàng</h3>
        <table>
            <thead>
                <th>HÌNH</th>
                <th>SẢN PHẨM</th>
                <th>ĐƠN GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>MÀU SẮC</th>
                <th>THÔNG SỐ</th>
                <th>THÀNH TIỀN</th>
                <th>THAO TÁC</th>
            </thead>
            <tbody>
                <?php
                $ttien = 0;
                $i = 0;
                    foreach($_SESSION['mycart'] as $cart){
                        $ttien+=$cart['4'];
                    ?>
                    <tr>
                        <td><img src="../<?php echo $cart['0']?>" alt="" style="height: 200%;"></td>
                        <td><?php echo $cart['1']?></td>
                        <td><?php echo $cart['2']?></td>
                        <td><?php echo $cart['3']?></td>
                        <td><?php echo $cart['6']?></td>
                        <td><?php echo $cart['7']?></td>
                        <td><?php echo $cart['4']?></td>
                        <td><a href="index.php?act=delete_cart&id=<?php echo $i?>"><button class="delete">Xóa</button></a></td>
                    </tr>
                    <?php $i+=1; }
                ?>
                <tr>
                    <td colspan='5'><b>Tổng tiền</b></td>
                    <td colspan='2'><b><?php echo $ttien?></b></td>
                </tr>
            </tbody>
        </table>
        <a href="index.php?act=bill"><button>Tiếp tục đặt hàng</button></a>
        <a href="index.php?act=delete_cart" onclick="return confirm('Bạn có chắc chắn xóa?')"><button>Xóa giỏ hàng</button></a>
        <?php }?>
    </div>
</div>
