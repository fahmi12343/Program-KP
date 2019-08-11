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

//Proses Ubah
else if(isset($_POST['ubah'])) {
    
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

  //UPDATE QUERY START
  $query = "UPDATE  jadwal SET kelompok='$kelompok',hari='$hari',tanggal='$tanggal',jam='$jam',tahun_ajar='$tahun_ajar',
                      sesi='$sesi',keterangan='$keterangan',status='$status',nip='$nip',kd_matkul='$kd_matkul',
                        kd_lab='$kd_lab',nim='$nim' WHERE kd_jadwal='$kd_jadwal'";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil diubah');
			document.location="../index.php?page=jadwal";
    </script>
    <?php
    } else {?>
        <script language="JavaScript">
            alert('Data gagal diubah, silakan cek kembali');
            window.history.go(-1);
        </script>
    <?php
    }
}

//Proses Hapus
else if ($_GET['act']=='del') {
  $id = $_GET['id'];
  //DELETE QUERY START
  $query = "delete from jadwal where kd_jadwal='$id'";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil dihapus');
			document.location="../index.php?page=jadwal";
    </script>
    <?php
  } else {?>
    <script language="JavaScript">
			alert('Data gagal dihapus, ulangi kembali');
			window.history.go(-1);
    </script>
  <?php
  }
  exit;
}
?>