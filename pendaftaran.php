<?php

?>
<!DOCTYPE html>
<html lang="en">
    <html>
     <head>   
        <title> Formulir Pendaftaran </title>
</head>
        <body>
        <div class="container">
        <style>
        .container {
            width: 60%; 
            margin: 0 auto;
            padding: 20px; 
            background-color: orange; 
            border: 1px solid #ccc; 
        }
    </style>
       <center>
        <h1>Formulir Pendaftaran Bola Voli</h1>
        <h2>Antar RT  Dan Rw Setempat</h2>
       </center>
       <form  action="hasil.php" method="POST" onsubmit="return validasiform()">
        <table align="center" cellpanding="1" cellspacing="8">
            <tr>
                <td>Nama Team </td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="masukkan nama tim mu" pattern="[A-Za-z\s]+" title="Nama tim hanya boleh berisi huruf dan spasi" required></td>
            </tr>
            <tr>
                <td>Jumlah Anggota </td>
                <td>:</td>
                <td><input type="text" name="jumlah" placeholder="masukkan jumlah anggota  tim mu" required></td>
            </tr>
            <tr>
                <td>Asal Team </td>
                <td>:</td>
                <td> RT <input type="text" name="RT"> RW <input type="text" name="RW" required></td>
            </tr>
            <tr>
                <td>Nama Ketua Team </td>
                <td>:</td>
                <td><input type="text" name="ketua" placeholder="masukkan Nama Ketua tim mu" required></td>
            </tr>
            <tr>
                <td>Nomor HP Ketua Team </td>
                <td>:</td>
                <td><input type="text" name="nomer" placeholder="masukkan No HP Ketua tim mu" pattern="[0-9]+" maxlength="11" title="Hanya bisa DI isi dengan Angka" required></td>
            </tr>
            <tr>
                <td>Upload Foto Ktp </td>
                <td>:</td>
                <td><input type="file" name="ktp"  onchange="checkfilesize(this)"thisrequired></td>
            </tr>
            <tr>
                <td>Tanggal Pendaftaran  </td>
                <td>:</td>
                <td><input type="date" name="tanggal" required></td>
            </tr>
            <tr>
            <td>Jenis Tim</td>
            <td>:</td>
            <td><input type="radio" name="jenis" value="putra"checked >putra
            <input type="radio"     name="jenis" value="putri"checked >putri</td>
            </tr>

            <tr>
            <td><input type="submit" name="submit" value="Kirim" required></td>
            </tr>


</body>
<script>
       function checkfilesize(input){
        var maxsize = 2 * 1024 *1024;
          if (input.files[0].size > maxsize) {
            alert("ukuran file terlalu besar. Maksimum 2 MB.");
            input.value = "";
          }

       }
    </script>