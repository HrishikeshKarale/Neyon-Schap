<?php
 
	 include 'functions.php';
	 if(!loggedin())
	 {
		 header( 'LOCATION: ../index.php' );
		 exit();
	 }
 ?>
 
 your logged in<p />
 <a href="logout.php">logout</a>