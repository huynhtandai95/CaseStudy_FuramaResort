<h2>Danh sách xe</h2>
<a href="./home.php "><button  type="submit" class="btn">Home</button></a>
<a href="./CarManagement.php?page=addNewCar" ><button  type="submit" class="btn btn-success">Thêm Xe  </button></a>

<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Biển Xe</th>
        <th>THời Gian Vào</th>


    </tr>
    </thead>
    <tbody>
    <?php foreach ($listCar as $key => $Car): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $Car['BienSoXe'] ?></td>
        <td><?php echo $Car['ThoiGianVao'] ?></td>
    </tr>

        <?php endforeach; ?>
    </tbody>
</table>