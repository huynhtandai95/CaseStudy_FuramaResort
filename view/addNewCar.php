<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <a href="CarManagement.php" ><button  type="submit" class="btn btn-primary">Hiển thị Danh Sách Xe</button></a>
            <h1>Nhập thông tin Xe</h1>
        </div>
        <div class="col-12">
            <form method="post">

                <div class="form-group">
                    <label>Biển số xe</label>
                    <input type="text" class="form-control" name="BienSoXe" placeholder="Biển Số Xe" required>

                </div>
                <div class="form-group">
                    <label>Thời gian vào</label>
                    <input type="datetime-local" class="form-control" name="ThoiGianVao" required>
                </div>


                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
