<?php 

//http://localhost/fatora_service/fatora_data.php?dist_num=1&gr_num=1&br_num=3&acc_num=1&format=json
//if($_SERVER["REQUEST_METHOD"]=="POST") {



  $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; 
  //$district_number = intval($_GET['dist_num']);
  //$group_number = intval($_GET['gr_num']);
  //$branch_number = intval($_GET['br_num']);
  //$account_number = intval($_GET['acc_num']);

  /* connect to the db */
  $link = mysql_connect('localhost','appuser','app@user@dkwasc') or die('Cannot connect to the DB');
  mysql_select_db('dkwasc_miah1',$link) or die('Cannot select the DB');

  mysql_query("SET NAMES 'utf8'"); 
  mysql_query('SET CHARACTER SET utf8');
  $query = "SELECT * FROM `dkwasc_miah1`.`news` ORDER BY DATE DESC ;";
  $result = mysql_query($query,$link) or die('Errant query:  '.$query);

  /* create one master array of the records */
  $all_news = array();
  if(mysql_num_rows($result)) {
    while($news = mysql_fetch_assoc($result)) {
      $all_news[] = array('news'=>$news);
    }
  }

  /* output in necessary format */
  if($format == 'json') {
    header('Content-type: application/json;charset=utf-8');
    echo json_encode(array('all_news'=>$all_news),JSON_UNESCAPED_UNICODE);
  }
  else {
    header('Content-type: text/xml');
    echo '<NewsInfo>';
    foreach($all_news as $index => $news) {
      if(is_array($user)) {
        foreach($news as $key => $value) {
          echo '<',$key,'>';
          if(is_array($value)) {
            foreach($value as $tag => $val) {
              echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
            }
          }
          echo '</',$key,'>';
        }
      }
    }
    echo '</NewsInfo>';
  }

  /* disconnect from the db */
  @mysql_close($link);
//}
 ?> 