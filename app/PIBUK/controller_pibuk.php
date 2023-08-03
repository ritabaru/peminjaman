<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database); 

$act = $_GET['act'];

if($act == 'input'){ 
$no_buku = $_POST['no_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];

$query = $db->query("INSERT INTO pinjam_buku (no_buku, judul, pengarang, thn_terbit, penerbit)
                    VALUES ('$no_buku', '$judul', '$pengarang', '$thn_terbit', '$penerbit')");
if($query){
    echo "<script>
        alert('Data sukses disimpan');
        window.location.href='list_PIBUK.php';
    </script>";
}
else{
    echo "<script>
    alert('Data gagal disimpan')
    window.location.href='form_PIBUK.php';
    </script>";
}

}
else if($act == 'edit'){
    $no_buku_old = $_POST['no_buku_old'];
    $no_buku = $_POST['no_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $thn_terbit = $_POST['thn_terbit'];
    $penerbit = $_POST['penerbit'];
    $password = $_POST['password'];

    if (!empty($password)){
        $password_fix = sha1($password);
        $query = $db->query("UPDATE pinjam_buku SET no_buku = '$no_buku',
                                        judul = '$judul',
                                        pengarang = '$pengarang',
                                        thn_terbit = '$thn_terbit',
                                        penerbit = '$penerbit',
                                        password = '$password_fix'
                                    WHERE no_buku='$no_buku_old'");
    } else {
        $query = $db->query("UPDATE pinjam_buku SET no_buku = '$no_buku',
                                        judul = '$judul',
                                        pengarang = '$pengarang',
                                        thn_terbit = '$thn_terbit',
                                        penerbit = '$penerbit'
                                    WHERE no_buku='$no_buku_old'");
    }

    if($query){
        echo "<script>
            alert('Data sukses ubah');
            window.location.href='list_PIBUK.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Data gagal ubah')
        window.location.href='list_PIBUK.php';
        </script>";
    }
    
} else if($act == 'hapus'){
    $no_buku = $_GET['no_buku'];
    $query = $db->query("DELETE FROM pinjam_buku WHERE no_buku = '$no_buku'");
    if($query){
        echo "<script>
            alert('Data sukses dihapus');
            window.location.href='list_PIBUK.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Data gagal dihapus')
        window.location.href='list_PIBUK.php';
        </script>";
    }
}
else{
    echo "<script>
        alert('Maaf, parameter Anda tidak valid');
        window.location.href='list_PIBUK.php';
    </script>";
}
