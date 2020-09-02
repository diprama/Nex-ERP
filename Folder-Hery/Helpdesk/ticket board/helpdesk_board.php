<?php
include_once "library/inc.seslogin.php";
include "header.php";

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>DATA HELPDESK<small></small></h3>
      </div>
      <div class="title_right">
        <div class="form-group pull-right">
          <!-- <a href="?page=Helpdesk-Add" class="btn btn-primary btn-sm" role="button"><i class="fa fa-plus-square fa-fw"></i> Add Ticket</a> -->
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <div class="col-xs-9">
              <form role="form" action="?page=Validasi" method="POST" name="form1" target="_self" id="form1">

                <div class="col-sm-3"><?php $tglbooking  = isset($_GET['txtDate']) ?  $_GET['txtDate'] : date('Y-n-d'); ?>
                  <div class="form-group"> <label>Tanggal</label>
                    <input class="form-control" id="tanggal1" class="date-picker" value="<?php echo $tglbooking; ?>" placeholder="YYYY-MM" name="txtDate" type="text" required autocomplete="off" />
                  </div>
                  <div class="form-group">
                    <label>Status *</label>
                    <select class="form-control" name="status">
                      <option value="Open">Open</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <?php $tglbooking1  = isset($_GET['txtToDate']) ?  $_GET['txtToDate'] : date('Y-n-d'); ?>
                    <label> Sampai Tanggal</label>
                    <input class="form-control" id="tanggal3" class="date-picker" value="<?php echo $tglbooking1; ?>" placeholder="YYYY-MM" name="txtToDate" type="text" required autocomplete="off" />
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

                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Creator *</label>
                    <select class="form-control" name="assign">
                      <option value="Islam">monitoring</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Priority *</label>
                    <select class="form-control" name="prioritas">
                      <option value="">Pilih Priority</option>
                      <?php
                      $mySql = "SELECT * FROM master_status WHERE status_group='priority-helpdesk'";
                      $dataQry = mysqli_query($koneksidb, $mySql) or die(" ERP ERROR : " . mysqli_error($koneksidb));
                      while ($data = mysqli_fetch_array($dataQry)) {

                      ?>
                        <option class="form-control" value="<?php echo  $data['status_name']; ?>"><?php echo $data['status_name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div style="padding-top: 60px" class="col-sm-1">
                  <button type="submit" class="btn btn-primary btn-xs" name="btnHelpdesk"><i class="fa fa-filter fa-fw"></i> Filter</button>
              </form>
            </div>
          </div>
          <div class="col-xs-3">
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class=""><i class="fa fa-wrench"></i></a>

              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>


        <div class="col-xs-12 col-md-6 col-lg-10">
          <?php
          $ses_branch = $_SESSION['SES_BRANCH'];
          $mySql1   = "SELECT * FROM view_helpdesk ORDER BY DATE DESC";
          $myQry1   = mysqli_query($koneksidb, $mySql1)  or die(" ERP ERROR :  " . mysqli_error($koneksidb));

          $nomor  = 0;

          while ($myData1 = mysqli_fetch_array($myQry1)) {
            $day = $myData1['date'];
            $name = $myData1['subjek'];
            $by = $myData1['created_by'];
            $namahari = date('l', strtotime($day));
            // echo $namahari;
            $nomor++;
            $Code = $myData1['id'];
            $awal  = date_create($day);
            $akhir = date_create(); // waktu sekarang
            $diff  = date_diff($awal, $akhir);

            // tahun
            $d =  $diff->d . ' d, ';
            // bulan
            $h = $diff->h . ' h, ';
            // hari
            $i =  $diff->i . ' m, ';

          ?>
            <div class="form-group">
              <?php
              echo  '<b>' . $name . '</b>' . ' [' . $myData1['id'] . '] ' . $by . ' [' . $namahari . ' ' . $day . ']' . '<b>[' . $myData1['status'] . ']</b>'; ?> </div>
            <div class="form-group">
              <?php echo '<u>Description </u>: ' . $myData1['deskripsi']; ?> </div>

            <div class="ln_solid"></div>
          <?php } ?>
        </div>

      </div>
    </div>
  </div>
</div>
</div>

<!-- /page content -->

<?php
include "footer.php";
?>