<?php
include "../../koneksi/koneksi.php";

//Proses Tambah
if(isset($_POST['tambah'])){

   $nip         = $_POST['nip'];
   $nama_dosen  = $_POST['nama_dosen'];
   $alamat      = $_POST['alamat'];
   $telepon     = $_POST['telepon'];
 
  //INSERT QUERY START
  $query = "insert into dosen values('$nip','$nama_dosen','$alamat','$telepon')";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil disimpan');
			document.location="../index.php?page=dosen";
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
    
    $nip         = $_POST['nip'];
    $nama_dosen  = $_POST['nama_dosen'];
    $alamat      = $_POST['alamat'];
    $telepon     = $_POST['telepon'];
  
  //UPDATE QUERY START
  $query = "UPDATE dosen SET nama_dosen='$nama_dosen',alamat='$alamat',telepon='$telepon' WHERE nip='$nip'";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil diubah');
			document.location="../index.php?page=dosen";
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
  $query = "delete from dosen where nip='$id'";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil dihapus');
			document.location="../index.php?page=dosen";
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