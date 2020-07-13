<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title; ?></title>

  <!-- Bootstrap Core CSS -->
  <link href="<?= base_url(); ?>/template/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="<?= base_url(); ?>/template/css/metisMenu.min.css" rel="stylesheet">

  <!-- DataTables CSS -->
  <link href="<?= base_url(); ?>/template/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

  <!-- DataTables Responsive CSS -->
  <link href="<?= base_url(); ?>/template/css/dataTables/dataTables.responsive.css" rel="stylesheet">

  <!-- Timeline CSS -->
  <link href="<?= base_url(); ?>/template/css/timeline.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?= base_url(); ?>/template/css/startmin.css" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="<?= base_url(); ?>/template/css/morris.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?= base_url(); ?>/template/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

  <?= $this->include('layout/v_header'); ?>
  <?= $this->include('layout/sidebar'); ?>
  <?= $this->include('layout/wrapper'); ?>
  <?= $this->renderSection('content'); ?>

  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url(); ?>/template/js/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?= base_url(); ?>/template/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="<?= base_url(); ?>/template/js/metisMenu.min.js"></script>

  <!-- Morris Charts JavaScript -->
  <script src="<?= base_url(); ?>/template/js/raphael.min.js"></script>
  <script src="<?= base_url(); ?>/template/js/morris.min.js"></script>
  <script src="<?= base_url(); ?>/template/js/morris-data.js"></script>

  <!-- DataTables JavaScript -->
  <script src="<?= base_url(); ?>/template/js/dataTables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/template/js/dataTables/dataTables.bootstrap.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="<?= base_url(); ?>/template/js/startmin.js"></script>

  <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  <script>
    $(document).ready(function() {
      $('#dataTablesk').DataTable({
        responsive: true
      });
    });
  </script>

</body>

</html>