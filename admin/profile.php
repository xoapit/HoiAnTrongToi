<?php 
session_start();
if(!(isset($_SESSION['admin']))){
 header('Location:login.php');
 exit();
}

include('../controller/controller.php');
$admin=getAdmin($_SESSION['admin']);
?>
<div class="box_add_article" id="boxAddArticle">
  <div class="boxTitle row">
    <span class="glyphicon glyphicon-check"></span>
    Profile
  </div>
  <div class="boxContent row">
    <div class="col-sm-offset-2 col-sm-8 col-xs-12">
      <center>
        <h1><blue>Administrator Information</blue></h1>
        <hr>
        <form class="form form-horizontal">
          <div class="form-group">
            <label for="Username" class="col-sm-3 text-left">Username</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" readonly  id="username" value="<?php echo $admin->getUsername(); ?>" />
            </div>
          </div>
          <div class="form-group">
            <label for="fullname" class="col-sm-3 text-left">Full Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="fullname" value="<?php echo $admin->getFullname(); ?>" />
            </div>
          </div>   
          <button name="btnEditAdminInfo" class="btn btn-primary text-right pull-right" onclick="editAdminInfo()"><strong>Save Info</strong></button>
          <br>
          <br>

          <div class="form-group">
            <label for="password" class="col-sm-3 text-left">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="password" />
              <input type="password" class="form-control" style="display: none;" id="oldpassword" value="<?php echo $admin->getPassword(); ?>" />
            </div>
          </div>
          <div class="form-group">
            <label for="newpassword" class="col-sm-3 text-left">New Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="newpassword" value="<?php ?>" />
            </div>
          </div>
          <div class="form-group">
            <label for="confirmnewpassword" class="col-sm-3 text-left">Confirm New Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="confirmnewpassword" />
            </div>
          </div>   
          <div id="msgpassword">

          </div>
          <button name="btnUpdatePassword" class="btn btn-danger text-right pull-right" onclick="editAdminPass()"><strong>Update Password</strong></button>

        </form>
      </center>
    </div>
  </div>
</div>

<script src="js/myjs.js"></script>

<script type="text/javascript">

</script>