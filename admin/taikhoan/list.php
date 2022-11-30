<div class="content">
    <h3>Danh sách tài khoản</h3>
    <table>
        <thead>
            <th></th>
            <th>TÊN ĐĂNG NHẬP</th>
            <th>MẬT KHẨU</th>
            <th>HỌ VÀ TÊN</th>
            <th>HÌNH</th>
            <th>EMAIL</th>
            <th>VAI TRÒ</th>
            <th>THAO TÁC</th>
        </thead>
        <tbody>
            <?php 
            foreach($list_tk as $list_tk){
                $suatk = "index.php?act=suatk&id=".$list_tk['ma_tk'];
                $xoatk = "index.php?act=xoatk&id=".$list_tk['ma_tk'];
            ?>
            <tr>
                <td><input type="checkbox"></td>
                <td><?php echo $list_tk['ma_tk']?></td>
                <td><?php echo $list_tk['mat_khau']?></td>
                <td><?php echo $list_tk['ho_ten']?></td>
                <td><img src="<?php echo $upload_dir.$list_tk['hinh']?>" alt=""></td>
                <td><?php echo $list_tk['email']?></td>
                <td><?php if($list_tk['role']==0){echo "Khách hàng";}else if($list_tk['role']==1){echo "Quản trị";}?></td>
                <td><a href="<?php echo $suatk?>"><button class="update">Sửa</button></a> <a href="<?php echo $xoatk?>" onclick="return confirm('Bạn có chắc chắn xóa?')"><button class="delete">Xóa</button></a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <button class="op">Chọn tất cả</button>
    <button class="op">Bỏ chọn tất cả</button>
    <button class="op">Xóa các mục đã chọn</button>
    <!-- <a href="index.php?act=addtk"><button class="op">Nhập thêm</button></a> -->
</div>