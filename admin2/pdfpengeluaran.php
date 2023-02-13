<?php
include 'koneksi.php';
?>

    <h1>
    DATA LAPORAN PENGELUARAN
    </h1>
  
          <table border="1" id="example1" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-info">
                  <th width="5%">No</th>
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
                <td align="center"><?php echo $no++ ?></td>
                <td align="center"><?php echo $d['keterangan']; ?></td>
                <td align="center"><?php echo $d['tanggal']; ?></td>
                <td align="center"><?php echo $d['jumlah']; ?></td>
                <td align="center"><?php echo $d['harga']; ?></td>
                <td align="center"><?php echo $d['jumlah']*$d['harga']; ?></td>
                <td align="center"><img width="100%" height="100%" src="../gambar/<?php echo$d['gambar1']; ?>">
                  <img width="100%" height="100%" src="../gambar/<?php echo$d['gambar2']; ?>">
                  <img width="100%" height="100%" src="../gambar/<?php echo$d['gambar3']; ?>"></td>
                                 
                                        <!-- body modal -->
                                         
    
                                                 
                                  <?php   } ?>
              </tr>
              </thead>
            </table>
          <script type="text/javascript">
    window.print();
  </script>