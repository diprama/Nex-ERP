<?php
include_once "library/inc.seslogin.php";

// Periksa ada atau tidak variabel Code pada URL (alamat browser)
if(isset($_GET['id'])){
	// Delete data sesuai Code yang didapat di URL
	// $mySql1 = "INSERT INTO log_deleted  (table_name, table_id, deleted_by, deleted_date) 
	// VALUES ('master_user','".$_GET['id']."','".$_SESSION['SES_NAMA']."', NOW())";
	// $myQry1 = mysqli_query($koneksidb,$mySql1) or die (" ERP ERROR : ".mysqli_error($koneksidb));
// 	$ID = $_GET['id'];
// $query1 = "SELECT  * FROM booking WHERE booking_id='".$ID."'";
// $myQry1	= mysqli_query($koneksidb,$query1)  or die (" ERP ERROR 13: ".mysqli_error($koneksidb));
// $data1 = mysqli_fetch_array($myQry1);  
// // ambil variabel

// $databooking1 = $data1['booking_demo'];
// $tglbooking1 = $data1['booking_date'];
// $IDco  = $data1['coordinator_id'];
// $photokoor = $data1['photo_coordinator'];
// $dataStatus = "Deleted";

	$mySql = "DELETE FROM helpdesk WHERE  id='".$_GET['id']."'";
	$myQry = mysqli_query($koneksidb,$mySql) or die (" ERP ERROR : ".mysqli_error($koneksidb));
	// $mySql = "DELETE FROM booking_status WHERE booking_id='".$_GET['id']."'";
	// // $myQry = mysqli_query($koneksidb,$mySql) or die (" ERP ERROR : ".mysqli_error($koneksidb));
	// $mySql = "DELETE FROM booking_confirmation WHERE booking_id='".$_GET['id']."'";
	// $myQry = mysqli_query($koneksidb,$mySql) or die (" ERP ERROR : ".mysqli_error($koneksidb));
	// $mySql = "DELETE FROM consumer_lead WHERE booking_id='".$_GET['id']."'";
	// $myQry = mysqli_query($koneksidb,$mySql) or die (" ERP ERROR : ".mysqli_error($koneksidb));
	// // $mySql = "DELETE FROM coordinator WHERE coordinator_id='".$IDco."'";
	// // $myQry = mysqli_query($koneksidb,$mySql) or die (" ERP ERROR : ".mysqli_error($koneksidb));
	// $mySql  	= "INSERT INTO booking_status (booking_id, booking_status, updated_by, updated_date)
	// 	 				VALUES ('".$ID."','$dataStatus','$ses_nama', now())";
   $myQry=mysqli_query($koneksidb,$mySql) or die (" ERP ERROR :  ".mysqli_error($koneksidb));
	if($myQry){
		// Refresh halaman
		echo "<meta http-equiv='refresh' content='0; url=?page=Helpdesk'>";
	}
}
else {
	// Jika tidak ada data Code ditemukan di URL
	echo "<b>Data does not exist!</b>";
}
?>