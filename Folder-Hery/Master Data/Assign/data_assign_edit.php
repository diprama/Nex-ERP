<?php
include_once "library/inc.seslogin.php";
include "header.php";

?>
<link href="./js/dt/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

<div class="right_col" role="main">
  <?php

  $ID = $_GET['id'];
  $query = "SELECT  * FROM helpdesk_assign WHERE assign_id='" . $ID . "'";
  $myQry  = mysqli_query($koneksidb, $query)  or die(" ERP ERROR 13: " . mysqli_error($koneksidb));
  $data = mysqli_fetch_array($myQry);

  $assign_id  = $data['assign_id'];
  $assign_to  = $data['assign_to'];


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
    $txtid = $_POST['id'];
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
      $mySql = "UPDATE helpdesk_assign SET assign_id='$txtid', assign_to='$txtname', updated_by='$ses_nama', updated_date= now()  WHERE assign_id='" . $ID . "'";
      $myQry = mysqli_query($koneksidb, $mySql) or die(" ERP ERROR :  " . mysqli_error($koneksidb));
      if ($myQry) {
  ?>
        <script type="text/javascript">
          alert("Suksess, Data Telah Diinput");
        </script>
      <?php
        echo "<meta http-equiv='refresh' content='0; url=?page=Data-Ticket-Assign-To'>";
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
        <h3>DATA Assign To</h3>
      </div>
      <div class="title_right">
        <div class="form-group pull-right top_search">
          <a href="?page=Data-Ticket-Assign-To" class="btn btn-info btn-sm" role="button"><i class="fa fa-chevron-circle-left fa-fw"></i> Back</a>
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
            <h2>Edit Data Assign To</h2>
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
                <label>ID *</label>
                <!-- <input class="form-control" placeholder="" name="dataArea" type="text" /> -->

                <input class="form-control" placeholder="" value="<?php echo $assign_id; ?>" name="id" type="text" />
              </div>
            </div>

            <div class="col-sm-4">

              <div class="form-group">
                <label> Name *</label>
                <input class="form-control" placeholder="" value="<?php echo $assign_to; ?>" name="name" type="text" />
              </div>
            </div>

            <div style="padding-top: 25px;  " class="col-sm-3">
              <!-- <a href="?page=Collection-Target" class="btn btn-warning btn-sm" role="button"><i class="fa fa-undo fa-fw"></i> Batal</a> -->
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