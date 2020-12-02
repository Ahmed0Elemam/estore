<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-login']))
	{
		//$user_name = $_POST['user_name'];
		$user_name = trim($_POST['user_name']);
		$user_password = trim($_POST['password']);
		
		$password = md5($user_password);
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_name=:name");
			$stmt->execute(array(":name"=>$user_name));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			
			if($row['user_password']==$password){
				
				echo "ok"; // log in
				$_SESSION['user_session'] = $row['user_id'];
			}
			else{
				
				echo "خطأ في كلمة المرور أو البريد الالكتروني"; // wrong details 
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>