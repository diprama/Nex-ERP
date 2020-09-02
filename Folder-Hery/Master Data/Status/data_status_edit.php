<?php
include_once "library/inc.seslogin.php";
include "header.php";

?>
<link href="./js/dt/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

<div class="right_col" role="main">
  <?php

  $ID = $_GET['id'];
  $query = "SELECT  * FROM master_status WHERE status_id='" . $ID . "'";
  $myQry  = mysqli_query($koneksidb, $query)  or die(" ERP ERROR 13: " . mysqli_error($koneksidb));
  $data = mysqli_fetch_array($myQry);

  $status_group  = $data['status_group'];
  $status_name  = $data['status_name'];


  // ambil variabel
  # Tombol cancel
  if (isset($_POST['btnCancel'])) {
    echo "<meta http-equiv='refresh' content='0; url=?page=Employee'>";
  }
  # Tombol Submit diklik
  if (isset($_POST['btnSubmit'])) {
    # VALIDASI FORM, jika ada kotak yang kosong, buat pesan error ke dalam kotak $pesanError
    $pesanError = array();
    $tgl = date('Y-m-d H:i:s');
    $txtgroup = $_POST['group'];
    $txtname = $_POST['name'];

    $ses_nama  = $_SESSION['SES_NAMA'];



    # VALIDASI DATA, jika sudah ada akan ditolak



    if (count($pesanError) >= 1) {
      echo "&nbsp;<div class='alert alert-warning'>";

      $noPesan = 0;
      foreach ($pesanError as $indeks => $pesan_tampil) {
        $noPesan++;
        echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";
      }
      echo "</div>";
    } else {


      # SIMPAN DATA KE DATABASE.
      $mySql = "UPDATE master_status SET status_group='$txtgroup', status_name='$txtname', updated_by='$ses_nama', updated_date= now()  WHERE status_id='" . $ID . "'";
      $myQry = mysqli_query($koneksidb, $mySql) or die(" ERP ERROR :  " . mysqli_error($koneksidb));
      if ($myQry) {
  ?>
        <script type="text/javascript">
          alert("Suksess, Data Telah Diinput");
        </script>
      <?php
        echo "<meta http-equiv='refresh' content='0; url=?page=Data-Ticket-Status'>";
      } else {
      ?>
        <script type="text/javascript">
          alert("GAGAL");
        </script>
  <?php
        //echo"<script>document.location='form.php'</script>";
      }
    }
  }
  ?>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self" enctype="multipart/form-data">
    <div class="page-title">
      <!-- page-title -->
      <div class="title_left">
        <h3>Product Price</h3>
      </div>
      <div class="title_right">
        <div class="form-group pull-right top_search">
          <a href="?page=Collection-Target" class="btn btn-info btn-sm" role="button"><i class="fa fa-chevron-circle-left fa-fw"></i> Back</a>
        </div>
      </div>
    </div><!-- /page-title -->
    <div class="clearfix"></div>

    <div class="row">
      <!-- row -->
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <!-- x_panel -->

          <div class="x_title">
            <!-- x_title -->
            <h2>Tambah Data Baru</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class=""><i class="fa fa-wrench"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div><!-- /x_title -->

          <div class="x_content ">
            <!-- x_content -->
            <br />


            <div class="col-sm-4">

              <div class="form-group">
                <label>Group *</label>
                <!-- <input class="form-control" placeholder="" name="dataArea" type="text" /> -->

                <select name="group" class="form-control select2_single" tabindex="-1">
                  <?php
                  $mySql = "SELECT DISTINCT status_group FROM master_status";
                  $dataQry = mysqli_query($koneksidb, $mySql) or die(" ERP ERROR : " . mysqli_error($koneksidb));
                  while ($dataRow = mysqli_fetch_array($dataQry)) {
                    if ($dataRow['status_group'] == $status_group) {
                      $cek = " selected";
                    } else {
                      $cek = "";
                    }
                    echo "<option value='$dataRow[status_group]' $cek>$dataRow[status_group] </option>";
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="col-sm-4">

              <div class="form-group">
                <label> Name *</label>
                <input class="form-control" placeholder="" value="<?php echo $status_name; ?>" name="name" type="text" />
              </div>
              <div class="col-sm-12">
                <div class="ln_solid">
                  <a href="?page=Collection-Target" class="btn btn-warning btn-sm" role="button"><i class="fa fa-undo fa-fw"></i> Batal</a>
                  <button type="submit" class="btn btn-primary btn-sm" name="btnSubmit"><i class="fa fa-check-square-o fa-fw"></i> Submit</button>
                </div>
              </div>
            </div>
          </div><!-- /x_content -->

        </div><!-- /x_panel -->
      </div>
    </div><!-- /row -->
</div>
<!-- /page content -->
</form>

<?php
include "footer.php";
?>