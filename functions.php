<?php
		session_start();
		
		mysql_connect( "localhost","root","")or die("connection not established");
		mysql_select_db("neyonschap") or die();
		
			
		function loggedin()
		{
			if(isset($_SESSION['username'])||isset($_COOKIE['username']))
			{ 
				$loggedin = true;
				return $loggedin;
			}
			
		}		
?>