<div class="chon_sp">
<form action="index.php?act=addtocart" method="post">
            <label for="">Thêm sản phẩm</label>
            
           
            <!-- <div class="ten_sp"> -->
             
            <select name="ten" id="">
            <?php foreach($list_sp as $sp){
            ?> 
                <option name="ten" value=""><?php echo $sp['ten_sp']?></option>
                <?php }?>
            </select>
<!--             
            </div>    -->
                
                
            
            
            <div class="gio_hang_chon_mau">
                <p>Chọn màu : </p>
                        <input type="radio" name="mau_sac" value="Vàng" class="input_mau" required> <p class="mau_label" for="">Vàng</p>
                        <input type="radio" name="mau_sac" value="Bạc" class="input_mau" required> <p class="mau_label" for="">Bạc</p>
                        <input type="radio" name="mau_sac" value="Xám" class="input_mau" required> <p class="mau_label" for="">Xám</p>
            </div>
            
            <div class="gio_hang_chon_mau">
                        <p>Chọn thêm bộ nhớ trong : </p>
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
                <th></th>
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
                        <td><input type="checkbox"></td>
                        <td><img src="<?php echo $cart['0']?>" alt="" style="height: 200%;"></td>
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

<!-- <div class="body mt-40">
    <form action="index.php?act=themdh" method="post">
        <div class="cover">
        <h3>Thông tin đơn hàng</h3>
        <input type="hidden" value="" name="id_bill">
        <label for="">Tên khách hàng</label>
        <input type="text" name="tenkh" value="" required>
        <label for="">Số điện thoại</label>
        <input type="text" name="sdt" value="" required>
        <label for="">Địa chỉ</label>
        <input type="text" name="diachi" value="" required>
        <label for="">Giá trị đơn hàng</label>
       
        <input type="text" name="giatri" value="<?php echo $ttien?>" disabled>
        <label for="">Tình trạng đơn hàng</label>
        <select name="ttdh" id="">
            <option value="3">Đã thanh toán</option>
        </select>

        


        <div class="funtion-button">
            <a href="index.php?act=bill.php"><input type="submit" value="Thêm" class="button"></a>
            <input type="reset" value="Nhập lại" class="button">
            <a href="index.php?act=listdh"><input type="button" value="Danh sách" class="button"></a>
        </div>
        <p class="thanhcong">
        <?php 
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
        ?>
        </div>
        </p>
    </form>
</div> -->