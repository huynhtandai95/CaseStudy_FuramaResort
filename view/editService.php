<h2>Cập nhật thông tin Dịch Vụ</h2>
<form method="post" action="./index.php?page=editService">
    <input type="hidden" name="id" value="<?php echo $service['IDDichVu']; ?>"/>
    <div class="form-group">
        <label>Tên Dịch Vụ</label>
        <input type="text" name="TenDichVu" value="<?php echo $service['TenDichVu']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Diện Tích</label>
        <textarea name="DienTich" class="form-control"><?php echo $service['DienTich']; ?></textarea>
        <span style="color: red"> <?php if (isset($error['DienTich'])) { echo $error['DienTich'];} ?> </span>
    </div>
    <div class="form-group">
        <label>Số Tầng</label>
        <textarea name="SoTang" class="form-control"><?php echo $service['SoTang']; ?></textarea>
        <span style="color: red"> <?php if (isset($error['SoTang'])) { echo $error['SoTang'];} ?> </span>
    </div>
    <div class="form-group">
        <label>Số Người Tối Đa</label>
        <textarea name="SoNguoiToiDa" class="form-control"><?php echo $service['SoNguoiToiDa']; ?></textarea>
        <span style="color: red"> <?php if (isset($error['SoNguoiToiDa'])) { echo $error['SoNguoiToiDa'];} ?> </span>
    </div>
    <div class="form-group">
        <label>Kiểu Thuê</label>
        <textarea name="IdKieuThue" class="form-control"><?php echo $service['IdKieuThue']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Trạng Thái</label>
        <textarea name="TrangThai" class="form-control"><?php echo $service['TrangThai']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Tiêu Chuẩn Phòng</label>
        <textarea name="TieuChuanPhong" class="form-control"><?php echo $service['TieuChuanPhong']; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>