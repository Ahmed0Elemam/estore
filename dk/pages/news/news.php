<?php
include "connect.php";
if(isset($_GET['id'])){
$id = $_GET['id'];
 $stmt1 = $connect->prepare("select * from news where id = $id");
          $stmt1->execute();
          $count = $stmt1->rowCount();
          $rows1 = $stmt1->fetchAll();
          
 if($count > 0){
 foreach($rows1 as $news){

 $title = $news['title'];
 $img = $news['img'];
  include "header.php";

?>
  <div class="container">
    <div class="well well-lg">
      <div class="panel panel-primary">

        <div class="panel-heading">
          
          <h2>
            <?php echo $news['title']; ?></h2>
          
            <h3 class="text-left"><?php echo $news['date']; ?></h3>
        </div>
        <div class="panel-body">
          
         
      <?php
          echo $news['content'];
          
 }
?>

        </div>
      </div>
  <?php 
        }  else {
   include "header.php"; 
      ?>
   <div class="container">
    <div class="well well-lg">
<div class='alert alert-danger text-center' style="padding:120px 0;"><strong>عفواً !!! لا يمكن الدخول لهذه الصفحة </strong></div>
    <?php }
}else { 
      include "header.php"; 
      ?>
   <div class="container">
    <div class="well well-lg">
<div class='alert alert-danger text-center' style="padding:120px 0;"><strong>عفواً !!! لا يمكن الدخول لهذه الصفحة </strong></div>
      <?php } ?>
    </div>
  </div>
    

  <?php include "footer.php"; ?>
