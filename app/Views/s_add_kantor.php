<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-sm-7">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Lokasi </h3>
        </div>
        <div class="card-body">

          <div id="mapid" style="height: 400px;">

          </div>

        </div><!-- /.card -->
      </div><!-- /.col -->
    </div>
    <div class="col-sm-5">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Data Kantor </h3>
        </div>
        <div class="card-body">

          <?php echo form_open_multipart(''); ?>
          <div class="form-group">
            <label for="nama_kantor">Nama Kantor</label>
            <input type="text" class="form-control" id="nama_kantor" name="nama_kantor" placeholder="Enter kantor">
          </div>
          <div class="form-group">
            <label for="no_telp">No. Kantor</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Enter no. telp kantor">
          </div>

          <div class="form-group">
            <label for="alamat">Alamat Kantor</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter alamat kantor">
          </div>


          <div class="form-group">
            <label for="pimpinan">Pimpinan Kantor</label>
            <input type="text" class="form-control" id="pimpinan" name="pimpinan" placeholder="Enter pimpinan kantor">
          </div>

          <div class="form-group">
            <label for="latitude">Latitude Kantor</label>
            <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Enter latitude kantor">
          </div>

          <div class="form-group">
            <label for="longitude">Longitude Kantor</label>
            <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Enter longitude kantor">
          </div>

          <div class="form-group">
            <label for="description">Description Kantor</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter description kantor">
          </div>

          <div class="form-group">
            <label for="photo">Photo Kantor</label>
            <input type="file" class="form-control" id="photo" name="photo">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
          </div>
        </div>

        <?php echo form_close(); ?>



      </div><!-- /.card -->
    </div><!-- /.col -->
  </div>


  <script>
    var curLocation = [0, 0];
    if (curLocation[0] == 0 && curLocation[1] == 0) {
      curLocation = [-6.164878, 106.824698];
    }
    var map = L.map('mapid').setView([-6.164878, 106.824698], 10);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1
    }).addTo(map);

    map.attributionControl.setPrefix(false);
    var marker = new L.marker(curLocation, {
      draggable: 'true',
    });
  </script>






</section>
<?= $this->endSection(); ?>