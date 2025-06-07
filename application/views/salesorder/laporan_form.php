<div class="content-wrapper">
  <section class="content-header">
    <h1 id="page-title">Laporan Sales Order</h1>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-body">
        <form method="POST" action="<?= base_url('salesorder/cetak_laporan') ?>">
          <div class="form-group">
            <label>Dari Tanggal:</label>
            <input type="date" name="tanggal_dari" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Sampai Tanggal:</label>
            <input type="date" name="tanggal_sampai" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary">Tampilkan Laporan</button>
        </form>
      </div>
    </div>
  </section>
</div>