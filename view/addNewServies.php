
<?php

if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
        <a href="index.php" ><button  type="submit" class="btn btn-primary">Hiển thị Danh Sách Dịch vụ</button></a>
            <h1>Nhập thông tin dịch vụ</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên dịch vụ</label>
                    <input type="text" class="form-control" name="TenDichVu"  placeholder="Nhập tên" required>
                </div>

                <div class="form-group">
                    <label>Diện Tích</label>
                    <input type="text" class="form-control" name="DienTich" placeholder="Nhập Diện Tích" required>
                    <span style="color: red"> <?php if (isset($error['DienTich'])) { echo $error['DienTich'];} ?> </span>
                </div>

                <div class="form-group">
                    <label>Số tầng</label>
                    <input type="text" class="form-control" name="SoTang" placeholder="Nhập Số Tầng" required>
                    <span style="color: red"> <?php if (isset($error['SoTang'])) { echo $error['SoTang'];} ?> </span>
                </div>

                <div class="form-group">
                    <label>Số người tối đa</label>
                    <input type="text" class="form-control" name="SoNguoiToiDa" placeholder="Số người ở tối đa" required>
                    <span style="color: red"> <?php if (isset($error['SoNguoiToiDa'])) { echo $error['SoNguoiToiDa'];} ?> </span>
                </div>

                <div class="form-group">
                    <label>Kiểu Thuê</label>
                    <input type="text" class="form-control" name="IdKieuThue" placeholder="Kiểu thuê" required>
                </div>

                <div class="form-group">
                    <label>Trạng Thái </label>
                    <input type="text" class="form-control" name="TrangThai" placeholder="Trạng Thái" required>
                </div>

                <div class="form-group">
                    <label>Tiêu Chuẩn Phòng</label>
                    <input type="text" class="form-control" name="TieuChuanPhong" placeholder="Tiêu Chuẩn Phòng" required>
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>