<div class="content-wrapper">
    <section class="content-header">
        <h1>Daftar Sales Order</h1>
        <a href="<?php echo base_url('salesorder/tambah'); ?>" class="btn btn-primary mb-3">Tambah Sales Order</a>
        <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
        <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
        <?php endif; ?>
    </section>

    <section class="content">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode SO</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Sales</th>
                    <th>Status</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($orders)): ?>
                    <?php foreach ($orders as $so): ?>
                        <tr>
                            <td><?= htmlspecialchars($so['kode_so']) ?></td>
                            <td><?= htmlspecialchars($so['tanggal']) ?></td>
                            <td><?= htmlspecialchars($so['nama_pelanggan']) ?></td>
                            <td><?= htmlspecialchars($so['nama_sales']) ?></td>
                            <td><?= ucfirst($so['status']) ?></td>
                            <td>Rp <?= number_format($so['total_harga'], 0, ',', '.') ?></td>
                            <td>
                                <a href="<?= base_url('salesorder/edit/'.$so['idso']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?= base_url('salesorder/delete/'.$so['idso']) ?>" onclick="return confirm('Yakin hapus sales order ini?')" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="7" class="text-center">Tidak ada data sales order</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </section>
</div>