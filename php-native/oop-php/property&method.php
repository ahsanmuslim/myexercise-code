<?php

class Mobil {

//membuat properti dari class Mobil
	public	$warna = "Merah",
			$harga = "30000000",
			$torsi = "100 PK",
			$jenis = "MPV",
			$merk = "Toyota Avanza" ,
			$kapasitas = "8";


//membuat method
	function getInfo() {
		return "$this->warna, $this->harga, $this->torsi, $this->jenis, $this->merk, $this->kapasitas";
	}

}

//instansiasi object dari class mobil
$mobil1 = new Mobil();

//mengganti nilai properti merk
$mobil1->merk = "Pajero";

//membuat properti baru untuk object mobil1
$mobil1->tahun = "2000";


$mobil2 = new Mobil();


//mencetak informasi dari object mobil1
var_dump($mobil1);
var_dump($mobil2);

//memanggil method dari classs Mobil
echo "Info Mobil : ".$mobil1->getInfo();
echo "<br>";
echo "Info Mobil : ".$mobil2->getInfo();

?>