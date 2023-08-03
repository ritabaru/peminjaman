<?php
require "../../config/config_database.php"; 
$db = koneksi(hostname, username, password, database);

$act = isset($_GET['act']) ? $_GET['act'] : false;
$kode = isset($_GET['no_buku']) ? $_GET['no_buku'] : false;

if($act == 'edit'){
    $url = "controller_PIBUK.php?act=edit";
    if($kode){
        $query = $db->query("SELECT * FROM pinjam_buku WHERE no_buku = '$kode'");
        $row = $query->fetch_array();
        
    }
    else{
        echo "<script>
        alert('Parameter kode PIBUK tidak valid');
        window.location.href='list_PIBUK.php';
    </script>";
    }
}
else {
    $url = "controller_PIBUK.php?act=input";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PIBUK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Input Data Pinjam Buku
        </div>
        <div class="card-body">
        <form action="<?php echo $url; ?>" method="post">
    <input type="hidden" name="no_buku_old" id="no_buku_old" value="<?php echo isset($row) ? $row['no_buku'] : '';?>">
        <div class="mb-3">
            <label for="no_buku">No Buku</label>
            <input type="text" class="form-control" name="no_buku" id="no_buku" value="<?php echo isset($row) ? $row['no_buku'] : '';?>">
        </div>  
        <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" value="<?php echo isset($row) ? $row['judul'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="pengarang">Pengarang</label>
            <input type="text" class="form-control" name="pengarang" id="pengarang" value="<?php echo isset($row) ? $row['pengarang'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="penerbit">Thn_Terbit</label>
            <input type="text" class="form-control" name="thn_terbit" id="thn_terbit" value="<?php echo isset($row) ? $row['thn_terbit'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="penerbit">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?php echo isset($row) ? $row['penerbit'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input class="form-control" class="form-control" type="password" name="password" id="password">
        </div>
        <div class="mb-3">
            <a class="btn btn-danger btn-sm float-start" href="list_pibuk.php">
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
   


    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    

    <!-- fontawesome -->
    <script scr="../../assets/fontawesome/js/all.min.js"></script>
</body>
</html>