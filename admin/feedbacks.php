<?php 
session_start();
if(!(isset($_SESSION['admin']))){
 header('Location:login.php');
 exit();
}

include('../controller/controller.php');
?>
<!-- page content -->
<span class="glyphycon glyphycon-list"></span>
<div class="boxTitle">
  <span class="glyphicon glyphicon-check"></span>
  List Feedback
</div>
<div class="container boxContent" style="background:#eee;">
 <div class="col-xs-12">
   <div class="row">

     <div class="box-white table-responsive table-bordered">
       <hr>
       <table class="table table-striped table-responsive">
         <thead>
           <tr>
             <th style="width:5%">ID</th>
             <th style="width:10%">Author</th>
             <th style="width:15%">Subject</th>
             <th style="width:30%">Content</th>
             <th style="width:10%">Date</th>
             <th style="width:10%">Phone</th>
             <th style="width:15%">Email</th>
             <th style="width:5%">Actions</th>
           </tr>
         </thead>
         <tbody>
          <?php
          $feedbacks= getListFeedbacks();
          foreach ($feedbacks as $feedback) {

            ?>
            <tr>
              <td><?php echo $feedback->getIdFeedback(); ?></td>
              <td><?php echo $feedback->getAuthor(); ?></td>
              <td><?php echo $feedback->getSubject() ?></td>
              <td><?php echo $feedback->getContent(); ?></td>
              <td><?php echo $feedback->getTime(); ?></td>
              <td><?php echo $feedback->getPhone(); ?></td>
              <td><?php echo $feedback->getEmail(); ?></td>
              <td>
                <button class="btn btn-danger" onclick="callDeleteFeedback(<?php echo "'".$feedback->getIdFeedback()."'"; ?>)">Delete</button>
              </td>                      
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table> 
    </div>
  </div>
</div>
</div>
<!-- /page content -->

<script src="js/myjs.js"></script>

