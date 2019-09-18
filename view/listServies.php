<h2>Danh sách tất cả dịch vụ cho thuê</h2>
<a href="./home.php "><button  type="submit" class="btn">Home</button></a>
<a href="./index.php?page=addNewServies" ><button  type="submit" class="btn btn-success">Thêm Dịch Vụ</button></a>

<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên Dịch Vụ</th>
        <th>Diện Tích (m2)</th>
        <th>Số tầng</th>
        <th>Số Người Tối Đa</th>
        <th>Kiểu Thuê</th>
        <th>Trạng Thái</th>
        <th>Tiêu chuẩn phòng</th>
        <th></th>
        <th></th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($servies as $key => $servie): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $servie['TenDichVu'] ?></td>
        <td><?php echo $servie['DienTich'] ?></td>
        <td><?php echo $servie['SoTang'] ?></td>
        <td><?php echo $servie['SoNguoiToiDa'] ?></td>
        <td><?php echo $servie['TenKieuThue'] ?></td>
        <td><?php echo $servie['TrangThai'] ?></td>
        <td><?php echo $servie['TieuChuanPhong'] ?></td>
        <td> <a href="./index.php?page=deleteService&id=<?php echo $servie['IDDichVu']; ?>" class="btn btn-danger">Delete</a></td>
        <td> <a href="./index.php?page=editService&id=<?php echo $servie['IDDichVu']; ?>" class="btn btn-warning">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>

Tổng số dịch vụ hiện có: <?php echo $services_Count ?>