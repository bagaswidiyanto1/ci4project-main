<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Kategori</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <?= form_open_multipart(base_url('kategori/update/' . $kategori['ID'])); ?>
        <input type="hidden" name="gambarLama" value="<?= $kategori['foto']; ?>" />

        <div class="card-body">
            <div class="form-group">
                <label>Kategori</label>
                <input name="nama" value="<?= $kategori['nama']; ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input name="deskripsi" value="<?= $kategori['deskripsi']; ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <img src="<?= base_url('upload/' . $kategori['foto']); ?>" width="100px" height="100px" alt=""><br><br>
                <input type="file" name="foto" class="form-control">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        <?= form_close(); ?>
    </div>
</div>
<!-- /.card -->