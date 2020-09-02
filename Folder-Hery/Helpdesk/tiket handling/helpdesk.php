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
          <a href="?page=Helpdesk-Add" class="btn btn-primary btn-sm" role="button"><i class="fa fa-plus-square fa-fw"></i> Add Ticket</a>
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
                <b>Ticket Date : </b>
                <select name="txtMonth">
                  <option value="">Select Month</option>
                  <?php
                  $dataMonth  = isset($_GET['month']) ?  $_GET['month'] : date('n');
                  foreach ($monthArray as $month) {
                    // if you want to select a particular month
                    $selected = ($month == $dataMonth) ? 'selected' : '';
                    // if you want to add extra 0 before the month uncomment the line below
                    //$month = str_pad($month, 2, "0", STR_PAD_LEFT);
                    echo '<option ' . $selected . ' value="' . $month . '">' . $formattedMonthArray[$month] . '</option>';
                  }
                  ?>
                </select>
                <select name="txtYear">
                  <option value="">Select Year</option>
                  <?php

                  $dataYear  = isset($_GET['year']) ?  $_GET['year'] : date('Y');
                  foreach ($yearArray as $year) {
                    // if you want to select a particular year
                    $selected = ($year == $dataYear) ? 'selected' : '';
                    echo '<option ' . $selected . ' value="' . $year . '">' . $year . '</option>';
                  }
                  ?>
                </select>
                <button type="submit" class="btn btn-primary btn-xs" name="btnHelpdesk"><i class="fa fa-filter fa-fw"></i> Filter</button>
              </form>
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
          <div class="x_content table-responsive">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Date</th>
                  <th>Subject</th>
                  <th>Reques/Incident</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>From</th>
                  <th>Edit</th>
                  <th>Cancel</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $ses_branch = $_SESSION['SES_BRANCH'];
                $mySql1   = "SELECT * FROM view_helpdesk Where month(date)='" . $dataMonth . "' AND year(date)='" . $dataYear . "'ORDER BY DATE DESC";
                $myQry1   = mysqli_query($koneksidb, $mySql1)  or die(" ERP ERROR :  " . mysqli_error($koneksidb));

                $nomor  = 0;

                while ($myData1 = mysqli_fetch_array($myQry1)) {
                  $day = $myData1['date'];
                  $namahari = date('l', strtotime($day));
                  echo $namahari;
                  $nomor++;
                  $Code = $myData1['id'];
                ?>

                  <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $namahari.' '.$day; ?></td>
                    <td><?php echo $myData1['subjek'] ?></td>
                    <td><?php echo $myData1['request'] ?></td>
                    <td><?php echo $myData1['kategori'] ?></td>
                    <td><?php echo $myData1['deskripsi'] ?></td>
                    <td><?php echo $myData1['created'] ?></td>
                    <td><a href="?page=Helpdesk-Edit&id=<?php echo $Code; ?>" target="_self" alt="Edit Data"><i class="fa fa-edit fa-fw"></i> Edit</a></td>
                    <td><a href="?page=Helpdesk-Delete&id=<?php echo $Code; ?>" target="_self" alt="Delete Data" onclick="return confirm('ARE YOU SURE TO DELETE THIS DATA?')"><i class="fa fa-trash-o fa-fw"></i> Delete</a></td>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>

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