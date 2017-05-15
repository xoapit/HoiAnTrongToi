<?php  
session_start();
if(!(isset($_SESSION['admin']))){
 header('Location:login.php');
 exit();
}
?>
<button class="btn btn-info pull-right" id="btnCreateNewArticle" onclick="switchAddArticle()">Create new article</button>
<div class="box_add_article" id="boxAddArticle">
  <div class="boxTitle">
    <span class="glyphicon glyphicon-check"></span>
    Create New Article
  </div>
  <div class="boxContent">
    <form method="post" class="form form-horizontal">
      <div class="form-group">
        <label for="title" class="col-sm-2 ">Title</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" required="true" id="title" />
        </div>
      </div>

      <div class="form-group">
        <label for="urlimage" class="col-sm-2 ">Url Image</label>
        <div class="col-sm-8">
          <input type="text" required="true" class="form-control" id="urlImage"/>
        </div>
      </div>
      <div class="form-group">
        <label for="hashtag" class="col-sm-2 ">Hashtag</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="hashtag"/>
        </div>
      </div>
      <div class="form-group">
        <label for="hashtag" class="col-sm-2 ">Author</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="author"/>
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-sm-2">Category</label>
        <div class="col-sm-3">
          <select name="categoryName" id="idCategory" class="form-control">
            <?php 
            $categories= getListCategories();
            foreach ($categories as $category) {
              ?>
              <option value="<?php echo $category->getIdCategory(); ?>"><?php echo $category->getCategoryName(); ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="description">Description:</label>
          <textarea class="form-control" rows="5" name="description" id="description"></textarea>
        </div>
        <hr>
        <textarea name="articleContent" id="articleContent" rows="10" cols="100" class="form-group" value="">

        </textarea>
        <hr>
        <button name="btnAdd" class="btn btn-danger text-right pull-right" onclick="callAddArticle()"><strong>Create</strong></button>
        <script> 
          CKEDITOR.replace('articleContent');
        </script>
      </form>
    </div>
  </div>



  <script type="text/javascript">

    $(document).ready(function(){
      switchAddArticle();
    });  
    function switchAddArticle(){
      if(document.getElementById('boxAddArticle').style.display=='none'){
        document.getElementById('boxAddArticle').style.display='';
      }else{
        document.getElementById('boxAddArticle').style.display='none';
      }
    }

    function callAddArticle(){
      var articleContentValue= CKEDITOR.instances.articleContent.getData();
      $.post(
        'processAddArticle.php',         
        {
          title : $('#title').val(),
          urlImage : $('#urlImage').val(),
          articleContent :articleContentValue,
          idCategory :$('#idCategory').val(),
          description :$('description').val(),
          hashtag:$('#hashtag').val(),
          author:$('#author').val()
        },  
        function(result){ 
          $('#webContent').load('articles.php');
        }, 
        'text'
        );
    }

  </script>
  <script src="js/myjs.js"></script>
