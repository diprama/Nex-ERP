<?php
include_once "library/inc.seslogin.php";

// Periksa ada atau tidak variabel Code pada URL (alamat browser)
if (isset($_GET['id'])) {
	// Delete data sesuai Code yang didapat di URL
	// $mySql1 = "INSERT INTO log_deleted  (table_name, table_id, deleted_by, deleted_date) 
	// VALUES ('master_user','".$_GET['id']."','".$_SESSION['SES_NAMA']."', NOW())";
	// $myQry1 = mysqli_query($koneksidb,$mySql1) or die (" ERP ERROR : ".mysqli_error($koneksidb));
	$ID = $_GET['id'];
	// Query untuk menampilkan data booking berdasarkan ID
	// $query1 = "SELECT * FROM booking_denah WHERE id='".$ID."'";
	// $myQry1	= mysqli_query($koneksidb,$query1)  or die (" ERP ERROR 13: ".mysqli_error($koneksidb));
	// $data1 = mysqli_fetch_array($myQry1);  
	// // ambil variabel
	// $branch_id1 = $data1['branch_id'];
	// $dataStatus = "Deleted";

	$mySql = "DELETE FROM helpdesk_subkategori WHERE kd_subkategori='" . $ID . "'";
	$myQry = mysqli_query($koneksidb, $mySql) or die(" ERP ERROR : " . mysqli_error($koneksidb));
	if ($myQry) {
		// Refresh halaman
		echo "<meta http-equiv='refresh' content='0; url=?page=Data-Ticket-Sub-Category'>";
	}
} else {
	// Jika tidak ada data Code ditemukan di URL
	echo "<b>Data does not exist!</b>";
}
