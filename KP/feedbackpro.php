<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau belum
if (isset($_POST['send'])) {
    // ambil data dari formulir
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    $date = date('Y-m-d');

    // buat query
    $sql = "INSERT INTO `feedback`(`date`,`Nama`, `Email`, `Message`) VALUES ('$date','$nama','$email','$message')";
    
    // eksekusi query
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // jika berhasil, alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // jika gagal, alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
