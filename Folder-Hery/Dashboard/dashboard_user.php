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


//$mySql 	= "select count(*) as total from master_outlet  where  outlet_status='Active' ";
//$myQry 	= mysqli_query($koneksidb,$mySql)  or die ("Error query ".mysqli_error($koneksidb));
//$myData = mysqli_fetch_array($myQry);
//$users	= $myData['total'];



?>
            
            
            <div class="col-xs-12">
                <h2>My Dashboard</h2>
                <div class="ln_solid"></div>
            </div>

            <div class="row top_tiles">

                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                    <div class="icon"><i class="fa fa-files-o" style="color:#B9DCFF"></i></div>
                    <div class="count">10</div>
                    <h3>All Tickets</h3>
                    <p>&nbsp;</p>
                    </div>
                </div>
            
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-folder-open" style="color:#B9DCFF"></i></div>
                  <div class="count">1</div>
                  <h3>Open Tickets</h3>
                  <p>&nbsp;</p>
                </div>
              </div>
              
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-hourglass-start" style="color:#B9DCFF"></i></div>
                  <div class="count">2</div>
                  <h3>In Progress Tickets</h3>
                  <p>&nbsp;</p>
                </div>
              </div>
              
               <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-ban" style="color:#B9DCFF"></i></div>
                  <div class="count" >0</div>
                  <h3>Pending Tickets</h3>
                  <p>&nbsp;</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-calendar-times-o" style="color:#B9DCFF"></i></div>
                  <div class="count" >0</div>
                  <h3>Overdue Tickets</h3>
                  <p>&nbsp;</p>
                </div>
              </div>
            
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o" style="color:#B9DCFF"></i></div>
                  <div class="count">5</div>
                  <h3>Solved Tickets</h3>
                  <p>&nbsp;</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square" style="color:#B9DCFF"></i></div>
                  <div class="count">2</div>
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