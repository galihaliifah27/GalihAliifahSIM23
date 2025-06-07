<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.0.5
  </div>
  <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- JS Libraries -->
<script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/jquery-ui.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/chart.js/chart.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/sparklines/sparkline.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>

<script src="<?= base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>

<!-- AdminLTE -->
<script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/dist/js/demo.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/dist/js/pages/dashboard.js') ?>"></script>

<script>
  $(document).ready(function() {
    // Ambil judul halaman dari elemen dengan id page-title
    const exportTitle = $('#page-title').length ? $('#page-title').text().replace(/\s+/g, '_') : 'Data_Export';

    const table = $('#datatable').DataTable({
      responsive: true,
      lengthChange: true,
      autoWidth: false,
      dom: 'Bfrtip',
      buttons: [
        {
          extend: 'excelHtml5',
          className: 'btn btn-success btn-sm',
          title: exportTitle
        },
        {
          extend: 'pdfHtml5',
          className: 'btn btn-danger btn-sm',
          title: exportTitle,
          orientation: 'landscape',
          pageSize: 'A4'
        },
        {
          extend: 'print',
          className: 'btn btn-info btn-sm',
          title: exportTitle
        }
      ]
    });

    table.buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');

    $('.summernote').summernote({
      height: 300,
      toolbar:[
        ['style',['style']],
        ['font', ['bold','underline','italic','clear']],
        ['color',['color']],
        ['para',['ul','ol','paragraph']],
        ['table',['table']],
        ['insert',['link','picture','video']],
        ['view',['fullscreen','codeview','help']]
      ],
      callbacks: {
        onImageUpload: function (files){
          for (let i = 0; i < files.length; i++){
            uploadSummernoteImage(files[i]);
          }
        }
      }
    });

    function uploadSummernoteImage(file) {
      let data = new FormData();
      data.append('image', file);
      
      $.ajax({
        url: '<?= base_url('berita/upload_summernote_image'); ?>',
        type: 'POST',
        data: data,
        contentType: false,
        cache: false,
        processData: false,
        success: function(response) {
          try {
            let imageUrl = JSON.parse(response).url;
            $('.summernote').summernote('insertImage', imageUrl);
          } catch (e) {
            console.error('Error parsing JSON response:', e);
            console.log('Raw response:', response);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error('textStatus, errorThrown');
        }
      });
    }
  });
</script>
</body>
</html>