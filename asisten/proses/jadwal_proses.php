<?php
include "../../koneksi/koneksi.php";

//Proses Tambah
if(isset($_POST['tambah'])){

   $kd_jadwal       = $_POST['kd_jadwal'];
   $kelompok        = $_POST['kelompok'];
   $hari            = $_POST['hari'];
   $tanggal         = $_POST['tanggal'];
   $jam             = $_POST['jam'];
   $tahun_ajar      = $_POST['tahun_ajar'];
   $sesi            = $_POST['sesi'];
   $keterangan      = $_POST['keterangan'];
   $status          = $_POST['status'];
   $nip             = $_POST['nip'];
   $kd_matkul       = $_POST['kd_matkul'];
   $kd_lab          = $_POST['kd_lab'];
   $nim             = $_POST['nim'];
 
  //INSERT QUERY START
  $query = "insert into jadwal values('$kd_jadwal','$kelompok','$hari','$tanggal','$jam','$tahun_ajar','$sesi','$keterangan','$status','$nip','$kd_matkul','$kd_lab','$nim')";
  $sql = mysqli_query($connect, $query);
   if ($sql) {?>
     <script language="JavaScript">
 			alert('Data berhasil disimpan');
 			document.location="../index.php?page=jadwal";
     </script>
     <?php
     } else {?>
         <script language="JavaScript">
            alert('Jadwal gagal disimpan, silakan cek kembali');
             window.history.go(-1);
         </script>
     <?php
    }
}
