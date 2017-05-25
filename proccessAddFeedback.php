
<?php 
include 'controller/controller.php';
$author=$_POST['author'];
$subject=$_POST['subject'];
$time=$_POST['time'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$content=$_POST['content'];

$feedback= new Feedback("",$author,$subject,$content,$time,$phone,$email);
addFeedback($feedback);
header("location:index.php");
?>