<?php   


//kelas abstract tidak boleh di instansiasi
abstract class Mobil {
    //membuat property dari class Mobil 
    public  $warna,
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
    abstract public function getInfoLengkap();
    //membuat method
	function getInfo() {
		return "$this->warna, $this->type, $this->harga, $this->mesin, $this->merek";
	}

}

class mobilBarang extends Mobil {
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

    
    public function getInfoLengkap (){

        //fungsi overriding yaitu menimpa method dari kelas parent dengan nama yang sama dengan keyword parent::
        $str = $this->getInfo()." {$this->tonase} {$this->karoseri}";
        return $str;
    }


} 


class mobilSport extends Mobil {
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

    public function getInfoLengkap(){
        $str = $this->getInfo()." {$this->kecepatanMaks} {$this->pabrikan}";
        return $str;
    }
    
}

$mobilBarang1 = new mobilBarang("Krem", "Truk Fuso", "Rp. 1.000.000.000", "Diesel", "Mitsibishi", "20 ton");
$mobilSport1 = new mobilSport("Silver","SUV", "RP. 400.000.000", "Diesel","GT-303","250 km/jam");

echo $mobilBarang1->getInfoLengkap();
echo "<br>";
echo $mobilSport1->getInfoLengkap();

?>