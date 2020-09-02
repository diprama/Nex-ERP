<?php
include_once "library/inc.seslogin.php";
include "header.php";
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>DATA SUB-CATEGORY <small></small></h3>
      </div>
      <div class="title_right">
        <div class="form-group pull-right">
          <!-- <a href="?page=Product-Price-Excel" class="btn btn-primary btn-sm" role="button"><i class="fa fa-plus-square fa-fw"></i> Add Excel</a> -->
          <a href="?page=Data-Ticket-Sub-Category-Add" class="btn btn-primary btn-sm" role="button"><i class="fa fa-plus-square fa-fw"></i> Add New Data</a>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Data <small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class=""><i class="fa fa-wrench"></i></a>

              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content table-responsive">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Category Type</th>
                  <th>Sub-Category Name</th>

                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $mySql   = "SELECT * FROM helpdesk_subkategori order by kd_subkategori desc";
                $myQry   = mysqli_query($koneksidb, $mySql)  or die(" ERP ERROR :  " . mysqli_error($koneksidb));
                $nomor  = 0;
                while ($myData = mysqli_fetch_array($myQry)) {
                  $nomor++;
                  $Sales = $myData['kd_subkategori'];
                ?>

                  <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $myData['kd_kategori']; ?></td>
                    <td><?php echo $myData['subkategori']; ?></td>

                    <td><a href="?page=Data-Ticket-Sub-Category-Edit&id=<?php echo $Sales; ?>" target="_self" alt="Edit Data"><i class="fa fa-edit fa-fw"></i> Edit</a></td>
                    <td><a href="?page=Data-Ticket-Sub-Category-Delete&id=<?php echo $Sales; ?>" target="_self" alt="Delete Data" onclick="return confirm('ARE YOU SURE TO DELETE THIS DATA?')"><i class="fa fa-trash-o fa-fw"></i> Delete</a></td>
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