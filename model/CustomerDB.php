<?php


namespace modelCustomer;


class CustomerDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($customer) {

        $sql = "INSERT INTO khachhang(IDLoaiKhach,HoTen,NgaySinh,SoCMND,DienThoai,Email,DiaChi) VALUE (?, ?, ?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(1, $customer->getIDLoaiKhach());
        $statement->bindValue(2, $customer->getHoTen());
        $statement->bindValue(3, $customer->getNgaySinh());
        $statement->bindValue(4, $customer->getSoCMND());
        $statement->bindValue(5, $customer->getPhone());
        $statement->bindValue(6, $customer->getEmail());
        $statement->bindValue(7, $customer->getDiaChi());
        return $statement->execute();

    }
    public function getListCustomer() {
        $sql = "SELECT * FROM khachhang INNER JOIN loaikhach ON khachhang.IDLoaiKhach = loaikhach.IDLoaiKhach";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;

    }
    public function getLoaiKhach() {
        $sql = "SELECT * FROM loaikhach";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;

    }
    public function get($id)
    {
        $sql = "SELECT * FROM khachhang WHERE IDKhachHang = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
    }
    public function deleteCustomer($id)
    {
        $sql = "DELETE FROM khachhang WHERE IDKhachHang = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }
    public function updateCustomer($id, $customer)
    {
        $sql = "UPDATE khachhang SET IDLoaiKhach = ?, HoTen= ?, NgaySinh= ?, SoCMND= ?, DienThoai= ?, Email= ?, DiaChi= ? WHERE IDKhachHang= ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(1, $customer->getIDLoaiKhach());
        $statement->bindValue(2, $customer->getHoTen());
        $statement->bindValue(3, $customer->getNgaySinh());
        $statement->bindValue(4, $customer->getSoCMND());
        $statement->bindValue(5, $customer->getPhone());
        $statement->bindValue(6, $customer->getEmail());
        $statement->bindValue(7, $customer->getDiaChi());
        $statement->bindParam(8, $id);
        return $statement->execute();
    }

}
