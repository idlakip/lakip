<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <div id="mapid" style="height: 400px;">

          <script>
            var mymap = L.map('mapid').setView([-6.166585, 106.826071], 13);
            // var mymap = L.map('mapid').setView([-3.938785, 119.688359], 13);

            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
              maxZoom: 18,
              attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
              id: 'mapbox/streets-v11',
              tileSize: 512,
              zoomOffset: -1
            }).addTo(mymap);

            <?php foreach ($kantor as $key => $value) { ?>
              L.marker([<?= $value['latitude']; ?>, <?= $value['longitude']; ?>]).addTo(mymap)
                .bindPopup("<b><?= $value['nama_kantor'] ?></b><br/>" +
                  '<img src="<?= base_url('foto/' . $value['photo']); ?>">'
                );
            <?php } ?>
          </script>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->