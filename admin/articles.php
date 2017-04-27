
<!-- page content -->
<div class="container" style="background:#eee;">
 <div class="col-xs-12">
   <div class="row">

     <div class="box-white table-responsive">
       <div class="text-bold"> Articles
         <button class="btn btn-info float-right">Create new article</button>
       </div>
       <hr>
       <table class="table table-striped table-responsive">
         <thead>
           <tr>
             <th style="width:5%">ID</th>
             
             <th style="width:10%">Category</th>
             <th style="width:20%">Title</th>
             <th style="width:35%">Content</th>
             <th style="width:20%">Actions</th>
           </tr>
         </thead>
         <tbody>
          <?php
          require('../controller/controller.php');
          $articles= getListArticles();
          foreach ($articles as $article) {

            ?>
            <tr>
              <td><?php echo $article->getIdArticle(); ?></td>
              <td><?php echo getCategoryName($article->getIdCategory()); ?></td>
              <td><?php echo $article->getTitle() ?></td>
              <td><?php echo substr($article->getContent(),0,100); ?></td>
              <td>
                <button class="btn btn-info">View</button>
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
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

