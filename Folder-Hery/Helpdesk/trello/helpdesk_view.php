<?php
require_once "ProjectManagement.php";

include_once "library/inc.seslogin.php";
// include "header.php";

$projectName = "StartTuts";
$projectManagement = new ProjectManagement();
$statusResult = $projectManagement->getAllStatus();
?>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<head>
    <title>Trello Like Drag and Drop Cards for Project Management Software</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        body {
            font-family: arial;
        }

        .task-board {
            background: #2c7cbc;
            display: inline-block;
            padding: 12px;
            border-radius: 3px;
            /* width: 1550px; */
            white-space: nowrap;
            overflow-x: scroll;
            /* min-height: 1300px; */
        }

        .status-card {
            width: 250px;
            margin-right: 8px;
            background: #e2e4e6;
            border-radius: 3px;
            display: inline-block;
            vertical-align: top;
            font-size: 0.9em;
        }

        .status-card:last-child {
            margin-right: 0px;
        }

        .card-header {
            width: 100%;
            padding: 10px 10px 0px 10px;
            box-sizing: border-box;
            border-radius: 3px;
            display: block;
            font-weight: bold;
        }

        .card-header-text {
            display: block;
        }

        ul.sortable {
            padding-bottom: 10px;
        }

        ul.sortable li:last-child {
            margin-bottom: 0px;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0px;
        }

        .text-row {
            padding: 15px 10px;
            margin: 10px;
            background: #fff;
            box-sizing: border-box;
            border-radius: 3px;
            border-bottom: 1px solid #ccc;
            cursor: pointer;
            font-size: 0.8em;
            white-space: normal;
            line-height: 20px;
        }

        .ui-sortable-placeholder {
            visibility: inherit !important;
            background: transparent;
            border: #666 2px dashed;
        }
    </style>
</head>

<body>


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

            <div class="task-board">
                <?php
                foreach ($statusResult as $statusRow) {
                    $taskResult = $projectManagement->getProjectTaskByStatus($statusRow["id"], $projectName);
                ?>
                    <div class="status-card">
                        <div class="card-header">
                            <span class="card-header-text"><?php echo $statusRow["status_name"]; ?></span>
                        </div>
                        <ul class="sortable ui-sortable" id="sort<?php echo $statusRow["id"]; ?>" data-status-id="<?php echo $statusRow["id"]; ?>">
                            <?php
                            if (!empty($taskResult)) {
                                foreach ($taskResult as $taskRow) {
                            ?>

                                    <li class="text-row ui-sortable-handle" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-task-id="<?php echo $taskRow["id"]; ?>"><?php echo $taskRow["title"]; ?></li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                <?php
                }
                ?>
            </div>
            <script>
                $(function() {
                    var url = 'edit-status.php';
                    $('ul[id^="sort"]').sortable({
                        connectWith: ".sortable",
                        receive: function(e, ui) {
                            var status_id = $(ui.item).parent(".sortable").data("status-id");
                            var task_id = $(ui.item).data("task-id");
                            $.ajax({
                                url: url + '?status_id=' + status_id + '&task_id=' + task_id,
                                success: function(response) {}
                            });
                        }

                    }).disableSelection();
                });
            </script>
</body>



<!--  POP UP -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</html>
</div>
</div>
</div>

<!-- /page content -->

<?php
// include "footer.php";
?>