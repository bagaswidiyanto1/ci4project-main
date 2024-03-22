<div class="col-sm-12">
    <a href="<?= base_url('user/tambah'); ?>" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($user as $key => $value) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['nama']; ?></td>
                    <td><?= $value['username']; ?></td>
                    <td>
                        <a href="<?= base_url('user/edit/' . $value['id_user']); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('user/delete/' . $value['id_user']); ?>" class="btn btn-danger" onclick="return confirm('Apakah ingin hapus data ? ')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>