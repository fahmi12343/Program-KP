<?php
  //Include file header.php
  include 'header.php';

  if(isset($_GET['page'])){
      switch($_GET['page']){

          case 'beranda'  : include 'pages/beranda.php'; break;
          case 'user'  : include 'pages/usr.php'; break;
		  case 'add_user'  : include 'pages/add_usr.php'; break;
          case 'update_user'  : include 'pages/update_usr.php'; break;
          
            case 'lab'  : include 'pages/lab.php'; break;
            case 'add_lab'  : include 'pages/add_lab.php'; break;
            case 'update_lab'  : include 'pages/update_lab.php'; break;

                case 'dosen'  : include 'pages/dosen.php'; break;
                case 'add_dosen'  : include 'pages/add_dosen.php'; break;
                case 'update_dosen'  : include 'pages/update_dosen.php'; break;
                
            case 'matkul'  : include 'pages/matkul.php'; break;
            case 'add_matkul'  : include 'pages/add_matkul.php'; break;
            case 'update_matkul'  : include 'pages/update_matkul.php'; break;
            
         case 'jadwal'  : include 'pages/jadwal.php'; break;
         case 'add_jadwal'  : include 'pages/add_jadwal.php'; break;
         case 'update_jadwal'  : include 'pages/update_jadwal.php'; break;

          default : include 'pages/404.php';
      }
  }else{
      include 'pages/beranda.php';
  }
  
  //Include file footer.php
  include 'footer.php';

?>