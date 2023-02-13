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
    FORM PENGUBAHAN DATA SOLAR
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
              $id=$_GET['id'];
              $desa = mysqli_query($koneksi,"SELECT * FROM solar where id = $id");
              while($d = mysqli_fetch_array($desa)){
              ?>
          <form role="form" method="post" action="ubah_solar_aksi.php" enctype="multipart/form-data">
           <input type="hidden" name="user" class="form-control" value="">
           <div class="box-body">
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <div class="form-group">
              <label>TANGGAL PEMBELIAN SOLAR</label>
              <input type="date" name="tanggal" class="form-control" placeholder="<?php echo $d['tanggal']; ?>" value="<?php echo $d['tanggal']; ?>" required>
            </div>
            <div class="form-group">
              <label>TOTAL SOLAR MASUK</label>
              <input type="number" name="total" class="form-control" placeholder="total solar masuk" value="<?php echo $d['total']; ?>" required>
            </div>
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