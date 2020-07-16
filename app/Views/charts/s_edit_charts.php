<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">


  <div class="row">
    <div class="col-sm-7">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Charts </h3>
        </div>
        <div class="card-body">

          <canvas id="myChart"></canvas>

        </div>

      </div><!-- /.card -->
    </div><!-- /.col -->
    <!-- </div> -->

    <div class="col-sm-5">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"> <a href="<?= base_url('charts/edit/' . $chart['id']); ?>">Edit</a> </h3>
        </div>
        <div class="card-body">
          <?php
          $errors = session()->getFlashdata('errors');
          if (!empty($errors)) { ?>
            <div class="alert alert-danger">
              !!! Ada kesalahan input data yaitu :
              <ol>
                <?php foreach ($errors as $key => $error) { ?>
                  <li class="text text-sm"><?= esc($error) ?></li>
                <?php } ?>
              </ol>
            </div>
          <?php } ?>

          <?php echo form_open_multipart('charts/update/' . $chart['id']); ?>
          <?= csrf_field(); ?>
          <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control form-control-sm" id="tahun" name="tahun" value="<?= $chart['tahun']; ?>">
          </div>

          <div class="form-group">
            <label for="bulan">Bulan</label>
            <input type="text" class="form-control form-control-sm" id="bulan" name="bulan" value="<?= $chart['bulan']; ?>">
          </div>

          <div class="form-group">
            <label for="jumlah">jumlah</label>
            <input type="text" class="form-control form-control-sm" id="jumlah" name="jumlah" value="<?= $chart['jumlah']; ?>">
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <!-- </div> -->

          <?php echo form_close(); ?>

        </div><!-- /.card -->
      </div><!-- /.col -->
    </div>









</section>
<?= $this->endSection(); ?>