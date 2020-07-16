<?php
foreach ($chart as $key => $value) {
  $thn[] = $value['tahun'];
  $jml[] = $value['jumlah'];
}; ?>

<div class="row">
  <div class="col">
    <div class="col-sm-10">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Charts <a href="<?= base_url('charts/add') ?>"> Data</a></h3>
        </div>
        <div class="card-body">
          <?php
          if (!empty(session()->getFlashdata('success'))) { ?>
            <div class="alert alert-success">
              <?php echo session()->getFlashdata('success'); ?>
            </div>
          <?php }; ?>
          <?= csrf_field(); ?>
          <!-- <canvas id="myChart" width="300" height="100"></canvas> -->
          <!-- <div class="chart-container" style="position: relative; height:40vh; width:80vw"> -->
          <canvas id="myChart" width="300" height="100"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar', // line, bar, pie
    data: {
      // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      labels: <?php echo json_encode($thn); ?>,
      datasets: [{
        label: '# of Votes',
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