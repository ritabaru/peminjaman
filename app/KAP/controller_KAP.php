<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database); 

$act = $_GET['act'];

if($act == 'input'){ 
$id_mahasiswa = $_POST['id_mahasiswa'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$NPM = $_POST['NPM'];
$alamat = $_POST['alamat'];

$query = $db->query("INSERT INTO KAP (id_mahasiswa, nama_mahasiswa, NPM, alamat)
                    VALUES ('$id_mahasiswa', '$nama_mahasiswa', '$NPM', '$alamat')");
if($query){
    echo "<script>
        alert('Data sukses disimpan');
        window.location.href='list_KAP.php';
    </script>";
}
else{
    echo "<script>
    alert('Data gagal disimpan')
    window.location.href='form_KAP.php';
    </script>";
}

}
else if($act == 'edit'){
    $id_mahasiswa_old = $_POST['id_mahasiswa_old'];
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $NPM = $_POST['NPM'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];

    if (!empty($password)){
        $password_fix = sha1($password);
        $query = $db->query("UPDATE KAP SET id_mahasiswa = '$id_mahasiswa',
                                        nama_mahasiswa = '$nama_mahasiswa',
                                        NPM = '$NPM',
                                        alamat = '$alamat',
                                        password = '$password_fix'
                                    WHERE id_mahasiswa='$id_mahasiswa_old'");
    } else {
        $query = $db->query("UPDATE KAP SET id_mahasiswa = '$id_mahasiswa',
                                        nama_mahasiswa = '$nama_mahasiswa',
                                        NPM = '$NPM',
                                        alamat = '$alamat'
                                    WHERE id_mahasiswa='$id_mahasiswa_old'");
    }

    if($query){
        echo "<script>
            alert('Data sukses ubah');
            window.location.href='list_KAP.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Data gagal ubah')
        window.location.href='list_KAP.php';
        </script>";
    }
    
} else if($act == 'hapus'){
    $id_mahasiswa = $_GET['id_mahasiswa'];
    $query = $db->query("DELETE FROM KAP WHERE id_mahasiswa = '$id_mahasiswa'");
    if($query){
        echo "<script>
            alert('Data sukses dihapus');
            window.location.href='list_KAP.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Data gagal dihapus')
        window.location.href='list_KAP.php';
        </script>";
    }
}
else{
    echo "<script>
        alert('Maaf, parameter Anda tidak valid');
        window.location.href='list_KAP.php';
    </script>";
}
