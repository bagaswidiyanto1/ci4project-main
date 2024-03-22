<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <!-- Jika upload berhasil -->
        <?php if (!empty(session()->getFlashdata('success'))) { ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php } ?>
        <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <?= form_open_multipart(base_url('kategori/save')); ?>
        <div class="card-body">
            <div class="form-group">
                <label>Kategori</label>
                <input name="nama" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input name="deskripsi" class="form-control" placeholder="Deskripsi" required>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?= form_close(); ?>
        <!-- END form start -->
    </div>
</div>
<!-- /.card -->