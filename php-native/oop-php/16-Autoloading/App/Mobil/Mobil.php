<?php

//kelas abstract tidak boleh di instansiasi
abstract class Mobil {
    //membuat property dari class Mobil 
    protected  $warna,
            $type,
            $harga,
            $mesin,
            $merek;

    //membuat method konstruktor
    public function __construct ($warna = "Hitam metalic", $type = "MPV", $harga = "Rp. 200.000.000", $mesin = "Bensin", $merek = "Toyota Avanza") {

        //memasukan nilai parameter ke dalam property kelas Mobil 
        $this->warna = $warna;
        $this->type = $type;
        $this->harga = $harga;
        $this->mesin = $mesin;
        $this->merek = $merek;
    } 

    //kelas abstract harus mempunyai 1 methods abstract
    abstract public function getInfo();


}

