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