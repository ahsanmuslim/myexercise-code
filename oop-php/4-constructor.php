<?php

/**
 * 
 */
class Mobil {

	//membuat property object
	public 	$merk,
			$warna,
			$harga,
			$tahun,
			$mesin;

	//membuat method contructor dengan memasukan 4 parameter & nilai Default ke 4 parameter tersebut
	public function __construct ($merk = "Pajero", $warna = "Putih", $harga = "400.000.000", $tahun = "2015") {

		//memasukan nilai parameter ke dalam property
		$this->merk = $merk;
		$this->warna = $warna;
		$this->harga = $harga;
		$this->tahun = $tahun;

	}

	//membuat method
	function getInfo() {
		return "$this->merk, $this->warna, $this->harga, $this->tahun, $this->mesin";
	}

}

//membuat object dengan memasukan nilai parameter yang akan dikirim ke methods konstruktor untuk dimasukan ke dalam property
//sehingga penulisan nilai property menjadi lebih simple dengan menngunakan konstruktor
$Mobil1 = new Mobil("Avaza","Hitam","200.000.000","2019");

//membuat object tanpa memasukan nilai parameter
//maka hasilnya adalah nilai property diambil dari nilai parameter default pada konstruktor
$Mobil2 = new Mobil();
//menambahkan property pada Object Mobil2
$Mobil2->mesin = "Diesel VVTi";

var_dump($Mobil1);
var_dump($Mobil2);


//memanggil method dari classs Mobil
echo "Info Mobil 1 : ".$Mobil1->getInfo();
echo "<br>";
echo "Info Mobil 2 : ".$Mobil2->getInfo();

?>