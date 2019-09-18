<h1>Bạn chắc chắn muốn xóa Dịch Vụ này?</h1>

<table class="table">
    <thead>
    <tr>
        <th>Tên Dịch Vụ</th>
        <th>Diện Tích (m2)</th>
        <th>Số tầng</th>
        <th>Số Người Tối Đa</th>
        <th>Kiểu Thuê</th>
        <th>Trạng Thái</th>
        <th>Tiêu chuẩn phòng</th>


    </tr>
    </thead>
    <tbody>

    <tr>
        <td><?php echo $service['TenDichVu'] ?></td>
        <td><?php echo $service['DienTich'] ?></td>
        <td><?php echo $service['SoTang'] ?></td>
        <td><?php echo $service['SoNguoiToiDa'] ?></td>
        <td></td>
<!--        <td>--><?php //echo $service['IDKieuThue'] ?><!--</td>-->
        <td><?php echo $service['TrangThai'] ?></td>
        <td><?php echo $service['TieuChuanPhong'] ?></td>

    </tbody>
</table>
<form  method="post">
    <input type="hidden" name="id" value="<?php echo $service['IDDichVu']; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php">Cancel</a>
    </div>
</form>