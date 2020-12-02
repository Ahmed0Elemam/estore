<?php
include "news/connect.php";

include_once 'news/class.paging.php';
$paginate = new paginate($connect);


$title = "أخبار الشركة | شركة مياه الشرب والصرف الصحي بالدقهلية";
$pageName = 'news';
include "header.php"; ?>
  <div id="news" class="container">
    <div class="well well-lg">
      <div class="panel panel-primary">
        <div class="panel-heading">أخبار الشركة</div>
        <div class="panel-body">


            

           <?php 
        $query = "SELECT * FROM news WHERE verified = 1 ORDER BY id DESC";       
		$records_per_page=9;
		$newquery = $paginate->paging($query,$records_per_page);
		$paginate->dataview($newquery);
				
		?>


                <nav aria-label="Page navigation text-center" style="direction:ltr;font-size:20px;">
                  <ul class="pagination text-center ar">
                      <?php
                    $paginate->paginglink($query,$records_per_page);
                      ?>
                  </ul>
                </nav>



        </div>
      </div>
    </div>
  </div>



  <?php include "footer.php"; ?>
