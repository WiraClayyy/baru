<?php   
   // if (isset($_POST['simpan'])) {


    
    echo $id=$_POST['id'];
    echo $tanggal=$_POST['tanggal'];
    echo $total=$_POST['total'];
    
    
        //Include file koneksi, untuk koneksikan ke database
        include 'koneksi.php';
        //Cek apakah ada kiriman form dari method post
       

          $sql="UPDATE solar SET tanggal='$tanggal', total='$total' WHERE id='$id'";

                    

                    $simpan_bank=mysqli_query($koneksi,$sql);

                    if ($simpan_bank) {
                        header("Location:index.php?page=solar&add=berhasil");
                    }
                    else {
                        header("Location:index.php?page=solar&add=gagal");
                    }
                
    // }
 ?>