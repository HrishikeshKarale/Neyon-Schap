<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- #BeginTemplate "Template.dwt" -->

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
									<p>Products</p>
						</div>
		
						<div id="content">
								<div id="leftt">		
									<div class="highslide-gallery">
														<a href="images/2.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/2 - Copy.jpg" title="Click to enlarge" class="highslidee" />
														</a>
														<div class="highslide-caption">
															Caption for the first image.
														</div>
														<a href="images/3.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/3 - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/5.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/5 - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/6.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/6 - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<br>
														
														
														<a href="images/7.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/7 - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/981_430689120328394_103267645_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/981_430689120328394_103267645_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/46284_430688073661832_1227593026_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/46284_430688073661832_1227593026_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/208169_430689810328325_570183899_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/208169_430689810328325_570183899_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<br>
														
														
														<a href="images/396708_393238560740117_1162174043_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/396708_393238560740117_1162174043_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/398393_430689306995042_290705776_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/398393_430689306995042_290705776_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/403985_430689603661679_1999139993_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/403985_430689603661679_1999139993_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/404768_430687900328516_791416724_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/404768_430687900328516_791416724_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<br>
														
														
														<a href="images/419561_430690090328297_1486313851_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/419561_430690090328297_1486313851_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/420449_430688210328485_1867319863_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/420449_430688210328485_1867319863_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/429233_430690200328286_1171548040_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/429233_430690200328286_1171548040_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/487138_430688480328458_510081329_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/487138_430688480328458_510081329_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<br>
														
														
														<a href="images/488083_430689933661646_1639482241_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/488083_430689933661646_1639482241_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/534480_393238114073495_744207023_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/534480_393238114073495_744207023_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/545753_430688773661762_1303966954_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/545753_430688773661762_1303966954_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/550446_430689723661667_1652911401_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/550446_430689723661667_1652911401_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<br>
														
														
														<a href="images/560371_430687623661877_1401562510_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/560371_430687623661877_1401562510_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/564426_430687433661896_2055635133_n.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/564426_430687433661896_2055635133_n - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/beach.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/beach - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/bonsai.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/bonsai - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<br>
														
														
														<a href="images/dfdfdf.gif" class="highslide" onclick="return hs.expand(this)">
															<img src="images/dfdfdf - Copy.gif" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/dfghdfgfdgfd.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/dfghdfgfdgfd - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/forest.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/forest - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/leaves.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/leaves - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<br>
														
														
														<a href="images/tyty.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/tyty - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/Untitled.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/Untitled - Copy.jpg" ttle="Click to enlarge" class="highslidee"/></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/village.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/village - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<a href="images/soo.jpg" class="highslide" onclick="return hs.expand(this)">
															<img src="images/soo - Copy.jpg" title="Click to enlarge" class="highslidee" /></a>
														<div class="highslide-caption">
															Caption for the second image.
														</div>
														<br>
														
														
									</div>
							</div>
							<div id="rightt">
									We understand that girls are always want to look fashionable. We also understand that there is an easy way to become the centre of attention. We call it "Effortlessly Style", and that's our mission is all about. 
									Created as a local brand on February 2012, Neyon Schap combined the latest fashion trends and creativity into something different in clothing style. Providing confidence in affordable price and also the comfortableness in our product, we use light materials such as cotton, chiffon and PE cotton. 
									Whether it is on campus or hang out places, Neyon Schap is here to make you feel confidence with affordable prices as wellWe understand that girls are always want to look fashionable. We also understand that there is an easy way to become the centre of attention. We call it "Effortlessly Style", and that's our mission is all about. 
									Created as a local brand on February 2012, Neyon Schap combined the latest fashion trends and creativity into something different in clothing style. Providing confidence in affordable price and also the comfortableness in our product, we use light materials such as cotton, chiffon and PE cotton. 
									Whether it is on campus or hang out places, Neyon Schap is here to make you feel confidence with affordable prices as wellWe understand that girls are always want to look fashionable. We also understand that there is an easy way to become the centre of attention. We call it "Effortlessly Style", and that's our mission is all about. 
									Created as a local brand on February 2012, Neyon Schap combined the latest fashion trends and creativity into something different in clothing style. Providing confidence in affordable price and also the comfortableness in our product, we use light materials such as cotton, chiffon and PE cotton. 
									Whether it is on campus or hang out places, Neyon Schap is here to make you feel confidence with affordable prices as well
							</div>
						</div>
						
								
						
								
						<!-- #EndEditable -->
						<div id="footer" style="left: 0px; top: 0px">
									<p>Copyright (c) 2012, Hrishikesh Karale. all rights reserved </p>
						</div>
				</div>
		</div>

</body><!-- #EndTemplate -->
