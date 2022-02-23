<?php 
include'app/database/connect.php';


$nama_ketua		=$_POST['nama_ketua'];
$no_telp		=$_POST['no_telp'];
$pilih_gunung        =$_POST['pilih_gunung'];
$pilih_jalur        =$_POST['milih'];
$tgl_pendakian        =$_POST['tgl_pendakian'];
$kelompok_pendakian        =$_POST['kelompok_pendakian'];



$query = mysqli_query($conn,"INSERT INTO booking (nama_ketua,no_telp,pilih_gunung,pilih_jalur,tgl_pendakian,kelompok_pendakian)
 						VALUES 
 						('$nama_ketua','$no_telp','$pilih_gunung','$pilih_jalur','$tgl_pendakian','$kelompok_pendakian')");
if($query){
    ?>
    <script>
        alert('Booking Pendakian Sudah Berhasil');
        window.location='index.php';
    </script>

    <?php  
 }else{

    echo "<script>
        alert('gagal menambahkan komen');
        window.location='tambah_komen.php';

    </script>";
 }  
 
?>