<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">




  <div class="panel panel-default">
    <div class="panel-heading">
      DataTables <a href="" class="btn btn-sm btn-primary">Tambah</a>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="table_id">
          <thead>
            <thead>
              <tr>
                <th> No.</th>
                <th>Nama Kantor</th>
                <th>Telephone</th>
                <th>Alamat</th>
                <th>Photo</th>
              </tr>
            </thead>
          <tbody>
            <?php $no = 1;
            foreach ($kantor as $key => $value) { ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $value['ket']; ?></td>
                <td><?= $value['gambar']; ?></td>
                <td><?= $value['csrf_test_name']; ?></td>
                <td>
                  <a href="" class="btn btn-sm btn-success">Edit</a>
                  <a href="" class="btn btn-sm btn-danger">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
      <div class="well">
        <h4>DataTables Usage Information</h4>
        <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
        <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
      </div>
    </div>
    <!-- /.panel-body -->
  </div>
  <!-- /.panel -->
  <!-- </div> -->
  <!-- /.col-lg-12 -->
  <!-- </div> -->



</section>
<?= $this->endSection(); ?>