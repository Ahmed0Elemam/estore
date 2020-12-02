<?php 

//http://localhost/fatora_service/fatora_data.php?dist_num=1&gr_num=1&br_num=3&acc_num=1&format=json
if(isset($_POST['dist_num']) && intval($_POST['dist_num'])) {



  $format = strtolower($_POST['format']) == 'json' ? 'json' : 'xml'; 
   $district_number = intval($_POST['dist_num']);
   $branch_number = intval($_POST['br_num']);
   $group_number = intval($_POST['gr_num']);
   $account_number = intval($_POST['acc_num']);

  /* connect to the db */
  $link = mysql_connect('localhost','appuser','app@user@dkwasc') or die('Cannot connect to the DB');
  mysql_select_db('dkwasc_miah1',$link) or die('Cannot select the DB');

  mysql_query("SET NAMES 'utf8'"); 
  mysql_query('SET CHARACTER SET utf8');
   $query = "SELECT * FROM bills WHERE district_number = $district_number AND group_no = $group_number AND branch_no = $branch_number AND account_no = $account_number ;";
  $result = mysql_query($query,$link) or die('Errant query:  '.$query);

  
  /* create one master array of the records */
  $users = array();
  if(mysql_num_rows($result)) {
    while($user = mysql_fetch_assoc($result)) {
      $users[] = array('user'=>$user);
    }
  }

  /* output in necessary format */
  if($format == 'json') {
    header('Content-type: application/json;charset=utf-8');
    echo json_encode(array('users'=>$users),JSON_UNESCAPED_UNICODE);
  }
  else {
    header('Content-type: text/xml');
    echo '<UserInfo>';
    foreach($users as $index => $user) {
      if(is_array($user)) {
        foreach($user as $key => $value) {
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
    echo '</UserInfo>';
  }

  /* disconnect from the db */
  @mysql_close($link);
}
 ?> 