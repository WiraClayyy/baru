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
    DATA KEGIATAN HARIAN 
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
          <h2>
            HM ALAT
          </h2>
          <div class="table-responsive mailbox-messages">
          <table id="example1" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-info">
                  <th> Jam Kerja ALat 1</th>
                  <th> Jam Kerja Alat 2</th>
                  <th> Jam Kerja Alat 3</th>
                  <th> Jam Kerja Alat 4</th>
                  <th> Jam Kerja Alat 5</th>
                </tr>
                <tr role="row" class="odd">
                   <?php
              $alat1=0; 
              $alat2=0; 
              $alat3=0;
              $alat4=0; 
              $alat5=0;                   
              $no = 1;
              $desa = mysqli_query($koneksi,"SELECT * FROM kegiatan");
              while($d = mysqli_fetch_array($desa)){ 
           $alat1+=$d['alat1'];
           $alat2+=$d['alat2'];
           $alat3+=$d['alat3'];
           $alat4+=$d['alat4'];
           $alat5+=$d['alat5'];


            }
           ?>
                                    <td><?php echo $alat1." jam";  ?></td>
                                    <td><?php echo $alat2." jam";  ?></td>
                                    <td><?php echo $alat3." jam";  ?></td>
                                    <td><?php echo $alat4." jam";  ?></td>
                                    <td><?php echo $alat5." jam";  ?></td>
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
          <p class="btn-group">
          <a href="index.php?page=tambah_kegiatan" class="btn btn-success btn-lg" role="button" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Data</a>
          </p>
          <div class="row">
          <div class="col-sm-12 col-md-6">
          <div class="dt-buttons btn-group">
          <p class="btn-group">
            <a href="excelkegiatan.php"><button class="btn btn-outline-secondary buttons-Excel buttons-html15" tabindex="0" aria-controls="example2" type="button">
            Excel
            </button></a>
            <a href ="pdfkegiatan.php"><button   align="" class="btn btn-outline-secondary buttons-Excel buttons-html15" tabindex="0" aria-controls="example2" type="button">
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
                  <th class="float-center" width="5%">
                   No
                  </th>
                  <th> Nama Kegiatan</th>
                  <th> Tanggal Kegiatan</th>
                  <th> Total Produksi</th>
                  <th> DOM</th>
                  <th> Hasil Analisa (Ni)</th>
                  <th> Hauling</th>
                  <th> Pengeluaran Solar</th>
                  <th> Retase</th>
                  <th> Penanggung Jawab</th>
                  <th> Jam Kerja Alat 1</th>
                  <th> Jam Kerja Alat 2</th>
                  <th> Jam Kerja Alat 3</th>
                  <th> Jam Kerja Alat 4</th>
                  <th> Jam Kerja Alat 5</th>
                  <th> Dokumentasi Kegiatan</th>
                  <th> Aksi</th>
                </tr>
                <tr role="row" class="odd">
                                    <td class="sorting_1"></td>
                                    <?php
                                  
              $no = 1;
              $desa = mysqli_query($koneksi,"SELECT * FROM kegiatan");
              while($d = mysqli_fetch_array($desa)){
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['tanggal']; ?></td>
                <td><?php echo $d['total']; ?></td>
                <td><?php echo $d['dom']; ?></td>
                <td><?php echo $d['ni']; ?></td>
                <td><?php echo $d['hauling']; ?></td>
                <td><?php echo $d['solar']; ?></td>
                <td><?php echo $d['retase']; ?></td>
                <td><?php echo $d['pj']; ?></td>
                <td><?php echo $d['alat1']; ?></td>
                <td><?php echo $d['alat2']; ?></td>
                <td><?php echo $d['alat3']; ?></td>
                <td><?php echo $d['alat4']; ?></td>
                <td><?php echo $d['alat5']; ?></td>
                <td><img height="100%" width="100%" src="../gambar/<?php echo $d['gambar1']; ?>">
                <img height="100%" width="100%" src="../gambar/<?php echo $d['gambar2']; ?>">
              <img height="100%" width="100%" src="../gambar/<?php echo $d['gambar3']; ?>"></td>
              
                       
                                    <td>
                                      <div class="btn-group">
                                        <a href="index.php?page=ubah_kegiatan&id=<?php echo $d['id'];  ?>" class="btn btn-primary btn-l"><i class="fa fa-edit"></i></a> 
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
                                                      <th> Nama Kegiatan</th>
                                                      <th> Tanggal Kegiatan</th>
                                                      <th> Total Produksi</th>
                                                      <th> DOM</th>
                                                      <th> Hasil Analisa (Ni)</th>
                                                      <th> Hauling</th>
                                                      <th> Pengeluaran Solar</th>
                                                      <th> Retase</th>
                                                      <th> Penanggung Jawab</th>
                                                      <th> Jam Kerja Alat 1</th>
                                                      <th> Jam Kerja Alat 2</th>
                                                      <th> Jam Kerja Alat 3</th>
                                                      <th> Jam Kerja Alat 4</th>
                                                      <th> Jam Kerja Alat 5</th>
                                                      <th> Dokumentasi Kegiatan</th>
                                                    </tr>
                                                     </thead>
                                                    <?php
                                  
              $n = 1;
              $da =$d['id'];
              $des = mysqli_query($koneksi,"SELECT * FROM kegiatan where id=$da ");
              while($de = mysqli_fetch_array($des)){
              ?>
              <tr>
                <td><?php echo $n++ ?></td>
                <td><?php echo $de['nama']; ?></td>
                <td><?php echo $de['tanggal']; ?></td>
                <td><?php echo $de['total']; ?></td>
                <td><?php echo $de['dom']; ?></td>
                <td><?php echo $de['ni']; ?></td>
                <td><?php echo $de['hauling']; ?></td>
                <td><?php echo $de['solar']; ?></td>
                <td><?php echo $de['retase']; ?></td>
                <td><?php echo $de['pj']; ?></td>
                <td><?php echo $de['alat1']; ?></td>
                <td><?php echo $de['alat2']; ?></td>
                <td><?php echo $de['alat3']; ?></td>
                <td><?php echo $de['alat4']; ?></td>
                <td><?php echo $de['alat5']; ?></td>
                <td><img height="100%" width="100%" src="../gambar/<?php echo $de['gambar1']; ?>">
                  <img height="100%" width="100%" src="../gambar/<?php echo $de['gambar2']; ?>">
                  <img height="100%" width="100%" src="../gambar/<?php echo $de['gambar3']; ?>"></td>
              </tr><?php } ?>
                                                   
                                                    </table>
                                                    </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              <a href="hapus_kegiatan.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-l" onclick="confirmation(event)"><i class="fa fa-trash-o"></i></a> 
                                      </div> 
                                    </td>
                                    <?php } ?>
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
       
