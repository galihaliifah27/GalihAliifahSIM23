<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Status</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
              <li class="breadcrumb-item active">Status</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Update Status</h3>
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
          <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
          <?php endif; ?>
          <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
          <?php endif; ?>

          <form action="<?= base_url('statusorder/update/' . $status_order['idstatus']); ?>" method="POST">
            <div class="form-group">
              <label for="status">Status</label>
              <input 
                type="text" 
                class="form-control" 
                id="status" 
                name="status" 
                value="<?= set_value('status', $status_order['status']); ?>" 
                placeholder="Status" 
                required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('statusorder'); ?>" class="btn btn-secondary">Batal</a>
          </form>
        </div>

        <div class="card-footer">
        </div>
      </div>
    </section>
</div>