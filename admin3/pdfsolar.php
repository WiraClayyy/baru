<?php
include 'koneksi.php';
?>

<!-- Content Wrapper. Contains page content -->

    <h1 align="center">
    DATA STOK SOLAR
    </h1>

          <table border="1" id="example1" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-info">
                  <th> Sisa Solar</th>
                  <th> Total Solar Masuk</th>
                  <th> Total Solar Keluar</th>
                </tr>
                <?php
              $no = 1;
              $masuk=0;
              $keluar=0;
              $desa = mysqli_query($koneksi,"SELECT * FROM solar");
              while($d = mysqli_fetch_array($desa)){
              $masuk+=$d['total'];
              }
              $desa = mysqli_query($koneksi,"SELECT * FROM kegiatan");
              while($d = mysqli_fetch_array($desa)){
              $keluar+=($d['solar']*32);
              }
              ?>
                <tr role="row" class="odd">

                                    <td align="center"><?php   echo $masuk-$keluar; ?></td>
                                    <td align="center"><?php   echo $masuk; ?></td>
                                    <td align="center"><?php echo $keluar    ?></td>
               </tr>                   
              </thead>
              </table>
              
  <!-- Main content -->

      
          <table border="1" id="example1" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-info">
                 <th>No</th>
                 
                  <th> Tanggal Solar Masuk</th>
                  <th> Total Solar Masuk</th>
                 
                </tr>
                <tr role="row" class="odd">
                  <?php
              $no = 1;
              $desa = mysqli_query($koneksi,"SELECT * FROM solar");
              while($d = mysqli_fetch_array($desa)){
              ?>
              <tr>
                <td align="center"><?php echo $no++ ?></td>
                <td align="center"><?php echo $d['tanggal']; ?></td>
                <td align="center"><?php echo $d['total']." Liter"; ?></td>
         

                                   <p></p>
                                     
                                              
                                                    </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                        <a href="hapus_solar.php?id=<?php echo $d['id'];   ?>" class="btn btn-danger btn-l" onclick="confirmation(event)"><i class="fa fa-trash-o"></i></a> 
                                      </div> 
                                    </td>
                                    <?php   } ?>
              </thead>
            </table>
          
<script type="text/javascript">
    window.print();
  </script>