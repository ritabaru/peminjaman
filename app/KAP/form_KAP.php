<?php

$act = isset($_GET['act']) ? $_GET['act'] : false;
$kode = isset($_GET['id_mahasiswa']) ? $_GET['id_mahasiswa'] : false;

if($act == 'edit'){
    $url = "controller_KAP.php?act=edit";
    if($kode){
        $query = $db->query("SELECT * FROM KAP WHERE id_mahasiswa = '$kode'");
        $row = $query->fetch_array();
        
    }
    else{
        echo "<script>
        alert('Parameter kode KAP tidak valid');
        window.location.href='list_KAP.php';
    </script>";
    }
}
else {
    $url = "controller_KAP.php?act=input";
}
?>
        <div class="card">
            <div class="card-header">
                Input Data KAP
        </div>
        <div class="card-body">
        <form action="<?php echo $url; ?>" method="post">
    <input type="hidden" name="id_mahasiswa_old" id="id_mahasiswa_old" value="<?php echo isset($row) ? $row['id_mahasiswa'] : '';?>">
        <div class="mb-3">
            <label for="id_mahasiswa">Id Mahasiswa</label>
            <input type="text" class="form-control" name="id_mahasiswa" id="id_mahasiswa" value="<?php echo isset($row) ? $row['id_mahasiswa'] : '';?>">
        </div> 
        <div class="mb-3">
            <label for="nama_mahasiswa">Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" value="<?php echo isset($row) ? $row['nama_mahasiswa'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="NPM">NPM</label>
            <input type="text" class="form-control" name="NPM" id="NPM" value="<?php echo isset($row) ? $row['NPM'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo isset($row) ? $row['alamat'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <div class="mb-3">
            <a class="btn btn-danger btn-sm float-start" href="list_KAP.php">
                <i class="fa-solid fa-chevron-left"></i> 
                Kembali
            </a>
            <button class="btn btn-primary btn-sm float-end" type="submit">
                <i class="fa-regular fa-floppy-disk"></i>
                Simpan Data
            </button>
        </div>
    </form>
 </div>
</div>

