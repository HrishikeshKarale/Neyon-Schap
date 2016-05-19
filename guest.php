<?php
include 'functions.php';

									$errors =array();
									
									if(isset($_POST['gbname']) && isset($_POST['gbemail']) && isset($_POST['gbmessage']))
									{
										$gbname = mysql_real_escape_string(htmlentities($_POST['gbname']));
										$gbemail = mysql_real_escape_string(htmlentities($_POST['gbemail']));
										$gbmessage = mysql_real_escape_string(htmlentities($_POST['gbmessage']));
										
										if(empty($gbname) || empty($gbemail) || empty($gbmessage))
										{
											$errors[]='ONE OR MORE FIELDS ARE EMPTY.';
										}
										
										if((strlen($gbname)>30) || (strlen($gbemail)>100) || (strlen($gbmessage)>300) )
										{
											$errors[]='Character Limit Exceeded.';
										}
											
										if (empty($errors))
										{
											$insert= "INSERT INTO entries VALUES ('',CURRENT_TIMESTAMP,'$gbname','$gbemail','$gbmessage')";
											if( mysql_query($insert) )
												header('LOCATION: ../guestbook.php');
											else
												$errors[] = 'Something went wrong--please try again';
										}
										else
										{
											foreach($errors as $error)
											{
												echo '<p><Strong>'.$error.'</strong></p>';
											}
										}
									}
?>