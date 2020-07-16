<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">
  <?php
  foreach ($chart as $key => $value) {
    $thn[] = $value['tahun'];
    $jml[] = $value['jumlah'];
    $bln[] = $value['bulan'];
  }; ?>

  <div class="row">
    <div class="col-sm-4">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Data Charts BAR</h3>
        </div>
        <div class="card-body">
          <canvas id="myChart"></canvas>

        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Data Charts PIE</h3>
        </div>
        <div class="card-body">
          <canvas id="myChart2"></canvas>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"> Data Charts LINE</h3>
        </div>
        <div class="card-body">
          <canvas id="myChart3"></canvas>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-5">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"> Tambah Data </h3>
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

          <?php echo form_open_multipart('charts/save'); ?>
          <?= csrf_field(); ?>
          <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control form-control-sm" id="tahun" name="tahun" autofocus value="<?= old('tahun'); ?>">
          </div>

          <div class="form-group">
            <label for="bulan">Bulan</label>
            <input type="text" class="form-control form-control-sm" id="bulan" name="bulan" value="<?= old('bulan'); ?>">
          </div>

          <div class="form-group">
            <label for="jumlah">jumlah</label>
            <input type="text" class="form-control form-control-sm" id="jumlah" name="jumlah" value="<?= old('jumlah'); ?>">
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <!-- </div> -->

          <?php echo form_close(); ?>

        </div><!-- /.card -->
      </div><!-- /.col -->
    </div>
    <!-- </div> -->


    <div class="col-sm-7">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">All Data Charts </h3>
        </div>
        <div class="card-body">
          <table id="DTable1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>Tahun</th>
                <th>Bulan</th>
                <th>Jumlah</th>
                <th>Aksi</th>

              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($chart as $key => $value) { ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $value['tahun']; ?></td>
                  <td><?= $value['bulan']; ?></td>
                  <td><?= $value['jumlah']; ?></td>
                  <td>
                    <a href="<?= base_url('charts/edit/' . $value['id']); ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i>Edit</a>
                    <a href="<?= base_url('charts/delete/' . $value['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah yakin ingin hapus???')"><i class="fas fa-trash-alt"></i>Hapus</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>



  <!-- </div> -->


  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'radar', // line, bar, pie, radar'circle'

      data: {
        // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        labels: <?php echo json_encode($thn); ?>,
        datasets: [{
          label: '# Dataset of Votes',
          data: <?php echo json_encode($jml); ?>,
          // data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.80)',
            'rgba(54, 162, 235, 0.80)',
            'rgba(255, 206, 86, 0.80)',
            'rgba(75, 192, 192, 0.80)',
            'rgba(153, 102, 255, 0.80)',
            'rgba(255, 255, 0, 0.80)',
            'rgba(127, 255, 212, 0.80)',
            'rgba(34, 139, 34, 0.80)',
            'rgba(0, 255, 127, 0.80)',
            'rgba(255, 159, 64, 0.80)',
            'rgba(107, 142, 35, 0.80)',
            'rgba(255, 140, 0, 0.80)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          // fill: false,
          // borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>


  <script>
    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie', // line, bar, pie, radar'circle'

      data: {
        // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        labels: <?php echo json_encode($thn); ?>,
        datasets: [{
          label: '# Dataset of Votes',
          data: <?php echo json_encode($jml); ?>,
          // data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.80)',
            'rgba(54, 162, 235, 0.80)',
            'rgba(255, 206, 86, 0.80)',
            'rgba(75, 192, 192, 0.80)',
            'rgba(153, 102, 255, 0.80)',
            'rgba(255, 255, 0, 0.80)',
            'rgba(127, 255, 212, 0.80)',
            'rgba(34, 139, 34, 0.80)',
            'rgba(0, 255, 127, 0.80)',
            'rgba(255, 159, 64, 0.80)',
            'rgba(107, 142, 35, 0.80)',
            'rgba(255, 140, 0, 0.80)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          // fill: false,
          // borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>

  <script>
    var ctx = document.getElementById('myChart3').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line', // line, bar, pie, radar'circle'

      data: {
        // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        labels: <?php echo json_encode($thn); ?>,
        datasets: [{
          label: '# Dataset of Votes',
          data: <?php echo json_encode($jml); ?>,
          // data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.80)',
            'rgba(54, 162, 235, 0.80)',
            'rgba(255, 206, 86, 0.80)',
            'rgba(75, 192, 192, 0.80)',
            'rgba(153, 102, 255, 0.80)',
            'rgba(255, 255, 0, 0.80)',
            'rgba(127, 255, 212, 0.80)',
            'rgba(34, 139, 34, 0.80)',
            'rgba(0, 255, 127, 0.80)',
            'rgba(255, 159, 64, 0.80)',
            'rgba(107, 142, 35, 0.80)',
            'rgba(255, 140, 0, 0.80)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          // fill: false,
          // borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>





</section>
<?= $this->endSection(); ?>