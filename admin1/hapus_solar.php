<?php 	
include 'koneksi.php';
echo $id=$_GET['id'];

mysqli_query($koneksi,"delete from solar where id=$id");
//  
// // mengalihkan halaman kembali ke index.php
header("location: index.php?page=solar");
 ?>