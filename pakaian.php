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
  <h3>Data Pakaian</h3>
  <hr>
  <div class="tombol" >
    <a href="tambahdatapakaian.php"><button type="button" class="btn btn-success btn-md " >Tambah Data </button></a>
  </div>
  <br>
  <table id="table" class="table table-striped table-bordered table-responsive" >
    <thead>
      <tr>
        <th style="text-align: center;">No</th>
        <th>Kode Pakaian</th>
        <th>Jenis Pakaian</th>
        <th style="text-align: center;" >Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "./include/koneksi.php";
        $i = 0 + 1;
        $sql = mysqli_query($conn, "SELECT * FROM pakaian ORDER BY Id_Pakaian");
        while ($hasil = mysqli_fetch_array($sql)) {
     ?>
  <tr>
      <td style="text-align: center;"><?php echo $i; ?></td>
      <td><?php echo $hasil['Id_Pakaian']; ?></td>
      <td><?php echo $hasil['Jenis_Pakaian']; ?></td>
      <td style="text-align: center;"><a href="editdatapakaian.php?edit=<?php echo $hasil['Id_Pakaian']; ?>" class="btn btn-warning">Edit</a>
      <a href="proses-hapus-pakaian.php?hapus=<?php echo $hasil['Id_Pakaian']; ?>" class="btn btn-danger">Hapus</a></td>
  </tr>
  <?php
      $i++;
      }
    ?>

  </tbody>
  </table>
<br>
<br>
<br>
</div>



<script>
    $(document).ready(function() {
	   $('#table').DataTable();
	} );
</script>
</body>
</html>
