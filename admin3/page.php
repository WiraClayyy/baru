<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// Beranda

   case 'data':
  include 'kegiatan.php';
  break;
   case 'search':
  include 'search.php';
  break;
    case 'tambah_kegiatan':
  include 'tambah_kegiatan.php';
  break;

    case 'ubah_kegiatan';
  include 'ubah_kegiatan.php';
  break;

  case 'pengeluaran':
  include 'pengeluaran.php';
  break;
  
  case 'tambah_pengeluaran':
  include 'tambah_pengeluaran.php';
  break;

    case 'ubah_pengeluaran';
  include 'ubah_pengeluaran.php';
  break;

    case 'solar':
  include 'solar.php';
  break;
  
  case 'tambah_solar':
  include 'tambah_solar.php';
  break;

    case 'ubah_solar';
  include 'ubah_solar.php';
  break;

      case 'keuangan':
  include 'keuangan.php';
  break;
  
  case 'tambah_keuangan':
  include 'tambah_keuangan.php';
  break;

    case 'ubah_keuangan';
  include 'ubah_keuangan.php';
  break;

  }
}else{
    include 'beranda.php';
  }
?>