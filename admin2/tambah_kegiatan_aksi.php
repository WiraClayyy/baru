<?php   
   // if (isset($_POST['simpan'])) {


    echo $nama=$_POST['nama'];
    echo $tanggal=$_POST['tanggal'];
    echo $total=$_POST['total'];
    echo $dom=$_POST['dom'];
    echo $ni=$_POST['ni'];
    echo $hauling=$_POST['hauling'];
    echo $solar=$_POST['solar'];
    echo $retase=$_POST['retase'];
    echo $pj=$_POST['pj'];
    echo $alat1=$_POST['alat1'];
    echo $alat2=$_POST['alat2'];
    echo $alat3=$_POST['alat3'];
    echo $alat4=$_POST['alat4'];
    echo $alat5=$_POST['alat5'];
    
        //Include file koneksi, untuk koneksikan ke database
        include 'koneksi.php';
        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $ekstensi_diperbolehkan = array('png','jpg');
            $gambar1 = $_FILES['gambar1']['name'];
            $gambar2 = $_FILES['gambar2']['name'];
            $gambar3 = $_FILES['gambar3']['name'];
            $x1 = explode('.', $gambar1);
            $x2 = explode('.', $gambar2);
            $x3 = explode('.', $gambar3);
            $ekstensi1 = strtolower(end($x1));
            $ekstensi2 = strtolower(end($x2));
            $ekstensi3 = strtolower(end($x3 ));
            $file_tmp1 = $_FILES['gambar1']['tmp_name'];
            $file_tmp2 = $_FILES['gambar2']['tmp_name'];
            $file_tmp3 = $_FILES['gambar3']['tmp_name'];

            if (!empty($gambar1&&$gambar2&&$gambar3)){
                if (in_array($ekstensi1 && $ekstensi2 && $ekstensi3, $ekstensi_diperbolehkan) === true){
    
                    //Mengupload gambar
                    move_uploaded_file($file_tmp1, '../gambar/'.$gambar1);
                    move_uploaded_file($file_tmp2, '../gambar/'.$gambar2);
                    move_uploaded_file($file_tmp3, '../gambar/'.$gambar3);

                    $sql="insert into kegiatan values ('','$nama','$tanggal','$total','$dom','$ni','$hauling','$solar','$retase','$pj','$alat1','$alat2','$alat3','$alat4','$alat5','$gambar1','$gambar2','$gambar3')";

                    $simpan_bank=mysqli_query($koneksi,$sql);

                    if ($simpan_bank) {
                        header("Location:index.php?page=data&add=berhasil");
                    }
                    else {
                        header("Location:index.php?page=data&add=gagal");
                    }
                    
                }
            }else {
                $gambar="bank_default.png";
            }
        }

    // }
 ?>