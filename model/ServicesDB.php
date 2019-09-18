<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 01/11/2018
 * Time: 22:53
 */

namespace model;

class ServicesDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($Services)
    {
        $sql = "INSERT INTO dichvu(TenDichVu,DienTich,SoTang,SoNguoiToiDa,IdKieuThue,TrangThai,TieuChuanPhong) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(1, $Services->getTenDichVu());
        $statement->bindValue(2, $Services->getDienTich());
        $statement->bindValue(3, $Services->getSoTang());
        $statement->bindValue(4, $Services->getSoNguoiToiDa());
        $statement->bindValue(5, $Services->getIdKieuThue());
        $statement->bindValue(6, $Services->getTrangThai());
        $statement->bindValue(7, $Services->getTieuChuanPhong());
        return $statement->execute();
    }

    public function getListServices()
    {
        $sql = "SELECT * FROM dichvu INNER JOIN kieuthue on dichvu.IdKieuThue = kieuthue.IDKieuThue";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM dichvu WHERE IDDichVu = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
    }

    public function deleteService($id)
    {
        $sql = "DELETE FROM dichvu WHERE IDDichVu = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id, $service)
    {
        $sql = "UPDATE dichvu SET TenDichVu = ?, DienTich= ?, SoTang= ?, SoNguoiToiDa= ?, IdKieuThue= ?, TrangThai= ?, TieuChuanPhong= ? WHERE IDDichVu= ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(1, $service->getTenDichVu());
        $statement->bindValue(2, $service->getDienTich());
        $statement->bindValue(3, $service->getSoTang());
        $statement->bindValue(4, $service->getSoNguoiToiDa());
        $statement->bindValue(5, $service->getIdKieuThue());
        $statement->bindValue(6, $service->getTrangThai());
        $statement->bindValue(7, $service->getTieuChuanPhong());
        $statement->bindParam(8, $id);
        return $statement->execute();
    }
    public function getAllLoaiDichVu() {
        $sql = "SELECT * FROM loaikhach";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }


}