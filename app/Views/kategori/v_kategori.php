<div class="col-sm-12">
    <a href="<?= base_url('kategori/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
    <br><br>

    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Photo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($kategori as $key => $value) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['nama']; ?></td>
                    <td><?= $value['deskripsi']; ?></td>
                    <td>
                        <img src="<?= base_url('upload/' . $value['foto']); ?>" width="50px" height="50px" alt="">
                    </td>
                    <td>
                        <a href="<?= base_url('kategori/edit/' . $value['ID']); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('kategori/delete/' . $value['ID'] . '/' . $value['foto']); ?>" class="btn btn-danger" onclick="return confirm('Apakah ingin hapus data ? ')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>