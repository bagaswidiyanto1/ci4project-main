<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= base_url('user/update/' . $user['id_user']); ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input name="nama" value="<?= $user['nama']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" value="<?= $user['username']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?= $user['password']; ?>" required>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
<!-- /.card -->