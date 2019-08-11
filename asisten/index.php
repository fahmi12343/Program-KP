<?php
  //Include file header.php
  include 'header.php';

  if(isset($_GET['page'])){
      switch($_GET['page']){

          case 'beranda'  : include 'pages/beranda.php'; break;

            case 'jadwal'  : include 'pages/jadwal.php'; break;
            case 'add_jadwal'  : include 'pages/add_jadwal.php'; break;
            
              case 'jadwalK'  : include 'pages/jadwalK.php'; break;
              case 'add_jadwalK'  : include 'pages/add_jadwalK.php'; break;

          default : include 'pages/404.php';
      }
  }else{
      include 'pages/beranda.php';
  }
  
  //Include file footer.php
  include 'footer.php';

?>