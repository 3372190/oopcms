<?php include_once("includes/admin-header.php"); ?>

<!-- navigation starts -->
<?php include_once("includes/admin-top-nav.php"); ?>
<?php include_once("includes/admin-side-nav.php"); ?>
<!-- navigation ends -->

<div id="page-wrapper">
  <?php include_once("includes/admin-content.php"); ?>
<div class="container-fluid">
  <div class="well clearfix">
    <div class="col-sm-12">
      <form action="" method="post">
        <div class="input-group">
          <input type="email" class="form-control" name="email" style="height:45px" placeholder="Search User Email Here..." required>
          <span class="input-group-btn">
            <button class="btn btn-danger btn-lg" name="submit" type="submit"><span class="glyphicon glyphicon-search"></span></button>
          </span>
        </div><!-- /input-group -->
    </form>
    </div><!-- /.col-lg-6 -->
  </div><!-- /.well-->


<?php
use oopcms\UserManager;
use oopcms\Storage\UserControl;

$manager = new UserManager(new UserControl($db));

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $user = $manager->searchUser($email);

?>

<div class="well">
  <?php  if($user == null){ die('The user does not exist'); } ?>
  <table class="table ">
     <thead>
       <tr class="info">
         <td> #id   </td>
         <td> USERNAME </td>
         <td> PASSWORD </td>
         <td> FIRSTNAME </td>
         <td> LASTNAME </td>
         <td> ROLE </td>
       </tr>
     </thead>


     <tbody>
       <tr class="">
         <?php
         echo '<td>', $user->getId()        ,'</td>';
         echo '<td>', $user->getEmail()     ,'</td>';
         echo '<td>', $user->getPass()      ,'</td>';
         echo '<td>', $user->getFirstName() ,'</td>';
         echo '<td>', $user->getLastName()  ,'</td>';
         echo '<td>', $user->getRole()      ,'</td>';
         ?>
       </tr>
     </tbody>
  </table>
</div>
<?php
}
?>

</div> <!-- End Container-fluid -->
<?php include_once("includes/admin-footer.php") ?>
