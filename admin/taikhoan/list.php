<script>
    function check1() {
        alert("Không được phép xóa tài khoản admin !");
    }
</script>
<div class="content">
    <h3>Danh sách tài khoản</h3>
    <table>
        <thead>
            <th class="border-top-left ml-10"></th>
            <th>TÊN ĐĂNG NHẬP</th>
            <th>MẬT KHẨU</th>
            <th>HỌ VÀ TÊN</th>
            <th>ĐỊA CHỈ</th>
            <th>SĐT</th>
            <th>EMAIL</th>
            <th>VAI TRÒ</th>
            <th class="border-top-right">THAO TÁC</th>
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
                <td><?php echo $list_tk['dia_chi']?></td>
                <td><?php echo $list_tk['sdt']?></td>
                <td><?php echo $list_tk['email']?></td>
                <td><?php if($list_tk['role']==0){echo "Khách hàng";}else if($list_tk['role']==1){echo "Quản trị";}?></td>
                <td><a href="<?php echo $suatk?>"><button class="update">Sửa</button></a>
                <a href="<?php echo $xoatk?>" onclick="return confirm('Bạn có chắc chắn xóa?')">
                <?php
                    if($list_tk['role']==0){
                       echo '<button class="delete">Xóa</button></a>';
                    }
                    else {
                        echo '<a href="index.php?act=listtk" onclick="check1()"><button class="delete">Xóa</button></a>';
                    }
                    
                ?>
                </td>
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