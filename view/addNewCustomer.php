
<?php

if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <a href="showCusTomer.php" ><button  type="submit" class="btn btn-success">Hiển thị Danh Sách Khách Hàng</button></a>
            <h1>Nhập thông tin khách hàng</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Loại Khách</label>
                    <select name="IDLoaiKhach">
                        <option>--Chọn Loại Khách--</option>
                        <?php
                        foreach ($showLoaiKhach as $key => $values):?>
                        <option value="<?php echo $values['IDLoaiKhach']?>"><?php echo$values['TenLoaiKhach']?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>

                </div>

                <div class="form-group">
                    <label>Họ Tên</label>
                    <input type="text" class="form-control" name="HoTen" placeholder="Nhập Họ Tên" required>

                </div>
                <div class="form-group">
                    <label>Ngày Sinh</label>
                    <input type="date" class="form-control" name="NgaySinh" placeholder="Ngày Tháng Năm Sinh" required>

                </div>

                <div class="form-group">
                    <label>Số CMND</label>
                    <input type="text" class="form-control" name="SoCMND" placeholder="Nhập Số CMND" required>

                </div>

                <div class="form-group">
                    <label>Điện Thoại</label>
                    <input type="text" class="form-control" name="Phone" placeholder="Nhập Số Điện Thoại" required>

                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" type="text" class="form-control" name="Email" placeholder="Nhập Email" required>
                </div>

                <div class="form-group">
                    <label>Địa chỉ </label>
                    <input type="text" class="form-control" name="DiaChi" placeholder="Nhập địa chỉ" required>
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>