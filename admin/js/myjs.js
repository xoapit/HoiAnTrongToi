
function deleteArticle(IdArticle){
  var confirmDelete = confirm("Are you sure that you want to delete this article: ID("+ IdArticle +")")
  if(confirmDelete){
    $.post(
      'processdeletearticle.php',         
      {
        idArticle : IdArticle,
      },  
      function(result){ 
        $('#webContent').load('articles.php');
      }, 
      'text'
      );
  }
}

function viewArticle(IdArticle){
  $('#webContent').load('viewArticle.php?idArticle='+IdArticle);
}

function callEditArticle(IdArticle){
  $('#webContent').load('editArticle.php?idArticle='+IdArticle);
}

function editArticle(){
  var articleContentValue= CKEDITOR.instances.articleContentEdit.getData();

  $.post(
    'processEditArticle.php',         
      // {
      //   idArticle: $('#idArticle').val(),
      //   title : $('#title').val(),
      //   urlImage : $('#urlImage').val(),
      //   author : $('#author').val(),
      //   description : $('#description').val(),
      //   articleContent :articleContentValue,
      //   hashtag:$('#hashtag').val()
      // },  
      function(result){ 
        alert("abc");
        jQuery('#webContent').load('articles.php');
        alert("abcd");
      }, 
      'text'
      );
}

function editAdminPass(){
  var pass=$('#password').val();
  var oldpass=$('#oldpassword').val();
  var newpass=$('#newpassword').val();
  var confirmpass=$('#confirmnewpassword').val();

  if((pass==oldpass)&&(newpass==confirmpass)&&(newpass.length>=6)){
    $.post(
      'processEditAdminPass.php',         
      {
        username:$('#username').val(),
        password: $('#newpassword').val()
      },  
      function(result){ 
        if(result=='OK'){
          alert("Updated password successfully");
        }
      }, 
      'text'
      );
  }else{
    alert("Update password failed!");
  }
}

function editAdminInfo(){
  $.post(
    'processEditAdminInfo.php',         
    {
      username:$('#username').val(),
      fullname: $('#fullname').val()
    },  
    function(result){ 
      $('#webContent').html(result);
    }, 
    'text'
    );
}

function callProfile(){
  $('#webContent').load('profile.php');
}



//feedback

function callDeleteFeedback(idFeedback){
  var confirmDelete = confirm("Are you sure that you want to delete this feedback: ID("+ idFeedback +")")
  if(confirmDelete){
    $.post(
      'processDeleteFeedback.php',         
      {
        idFeedback : idFeedback,
      },  
      function(result){ 
        $('#webContent').load('feedbacks.php');
      }, 
      'text'
      );
  }
}

//login

