<h1>Bạn chắc chắn muốn xóa Khách Hàng này?</h1>

<h3><?php echo $customer['HoTen']; ?></h3>

<form  method="post">
    <input type="hidden" name="id" value="<?php echo $customer['IDKhachHang']; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="showCustomer.php">Cancel</a>
    </div>
</form>