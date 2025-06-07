<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1>Tambah Produk</h1>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header"><h3 class="card-title">Form Tambah Produk</h3></div>
            <div class="card-body">
                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                <form action="<?= base_url('produk/insert'); ?>" method="POST">
                    <div class="form-group">
                        <label for="kode_produk">Kode Produk</label>
                        <input type="text" name="kode_produk" id="kode_produk" class="form-control" placeholder="Contoh: PRD001" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Contoh: TV Samsung 40 inch" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control" placeholder="Contoh: 2500000" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" id="stok" class="form-control" placeholder="Jumlah stok tersedia" min="0" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </section>
</div>