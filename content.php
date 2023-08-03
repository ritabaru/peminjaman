<?php
if (!isset($_GET['page'])) {
    ?>
    <div class="card">
        <div class="card-header">
            Mahasiswa
        </div>
        <div class="card-body">
            <h5 class="card-title">Selamat datang di Peminjaman</h5>
            <p class="card-text">Silahkan klik menu di atas, untuk mengelola konten.</p>
        </div>
    </div>
<?php
} else {
    $page = $_GET['page'];
    $rootFolder = 'app/';
    $ext = ".php";
    if (!isset($_GET['act'])) {
        $end_point = '/list_';
        include $rootFolder . $page . $end_point . $page . $ext; // app/maha/list_maha.php
    }
    else {
        
    }
}