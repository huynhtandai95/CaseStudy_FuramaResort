<h2>Cập nhật thông tin Dịch Vụ</h2>
<form method="post" action="./showCustomer.php?page=editCustomer">
    <input type="hidden" name="id" value="<?php echo $customer['IDKhachHang']; ?>"/>
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
        <input type="text" name="HoTen" value="<?php echo $customer['HoTen']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Ngày Sinh</label>
        <textarea type="date" name="NgaySinh" class="form-control"><?php echo $customer['NgaySinh']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Số CMND</label>
        <textarea name="SoCMND" class="form-control"><?php echo $customer['SoCMND']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Điện Thoại</label>
        <textarea name="Phone" class="form-control"><?php echo $customer['DienThoai']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Email</label>
        <textarea type="email" name="Email" class="form-control"><?php echo $customer['Email']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Địa chỉ</label>
        <textarea name="DiaChi" class="form-control"><?php echo $customer['DiaChi']; ?></textarea>
    </div>

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="showCustomer.php" class="btn btn-default">Cancel</a>
    </div>
</form>