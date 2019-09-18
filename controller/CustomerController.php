<?php


namespace controller;

use modelCustomer\CustomerDB;
use modelCustomer\Customer;
use model\DBconnection;

class CustomerController
{
    public $CustomerDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=qlfurama", "root", "");
        $this->CustomerDB = new CustomerDB($connection->connect());
    }

    public function addNewCustomer()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $showLoaiKhach = $this->CustomerDB->getLoaiKhach();
            include 'view/addNewCustomer.php';
        }
        else {
            $customer = new Customer();
            $customer->setIDLoaiKhach($_POST['IDLoaiKhach']);
            $customer->setHoTen($_POST['HoTen']);
            $customer->setNgaySinh(date('Y-m-d',strtotime($_POST['NgaySinh'])));
            $customer->setSoCMND($_POST['SoCMND']);
            $customer->setPhone($_POST['Phone']);
            $customer->setEmail($_POST['Email']);
            $customer->setDiaChi($_POST['DiaChi']);
            $this->CustomerDB->create($customer) ;
            $message = " Thêm Khách Hàng Thành Công";

            $showLoaiKhach = $this->CustomerDB->getLoaiKhach();
            include "view/addNewCustomer.php";
        }
    }
    public function showCustomer(){
        $customers = $this->CustomerDB->getListCustomer();
        include "view/listCustomer.php";
    }
    public function deleteCustomer() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->CustomerDB->get($id);
            include "view/deleteCustomer.php";
        }
        else {
            $id = $_POST['id'];
            $this->CustomerDB->deleteCustomer($id);
            header('Location: showCustomer.php');
        }
    }
    public  function editCustomer(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $showLoaiKhach = $this->CustomerDB->getLoaiKhach();
            $id = $_GET['id'];
            $customer = $this->CustomerDB->get($id);
            include 'view/editCustomer.php';
        } else {
            $showLoaiKhach = $this->CustomerDB->getLoaiKhach();
            $id = $_POST['id'];
            $customer = new Customer();
            $customer->setIDLoaiKhach($_POST['IDLoaiKhach']);
            $customer->setHoTen($_POST['HoTen']);
            $customer->setNgaySinh(date('Y-m-d',strtotime($_POST['NgaySinh'])));
            $customer->setSoCMND($_POST['SoCMND']);
            $customer->setPhone($_POST['Phone']);
            $customer->setEmail($_POST['Email']);
            $customer->setDiaChi($_POST['DiaChi']);
            $this->CustomerDB->updateCustomer($id, $customer);
            header('Location: showCustomer.php');
        }

    }
}