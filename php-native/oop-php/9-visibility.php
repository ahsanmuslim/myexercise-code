<?php   

class Mobil {
    //membuat property dari class Mobil 
    //visibility public : property kelas & method dapat dikses kelas tersebut, kelas turunannya atau bahkan di luar kelas
    public  $warna,
            $type,
            $mesin,
            $merek;

    //visibility protected : property hanya bisa diakses oleh kelas tersebut & kelas turunannya
    protected $diskon = 0;

    //visibility private : property / method hanya bisa dikses oleh kelas tertentu saja
    private   $harga;

    //membuat method konstruktor
    public function __construct ($warna = "Hitam metalic", $type = "MPV", $harga = "20000000", $mesin = "Bensin", $merek = "Toyota Avanza") {

        //memasukan nilai parameter ke dalam property kelas Mobil 
        $this->warna = $warna;
        $this->type = $type;
        $this->harga = $harga;
        $this->mesin = $mesin;
        $this->merek = $merek;
    } 

    //membuat method
	function getInfoLengkap() {
		return "$this->warna, $this->type, $this->harga, $this->mesin, $this->merek";
    }
    
    //method getter untuk mengambil nilai property yang visibility nya private dengan visibility Public
    public function getHarga (){
        return $this->harga - ($this->harga * $this->diskon / 100);
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

    public function getInfoLengkap(){

        //fungsi overriding yaitu menimpa method dari kelas parent dengan nama yang sama dengan keyword parent::
        $str = parent::getInfoLengkap()." {$this->tonase} {$this->karoseri}";
        return $str;
    }

    public function setDiskon ($diskon){
        return $this->diskon = $diskon;
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
        $str = parent::getInfoLengkap()." {$this->kecepatanMaks} {$this->pabrikan}";
        return $str;
    }
    
}

$mobilBarang1 = new mobilBarang("Krem", "Truk Fuso", "1000000000", "Diesel", "Mitsibishi", "20 ton");
$mobilSport1 = new mobilSport("Silver","SUV", "400000000", "Diesel","GT-303","250 km/jam");

//menampilkan property dengan visibility public
echo "Mobil barang dengan warna : ".$mobilBarang1->getInfoLengkap();
echo "<br>";

//menampilkan property dengan visibility protected yaitu harga
echo "Diskon untuk mobil barang : ".$mobilBarang1->setDiskon(25);
echo "<br>";

//menampilkan property dengan visibility private yaitu harga
echo "Harga mobil Barang : ".$mobilBarang1->getHarga();


?>