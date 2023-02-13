<?php 
// mengaktifkan session php
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman ke halaman login
echo "<script>
    alert('Logout berhasil');
    document.location.href='index.php';
    </script>";
?>