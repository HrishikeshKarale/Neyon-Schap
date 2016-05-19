<?php
		include 'functions.php';
			$username = mysql_real_escape_string(htmlentities($_POST['username']));
			$password = mysql_real_escape_string(htmlentities(md5($_POST['password'])));
			$name = mysql_real_escape_string(htmlentities($_POST['name']));
			$address = mysql_real_escape_string(htmlentities($_POST['address']));
			$gender = mysql_real_escape_string(htmlentities($_POST['gender']));
			$year = mysql_real_escape_string(htmlentities($_POST['year']));
			$month = mysql_real_escape_string(htmlentities($_POST['month']));
			$date = mysql_real_escape_string(htmlentities($_POST['date']));
			$email = mysql_real_escape_string(htmlentities($_POST['email']));
			$mobile = mysql_real_escape_string(htmlentities($_POST['mobile']));
			$photo = mysql_real_escape_string(htmlentities(@$_POST['photo']));
			
			if ( isset($username) && isset($password) )
			{
				$dob=$year."-".$month."-".$date;
				$insert = "INSERT INTO login (username, password) values ('$username', '$password')";
				if( mysql_query($insert) )
				{
					$user= "Insert into useraccount values ('','$name','$dob','$address','$gender','$email','$username','','$photo','')";
					if(mysql_query($user))
					{
						header('location: ../index.php'); 
					}
					else
					{
						echo 'Something went wrong--please try again';
						header('location: ../register.php');
					}
				}
			}
			else
			{
				echo 'Enter username and password';
				header('location: ../register.php');
			}
?>