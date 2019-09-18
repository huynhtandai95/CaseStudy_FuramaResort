<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 01/11/2018
 * Time: 23:08
 */

namespace controller;

use function Couchbase\defaultDecoder;
use model\Services;
use model\ServicesDB;
use model\DBConnection;

class ServicesController
{

    public $servicesDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=qlfurama", "root", "");
        $this->servicesDB = new ServicesDB($connection->connect());
    }

    public function addNewServies()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/addNewServies.php';

        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            include "Validate.php";
            if (empty($error)) {                                               //Nếu không có lỗi input thì thực hiện
                $services = new Services();
                $services->setTenDichVu($_POST['TenDichVu']);
                $services->setDienTich($_POST['DienTich']);
                $services->setSoTang($_POST['SoTang']);
                $services->setSoNguoiToiDa($_POST['SoNguoiToiDa']);
                $services->setIDKieuThue($_POST['IdKieuThue']);
                $services->setTrangThai($_POST['TrangThai']);
                $services->setTieuChuanPhong($_POST['TieuChuanPhong']);
                $this->servicesDB->create($services);
                $message = 'Thêm Dịch Vụ Thành Công';
                include 'view/addNewServies.php';
            }
            else {
                include 'view/addNewServies.php';
                include "Validate.php";
            }

        }
    }

    public function index()
    {
        $servies = $this->servicesDB->getListServices();
        $services_Count = count($this->servicesDB->getListServices());      // Variable @ Tính Tổng số dịch vụ hiện có


        include 'view/listServies.php';
    }

    public function deleteService()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $service = $this->servicesDB->get($id);

            include 'view/deleteService.php';
        } else {
            $id = $_POST['id'];
            $this->servicesDB->deleteService($id);
            header('Location: index.php');
        }
    }

    public function editService()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $service = $this->servicesDB->get($id);
            include 'view/editService.php';
        } else {
            include "Validate.php";
            if (empty($error)) {
                $id = $_POST['id'];
                $service = new Services();
                $service->setTenDichVu($_POST['TenDichVu']);
                $service->setDienTich($_POST['DienTich']);
                $service->setSoTang($_POST['SoTang']);
                $service->setSoNguoiToiDa($_POST['SoNguoiToiDa']);
                $service->setIDKieuThue($_POST['IdKieuThue']);
                $service->setTrangThai($_POST['TrangThai']);
                $service->setTieuChuanPhong($_POST['TieuChuanPhong']);
                $this->servicesDB->update($id, $service);
                header('Location: index.php');
            }
            else {
                $id = $_POST['id'];
                $service = $this->servicesDB->get($id);
                include 'view/editService.php';
                include "Validate.php";
            }

        }
    }
}