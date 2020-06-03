<?php

class Buku {
    //membuat property dengan visibility public
    public  $nama,
            $jenis;

    //membuat property dengan visibility protected
    protected   $kode,
                $harga;

    //membuat property dengan visibility private
    private     $hpp,
                $diskon;

    public function __construct ($nama = "Pemrograman Java Dasar", $jenis = "Komputer", $kode = "TECH-01", $harga = 80000, $hpp = 50000, $diskon = 25){

        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->kode = $kode;
        $this->harga = $harga;
        $this->hpp = $hpp;
        $this->diskon = $diskon;

    }

    //Property dengan visibility PRIVATE hanya dapat di manipulasi dari dalam kelas saja
    //maka getter & setter hanya bisa di buat di dalam kelasnya saja tidak dapat di kelas turunannya
    //membuat fungsi getter untuk dapat mengambil nilai property dg visibility private dari luar kelas 
    public function getHpp (){
        //menambahkan nilai pada property dengan visibility protected
        return "$this->hpp";
    }

    //membuat setter untuk mengganti nilai property di luar kelas 
    public function setHpp ($hpp){
        //mengembalikan nilai property dengan nilai parameter baru yang dimasukan
        return $this->hpp = $hpp;
    }

    //membuat fungsi getter untuk dapat mengambil nilai property dg visibility private dari luar kelas 
    public function getDiskon (){
        //menambahkan nilai pada property dengan visibility protected
        return "$this->diskon";
    }

    //membuat setter untuk mengganti nilai property di luar kelas 
    public function setDiskon ($diskon){
        //mengembalikan nilai property dengan nilai parameter baru yang dimasukan
        return $this->diskon = $diskon;
    }





}

//membuat child class Komik
class Novel extends Buku {

    //membuat fungsi getter untuk dapat mengambil nilai property dg visibility protected dari luar kelas 
    public function getKode (){
        //menambahkan nilai pada property dengan visibility protected
        return "$this->kode";
    }

    //membuat setter untuk mengganti nilai property di luar kelas 
    public function setKode ($kode){
        //mengembalikan nilai property dengan nilai parameter baru yang dimasukan
        return $this->kode = $kode;
    }

    //membuat fungsi getter untuk dapat mengambil nilai property dg visibility protected dari luar kelas 
    public function getHarga (){
        //menambahkan nilai pada property dengan visibility protected
        return "$this->harga";
    }

    //membuat setter untuk mengganti nilai property di luar kelas 
    public function setHarga ($harga){
        //mengembalikan nilai property dengan nilai parameter baru yang dimasukan
        return $this->harga = $harga;
    }


}

//membuat child class Komik
class Komik extends Buku {



}



//membuat object instance dari kelas Produk 
$Buku1 = new Buku();

//mencetak property dari class Produk dengan visibility Public
echo $Buku1->nama;
echo "<br>"; 
echo $Buku1->jenis;
echo "<br>"; 
//property dengan visibility public nilainya dapat dimanupulasi dari luar kelas secara langsung
echo $Buku1->nama = "Pemrograman Web untuk Pemula";
echo "<br>"; 
echo $Buku1->jenis = "Coding";
echo "<br>","<hr>";




//membuat object instance dari kelas Novel 
$Novel1 = new Novel();

//mencetak property dari class Produk dengan visibility Protected menggunakan getter 
echo $Novel1->getKode();
echo "<br>";
echo $Novel1->getharga();
//property dengan visibility protected nilainya dapat dimanupulasi dari luar kelas harus dengan setter
echo $Novel1->setKode("NVL-001");
echo "<br>";
echo $Novel1->setHarga("Rp. 35.000,-");
echo "<br>";
echo "<br>","<hr>";

//membuat object instance dari kelas Komik 
$Komik1 = new Komik();

//mencetak property dari class Produk dengan visibility Private menggunakan getter 
echo $Komik1->getHpp();
echo "<br>";
echo $Komik1->getDiskon();
echo "<br>";
//property dengan visibility protected nilainya dapat dimanupulasi dari luar kelas harus dengan setter
echo $Komik1->setHpp(30000);
echo "<br>";
echo $Komik1->setDiskon(50);
echo "<br>";

echo "<br>","<hr>";


?>