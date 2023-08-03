        <div class="card">
            <div class="card-header">
            Data Pinjam Buku
        </div>
    <div class="card-body"> 
        <a class="btn btn-primary btn-sm" href="<?php echo base_url() . 'index.php?page=pibuk&act=input'; ?>">
            <i class="fa-solid fa-circle-plus"></i> 
            Tambah Data
        </a>
        <?php
        $query = $db->query("SELECT * FROM pinjam_buku");
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Buku</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Thn Terbit</th>
                    <th>Penerbit</th>
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
                    <td><?php echo $row ['no_buku']; ?></td>
                    <td><?php echo $row ['judul']; ?></td>
                    <td><?php echo $row ['pengarang']; ?></td>
                    <td><?php echo $row ['thn_terbit']; ?></td>
                    <td><?php echo $row ['penerbit']; ?></td>
                    <td><a class="btn btn-outline-success btn_sm" href="form_pibuk.php?act=edit&no_buku=<?php echo $row['no_buku'];?>"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a class="btn btn-outline-danger btn-sm" href="controller_pibuk.php?act=hapus&no_buku=<?php echo $row['no_buku'];?>"><i class="fa-solid fa-trash-can"></i></a></td>
                </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    </div>
</div> 