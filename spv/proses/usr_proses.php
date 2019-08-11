<?php
include "../../koneksi/koneksi.php";

//Proses Tambah
if(isset($_POST['tambah'])){

  // filter data yang diinputkan
  $nim = filter_input(INPUT_POST, 'nim', FILTER_SANITIZE_STRING);
  $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
  // enkripsi password
  $password = filter_input(INPUT_POST["password"], FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

  $nim          = $_POST['nim'];
  $password     = $_POST['password'];
  $nama         = $_POST['nama'];
  $email        = $_POST['email'];
  $akses        = $_POST['akses'];
 
  //INSERT QUERY START
  $query = "insert into user values('$nim','$password','$nama','$email','$akses')";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil disimpan');
			document.location="../index.php?page=user";
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
    
  $nim          = $_POST['nim'];
  $password     = $_POST['password'];
  $nama         = $_POST['nama'];
  $email        = $_POST['email'];
  $akses        = $_POST['akses'];
  
  //UPDATE QUERY START
  $query = "UPDATE user SET password='$password',nama='$nama',email='$email',akses='$akses' WHERE nim='$nim'";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil diubah');
			document.location="../index.php?page=user";
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
  $query = "delete from user where nim='$id'";
  $sql = mysqli_query($connect, $query);
  if ($sql) {?>
    <script language="JavaScript">
			alert('Data berhasil dihapus');
			document.location="../index.php?page=user";
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