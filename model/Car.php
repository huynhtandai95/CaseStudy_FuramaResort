<?php
namespace model;

class Car
{
   private $BienSoXe;
   private $ThoiGianVao;
   private $ThoiGianRa;

    /**
     * @return mixed
     */
    public function getBienSoXe()
    {
        return $this->BienSoXe;
    }

    /**
     * @param mixed $BienSoXe
     */
    public function setBienSoXe($BienSoXe): void
    {
        $this->BienSoXe = $BienSoXe;
    }

    /**
     * @return mixed
     */
    public function getThoiGianVao()
    {
        return $this->ThoiGianVao;
    }

    /**
     * @param mixed $ThoiGianVao
     */
    public function setThoiGianVao($ThoiGianVao): void
    {
        $this->ThoiGianVao = $ThoiGianVao;
    }

    /**
     * @return mixed
     */
    public function getThoiGianRa()
    {
        return $this->ThoiGianRa;
    }

    /**
     * @param mixed $ThoiGianRa
     */
    public function setThoiGianRa($ThoiGianRa): void
    {
        $this->ThoiGianRa = $ThoiGianRa;
    }

}