<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 id="page-title">Daftar Sales Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sales Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Sales Order</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"><i class="fas fa-times"></i></button>
                </div>
            </div>

            <div class="card-body">
                <a href="<?= base_url('salesorder/tambah'); ?>" class="btn btn-primary mb-3">Tambah Sales Order</a>

                <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
                <?php elseif($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                <?php endif; ?>

                <?php if (!empty($orders)): ?>
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode Order</th>
                                <th>Tanggal</th>
                                <th>Pelanggan</th>
                                <th>Sales</th>
                                <th>Status</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $so): ?>
                                <tr>
                                    <td><?= htmlspecialchars($so['kode_so']) ?></td>
                                    <td><?= htmlspecialchars($so['tanggal']) ?></td>
                                    <td><?= htmlspecialchars($so['nama_pelanggan']) ?></td>
                                    <td><?= htmlspecialchars($so['nama_sales']) ?></td>
                                    <td><?= ucfirst($so['status']) ?></td>
                                    <td>Rp <?= number_format($so['total_harga'], 0, ',', '.') ?></td>
                                    <td>
    <a href="<?= base_url('salesorder/edit/'.$so['idso']) ?>" class="btn btn-sm btn-info">Edit</a>
    <a href="<?= base_url('salesorder/edit_status/'.$so['idso']) ?>" class="btn btn-sm btn-warning">Edit Status</a>
    <a href="<?= base_url('salesorder/delete/'.$so['idso']) ?>" onclick="return confirm('Yakin hapus sales order ini?')" class="btn btn-sm btn-danger">Hapus</a>
</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>Tidak ada data sales order yang tersedia.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>