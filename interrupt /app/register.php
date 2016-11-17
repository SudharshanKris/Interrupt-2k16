<?php
require_once('connections.php');
if(isset($_POST['email']) )
{

	$tag = $_POST['tag']; 

	
		$name = $_POST['name'];
		$phone_number = $_POST['phone_no'];
		$email = $_POST['email'];
		$password = $_POST['password'];
                $college = $_POST['college'];
		$reg_array = array();
		$password=sha1($password);
        	$password=md5($password);
        	$password=sha1($password);

               
		$check_query = $connect->query("SELECT * FROM `users` where `email_id` = '$email'");
		$n = $check_query->num_rows;
		if($n == 0)
		{
			$result = $connect->query("INSERT INTO users(name,email_id,phone_no,password,auth_token,college_name) VALUES ('$name','$email','$phone_number','$password','1','$college')") or die($connect->error);	
			if($result)
			{
				  #exec("python /var/www/mail2python.py $email");
				$reg_array['success'] = 1;
				$reg_array['id'] =$connect->insert_id;
				$reg_array['auth_token'] = $auth; 	
			}
		}
		else
		{
			$row = mysqli_fetch_array($check_query,MYSQLI_ASSOC);
			$reg_array['success'] = 0;
			$reg_array['id'] = $row["id"];
			$reg_array['auth_token'] = $row["auth_token"];
		}
		echo json_encode($reg_array);
		$check_query->close();
	

	
}
else
{
	echo "not set";
}
?>
		
