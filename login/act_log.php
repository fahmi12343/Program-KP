<?php

include "../koneksi/koneksi.php";
$nim = $_POST['nim'];
$password = $_POST['password'];

$op = $_GET['op'];

/*proses login */

$login = mysqli_query($connect, "SELECT * FROM user WHERE nim = '$nim' AND password='$password'");
$row=mysqli_fetch_array($login);

if ($row['nim'] == $nim AND $row['password'] == $password AND $row['akses'] == "supervisor")
{
  session_start();
  $_SESSION['nim'] = $row['nim'];
  $_SESSION['password'] = $row['password'];
?>
  <script language="JavaScript">
			alert('Anda Login Sebagai Supervisor');
			document.location="../spv/";
  </script>
<?php
}else if ($row['nim'] == $nim AND $row['password'] == $password AND $row['akses'] == "asisten")
{
  session_start();
  $_SESSION['nim'] = $row['nim'];
  $_SESSION['password'] = $row['password'];
?>
  <script language="JavaScript">
			alert('Anda Login Sebagai Asisten');
			document.location="../asisten/";
  </script>
<?php
}else
{
  ?>
  <script language="JavaScript">
			alert('nim atau Password tidak sesuai. Silahkan diulang kembali!');
			document.location="index.php";
  </script>
  <?php
}

/*proses login end */

?>
