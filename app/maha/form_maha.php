<?php

$act = isset($_GET['act']) ? $_GET['act'] : false;
$kode = isset($_GET['id_mahasiswa']) ? $_GET['id_mahasiswa'] : false;

if($act == 'edit'){
    $url = base_url() . "index.php?page=maha&act=update";
    if($kode){
        $query = $db->query("SELECT * FROM mahasiswa WHERE id_mahasiswa = '$kode'");
        $row = $query->fetch_array();
        
    }
    else{
        echo "<script>
        alert('Parameter kode maha tidak valid');
        window.location.href='list_maha.php';
    </script>";
    }
} else {
    $url = base_url() . "index.php?page=maha&act=save";
}
?>
        <div class="card">
            <div class="card-header">
                Input Data Mahasiswa
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
            <button  class="btn btn-danger btn-sm float-start" onclick="history.back()">
                <i class="fa-solid fa-chevron-left"></i> 
                Kembali 
            </button>
            <button class="btn btn-primary btn-sm float-end" type="submit">
                <i class="fa-regular fa-floppy-disk"></i>
                Simpan Data
            </button>
        </div>
    </form>
 </div>
</div>
    

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@5.3.0/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    

    <!-- fontawesome -->
    <script scr="../../assets/fontawesome/js/all.min.js"></script>
</body>
</html>