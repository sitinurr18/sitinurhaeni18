<?php
include 'koneksi.php';
$data =mysqli_query($koneksi,"SELECT * FROM `siswa`");
?>
<a href="tambah_nilai.php">tambah data</a><br>

<?php
foreach($data as $data){
    echo $data['nama_siswa'];
    echo $data['nilai_siswa'];
    echo $data['jenis_kelamin'];
    ?>
    <a href="delete_nilai.php?id=<?php $data['nis']?>">hapus</a><br>



<?php
}