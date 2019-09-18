<h2>Danh sách Khách Hàng</h2>
<a href="./home.php "><button  type="submit" class="btn">Home</button></a>
<a href="./showCustomer.php?page=addNewCustomer" ><button  type="submit" class="btn btn-success">Thêm Khách Hàng </button></a>

<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Loại Khách</th>
        <th>Họ Tên</th>
        <th>Ngày Sinh</th>
        <th>Số CMND</th>
        <th>Điện Thoại</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th></th>
        <th></th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $key => $customer): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $customer['TenLoaiKhach'] ?></td>
        <td><?php echo $customer['HoTen'] ?></td>
        <td><?php echo $customer['NgaySinh'] ?></td>
        <td><?php echo $customer['SoCMND'] ?></td>
        <td><?php echo $customer['DienThoai'] ?></td>
        <td><?php echo $customer['Email'] ?></td>
        <td><?php echo $customer['DiaChi'] ?></td>
        <td> <a href="./showCustomer.php?page=deleteCustomer&id=<?php echo $customer['IDKhachHang']; ?>" class="btn btn-danger">Delete</a></td>
        <td> <a href="./showCustomer.php?page=editCustomer&id=<?php echo $customer['IDKhachHang']; ?>" class="btn btn-warning">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>