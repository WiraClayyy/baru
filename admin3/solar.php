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
    DATA STOK SOLAR
    </h1>
    </div>
    </div>
    </div>
  </section>

    <!-- Solar -->
  <section class="content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
          <div class="table-responsive mailbox-messages">
          <table id="example1" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-info">
                  <th> Sisa Solar</th>
                  <th> Total Solar Masuk</th>
                  <th> Total Solar Keluar</th>
                </tr>
                <?php
              $no = 1;
              $masuk=0;
              $keluar=0;
              $desa = mysqli_query($koneksi,"SELECT * FROM solar");
              while($d = mysqli_fetch_array($desa)){
              $masuk+=$d['total'];
              }
              $desa = mysqli_query($koneksi,"SELECT * FROM kegiatan");
              while($d = mysqli_fetch_array($desa)){
              $keluar+=($d['solar']*32);
              }
              ?>
                <tr role="row" class="odd">

                                    <td><?php   echo $masuk-$keluar; ?></td>
                                    <td><?php   echo $masuk; ?></td>
                                    <td><?php echo $keluar    ?></td>
               </tr>                   
              </thead>
              </table>
              </div>
              <p>
              </p>
            </div>
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
          
          <!-- Aksi Cetak -->
          <div class="row">
          <div class="col-sm-12 col-md-6">
          <div class="dt-buttons btn-group">
          <p class="btn-group">
            <a href="excelsolar.php"><button class="btn btn-outline-secondary buttons-Excel buttons-html15" tabindex="0" aria-controls="example2" type="button">
            Excel
            </button></a>
            <a href="pdfsolar.php"><button align="" class="btn btn-outline-secondary buttons-Excel buttons-html15" tabindex="0" aria-controls="example2" type="button">
            PDF dan Print
            </button></a>
            
            
          </p>
          </div>
          </div>
          <div class="col-sm-12 col-md-6">
          <div id="example2_filter" class="float-right">
            <label>
            <input type="search" class="form-control form-control-sm" placeholder="search" aria-label="Search">
            </label>
          </div>
          </div>
          </div>
        <div class="table-responsive mailbox-messages">
          <table id="example1" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-info">
                  <th class="float-center" width="5%">
                   No
                  </th>
                 
                  <th> Tanggal Solar Masuk</th>
                  <th> Total Solar Masuk</th>
                </tr>
                <tr role="row" class="odd">
                  <?php
              $no = 1;
              $desa = mysqli_query($koneksi,"SELECT * FROM solar");
              while($d = mysqli_fetch_array($desa)){
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['tanggal']; ?></td>
                <td><?php echo $d['total']." Liter"; ?></td>
         

                                    
                                    <?php   } ?>
              </thead>
            </table>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </section>
        </div>
        </div>
