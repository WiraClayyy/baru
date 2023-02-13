<?php   
   // if (isset($_POST['simpan'])) {


    
    echo $tanggal=$_POST['tanggal'];
    echo $total=$_POST['total'];
    
    
        //Include file koneksi, untuk koneksikan ke database
        include 'koneksi.php';
        //Cek apakah ada kiriman form dari method post
       

          

                    $sql="insert into solar values ('','$tanggal','$total')";

                    $simpan_bank=mysqli_query($koneksi,$sql);

                    if ($simpan_bank) {
                        header("Location:index.php?page=solar&add=berhasil");
                    }
                    else {
                        header("Location:index.php?page=solar&add=gagal");
                    }
                
    // }
 ?>