<!doctype html>

<!-- #BeginTemplate "Template.dwt" -->

<html>

<head>
		<title>Template</title>
		<link href="css/CSSreset.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
		<script type='text/javascript' src='js/jquery.min.js'></script>
		<script type='text/javascript' src='js/modernizr.custom.13303.js'></script>
		<script type="text/javascript" src="login.js"></script>
		<script type='text/javascript' src='js/jquery.shockwave.js'></script> 
		<link href="css/pop.css" media="screen" type="text/css" rel="stylesheet">
  		<script src="js/pop.js" language="JavaScript" type="text/javascript"></script>
		<script type='text/javascript' src='js/jquery.shockwave.effects.js'></script>
		<script type="text/javascript" src="js/highslide-with-gallery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/highslide.css"/>
			
		<script type="text/javascript">
			hs.graphicsDir = 'images/';
			hs.align = 'center';
			hs.transitions = ['expand', 'crossfade'];
			hs.wrapperClassName = 'dark borderless floating-caption';
			hs.fadeInOut = true;
			hs.outlineType = 'rounded-white';
			hs.numberPosition = 'caption';
			hs.dimmingOpacity = .75;
		
			// Add the controlbar
			if (hs.addSlideshow) hs.addSlideshow({
				//slideshowGroup: 'group1',
				interval: 5000,
				repeat: true,
				useControls: true,
				fixedControls: 'fit',
				overlayOptions: {
					opacity: .5,
					position: 'bottom center',
					hideOnMouseOut: true
				}
			});
		</script>

		<script>
				var imagesDataArray = [ 
				   {
				      src: 'image/61395_430687823661857_1560953120_n.jpg',
				      url: 'http://en.wikipedia.org/wiki/Bonsai',
				      target: '_blank',
				      description: 'Bonsai is a Japanese art form using miniature trees grown in containers.'
				   },
				   {
				      src: 'images/197704_385392314858075_744554111_n.jpg',
				      url: 'http://en.wikipedia.org/wiki/Red_telephone_box',
				      description: 'The red telephone box is a familiar sight on the streets of the United Kingdom.'
				   },
				   {
				      src: 'images/251982_389359141128059_3295411_n.jpg',
							description: '',
				   },
				   {
				      src: 'images/484457_393238430740130_847336946_n.jpg',
							url: 'http://en.wikipedia.org/wiki/Autumn',
				      description: 'Autumn marks the transition from summer into winter, in September (Northern Hemisphere) or March (Southern Hemisphere).'
				   },
				   					];
				
				
				jQuery(function(){
				
					$('#cubeslider2').shockwave(imagesDataArray, {
				   'slider-type': 'CubeSlider',
				   'rotation-duration': 4000,  // in ms
				   'tiles-in-x': 40,
				   'tiles-in-y': 1,
				   'wave-fixed-origin': [0, 0],
					'standard-control-buttons-area': null,
				   'autostart-slideshow': true
				
					});
				
				})
				
		</script>
		<link href="css/CSSreset.css" rel="stylesheet" type="text/css" media="screen" />
		<style type="text/css">

			.auto-style1 
			{
				margin-left: 0;
			}
		</style>

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
						
						&nbsp;
						<div id="banner">
								
								<div id='cubeslider2'></div>
						</div>
						<!-- #BeginEditable "Centre" -->
						
								<div id="moto">
									<p>it's Neyon</p>
						</div>
	
						
						<div id="shoppic">		
							<img id="shop" src="images/neyonschapshopll.jpg" alt="NeyonSchapShop">
						</div>
						<div id="shopdeescription">
							<div id="neyon">Neyon Schap</div>
							<br><br><p>We understand that girls are always want to look fashionable. We also understand that there is an easy way to become the centre of attention. We call it "Effortlessly Style", and that's our mission is all about. 
							Created as a local brand on February 2012, Neyon Schap combined the latest fashion trends and creativity into something different in clothing style. Providing confidence in affordable price and also the comfortableness in our product, we use light materials such as cotton, chiffon and PE cotton. 
							Whether it is on campus or hang out places, Neyon Schap is here to make you feel confidence with affordable prices as well.</p>
						</div>				
						
						
								
								
						<!-- #EndEditable -->
						<div id="footer" style="left: 0px; top: 0px">
									<p>Copyright (c) 2012, Hrishikesh Karale. all rights reserved </p>
						</div>
				</div>
		</div>

</body>