<?php
include "../../koneksi/koneksi.php";

//Proses Tambah
if(isset($_POST['tambah'])){

   $kd_matkul        = $_POST['kd_matkul'];
   $nama_matkul      = $_POST['nama_matkul'];
 
  //INSERT QUERY START
  $query = "insert into matkul values('$kd_matkul','$nama_matkul')";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil disimpan');
			document.location="../index.php?page=matkul";
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
    
    $kd_matkul        = $_POST['kd_matkul'];
    $nama_matkul      = $_POST['nama_matkul'];
  
  //UPDATE QUERY START
  $query = "UPDATE matkul SET nama_matkul='$nama_matkul' WHERE kd_matkul='$kd_matkul'";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil diubah');
			document.location="../index.php?page=matkul";
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
  $query = "delete from matkul where kd_matkul='$id'";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil dihapus');
			document.location="../index.php?page=matkul";
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