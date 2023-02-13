<?php

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
          <div class="col-sm-12">
    <h1>
    FORM PENAMBAHAN DATA PENGELUARAN
    </h1>
    </div>
    </div>
    </div>
  </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
        <div class="card">
        <div class="card-body">
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="tambah_pengeluaran_aksi.php" enctype="multipart/form-data">
               <input type="hidden" name="user" class="form-control" value="">
               <div class="box-body">
                <div class="form-group">
                  <label>KETERANGAN PENGELUARAN</label>
                  <input type="text" name="keterangan" class="form-control" placeholder="keterangan pengeluaran" required>
                </div>
                <div class="form-group">
                  <label>TANGGAL PENGELUARAN</label>
                  <input type="date" name="tanggal" class="form-control" placeholder="tanggal pengeluaran" required>
                </div>
                <div class="form-group">
                  <label>JUMLAH ITEM</label>
                  <input type="number" name="jumlah" class="form-control" placeholder="jumlah item" required>
                </div>
                <div class="form-group">
                  <label>HARGA SATUAN</label>
                  <input type="number" name="harga" class="form-control" placeholder="harga satuan" required>
                </div>
                <div class="form-group">
                <label>DOKUMENTASI PENGELUARAN</label>
                       <input type="file" name="gambar1" class="form-control" placeholder="gambar" required>
                      <p style="color: red">&nbsp Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                      <input type="file" name="gambar2" class="form-control" placeholder="gambar" required>
                      <p style="color: red">&nbsp Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                      <input type="file" name="gambar3" class="form-control" placeholder="gambar" required>
                      <p style="color: red">&nbsp Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
      </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

