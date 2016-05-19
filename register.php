<!doctype html>

<!-- #BeginTemplate "temp.dwt" -->

<head>
		<title>Template</title>
		<link href="css/CSSreset.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
		<script type='text/javascript' src='js/modernizr.custom.13303.js'></script>
		<script type="text/javascript" src="login.js"></script>
		<script type='text/javascript' src='js/jquery.shockwave.js'></script> 
		<link href="css/pop.css" media="screen" type="text/css" rel="stylesheet">
  		<script src="js/pop.js" language="JavaScript" type="text/javascript"></script>
		<script type='text/javascript' src='js/jquery.shockwave.effects.js'></script>
		<link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="js/jquery.mi.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		  
		<script>
		$(document).ready(function() {
		  $("#datepicker").datepicker();
		});
		</script>

		</head>

<body>


<div id="all">

				<div id="main">	
						<div id="head">
								<div id="logo">
										<img src="images/336430_393239227406717_943581166_o.jpg" alt="Neyon Schap" title="Neyon Schap" />
								</div>								
								<div>	 
										<div id="socialMedia" class="auto-style1">
												<p>
												<img alt="Call us at" src="images/phone.png" title="Call Now" width="144"></p>
												
										</div><br><br><br>
										<div id="login">
												<?php
													include 'php/functions.php';
													if(!loggedin())
													{	
														echo "<a href=\"register.php\"> <img src=\"images/signup-icon copy.png\" title=\"Register Now\" alt=\"Register Now\"/> </a>";							
														echo "<div id=\"popupbox\"> 
																
																<form action=\"php/login.php\" method=\"POST\">
																<form method=\"post\">
																		<center>Username: <input type=\"text\" name=\"username\" > <p /></center>
																		<center>Password: <input type=\"password\" name=\"password\"> <p /></center>
																		
																		<center><input type=\"checkbox\" name=\"rememberme\" value=\"On\"> Remember Me<br />
																		<input type=\"submit\" name=\"submit\" value=\"log in\"></center>
																</form></form>
																<center><a href=\"javascript:login('hide');\">close</a></center> 
														</div>
														<p><a href=\"javascript:login('show');\"><img src=\"images/13956097-login-icon-on-glossy-green-round-button.png\"  title=\"LogIn\" alt=\"Login Button\" /></a></p>";
													}
													else if(loggedin())
													{
														echo "<div id=\"logged\">
																	<div id=\"logprofile\">
																		<div id=\"log1\">
																			<a href=\"profile.php\"><img alt=\"My Profile\" src=\"images/profile.png\" title=\" MY PROFILE\"></a>
																		</div>
																	</div>	
																	<div id=\"logout\">																								
																		<center><a href=\"php/logout.php\"><img alt=\"logout\" src=\"images/logout.png\" title=\"Logout\"></a></center></p>
																	</div>
															</div>";
													}													
												?>
										</div>
								</div>
						</div>
						
						<div id="navigation" >
								<ul id="nav" >
									<li> 
										<a href="index.php">HOME</a>
									</li>
									<li> 
										<a href="product.php">PRODUCTS</a>
									</li>
									<li> 
										<a href="services.php">SERVICES</a>
									</li>
									<li> 
										<a href="guestbook.php">GUESTBOOK</a>
									</li>
									<li> 
										<a href="contactUs.php">CONTACT</a>
									</li>
									<li> 
										<a href="aboutUs.php">ABOUT</a>
									</li>
								</ul>
								<ul id="contact">
										<li> 
										<a href="https://www.facebook.com/neyonschapclothing" target="_blank"> 
										<img src="images/Facebook-icon.png" alt="Follow on Facebook"  title="Follow Us on Facebook" /></a></li>
										<li> 
										<a href="https://www.blogspot.com" target="_blank"> 
										<img src="images/blogger_icon.png" alt="Visit our Blog"  title="Visit our Blog" /></a></li>
										<li> 
										<a href="http://twitter.com/NeyonSchap" target="_blank"> 
										<img src="images/twitter-icon.png" alt="Follow on Twitter" title="Follow Us on Twitter"  /></a></li>
										<li> 
										<a href="https://www.tumblr.com" target="_blank"> 
										<img src="images/Tumblr.png" alt="Follow on Tumblr" title="Follow Us on Tumbler" /></a></li>
										
								</ul>									
						</div>
							
						<div id="content">
	
							<div id="leftt">
<!-- #BeginEditable "rightt" -->






