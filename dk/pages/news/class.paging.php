<?php

class paginate
{
	private $db;
	
	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}
	
	public function dataview($query){
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0){
        ?>
<div class="ui stackable three column grid raised link cards">
<?php
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
                  <div class="card">
              <a href="news/news.php?id=<?php echo $row['id']; ?>">
                <div class="image">
                  <img src="<?php echo $row['img']; ?>" width="100%" height="100%">
                </div>
              </a>
              <div class="content">

                <a href="news/news.php?id=<?php echo $row['id']; ?>">
                  <div class="description text-center">
                    <?php echo $row['title']; ?>

                  </div>

                  <div class="meta left floated">
                    <span><?php echo $row['date']; ?></span>
                  </div>
                </a>
              </div>

            </div>
                <?php
			}
		}
        ?>
</div>
    <?php

		
	}
	
	public function paging($query,$records_per_page){
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}
	
	public function paginglink($query,$records_per_page)
	{
		
		$self = $_SERVER['PHP_SELF'];
		
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		$total_no_of_records = $stmt->rowCount();
		
		if($total_no_of_records > 0)
		{
			
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];
			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				echo "<li><a href='".$self."?page_no=1'>الأولى</a></li>";
				echo "<li><a href='".$self."?page_no=".$previous."'>السابقة</a></li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<li class='active'><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?page_no=".$next."'>التالية</a></li>";
				echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>الأخيرة</a></li>";
			}
			
		}
	}
}