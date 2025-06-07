<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar Status</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Status Order</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">List Status</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>

      <div class="card-body">
        <a href="<?= base_url('statusorder/tambah');?>" class="btn btn-primary mb-3">Tambah Status</a>
        
        <?php if (!empty($status_order)): ?>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($status_order as $s): ?>
                <tr>
                  <td><?= $s['status']; ?></td>
                  <td>
                    <a href="<?= base_url('statusorder/edit/'. $s['idstatus']); ?>" class="btn btn-sm btn-info">Edit</a>
                    <a href="<?= base_url('statusorder/hapus/'. $s['idstatus']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
          <p>Tidak ada status yang tersedia.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
</div>