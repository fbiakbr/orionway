<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>ORIONWAY</title>


  <link href="assets/css/bootstrap.css" rel="stylesheet">

  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="assets/datatables/dataTables.bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
  <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet">

  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/datatables/jquery.dataTables.js"></script>
  <script type="text/javascript" src="assets/datatables/dataTables.bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
  <style>
    .header {
      background: #428BCA;
      color: #fff;
      border-color: #428BCA;
    }

    #main-content {
      background: #fff;
    }

    #hidden {
      display: none
    }
  </style>
</head>

<body>
  <section id="container">

    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>

      <a href="index.php" class="logo" style="color: #fff;"><b><?php echo $toko['nama_toko']; ?></b></a>

      <div class="nav notify-row" id="top_menu">
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" onclick="javascript: return confirm('Yakin Logout ?');" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>