<form action="php/registration.php" method='post'>
											<fieldset id="fieldset" >
											<div class="pppp">Register</div>
											<div>
														<table id="table">
															  <tr>
																  <td >
																  		Name:
																  </td>
																  <td >
																  		
																  		<input class="tab" type="text" name="name">
																  	    
																  </td>
															  </tr>
															  <tr>
																  <td >
																  		<br>Date Of Birth:</td>
																  <td >
																  		<br>
																  		<select name="date">
																			<option value="0" selected>DATE</option>
																			<option value="1">1</option>
																			<option value="2">2</option>
																			<option value="3">3</option>
																			<option value="4">4</option>
																			<option value="5">5</option>
																			<option value="6">6</option>
																			<option value="7">7</option>
																			<option value="8">8</option>
																			<option value="9">9</option>
																			<option value="10">10</option>
																			<option value="11">11</option>
																			<option value="12">12</option>
																			<option value="13">13</option>
																			<option value="14">14</option>
																			<option value="15">15</option>
																			<option value="16">16</option>
																			<option value="17">17</option>
																			<option value="18">18</option>
																			<option value="19">19</option>
																			<option value="20">20</option>
																			<option value="21">21</option>
																			<option value="22">22</option>
																			<option value="23">23</option>
																			<option value="24">24</option>
																			<option value="25">25</option>
																			<option value="26">26</option>
																			<option value="27">27</option>
																			<option value="28">28</option>
																			<option value="29">29</option>
																			<option value="30">30</option>
																			<option value="31">31</option>
																			</select>&nbsp;&nbsp;
																		<select name="month">
																			<option value="0">MONTH</option>
																			<option value="1">Jan</option>
																			<option value="2">Feb</option>
																			<option value="3">Mar</option>
																			<option value="4">Apr</option>
																			<option value="5">May</option>
																			<option value="6">Jun</option>
																			<option value="7">Jul</option>
																			<option value="8">Aug</option>
																			<option value="9">Sep</option>
																			<option value="10">Oct</option>
																			<option value="11">Nov</option>
																			<option value="12">Dec</option>
																		</select>&nbsp;&nbsp;&nbsp;
																		<select name="year">
																			<option value="0">YEAR</option>
																			<option value="1950">1950</option>
																			<option value="1951">1951</option>
																			<option value="1952">1952</option>
																			<option value="1953">1953</option>
																			<option value="1954">1954</option>
																			<option value="1955">1955</option>
																			<option value="1956">1956</option>
																			<option value="1957">1957</option>
																			<option value="1958">1958</option>
																			<option value="1959">1959</option>
																			<option value="1960">1960</option>
																			<option value="1961">1961</option>
																			<option value="1962">1962</option>
																			<option value="1963">1963</option>
																			<option value="1964">1964</option>
																			<option value="1965">1965</option>
																			<option value="1966">1966</option>
																			<option value="1967">1967</option>
																			<option value="1968">1968</option>
																			<option value="1969">1969</option>
																			<option value="1970">1970</option>
																			<option value="1971">1971</option>
																			<option value="1972">1972</option>
																			<option value="1973">1973</option>
																			<option value="1974">1974</option>
																			<option value="1975">1975</option>
																			<option value="1976">1976</option>
																			<option value="1977">1977</option>
																			<option value="1978">1978</option>
																			<option value="1979">1979</option>
																			<option value="1980">1980</option>
																			<option value="1981">1981</option>
																			<option value="1982">1982</option>
																			<option value="1983">1983</option>
																			<option value="1984">1984</option>
																			<option value="1985">1985</option>
																			<option value="1986">1986</option>
																			<option value="1987">1987</option>
																			<option value="1988">1988</option>
																			<option value="1989">1989</option>
																			<option value="1990">1990</option>
																			<option value="1991">1991</option>
																			<option value="1992">1992</option>
																			<option value="1993">1993</option>
																			<option value="1994">1994</option>
																			<option value="1995">1995</option>
																			<option value="1996">1996</option>
																			<option value="1997">1997</option>
																			<option value="1998">1998</option>
																			<option value="1999">1999</option>
																			<option value="2000">2000</option>
																			<option value="2001">2001</option>
																			<option value="2002">2002</option>
																			<option value="2003">2003</option>
																			<option value="2004">2004</option>
																			<option value="2005">2005</option>
																			<option value="2006">2006</option>
																			<option value="2007">2007</option>
																			<option value="2008">2008</option>
																			<option value="2009">2009</option>
																			<option value="2010">2010</option>
																			<option value="2001">2001</option>
																			<option value="2002">2002</option>
																			<option value="2003">2003</option>
																			<option value="2004">2004</option>
																			<option value="2005">2005</option>
																		</select>
																	</td>
															  </tr>
															  <tr>
																	<td >
																			Gender:
																	</td>
																  	<td id="gender" >	
																			<input type="checkbox" name="gender" value="M" ><p>Male</p><br>
																			<input type="checkbox" name="gender" value="F" ><p>Female</p>
																    </td>
															  </tr>
															  <tr>
																    <td style="vertical-align: middle" >
																  		Address:
																  	</td>
																    <td >
																		 
																		 <textarea name="address" style="width: 250px; height: 50px" ></textarea></td>
															  </tr>
															  <tr>
																    <td >
																		Mobile:
																	</td>
																    <td >
																		
																		<input class="tab" type="text" name="mobile" ></td>
															  </tr>
															  <tr>
																    <td >
																    	email:
																    </td>
																    <td>
																  		
																  		<input class="tab" type="text" name="email" maxlength="100">
																    	
																    </td>
															  </tr>
															  <tr>
																    <td >
																  		Username:
																  	</td>
																    <td>
																  		
																  		<input class="tab" type="text" name="username"></td>
															  </tr>
															  <tr>
																    <td >
																  		Password:
																  	</td>
																    <td>
																  		
																  		<input class="tab" type="password" name="password"></td>
															  </tr>
															  <tr>
																    <td >
																  		Retype Password:
																  	</td>
																    <td>
																  		
																  		<input class="tab" type="password" name="rpassword"></td>
															  </tr>
															  <tr>
																    <td >
																    	Photo:
																    </td>
																    <td>
																  		<input class="tab" type="file" name="photo"></td>
															  </tr>
															  <tr> 
															  		<td>
															  			 Enter Code:
															  		</td>
															  		<td>
															  			<input class="textbox" type="text" name="captcha">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img class="sub" src="php/captcha.php"></td>
															  </tr>
														</table>
														<center><input type="submit" value="SUBMIT"> <input type="reset" value="RESET"></center>
													</div>
											</fieldset>
									</form>
									





<!-- #EndEditable -->

							</div>
							<div id="rightt">
<!-- #BeginEditable "leftt" -->
									
									
									
									
									
									
<!-- #EndEditable -->
							</div>		
						</div>
						
						<div id="footer">
									<p>Copyright (c) 2012, Hrishikesh Karale. all rights reserved </p>
						</div>
				
					
				</div>
		
		</div>
		
		
		
		

</body>