<div class="col-sm-12">
    <a href="<?= base_url('user/tambah'); ?>" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Tipe Konten</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($konten as $key => $value) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['nama']; ?></td>
                    <td><?= $value['nama_kategori']; ?></td>
                    <td><?= $value['tipe_konten']; ?></td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger" onclick="return confirm('Apakah ingin hapus data ? ')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>