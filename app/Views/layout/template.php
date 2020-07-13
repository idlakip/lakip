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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

  <!-- DataTables Responsive CSS -->
  <link href="<?= base_url(); ?>/template/css/dataTables/dataTables.responsive.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?= base_url(); ?>/template/css/startmin.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?= base_url(); ?>/template/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

  <!-- Bootstrap Core JavaScript -->
  <script src="<?= base_url(); ?>/template/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="<?= base_url(); ?>/template/js/metisMenu.min.js"></script>

  <!-- DataTables JavaScript -->
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/template/js/dataTables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/template/js/dataTables/dataTables.bootstrap.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="<?= base_url(); ?>/template/js/startmin.js"></script>

  <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  <script>
    $(document).ready(function() {
      $('#dataTables-example').DataTable({
        responsive: true
      });
    });

    $(document).ready(function() {
      $('#table_id').DataTable();
      select: true
      responsive: true
    });
  </script>

</body>

</html>