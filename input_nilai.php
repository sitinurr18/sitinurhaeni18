<?php
    include 'koneksi.php';

   echo $nama_siswa = $_POST['nama_siswa'];
   echo $nilai_siswa = $_POST['nilai_siswa'];

   $data = mysqli_query($koneksi,"INSERT INTO `siswa`(`nama_siswa`, `nilai_siswa`, `nis`) VALUES ('$nama_siswa','$nilai_siswa','$nilai_siswa')");
   header("location: tampilan_nilai.php");