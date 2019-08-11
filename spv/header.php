<?php error_reporting(0); ?>

<?php
                          session_start();
                          if(empty($_SESSION['nim'])){
                             ?>
<script >
        alert("Silakan Login Terlebih Dahulu");
        document.location="../login/";
</script>
                             <?php
                          }
?>

<?php include"../koneksi/koneksi.php";
  session_start();
  if(!isset($_SESSION['nim'])){
      ?>
      <script >
          alert("Silakan Login Terlebih Dahulu");
          document.location="../login/";
      </script>
      <?php
  }
?>

<?php
    $nim=$_SESSION['nim'];
    $akses = "SELECT * FROM user WHERE nim = '$nim'";
    $sql = mysqli_query($connect, $akses);
    $row=mysqli_fetch_array($sql);
    //$row=mysqli_fetch_array($akses);
    $akses1=$row['akses'];
    if($akses1!="supervisor"){
?>
    <script >
        alert("Anda Tidak Memiliki Hak Akses Untuk Halaman Ini !");
        document.location="../login/";
    </script>
  <?php
  }
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - Bootstrap Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="../assets/css/font-awesome.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
<link href="../assets/css/pages/dashboard.css" rel="stylesheet">
<link href="../assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../assets/datatables/jquery.dataTables.min.css">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

<!-- ////////////////// Validate ////////////////// -->
<script language="javascript">
    function isNumberKey(evt) //Number
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
        if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;

      return true;
    }
    function isUppercaseKey(evt) //Uppercase
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
        if (charCode > 31 && (charCode < 65 || charCode > 90))
          return false;

      return true;
    }
    function isLowercaseKey(evt) //Lowercase
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
        if (charCode > 31 && (charCode < 97 || charCode > 122))
          return false;

      return true;
    }
    function isAlphabetKey(evt) //Alphabet + spc
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
        if (charCode > 32 && (charCode < 97 || charCode > 122))
          return false;

      return true;
    }

    function huruf(evt){
			var charCode = (evt.which) ? evt.which : event.keyCode
			if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
				return false;
			return true;
		}	

    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
        return true;
    }
    
  </script>
  <!-- ////////////////// End Validate ////////////////// -->

  <?php
      $nim=$_SESSION['nim'];
      $query = "select nama from user where nim='".$nim."'";
      //$query="SELECT*FROM user WHERE nim='$nim'";
      $sql = mysqli_query($connect, $query);
      $data = mysqli_fetch_array($sql);
      $user = $data['nama'];
  ?>

</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php"> Lab Ict UBL </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <ul class="nav">
            <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Login Sebagai <b>
              <?php echo $user;?></b> - <i>[Supervisor]</i></span></a></li>
            <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
          </ul>
        </div> 
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index.php?page=beranda"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li><a href="index.php?page=jadwal"><i class="icon-calendar"></i><span>Jadwal</span> </a> </li>
        <li><a href="index.php?page=matkul"><i class="icon-star-half-empty"></i><span>Matkul</span> </a></li>
        <li><a href="index.php?page=dosen"><i class="icon-male" ></i><i class="icon-female"></i><span>Dosen</span> </a> </li>
        <li><a href="index.php?page=lab"><i class="icon-desktop"></i><span>Lab</span> </a> </li>
        <li><a href="index.php?page=user"><i class="icon-user"></i><span>User</span> </a> </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>