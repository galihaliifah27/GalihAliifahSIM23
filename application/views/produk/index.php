<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 id="page-title">Daftar Produk</h1> <!-- Tambahkan id untuk judul -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Produk</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Produk</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <a href="<?= base_url('produk/tambah'); ?>" class="btn btn-primary mb-3">Tambah Produk</a>
                
                <?php if (!empty($produk)): ?>
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode Produk</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($produk as $p): ?>
                                <tr>
                                    <td><?= $p['kode_produk']; ?></td>
                                    <td><?= $p['nama_produk']; ?></td>
                                    <td>Rp <?= number_format($p['harga'], 0, ',', '.'); ?></td>
                                    <td><?= $p['stok']; ?></td>
                                    <td>
                                        <a href="<?= base_url('produk/edit/' . $p['idproduk']); ?>" class="btn btn-sm btn-info">Edit</a>
                                        <a href="<?= base_url('produk/hapus/' . $p['idproduk']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>Tidak ada produk yang tersedia.</p>
                <?php endif; ?>
            </div>

            <div class="card-footer">
            </div>
        </div>
    </section>
</div>


       