<div class="content">
    <form action="index.php?act=billconfirm" method="POST" class="bill" id="bill">
        <div class="giohang">
            <h3>Thông tin đặt hàng</h3>
            <table>
                <thead>
                    <th>STT</th>
                    <th>HÌNH</th>
                    <th>SẢN PHẨM</th>
                    <th>ĐƠN GIÁ</th>
                    <th>SỐ LƯỢNG</th>
                    <th>MÀU SẮC</th>
                    <th>THÔNG SỐ</th>
                    <th>THÀNH TIỀN</th>
                </thead>
                <tbody>
                <?php
                    $ttien = 0;
                    $i = 0;
                        foreach($_SESSION['mycart'] as $cart){
                            $ttien+=$cart['4'];
                        ?>
                        <tr>
                            <td><?php echo $i+1?></td>
                            <td><img src="../<?php echo $cart['0']?>" alt="" style="height: 200%;"></td>
                            <td><?php echo $cart['1']?></td>
                            <td><?php echo $cart['2']?></td>
                            <td><?php echo $cart['3']?></td>
                            <td><?php echo $cart['6']?></td>
                            <td><?php echo $cart['7']?></td>
                            <td><?php echo $cart['4']?></td>
                        </tr>
                        <?php $i+=1; }
                    ?>
                    <tr>
                        <td colspan='5'>Tổng tiền</td>
                        <td colspan='2'><?php echo $ttien?></td>
                        <input type="hidden" name="tongtien" value="<?php echo $ttien?>">
                    </tr>
                </tbody>
            </table>
            <!-- <a href="index.php?act=bill"><button>Đồng ý đặt hàng</button></a> -->
            
        </div>
        <div class="thongtin">
            <div class="trai">
                <div class="spcungloai" style="margin-top: 20px;">
                    <p>THÔNG TIN ĐẶT HÀNG</p>
                </div>
                <div style="display:flex; flex-direction: column; padding: 10px;">
                    <label for="">Họ và tên</label>
                    <input type="text" name="hoten" value="" required>
                    <label for="">Email</label>
                    <input type="text" name="email" value="" required>
                    <label for="">Số điện thoại</label>
                    <input type="text" name="sdt" value="" required>
                </div>
            </div>
            <div class="phai">
                <div class="spcungloai" style="margin-top: 20px;">
                    <p>PHƯƠNG THỨC THANH TOÁN</p>
                </div>
                <div class="thanhtoan">
                    <div>
                        <input type="radio" name="thanhtoan" value="0" checked required>
                        <label for="">Thanh toán tiền mặt</label>
                    </div>
                    <div>
                        <input type="radio" name="thanhtoan" value="1" required>
                        <label for="">Thanh toán online</label>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="Đồng ý đặt hàng" name="submit">
    </form>
</div>