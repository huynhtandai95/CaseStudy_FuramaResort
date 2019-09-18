<?php
namespace model;

class CarDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($car){
        $sql ="INSERT INTO quanlyxe(BienSoXe,ThoiGianVao) VALUE (?,?)";
        $statement= $this->connection->prepare($sql);
        $statement->bindValue(1, $car->getBienSoXe());
        $statement->bindValue(2, $car->getThoiGianVao());
        return $statement->execute();

    }
    public function  getListCar() {
        $sql = "SELECT * FROM quanlyxe";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;

    }
}