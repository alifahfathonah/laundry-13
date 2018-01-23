<?php
include "include/koneksi.php";

$Id_Pakaian = $_GET['Id_Pakaian'];
$No_Order = $_GET['No_Order'];

if (isset($error)) {
	echo '<b>Error</b>: <br />'.implode('<br />', $error);
} else {
  $query = "DELETE FROM detail_transaksi WHERE No_Order='".$No_Order."' AND WHERE Id_Pakaian='".$Id_Pakaian."'";
  $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
?>
		<script type="text/javascript">setTimeout("location.href='index.php';",1000);</script>
<?php
}
