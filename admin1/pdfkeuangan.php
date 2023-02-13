<?php
include 'koneksi.php';
?>

    <h1>
    DATA KEUANGAN PERUSAHAAN
    </h1>

          <table border="1" id="example1" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-info">
                  <th> Sisa Dana</th>
                  <th> Total Dana Masuk</th>
                  <th> Total Dana Keluar</th>
                </tr>
                <tr role="row" class="odd">
                   <?php
              $no = 1;
              $danamasuk=0;
              $danakeluar=0;
              $desa = mysqli_query($koneksi,"SELECT * FROM keuangan");
              while($d = mysqli_fetch_array($desa)){
                $danamasuk+=$d['total'];
              }
              $desa = mysqli_query($koneksi,"SELECT * FROM pengeluaran");
              while($d = mysqli_fetch_array($desa)){
                 $danakeluar+=($d['jumlah']*$d['harga']);
              }
                ?>
                                    <td><?php   echo $danamasuk-$danakeluar; ?></td>
                                    <td><?php   echo $danamasuk; ?></td>
                                    <td><?php   echo $danakeluar; ?></td>
               </tr>                   
              </thead>
              </table>
<p></p>
          <table border="1" id="example1" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-info">
                  <th class="float-center" width="5%">
                    No
                  </th>
                  <th> Tanggal Dana Masuk</th>
                  <th> Total Dana Masuk</th>
                  <th> Dokumentasi</th>
                </tr>
                <tr role="row" class="odd">
                  <?php
              $no = 1;
              $desa = mysqli_query($koneksi,"SELECT * FROM keuangan");
              while($d = mysqli_fetch_array($desa)){
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['tanggal']; ?></td>
                <td><?php echo $d['total']; ?></td>
                                    
                                     <td><img height="100%" width="100%" src="../gambar/<?php echo $d['gambar1']; ?>">
                <img height="100%" width="100%" src="../gambar/<?php echo $d['gambar2']; ?>">
              <img height="100%" width="100%" src="../gambar/<?php echo $d['gambar3']; ?>"></td>
              
                                  <?php   } ?>
             <script type="text/javascript">
    window.print();
  </script>