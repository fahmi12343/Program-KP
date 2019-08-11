<?php
include "../../koneksi/koneksi.php";

//Proses Tambah
if(isset($_POST['tambah'])){

   $kd_lab        = $_POST['kd_lab'];
   $nama_lab      = $_POST['nama_lab'];
   $desc_lab      = $_POST['desc_lab'];
 
  //INSERT QUERY START
  $query = "insert into lab values('$kd_lab','$nama_lab','$desc_lab')";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil disimpan');
			document.location="../index.php?page=lab";
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
    
  $kd_lab        = $_POST['kd_lab'];
  $nama_lab      = $_POST['nama_lab'];
  $desc_lab      = $_POST['desc_lab'];
  
  //UPDATE QUERY START
  $query = "UPDATE lab SET nama_lab='$nama_lab',desc_lab='$desc_lab' WHERE kd_lab='$kd_lab'";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil diubah');
			document.location="../index.php?page=lab";
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
  $query = "delete from lab where kd_lab='$id'";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil dihapus');
			document.location="../index.php?page=lab";
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