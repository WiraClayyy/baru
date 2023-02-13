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
          <p class="btn-group">
          <a href="index.php?page=tambah_pengeluaran" class="btn btn-success btn-lg" role="button" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Data</a>
          </p>
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
                  <th> Aksi</th>
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
                                    <td>
                                      <div class="btn-group">
                                        <a href="index.php?page=ubah_pengeluaran&id=<?php   echo $d['id']; ?>" class="btn btn-primary btn-l"><i class="fa fa-edit"></i></a> 
                                        <button type="button" class="btn btn-success btn-l" data-toggle="modal" data-target="#myModal<?php echo $d['id'];  ?>"><i class="fa-solid fa-eye"></i></button>
                                            <div id="myModal<?php echo $d['id'];  ?>" class="modal fade" role="dialog">
                                              <div class="modal-dialog">
                                        <!-- konten modal-->
                                                   <div class="modal-content">
                                                      <!-- heading modal -->
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                        <!-- body modal -->
                                              <div class="modal-body">
                                              <div class="card">
                                              <div class="card-body">
                                              <div class="row">
                                              <div class="col-sm-12 col-md-6">
                                              <div class="dt-buttons btn-group">
                                              <p class="btn-group">
                                              <button class="btn btn-outline-secondary buttons-Excel buttons-html15" tabindex="0" aria-controls="example2" type="button">
                                                Excel
                                                </button>
                                                <button align="" class="btn btn-outline-secondary buttons-Excel buttons-html15" tabindex="0" aria-controls="example2" type="button">
                                                PDF
                                                </button>
                                                <button align="" class="btn btn-outline-secondary buttons-Excel buttons-html15" tabindex="0" aria-controls="example2" type="button">
                                                Print
                                                </button>
                                              </div>
                                              </div>
                                              </p>
                                              <div class="table-responsive mailbox-messages">
                                              <table id="example1" class="display table table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr class="bg-info">
                                                      <th class="float-center" width="5%">
                                                        No
                                                      </th>
                                                      <th> Keterangan Pengeluaran</th>
                                                      <th> Tanggal Pengeluaran</th>
                                                      <th> Jumlah Item</th>
                                                      <th> Harga Satuan</th>
                                                      <th> Total Harga Keseluruhan</th>
                                                      <th> Dokumentasi Pengeluaran</th>
                                                    </tr>
                                                    <?php
              $n = 1;
              $id =$d['id'];
              $des = mysqli_query($koneksi,"SELECT * FROM pengeluaran where id=$id");
              while($da = mysqli_fetch_array($des)){
              ?>
               <tr role="row" class="odd">
                <td><?php echo $n++ ?></td>
                <td><?php echo $da['keterangan']; ?></td>
                <td><?php echo $da['tanggal']; ?></td>
                <td><?php echo $da['jumlah']; ?></td>
                <td><?php echo $da['harga']; ?></td>
                <td><?php echo $da['jumlah']*$da['harga']; ?></td>
                <td><img width="100%" height="100%" src="../gambar/<?php echo$da['gambar1']; ?>">
                  <img width="100%" height="100%" src="../gambar/<?php echo$da['gambar2']; ?>">
                  <img width="100%" height="100%" src="../gambar/<?php echo$da['gambar3']; ?>"></td>
                                                    </tr><?php  } ?>
                                                    </thead>
                                                    </table>
                                                    </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                        <a href="hapus_pengeluaran.php?id=<?php   echo$d['id']; ?>" class="btn btn-danger btn-l" onclick="confirmation(event)"><i class="fa fa-trash-o"></i></a> 
                                      </div> 
                                    </td>
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
