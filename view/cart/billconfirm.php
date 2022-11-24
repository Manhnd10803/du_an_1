<div class="content">
    <h3>Cảm ơn quý khách đã đặt hàng!</h3>
    <div class="spcungloai">
        <p>Thông Tin Đặt Hàng</p>
    </div>
    <div class="ttdathang">
        <div class="trai">
            <p>Mã đơn hàng:</p>
            <p>Người đặt hàng:</p>
            <p>Số đện thoại:</p>
            <p>Địa chỉ:</p>
            <p>Email:</p>
            <p>Phương thức thanh toán:</p>
        </div>
        <div class="phai">
            <p>DAM-0001<?php echo $bill['id']?></p>
            <p><?php echo $bill['bill_ho_ten']?></p>
            <p><?php echo $bill['bill_sdt']?></p>
            <p><?php echo $bill['bill_dia_chi']?></p>
            <p><?php echo $bill['bill_email']?></p>
            <p><?php if(($bill['bill_pttt'])==0){echo "Thanh toán khi nhận hàng";}else if(($bill['bill_pttt'])==1){echo "Đã thanh toán";} ?></p>
        </div>
    </div>
    <table style="margin-top: 20px; background-color: white;">
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
                    <td><img src="<?php echo $cart['0']?>" alt="" style="height: 200%;"></td>
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
            </tr>
        </tbody>
    </table>
</div>