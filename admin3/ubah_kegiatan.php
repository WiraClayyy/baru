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
    FORM PENGUBAHAN DATA KEGIATAN HARIAN 
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
              $desa = mysqli_query($koneksi,"SELECT * FROM kegiatan where id = $id");
              while($d = mysqli_fetch_array($desa)){
              ?>
          <form role="form" method="post" action="ubah_kegiatan_aksi.php" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php  echo $d['id']; ?>">
               <div class="box-body">
                <div class="form-group">
                  <label>NAMA KEGIATAN</label>
                  <input value="<?php  echo $d['nama']; ?>" type="text" name="nama" class="form-control" placeholder="<?php  echo $d['nama']; ?>" required>
                </div>
                <div class="form-group">
                  <label>TANGGAL KEGIATAN</label>
                  <input value="<?php  echo $d['tanggal']; ?>" type="date" name="tanggal" class="form-control" placeholder="<?php  echo $d['tanggal']; ?>" required>
                </div>
                <div class="form-group">
                  <label>TOTAL PRODUKSI</label>
                  <input value="<?php  echo $d['total']; ?>" type="text" name="total" class="form-control" placeholder="<?php  echo $d['total']; ?>" required>
                </div>
                <div class="form-group">
                  <label>DOM</label>
                  <input value="<?php  echo $d['dom']; ?>" type="text" name="dom" class="form-control" placeholder="<?php  echo $d['dom']; ?>" required>
                </div>
                <div class="form-group">
                  <label>HASIL ANALISA (Ni)<?php  echo $d['ni']; ?></label>
                  <select name="ni" class="form-control" placeholder="">
                    

                    
                    <?php if ($d['ni']=="1.5") {
                     ?>
                     <option selected=selected value="1.5"> Kadar 1.5</option>
                     <option value="1.6"> Kadar 1.6</option>
                      <option value="1.7"> Kadar 1.7</option>
                      <option value="1.8"> Kadar 1.8</option>
                      <option  value="1.9"> Kadar 1.9</option>
                      <option value="2.0"> Kadar 2.0</option>
                      <option value=">2"> Kadar 2 Up</option>
                     <?php } elseif ($d['ni']=="1.6") {
                     ?>
                     <option  value="1.5"> Kadar 1.5</option>
                     <option selected=selected value="1.6"> Kadar 1.6</option>
                      <option value="1.7"> Kadar 1.7</option>
                      <option value="1.8"> Kadar 1.8</option>
                      <option  value="1.9"> Kadar 1.9</option>
                      <option value="2.0"> Kadar 2.0</option>
                      <option value=">2"> Kadar 2 Up</option>
                     <?php } elseif ($d['ni']=="1.7") {
                     ?>
                     <option  value="1.5"> Kadar 1.5</option>
                     <option  value="1.6"> Kadar 1.6</option>
                      <option selected=selected value="1.7"> Kadar 1.7</option>
                      <option value="1.8"> Kadar 1.8</option>
                      <option  value="1.9"> Kadar 1.9</option>
                      <option value="2.0"> Kadar 2.0</option>
                      <option value=">2"> Kadar 2 Up</option>
                     <?php } elseif ($d['ni']=="1.8") {
                     ?>
                     <option  value="1.5"> Kadar 1.5</option>
                     <option value="1.6"> Kadar 1.6</option>
                      <option value="1.7"> Kadar 1.7</option>
                      <option selected=selected value="1.8"> Kadar 1.8</option>
                      <option  value="1.9"> Kadar 1.9</option>
                      <option value="2.0"> Kadar 2.0</option>
                      <option value=">2"> Kadar 2 Up</option>
                     <?php } elseif ($d['ni']=="1.9") {
                     ?>
                     <option  value="1.5"> Kadar 1.5</option>
                     <option  value="1.6"> Kadar 1.6</option>
                      <option value="1.7"> Kadar 1.7</option>
                      <option value="1.8"> Kadar 1.8</option>
                      <option selected=selected value="1.9"> Kadar 1.9</option>
                      <option value="2.0"> Kadar 2.0</option>
                      <option value=">2"> Kadar 2 Up</option>
                     <?php }elseif ($d['ni']=="2.0") {
                     ?>
                     <option  value="1.5"> Kadar 1.5</option>
                     <option  value="1.6"> Kadar 1.6</option>
                      <option value="1.7"> Kadar 1.7</option>
                      <option value="1.8"> Kadar 1.8</option>
                      <option  value="1.9"> Kadar 1.9</option>
                      <option selected=selected value="2.0"> Kadar 2.0</option>
                      <option value=">2"> Kadar 2 Up</option>
                     <?php }elseif ($d['ni']==">2") {
                     ?>
                     <option  value="1.5"> Kadar 1.5</option>
                     <option  value="1.6"> Kadar 1.6</option>
                      <option value="1.7"> Kadar 1.7</option>
                      <option value="1.8"> Kadar 1.8</option>
                      <option  value="1.9"> Kadar 1.9</option>
                      <option value="2.0"> Kadar 2.0</option>
                      <option selected=selected value=">2"> Kadar 2 Up</option>
                     <?php } ?>
                      
   
                  </select>
                </div>
                <div class="form-group">
                  <label>HAULING</label>
                  <input value="<?php  echo $d['hauling']; ?>" type="text" name="hauling" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">
                  <label>PENGELUARAN SOLAR</label>
                  <input value="<?php  echo $d['solar']; ?>" type="number" name="solar" class="form-control" placeholder="<?php  echo $d['solar']; ?>" required>
                </div>
                <div class="form-group">
                  <label>RETASE</label>
                  <input value="<?php  echo $d['retase']; ?>" type="text" name="retase" class="form-control" placeholder="<?php  echo $d['retase']; ?>" required>
                </div>
                <div class="form-group">
                  <label>PENANGGUNG JAWAB</label>
                  <input value="<?php  echo $d['pj']; ?>" type="text" name="pj" class="form-control" placeholder="<?php  echo $d['pj']; ?>" required>
                </div>
                <div class="form-group">
                  <label>JAM KERJA ALAT 1</label>
                  <input value="<?php  echo $d['alat1']; ?>" type="number" name="alat1" class="form-control" placeholder="<?php  echo $d['alat1']; ?>" required>
                </div>
                <div class="form-group">
                  <label>JAM KERJA ALAT 2</label>
                  <input value="<?php  echo $d['alat2']; ?>" type="number" name="alat2" class="form-control" placeholder="<?php  echo $d['alat2']; ?>" required>
                </div>
                <div class="form-group">
                  <label>JAM KERJA ALAT 3</label>
                  <input value="<?php  echo $d['alat3']; ?>" type="number" name="alat3" class="form-control" placeholder="<?php  echo $d['alat3']; ?>" required>
                </div>
                <div class="form-group">
                  <label>JAM KERJA ALAT 4</label>
                  <input value="<?php  echo $d['alat4']; ?>" type="number" name="alat4" class="form-control" placeholder="<?php  echo $d['alat4']; ?>" required>
                </div>
                <div class="form-group">
                  <label>JAM KERJA ALAT 5</label>
                  <input value="<?php  echo $d['alat5']; ?>" type="number" name="alat5" class="form-control" placeholder="<?php  echo $d['alat5']; ?>" required>
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