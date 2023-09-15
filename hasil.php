<?php
 $tanggal = "";
 $nama = "";
 $rw = "";
 $rt = "";
 $hp = "";
 $tim = ""; 
 $jml = "";
 $ketua = "";
 $ktp = "";
if(isset($_POST['submit'])){
    
    $tanggal = $_POST["tanggal"];
    $nama = $_POST["nama"];
    $rt = $_POST["RT"];
    $rw = $_POST["RW"];
    $hp = $_POST["nomer"];
    $tim = $_POST["jenis"];
    $jml = $_POST["jumlah"];
    $ketua = $_POST["ketua"];
    $ktp = $_POST["ktp"];
    echo "<h2>Hasil:</h2>";
    echo "<br>";
    echo "Nama Tim: ".$nama;
    echo "<br>";
    echo "Jumlah anggota tim: ".$jml;
    echo "<br>";
    echo "Asal Rw: ".$rw;
    echo "<br>";
    echo "Asal Rt: ".$rt;
    echo "<br>";
   echo "Nama Ketua tim: ".$ketua; 
    echo "<br>";
     echo "No hp Ketua tim: ".$hp;
    echo "<br>";
    echo '<img src="' . $ktp . '" alt="Deskripsi Gambar">';
    echo "<br>";
    echo "Tanggal pendaftaran: ".$tanggal;
    echo "<br>";
     echo "Jenis Tim: ".$tim;
    echo "<br>";
}
?>