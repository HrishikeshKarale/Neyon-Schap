<?php
		include 'functions.php';
		if( !loggedin() )
		if ((isset($_POST['password'])) && (isset($_POST['username'])))
		{
			$rememberme = false;
			$username = $_POST['username'];
			$password = $_POST['password'];
			$rememberme = @$_POST['rememberme'];

			if ( $username && $password )
			{

				$login = mysql_query("SELECT * FROM login where username = '$username'");
				$a=true;
				while ($row = mysql_fetch_assoc($login))
				{	
					$db_password = $row['password'];
					$loginok=false;
					if( md5($password) == $db_password )
					{
						$loginok = true;
						$a=false;
					}
					else
					{
						$loginok = false;
						$a=false;
					}
				}
				if($a==true)
					echo "Incorrect Username/Password Combnation.";
				else if($loginok == true)
				{
					if($rememberme == "On")
					{
						setcookie("username",$username, time()+3600);
					}
					else if ($rememberme == "")
					{
						$_SESSION['username']=$username;
						header('location: ../index.php');
					}
				}
				else
				{
					die("Incorrect Username/Password Combnation.");
				}
			}
			else
			{
				die("please enter a Username/Password.");
			}
		}
		else if (loggedin())
		{
			header( 'LOCATION: ../index.php' );		
		} 
		
?>
