<?php 
include('../controller/controller.php');
?>
<?php include('addarticle.php') ?>
<!-- page content -->
<span class="glyphycon glyphycon-list"></span>
<div class="boxTitle">
  <span class="glyphicon glyphicon-check"></span>
  List Articles
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

             <th style="width:10%">Category</th>
             <th style="width:20%">Title</th>
             <th style="width:20%">Author</th>
             <th style="width:15%">Date</th>
             <th style="width:20%">Actions</th>
           </tr>
         </thead>
         <tbody>
          <?php
          $articles= getListArticles();
          foreach ($articles as $article) {

            ?>
            <tr>
              <td><?php echo $article->getIdArticle(); ?></td>
              <td><?php echo getCategoryName($article->getIdCategory()); ?></td>
              <td><?php echo $article->getTitle() ?></td>
              <td><?php echo $article->getAuthor(); ?></td>
              <td><?php echo $article->getPublishDate(); ?></td>
              <td>
                <button class="btn btn-info" onclick="viewArticle(<?php echo "'".$article->getIdArticle()."'"; ?>)">View</button>
                <button class="btn btn-success" onclick="callEditArticle(<?php echo "'".$article->getIdArticle()."'"; ?>)">Edit</button>
                <button class="btn btn-danger" onclick="deleteArticle(<?php echo "'".$article->getIdArticle()."'"; ?>)">Delete</button>
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

