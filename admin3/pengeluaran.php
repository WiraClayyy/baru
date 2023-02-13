<?php
include 'koneksi.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
          <div class="col-sm-6">
    <h1>
    DATA LAPORAN PENGELUARAN
    </h1>
    </div>
    </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
        <div class="card-body">
         
          <div class="row">
          <div class="col-sm-12 col-md-6">
          <div class="dt-buttons btn-group">
          <p class="btn-group">
            <a href="excelpengeluaran.php"><button class="btn btn-outline-secondary buttons-Excel buttons-html15" tabindex="0" aria-controls="example2" type="button">
            Excel
            </button></a>
            <a href="pdfpengeluaran.php"><button align="" class="btn btn-outline-secondary buttons-Excel buttons-html15" tabindex="0" aria-controls="example2" type="button">
            PDF dan Print
            </button></a>
          </div>
          </div>
          <div class="col-sm-12 col-md-6">
          <div id="example2_filter" class="float-right">
            <label>
            <input type="search" class="form-control form-control-sm" placeholder="search" aria-label="Search">
            </label>
          </div>
          </div>
          </p>
        </div>
        <div class="table-responsive mailbox-messages">
          <table id="example1" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-info">
                  <th width="5%">
                    No
                  </th>
                  <th> Keterangan Pengeluaran</th>
                  <th> Tanggal Pengeluaran</th>
                  <th> Jumlah Item</th>
                  <th> Harga Satuan</th>
                  <th> Total Harga Keseluruhan</th>
                  <th> Dokumentasi Pengeluaran</th>
                </tr>
                <tr role="row" class="odd">
                 <?php  
                  $no = 1;
              $desa = mysqli_query($koneksi,"SELECT * FROM pengeluaran");
              while($d = mysqli_fetch_array($desa)){
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['keterangan']; ?></td>
                <td><?php echo $d['tanggal']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td><?php echo $d['harga']; ?></td>
                <td><?php echo $d['jumlah']*$d['harga']; ?></td>
                <td><img width="100%" height="100%" src="../gambar/<?php echo$d['gambar1']; ?>">
                  <img width="100%" height="100%" src="../gambar/<?php echo$d['gambar2']; ?>">
                  <img width="100%" height="100%" src="../gambar/<?php echo$d['gambar3']; ?>"></td>
                                    
                                  <?php   } ?>
              </tr>
              </thead>
            </table>
            </div>
            </div>
            </div>
            </div>
            </div>
            </section>
        </div>
        </div>
