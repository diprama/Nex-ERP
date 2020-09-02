<?php
include_once "library/inc.seslogin.php";
include "header.php";

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> <!-- include file jquery.min.js -->

<script type="text/javascript">
  $(document).ready(function() {

    $("#combokategori").change(function() {
      var idkategori = $(this).val();
      if (idkategori != "") {
        $.ajax({
          type: "post",
          url: "helpdesk_getsubkategori.php",
          data: "id=" + idkategori,
          success: function(data) {
            $("#subkategori").html(data);
          }
        });
      }
    });
  });
</script>




<div class="right_col" role="main">
  <?php
  # Tombol cancel
  if (isset($_POST['btnCancel'])) {
    echo "<meta http-equiv='refresh' content='0; url=?page=Sales-Target'>";
  }
  # Tombol Submit diklik
  if (isset($_POST['btnSubmit'])) {
    # VALIDASI FORM, jika ada kotak yang kosong, buat pesan error ke dalam kotak $pesanError
    $pesanError = array();
    // VALUES (now(),'$req','$subjek','$kategori','$subkategori','$deskripsi','$solusi',
    // '$status','$priority','$assign','$file','$from','$ses_nama', now())"; 

    $tgl = date('Y-m-d H:i:s');

    $req =  $_POST['req'];
    $subjek =  strtoupper($_POST['subjek']);
    $kategori =  $_POST['kategori'];
    $subkategori =  $_POST['subkategori'];
    $deskripsi = $_POST['deskripsi'];
    $solusi = $_POST['solusi'];
    $status =  $_POST['status'];
    $priority =  $_POST['prioritas'];
    $assign =  $_POST['assign'];
    $from1 =  $_POST['created'];

    $file_photo = "photo.png";
    $wmax = 300;
    $hmax = 300;

    if ($_FILES['photo']['name'] != "") {

      function acak($panjang)
      {
        $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
        $string = '';
        for ($i = 0; $i < $panjang; $i++) {
          $pos = rand(0, strlen($karakter) - 1);
          $string .= $karakter{
            $pos};
        }
        return $string;
      }
      //cara memanggilnya
      $hasil_1 = acak(20);

      // Getting file name
      $file_size   = $_FILES['photo']['size'];
      $file_tmp   = $_FILES['photo']['tmp_name'];
      $file_type  = $_FILES['photo']['type'];
      $tmp = explode('.', $_FILES['photo']['name']);
      $file_ext = end($tmp);

      // Valid extension
      $valid_ext = array('png', 'jpeg', 'jpg');
      $file_name   = $hasil_1 . '.' . $file_ext;
      // Location
      $location = "uploads/files/helpdesk/" . $file_name;
      if (move_uploaded_file($_FILES["photo"]["tmp_name"], $location)) {
        // file extension
        $file_extension = pathinfo($location, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);

        // Check extension
        if (in_array($file_extension, $valid_ext)) {

          // Compress Image


          $file_photo = $file_name;
        }
      } else {
        echo "Invalid file type.";
      }
    }
    //session


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
      $mySql = "INSERT INTO helpdesk ( date, request, subjek, kategori_id, subkategori_id, deskripsi, solusi, status, priority, assign,
       file, created, created_by, created_date) 
    VALUES ('$tgl','$req','$subjek','$kategori','$subkategori','$deskripsi','$solusi','$status','$priority','$assign','$file_photo','$from1','" . $_SESSION['SES_NAMA'] . "', now())";
      $myQry = mysqli_query($koneksidb, $mySql) or die(" ERP ERROR :  " . mysqli_error($koneksidb));
      if ($myQry) {
  ?>
        <script type="text/javascript">
          alert("Suksess, Data Telah Diinput");
        </script>
      <?php
        echo "<meta http-equiv='refresh' content='0; url=?page=Helpdesk'>";
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
        <h3>Ticketing</h3>
      </div>
      <div class="title_right">
        <div class="form-group pull-right top_search">
          <a href="?page=Sales-Target" class="btn btn-info btn-sm" role="button"><i class="fa fa-chevron-circle-left fa-fw"></i> Back</a>
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
            <h2>Add New Ticket</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class=""><i class="fa fa-wrench"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <!-- /x_title -->

          <div class="x_content ">
            <!-- x_content -->
            <br />
            <div class="col-sm-4">

              <div class="form-group">
                <label>Request/Incident *</label>
                <select class="form-control" name="req">
                  <option value="Request">Request</option>
                  <option value="Incident">Incident</option>
                </select>
              </div>

              <div class="form-group">
                <label>Subject *</label>
                <input class="form-control" placeholder="Subject" name="subjek" type="text" />
              </div>

              <div class="form-group">

                <label>Pilih Kategori</label>


                <!-- combobox kategori -->
                <select class="form-control" name="kategori" id="combokategori">
                  <option value="">Pilih kategori</option>
                  <?php
                  $mySql = "SELECT * FROM helpdesk_kategori";
                  $dataQry = mysqli_query($koneksidb, $mySql) or die(" ERP ERROR : " . mysqli_error($koneksidb));
                  while ($data = mysqli_fetch_array($dataQry)) {

                  ?>
                    <option value="<?php echo  $data['kd_kategori']; ?>"><?php echo $data['kategori']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label>Pilih Subkategori</label>
                <!-- combobox untuk subkategori -->
                <select class="form-control" name="subkategori" id="subkategori">
                  <option selected="selected">Pilih subkategori</option>
                </select>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label>Description *</label>
                <textarea rows="3" class="form-control" name="deskripsi" /></textarea>
              </div>

              <div class="form-group">
                <label> Solution</label>
                <textarea rows="3" class="form-control" name="solusi" /></textarea>
              </div>

              <div class="form-group">
                <label>Status *</label>
                <select class="form-control" name="status">
                  <option value="Open">Open</option>
                </select>
              </div>


            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label>Priority *</label>
                <select class="form-control" name="prioritas">
                  <option value="">Pilih Priority</option>
                  <?php
                  $mySql = "SELECT * FROM master_status WHERE status_group='priority-helpdesk'";
                  $dataQry = mysqli_query($koneksidb, $mySql) or die(" ERP ERROR : " . mysqli_error($koneksidb));
                  while ($data = mysqli_fetch_array($dataQry)) {

                  ?>
                    <option value="<?php echo  $data['status_name']; ?>"><?php echo $data['status_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label>Assign To *</label>
                <select class="form-control" name="assign">
                  <option value="monitoring">monitoring</option>
                </select>
              </div>

              <div class="form-group">
                <label>Attachment *</label>
                <input class="form-control" type="file" name="photo" value="" />
              </div>

              <div class="form-group">
                <label>Tikect is created from *</label>
                <select class="form-control" name="created">
                  <option value="Internal Devision">Internal Devision</option>
                  <option value="External Devision">External Devision</option>
                  <option value="Outsite CBN">Outsite CBN</option>
                  <option value="Action">Action</option>
                </select>
              </div>

              <div class="ln_solid">
                <a href="?page=Sales-Target" class="btn btn-warning btn-sm" role="button"><i class="fa fa-undo fa-fw"></i> Batal</a>
                <button type="submit" class="btn btn-primary btn-sm" name="btnSubmit"><i class="fa fa-check-square-o fa-fw"></i> Submit</button>
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