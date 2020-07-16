<?php
foreach ($chart as $key => $value) {
  $thn[] = $value['tahun'];
  $jml[] = $value['jumlah'];
  $bln[] = $value['bulan'];
}; ?>
<canvas id="myChart" width="300" height="100"></canvas>


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
          'rgba(255, 159, 64, 0.80)'
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