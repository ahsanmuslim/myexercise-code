<?php 


//file index sebagai file yang akan pertama kali dijalankan ketika url public di akses

//memanggil file init.php yang di dalamnya ada function yang akan di jalankan 
require_once '../app/init.php';


//mencetak session ketika user mengkakses file index, bertujuan untuk menyimpan session flash yang digunakan untuk mencetak pesan Flash
if ( !session_id()){
    session_start();
}

//instansiasi object dari class App agar dapat menggunakan method & property yang ada di kelas App
$app = new App();


?>