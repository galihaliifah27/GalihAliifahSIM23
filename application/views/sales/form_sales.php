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
                <form action="<?= base_url('sales/insert'); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama_sales">Nama Sales</label>
                        <input type="text" name="nama_sales" id="nama_sales" class="form-control" placeholder="Masukkan Nama" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </section>
</div>