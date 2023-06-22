<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database);

$kd_prodi = $_POST['kd_prodi'];
$nama_prodi = $_POST['nama_prodi'];
$kd_fakultas = $_POST['kd_fakultas'];
$password = sha1($_POST['password']);

$query = $db->query("INSERT INTO prodi (kd_prodi, nama_prodi, kd_fakultas, password)
                VALUES ('$kd_prodi','$nama_prodi','$kd_fakultas','$password')");

if($query) {
    echo "<script>
        alert('Data sukses disimpan');
        window.location.href='list_prodi.php';
    </script>'";
}
else {
    echo "<script>
        alert('Data sukses disimpan');
        window.location.href='list_prodi.php';
    </script>'";
}