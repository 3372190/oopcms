<?php include_once("includes/admin-header.php"); ?>

<!-- navigation starts -->
<?php include_once("includes/admin-top-nav.php"); ?>
<?php include_once("includes/admin-side-nav.php"); ?>
<!-- navigation ends -->
<div id="page-wrapper">
    <div class="container-fluid">
    <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Users
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-fw fa-user"></i> <a href="users.php">Users</a>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
    </div> <!-- /.container-fluid -->


  <div class="container-fluid">
    <div class="table table-condensed">
      <table class="table table-bordered table-hover">
        <tr class="warning">
          <td> # </td>
          <td> USER-NAME </td>
          <td> EMAIL </td>
          <td> First Name </td>
          <td> Last Name </td>
          <td> ROLE </td>
        </tr>

        <?php
        $display_users = Users::display_users();
        echo "<pre>";
        print_r($display_users);
        echo "</pre>";


        foreach ($display_users as $users) {
          echo "<tr>";
            echo "<td> $users->user_id    </td>";
            echo "<td> $users->user_name   </td>";
            echo "<td> $users->user_email </td>";
            echo "<td> $users->user_fname </td>";
            echo "<td> $users->user_lname </td>";
            echo "<td> $users->user_role </td>";
          echo "</tr>";
        }



       ?>
      </table>
    </div>
  </div> <!-- /.container-fluid -->








</div>

<?php include_once("includes/admin-footer.php") ?>
