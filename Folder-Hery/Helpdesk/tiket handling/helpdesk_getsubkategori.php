<?php
include_once "library/inc.connection.php";
if (isset($_POST['id'])) {
   $id = $_POST['id'];
   $mySql = "SELECT  * FROM helpdesk_subkategori WHERE kd_kategori='" . $id . "'";
   $query = mysqli_query($koneksidb, $mySql) or die(" ERP ERROR : " . mysqli_error($koneksidb));
   $row = mysqli_num_rows($query);
   if ($row > 0) {
      while ($data = mysqli_fetch_array($query)) {
?>
         <option value="<?php echo $data['kd_subkategori']; ?>"><?php echo $data['subkategori']; ?></option>
<?php
      }
   }
}
?>