<?php

require_once 'Mobil.php';

class mobilSport extends Mobil implements infoMobil {
    //membuat property khusus untuk kelas mobil barang 
    public  $kecepatanMaks,
            $pabrikan;

    //menambahkan fungsi cosntructor agar parameter yang object dpat ditangkap oleh kontruktor dari kelas mobil Barang
    public function __construct ($warna, $type, $harga, $mesin, $merek, $kecepatanMaks  = "300 km/jam", $pabrikan = "Ferari"){

        //menjalankan konstruktor dari kelas parent
        parent::__construct($warna, $type, $harga, $mesin, $merek);

        //memasukan nilai parameter construktor ke dalam property khusus mobil barang yaitu tonase & karoseri
        $this->kecepatanMaks = $kecepatanMaks;
        $this->pabrikan = $pabrikan;
    }

            //membuat method
	public function getInfo() {
		return "$this->warna, $this->type, $this->harga, $this->mesin, $this->merek";
	}
    

    public function getInfoLengkap(){
        $str = $this->getInfo()." {$this->kecepatanMaks} {$this->pabrikan}";
        return $str;
    }
    
}
