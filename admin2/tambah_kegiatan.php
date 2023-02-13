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
    FORM PENAMBAHAN DATA KEGIATAN HARIAN 
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
            <form role="form" method="post" action="tambah_kegiatan_aksi.php" enctype="multipart/form-data">
               <input type="hidden" name="user" class="form-control" value="">
               <div class="box-body">
                <div class="form-group">
                  <label>NAMA KEGIATAN</label>
                  <input type="text" name="nama" class="form-control" placeholder="nama kegiatan" required>
                </div>
                <div class="form-group">
                  <label>TANGGAL KEGIATAN</label>
                  <input type="date" name="tanggal" class="form-control" placeholder="tanggal kegiatan" required>
                </div>
                <div class="form-group">
                  <label>TOTAL PRODUKSI</label>
                  <input type="text" name="total" class="form-control" placeholder="total produksi" required>
                </div>
                <div class="form-group">
                  <label>DOM</label>
                  <input type="text" name="dom" class="form-control" placeholder="dom" required>
                </div>
                <div class="form-group">
                  <label>HASIL ANALISA (Ni)</label>
                  <select name="ni" class="form-control" placeholder="kadar">
                    <option value="1.5"> Kadar 1.5</option>
                    <option value="1.6"> Kadar 1.6</option>
                    <option value="1.7"> Kadar 1.7</option>
                    <option value="1.8"> Kadar 1.8</option>
                    <option value="1.9"> Kadar 1.9</option>
                    <option value="2.0"> Kadar 2.0</option>
                    <option value=">2"> Kadar 2 Up</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>HAULING</label>
                  <input type="text" name="hauling" class="form-control" placeholder="hauling" required>
                </div>
                <div class="form-group">
                  <label>PENGELUARAN SOLAR</label>
                  <input type="number" name="solar" class="form-control" placeholder="solar" required>
                </div>
                <div class="form-group">
                  <label>RETASE</label>
                  <input type="text" name="retase" class="form-control" placeholder="retase" required>
                </div>
                <div class="form-group">
                  <label>PENANGGUNG JAWAB</label>
                  <input type="text" name="pj" class="form-control" placeholder="penanggung jawab" required>
                </div>
                <div class="form-group">
                  <label>JAM KERJA ALAT 1</label>
                  <input type="number" name="alat1" class="form-control" placeholder="jam kerja alat 1" required>
                </div>
                <div class="form-group">
                  <label>JAM KERJA ALAT 2</label>
                  <input type="number" name="alat2" class="form-control" placeholder="jam kerja alat 2" required>
                </div>
                <div class="form-group">
                  <label>JAM KERJA ALAT 3</label>
                  <input type="number" name="alat3" class="form-control" placeholder="jam kerja alat 3" required>
                </div>
                <div class="form-group">
                  <label>JAM KERJA ALAT 4</label>
                  <input type="number" name="alat4" class="form-control" placeholder="jam kerja alat 4" required>
                </div>
                <div class="form-group">
                  <label>JAM KERJA ALAT 5</label>
                  <input type="number" name="alat5" class="form-control" placeholder="jam kerja alat 5" required>
                </div>
                <div class="form-group">
                <label>DOKUMENTASI KEGIATAN</label>
                      <input type="file" name="gambar1" class="form-control" placeholder="gambar" required>
                      <p style="color: red">&nbsp Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                      <input type="file" name="gambar2" class="form-control" placeholder="gambar" required>
                      <p style="color: red">&nbsp Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                      <input type="file" name="gambar3" class="form-control" placeholder="gambar" required>
                      <p style="color: red">&nbsp Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" nama="simpan" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
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

