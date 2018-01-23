<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundry</title>

    <?php
      include "include/header.php";
    ?>


  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
      <a class="navbar-brand" href="#">Laundry</a>
    </div>
    <ul class="nav navbar-nav">
      <?php
        include "include/list.php"
      ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
    <div class="jumbotron text-center" style="padding:100px;">
  <h1>SELAMAT DATANG DI ADMIN</h1>
  <p>Silahkan pilih menu di bawah ini </p>
  <a href="transaksi.php"><button type="button" class="btn btn-primary" href='tambahdatatransaksi.php'>Data Transaksi</button></a>
  <a href="pakaian.php"><button type="button" class="btn btn-success">Data Pakaian</button></a>
  <a href="pelanggan.php"><button type="button" class="btn btn-info">Data Pelanggan</button></a>
  <a href="tambahdatatransaksi.php"><button type="button" class="btn btn-warning">Transaksi Laundry</button></a>

  </div>
</div>

</body>
</html>
