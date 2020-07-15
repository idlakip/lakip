<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">


  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><a href="<?= base_url('kantor/add'); ?>" class="btn btn-sm btn-primary">Add <?= $title; ?></a></h3>
        </div>

        <div class="card-body">
          <?php

          if (!empty(session()->getFlashdata('success'))) { ?>
            <div class="alert alert-success">
              <?php echo session()->getFlashdata('success'); ?>
            </div>
          <?php }; ?>
          <?= csrf_field(); ?>
          <table id="DTable1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th> No.</th>
                <th>Nama Kantor</th>
                <th>Telephone</th>
                <th>Alamat</th>
                <th>Description</th>
                <th>Foto</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($kantor as $key => $value) { ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $value['nama_kantor']; ?></td>
                  <td><?= $value['no_telp']; ?></td>
                  <td><?= $value['alamat']; ?></td>
                  <td><?= $value['description']; ?></td>
                  <td>
                    <img src=" <?= base_url('foto/' . $value['photo']); ?>" class="photo">
                  </td>
                  <td>
                    <a href="<?= base_url('kantor/edit/' . $value['id_kantor']); ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i>Edit</a>
                    <a href="<?= base_url('kantor/delete/' . $value['id_kantor']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah yakin ingin hapus???')"><i class="fas fa-trash-alt"></i>Hapus</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
            <tfoot>
              <tr>
                <th> No.</th>
                <th>Nama Kantor</th>
                <th>Telephone</th>
                <th>Alamat</th>
                <th>Description</th>
                <th>Foto</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->




</section>
<?= $this->endSection(); ?>