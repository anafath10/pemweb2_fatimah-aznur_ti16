<?php
class bmi_pasien{
    Public $tgl_pemeriksaan,
           $pasien,
           $bmi;

    function __construct( $tgl_pemeriksaan, $pasien, $bmi){
        $this->tgl_pemeriksaan=$tgl_pemeriksaan;
        $this->pasien=$pasien;
        $this->bmi=$bmi;

    }
}


?>