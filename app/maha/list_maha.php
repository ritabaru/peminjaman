<div class="card">
            <div class="card-header">
            Data Mahasiswa
            </div>
        <div class="card-body"> 
        <a class="btn btn-primary btn-sm" href="<?php echo base_url() . 'index.php?page=maha&act=input'; ?>">
    <i class="fa-solid fa-circle-plus"></i> 
    Tambah Data
    </a>
    <?php
    $query = $db->query("SELECT * FROM mahasiswa");
    ?>
<table class="table table-striped">
        <thead>
    <tr>
                <th>No</th>
                <th>Id Mahasiswa</th>
                <th>Nama mahasiswa</th>
                <th>NPM</th>
                <th>Alamat</th>
                <th>Act</th>
            </tr>
        </thead>
     <tbody>
        <?php
        $no = 1;
        while($row = $query->fetch_array()){
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row ['id_mahasiswa']; ?></td>
                    <td><?php echo $row ['nama_mahasiswa']; ?></td>
                    <td><?php echo $row ['NPM']; ?></td>
                    <td><?php echo $row ['alamat']; ?></td>
                    <td><a class="btn btn-outline-success btn_sm" href="form_maha.php?act=edit&id_mahasiswa=<?php echo $row['id_mahasiswa'];?>"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a class="btn btn-outline-danger btn-sm" href="controller_maha.php?act=hapus&id_mahasiswa=<?php echo $row['id_mahasiswa'];?>"><i class="fa-solid fa-trash-can"></i></a></td>
                </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    </div>
</div>