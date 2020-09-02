<?php
include_once "library/inc.seslogin.php";
include "header.php";
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="page-title">
    <div class="title_left">
      <h3>Dashboard<small></small></h3>
    </div>
    <div class="title_right">
      <div class="form-group pull-right">
        <a href="?page=Helpdesk-Add" class="btn btn-primary btn-sm" role="button"><i class="fa fa-plus-square fa-fw"></i> Add New Ticket</a>
      </div>
    </div>
  </div>

  <?php


  $mySql   = "SELECT count(*) as total from master_outlet  where  outlet_status='Active' ";
  $myQry   = mysqli_query($koneksidb, $mySql)  or die("Error query " . mysqli_error($koneksidb));
  $myData = mysqli_fetch_array($myQry);
  $users  = $myData['total'];



  ?>
  <div class="col-xs-12">
    <h2>Open Ticket</h2>
    <div class="ln_solid"></div>
  </div>

  <div class="row top_tiles">

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-phone-square" style="color:#B9DCFF"></i></div>
        <div class="count">2</div>
        <h3>Phone</h3>
        <p>&nbsp;</p>
      </div>
    </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-mobile" style="color:#B9DCFF"></i></div>
        <div class="count">5</div>
        <h3>Mobile</h3>
        <p>&nbsp;</p>
      </div>
    </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-desktop" style="color:#B9DCFF"></i></div>
        <div class="count">3</div>
        <h3>Website</h3>
        <p>&nbsp;</p>
      </div>
    </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-envelope" style="color:#B9DCFF"></i></div>
        <div class="count">1</div>
        <h3>Email</h3>
        <p>&nbsp;</p>
      </div>
    </div>

  </div>

  <div class="col-xs-12">
    <h2>Progress Ticket</h2>
    <div class="ln_solid"></div>
  </div>

  <div class="row top_tiles">

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-files-o" style="color:#B9DCFF"></i></div>
        <div class="count">172</div>
        <h3>All Tickets</h3>
        <p>&nbsp;</p>
      </div>
    </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-folder-open" style="color:#B9DCFF"></i></div>
        <div class="count">11</div>
        <h3>Open Tickets</h3>
        <p>&nbsp;</p>
      </div>
    </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-user-times" style="color:#B9DCFF"></i></div>
        <div class="count">2</div>
        <h3>Unassigned Tickets</h3>
        <p>&nbsp;</p>
      </div>
    </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-hourglass-start" style="color:#B9DCFF"></i></div>
        <div class="count">7</div>
        <h3>In Progress Tickets</h3>
        <p>&nbsp;</p>
      </div>
    </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-ban" style="color:#B9DCFF"></i></div>
        <div class="count">1</div>
        <h3>Pending Tickets</h3>
        <p>&nbsp;</p>
      </div>
    </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-calendar-times-o" style="color:#B9DCFF"></i></div>
        <div class="count">1</div>
        <h3>Overdue Tickets</h3>
        <p>&nbsp;</p>
      </div>
    </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-check-square-o" style="color:#B9DCFF"></i></div>
        <div class="count">50</div>
        <h3>Solved Tickets</h3>
        <p>&nbsp;</p>
      </div>
    </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-check-square" style="color:#B9DCFF"></i></div>
        <div class="count">100</div>
        <h3>Closed Tickets</h3>
        <p>&nbsp;</p>
      </div>
    </div>




  </div>








  <!-- /page content -->
</div>

<?php
include "footer.php";
?>