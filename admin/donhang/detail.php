<div class="content mt-20">
    <h3>Chi tiết đơn hàng</h3>
    <a href="index.php?act=listdh">
        <h4 class="pb-10 pl-10 back">
        Trở về
        </h4>
    </a>
    
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
            <p>DA1-0001 <?php echo $dh['id']?></p>
            <p><?php echo $dh['bill_ho_ten']?></p>
            <p><?php echo $dh['bill_sdt']?></p>
            <p><?php echo $dh['bill_dia_chi']?></p>
            <p><?php echo $dh['bill_email']?></p>
            <p><?php if(($dh['bill_pttt'])==0){echo "Thanh toán khi nhận hàng";}else if(($dh['bill_pttt'])==1){echo "Đã thanh toán";}?></p>
        </div>
    </div>
    <table style="margin-top: 20px; background-color: white;">
        <thead>
            <th class="border-top-left ">STT</th>
            <th>HÌNH</th>
            <th>SẢN PHẨM</th>
            <th>ĐƠN GIÁ</th>
            <th>SỐ LƯỢNG</th>
            <th>MÀU SẮC</th>
            <th>THÔNG SỐ</th>
            <th class="border-top-right">THÀNH TIỀN</th>
        </thead>
        <tbody>
            <?php
            $i = 0;
            $ttien = 0;
            foreach($pro as $pro){ 
                $ttien+=$pro['thanh_tien'];
            ?>
            <tr>
                <td><?php echo $i+1?></td>
                <td><img src="../<?php echo $pro['hinh_anh_sp']?>" alt="" style="height: 200%;"></td>
                <td><?php echo $pro['ten_sp']?></td>
                <td><?php echo $pro['gia_sp']?></td>
                <td><?php echo $pro['so_luong']?></td>
                <td><?php echo $pro['mau_sac']?></td>
                <td><?php echo $pro['thong_so']?></td>
                <td><?php echo $pro['thanh_tien']?></td>
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