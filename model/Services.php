<?php

namespace model;

class Services
{
    private $TenDichVu;
    private $DienTich;
    private $SoTang;
    private $SoNguoiToiDa;
    private $IdKieuThue;
    private $TrangThai;
    private $TieuChuanPhong;


    /**
     * @return mixed
     */
    public function getTenDichVu()
    {
        return $this->TenDichVu;
    }

    /**
     * @param mixed $TenDichVu
     */
    public function setTenDichVu($TenDichVu): void
    {
        $this->TenDichVu = $TenDichVu;
    }

    /**
     * @return mixed
     */
    public function getDienTich()
    {
        return $this->DienTich;
    }

    /**
     * @param mixed $DienTich
     */
    public function setDienTich($DienTich): void
    {
        $this->DienTich = $DienTich;
    }

    /**
     * @return mixed
     */
    public function getSoTang()
    {
        return $this->SoTang;
    }

    /**
     * @param mixed $SoTang
     */
    public function setSoTang($SoTang): void
    {
        $this->SoTang = $SoTang;
    }

    /**
     * @return mixed
     */
    public function getSoNguoiToiDa()
    {
        return $this->SoNguoiToiDa;
    }

    /**
     * @param mixed $SoNguoiToiDa
     */
    public function setSoNguoiToiDa($SoNguoiToiDa): void
    {
        $this->SoNguoiToiDa = $SoNguoiToiDa;
    }

    /**
     * @return mixed
     */
    public function getIdKieuThue()
    {
        return $this->IdKieuThue;
    }

    /**
     * @param mixed $IdKieuThue
     */
    public function setIdKieuThue($IdKieuThue): void
    {
        $this->IdKieuThue = $IdKieuThue;
    }

    /**
     * @return mixed
     */
    public function getTrangThai()
    {
        return $this->TrangThai;
    }

    /**
     * @param mixed $TrangThai
     */
    public function setTrangThai($TrangThai): void
    {
        $this->TrangThai = $TrangThai;
    }

    /**
     * @return mixed
     */
    public function getTieuChuanPhong()
    {
        return $this->TieuChuanPhong;
    }

    /**
     * @param mixed $TieuChuanPhong
     */
    public function setTieuChuanPhong($TieuChuanPhong): void
    {
        $this->TieuChuanPhong = $TieuChuanPhong;
    }


    public function __construct()
    {

    }




}

