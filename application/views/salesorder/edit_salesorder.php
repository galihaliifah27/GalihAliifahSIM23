<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Sales Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Edit Sales Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Edit Sales Order</h3>
            </div>

            <div class="card-body">
                <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>

                <form action="<?= base_url('sales/update/' . $sales['idsales']); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama_sales">Nama Sales</label>
                        <input type="text" class="form-control" name="nama_sales" id="nama_sales"
                               value="<?= htmlspecialchars($sales['nama_sales'], ENT_QUOTES, 'UTF-8'); ?>" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?= base_url('sales'); ?>" class="btn btn-secondary">Batal</a>
                        <!-- Tombol hapus -->
                        <a href="<?= base_url('sales/delete/' . $sales['idsales']); ?>" 
                           class="btn btn-danger float-right"
                           onclick="return confirm('Yakin ingin menghapus data ini?');">
                            Hapus
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
