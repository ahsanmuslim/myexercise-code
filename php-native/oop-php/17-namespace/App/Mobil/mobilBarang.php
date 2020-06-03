<?php

class mobilBarang extends Mobil implements infoMobil {
    //membuat property khusus untuk kelas mobil barang 
    public  $tonase,
            $karoseri;

    //menambahkan fungsi cosntructor agar parameter yang object dpat ditangkap oleh kontruktor dari kelas mobil Barang
    public function __construct ($warna, $type, $harga, $mesin, $merek, $tonase ="10 ton", $karoseri = "Bak Terbuka"){

        //menjalankan konstruktor dari kelas parent
        parent::__construct($warna, $type, $harga, $mesin, $merek);

        //memasukan nilai parameter construktor ke dalam property khusus mobil barang yaitu tonase & karoseri
        $this->tonase = $tonase;
        $this->karoseri = $karoseri;
    }


        //membuat method
	public function getInfo() {
		return "$this->warna, $this->type, $this->harga, $this->mesin, $this->merek";
	}
    
    public function getInfoLengkap (){

        //fungsi overriding yaitu menimpa method dari kelas parent dengan nama yang sama dengan keyword parent::
        $str = $this->getInfo()." {$this->tonase} {$this->karoseri}";
        return $str;
    }


} 

