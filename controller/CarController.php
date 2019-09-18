<?php
namespace  controller;
use model\DBconnection;
use model\CarDB;
use model\Car;


class CarController{
    public $CarDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=qlfurama", "root", "");
        $this->CarDB = new CarDB($connection->connect());
    }

    public function addNewCar(){
        if ($_SERVER['REQUEST_METHOD']=== 'GET') {
            include 'view/addNewCar.php';
        }
        else {
            $car = new Car() ;
            $car->setBienSoXe($_POST['BienSoXe']);
            $car->setThoiGianVao($_POST['ThoiGianVao']);
//            $car->ThoiGianRa($_POST['BienSoXe']);
            $this->CarDB->create($car);
            include 'view/addNewCar.php';
        }
    }
    public function index(){
       $listCar= $this->CarDB->getListCar();
       include 'view/listCar.php';
    }
}
