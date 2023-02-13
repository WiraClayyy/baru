<?php
include 'koneksi.php';
?>

 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
          <div class="col-sm-12">
    <h1>
    FORM PENGUBAHAN DATA PENGELUARAN
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
           <?php  
                  $no = 1;
                  $id = $_GET['id'];
              $desa = mysqli_query($koneksi,"SELECT * FROM pengeluaran where id=$id");
              while($d = mysqli_fetch_array($desa)){
              ?>
          <form role="form" method="post" action="ubah_pengeluaran_aksi.php" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $d['id']; ?>">
               <div class="box-body">
                <div class="form-group">
                  <label>KETERANGAN PENGELUARAN</label>
                  <input value="<?php echo $d['keterangan']; ?>" type="text" name="keterangan" class="form-control" placeholder="keterangan pengeluaran" required>
                </div>
                <div class="form-group">
                  <label>TANGGAL PENGELUARAN</label>
                  <input value="<?php echo $d['tanggal']; ?>" type="date" name="tanggal" class="form-control" placeholder="tanggal pengeluaran" required>
                </div>
                <div class="form-group">
                  <label>JUMLAH ITEM</label>
                  <input value="<?php echo $d['jumlah']; ?>" type="number" name="jumlah" class="form-control" placeholder="jumlah item" required>
                </div>
                <div class="form-group">
                  <label>HARGA SATUAN</label>
                  <input value="<?php echo $d['harga']; ?>" type="number" name="harga" class="form-control" placeholder="harga satuan" required>
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
          <?php   } ?>
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