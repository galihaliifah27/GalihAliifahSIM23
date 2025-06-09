<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1 id="page-title">Tambah Pelanggan</h1> 
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header"><h3 class="card-title">Form Tambah Pelanggan</h3></div>
            <div class="card-body">
                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                <form action="<?= base_url('pelanggan/insert'); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Pelanggan</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telepon</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="no_telp" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </section>
</div>