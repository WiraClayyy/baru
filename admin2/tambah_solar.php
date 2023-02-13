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
    FORM PENAMBAHAN DATA SOLAR 
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
            <form role="form" method="post" action="tambah_solar_aksi.php" enctype="multipart/form-data">
               <input type="hidden" name="user" class="form-control" value="">
               <div class="box-body">
                <div class="form-group">
                <div class="form-group">
                  <label>TANGGAL SOLAR MASUK</label>
                  <input type="date" name="tanggal" class="form-control" placeholder="tanggal solar masuk" required>
                </div>
                <div class="form-group">
                  <label>TOTAL SOLAR MASUK</label>
                  <input type="number" name="total" class="form-control" placeholder="total solar masuk" required>
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

