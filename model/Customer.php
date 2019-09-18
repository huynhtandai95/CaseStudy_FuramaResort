<?php


namespace modelCustomer;


class Customer
{
private $IDKhachHang;
private $IDLoaiKhach;
private $HoTen;
private $NgaySinh;
private $SoCMND;
private $Phone;
private $Email;
private $DiaChi;

    /**
     * @return mixed
     */
    public function getIDKhachHang()
    {
        return $this->IDKhachHang;
    }

    /**
     * @param mixed $IDKhachHang
     */
    public function setIDKhachHang($IDKhachHang): void
    {
        $this->IDKhachHang = $IDKhachHang;
    }

    /**
     * @return mixed
     */
    public function getIDLoaiKhach()
    {
        return $this->IDLoaiKhach;
    }

    /**
     * @param mixed $IDLoaiKhach
     */
    public function setIDLoaiKhach($IDLoaiKhach): void
    {
        $this->IDLoaiKhach = $IDLoaiKhach;
    }

    /**
     * @return mixed
     */
    public function getHoTen()
    {
        return $this->HoTen;
    }

    /**
     * @param mixed $HoTen
     */
    public function setHoTen($HoTen): void
    {
        $this->HoTen = $HoTen;
    }

    /**
     * @return mixed
     */
    public function getNgaySinh()
    {
        return $this->NgaySinh;
    }

    /**
     * @param mixed $NgaySinh
     */
    public function setNgaySinh($NgaySinh): void
    {
        $this->NgaySinh = $NgaySinh;
    }

    /**
     * @return mixed
     */
    public function getSoCMND()
    {
        return $this->SoCMND;
    }

    /**
     * @param mixed $SoCMND
     */
    public function setSoCMND($SoCMND): void
    {
        $this->SoCMND = $SoCMND;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param mixed $Phone
     */
    public function setPhone($Phone): void
    {
        $this->Phone = $Phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email): void
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getDiaChi()
    {
        return $this->DiaChi;
    }

    /**
     * @param mixed $DiaChi
     */
    public function setDiaChi($DiaChi): void
    {
        $this->DiaChi = $DiaChi;
    }
}