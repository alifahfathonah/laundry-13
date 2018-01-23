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
  </div>
</nav>

<div class="container">
    <div class="jumbotron text-center" style="padding:100px;"> 
  <h1>SELAMAT DATANG DI ADMIN</h1>
  <p>Silahkan pilih menu di bawah ini </p>
  <button type="button" class="btn btn-primary" href='tambahdatatransaksi.php'>Data Transaksi</button>
  <button type="button" class="btn btn-success">Data Pakaian</button>
  <button type="button" class="btn btn-info">Data Pelanggan</button>
  <button type="button" class="btn btn-warning">Transaksi Laundry</button>

  </div>
</div>

</body>
</html>
