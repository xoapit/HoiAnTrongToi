<?php 
session_start();
if(!(isset($_SESSION['admin']))){
 header('Location:login.php');
 exit();
}

$idArticle= $_GET['idArticle'];
include '../controller/controller.php';
$article=getArticle($idArticle);
?>
<div class="box_add_article" id="boxAddArticle">
  <div class="boxTitle">
    <span class="glyphicon glyphicon-check"></span>
    Edit Article
  </div>
  <div class="boxContent">
    <form method="post" class="form form-horizontal">
      <div class="form-group">
        <label for="title" class="col-sm-2 ">Title</label>
        <div class="col-sm-8">
          <input type="text" class="form-control"  id="idArticle" style="display: none;" value="<?php echo $article->getIdArticle(); ?>" />
          <input type="text" class="form-control" required="true" id="title" value="<?php echo $article->getTitle(); ?>" />
        </div>
      </div>

      <div class="form-group">
        <label for="urlimage" class="col-sm-2 ">Url Image</label>
        <div class="col-sm-8">
          <input type="text" required="true" class="form-control" id="urlImage" value="<?php echo $article->getImage(); ?>" />
        </div>
      </div>
      <div class="form-group">
        <label for="hashtag" class="col-sm-2 ">Hashtag</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="hashtag" value="<?php echo $article->getTitle(); ?>" />
        </div>
      </div>
      <div class="form-group">
        <label for="hashtag" class="col-sm-2 ">Author</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="author" value="<?php echo $article->getAuthor(); ?>" />
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-sm-2">Category</label>
        <div class="col-sm-3">

          <input type="text" class="form-control" id="categoryName" readonly="true" value="<?php echo getCategoryName($article->getIdCategory()); ?>" />
        </div>
      </div>

      <hr>
      <textarea name="articleContentEdit" id="articleContentEdit" rows="10" cols="100" class="form-group" >
        <?php echo $article->getContent(); ?>
      </textarea>
      <hr>
      <button name="btnEdit" class="btn btn-danger text-right pull-right" onclick="editArticle()"><strong>Edit</strong></button>
      <script> 
        CKEDITOR.replace('articleContentEdit');
      </script>
    </form>
  </div>
</div>

<script type="text/javascript">
  function editArticle(){
    var articleContentValue= CKEDITOR.instances.articleContentEdit.getData();
    $.post(
      'processEditArticle.php',         
      {
        idArticle: $('#idArticle').val(),
        title : $('#title').val(),
        urlImage : $('#urlImage').val(),
        author : $('#author').val(),
        articleContent :articleContentValue,
        hashtag:$('#hashtag').val()
      },  
      function(result){  
       $('#webContent').load('article.php');
     }, 
     'text'
     );
  }
</script>

