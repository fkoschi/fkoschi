<?php 
	
	$file = './json/german.json';

	if (isset($_GET)) {
		if ($_GET['language']=='german') {
			$file = './json/german.json';
		}
		else if( $_GET['language']=='english') {
			$file = './json/english.json';
		}
	}

	$filedata = file_get_contents($file);		
	
	$Language = json_decode($filedata,true);
	/*
	print_r("<pre>");
	print_r($Language);
	print_r("</pre><br>");
	
 	print_r( $Language['nav'][0]['firstPage'] );
	exit;
	*/
?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>fkoschi.de</title>
	
	<meta name="author" content="Felix Koschmidder" />
	<meta name="description" content="bewerbung lebenslauf application search for new projects felix koschmidder fkoschi university degree" />
	<meta name="keywords"  content="bewerbung,lebenslauf,persönliches,coding, bachelor, master, informatik, medieninformatik" />
	<meta name="Resource-type" content="Document" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Favicon -->
    	<link rel="icon" type="image/x-icon" href="favicon/favicon.ico">

    <!-- CSS -->
    	<!-- Google -->
   	    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    	<!-- fullPage -->
    	<link rel="stylesheet" type="text/css" href="css/fullpage/jquery.fullPage.css">
    	<!-- Own Stuff -->
    	<link rel="stylesheet" type="text/css" href="css/map.css">
    	<link rel="stylesheet" type="text/css" href="css/main.css">  <!-- Main -->
    	<link rel="stylesheet" type="text/css" href="css/page1.css"> <!-- Page 1 -->
    	<link rel="stylesheet" type="text/css" href="css/page2.css"> <!-- Page 2 -->
    	<link rel="stylesheet" type="text/css" href="css/page3.css"> <!-- Page 3 -->
    	<link rel="stylesheet" type="text/css" href="css/page4.css"> <!-- Page 3 -->
    	<!-- Animate.css -->
    	<link rel="stylesheet" type="text/css" href="css/animate.css">
    	<!-- Bootstrap -->
    	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-theme.css">
    	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    	<!-- Font Awesome -->
    	<link rel="stylesheet" type="text/css" href="css/font-awesome-4.3.0/css/font-awesome.min.css">   
    <!--     -->

    <!-- JavaScript -->

    	<!-- JQUERY -->
    	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script> 
    	<script type="text/javascript" src="https://code.jquery.com/jquery-ui.min.js"></script>
    	<!-- fullPage -->
    	<script type="text/javascript" src="js/fullpage/jquery.fullPage.js"></script> 
    	<!-- Google API -->
    	<script src="https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js"></script> 
    	<!-- Rotate Words -->
    	<script type="text/javascript" src="js/text-rotator/jquery.simple-text-rotator.js"></script>
    	<!-- Own Stuff -->
    	<script type="text/javascript" src="js/main.js"></script>
    	<script type="text/javascript" src="js/mySkillsChart.js"></script>
    	<!-- MODERNIZR -->
    	<script type="text/javascript" src="js/modernizr.custom.js"></script>
    	<!-- bpopup -->
    	<script type="text/javascript" src="js/bPopup/jquery.bpopup.min.js"></script>
    	<!-- Chart.js -->
    	<script type="text/javascript" src="js/chart.js/Chart.js"></script>

    <!--     -->

    <!-- Fonts -->
    	<link href='http://fonts.googleapis.com/css?family=Exo:400,100,100italic,200,200italic' rel='stylesheet' type='text/css'>
    <!-- 	   -->
</head>

<body>
	<div id="popup">
		<i id="close_popup" class="fa fa-times-circle-o fa-2x"></i>
		<h1 class="text-center"><?php echo $Language['popup']; ?></h1>
		<h2 class="text-center"><?php echo $Language['popup-content']; ?></h2>
		<img src="./img/icons/keyboard_arrows.png" name="keyboard_arrows">
	</div>

	<div id="fullPage">
		<!-- Page 1 -->
		<div id="page1" class="section">			
			<div class="container-fluid">
				<div class="row">
					<nav class="navbar navbar-fixed-top cl-effect">
						<div class="info">
							<i class="fa fa-info-circle"></i>
						</div>
						<div class="container">
							<a class="page" name="1" href="#"><span data-hover=<?php echo "".$Language['nav'][0]['firstPage'].""; ?>><?php echo $Language['nav'][0]['firstPage']; ?></span></a>
							<a class="page" name="2" href="#"><span data-hover=<?php echo "".$Language['nav'][0]['secondPage'].""; ?>><?php echo $Language['nav'][0]['secondPage']; ?></span></a>
							<a class="page" name="3" href="#"><span data-hover=<?php echo "".$Language['nav'][0]['thirdPage'].""; ?>><?php echo $Language['nav'][0]['thirdPage']; ?></span></a>
							<a class="page" name="4" href="#"><span data-hover=<?php echo "".$Language['nav'][0]['fourthPage'].""; ?>><?php echo $Language['nav'][0]['fourthPage']; ?></span></a>
						</div>
						<div class="flags">
							<img src="./img/icons/deu.png" alt="german-flag-icon" name="german">
							<img src="./img/icons/gb.png" alt="english-flag-icon" name="english">
						</div>
						<hr>
					</nav>
				</div>
				<div class="row">
					<div id="about" class="col-md-4 col-md-offset-1">
						<h1 class="text-left animated bounceInDown"><?php echo $Language['about'][0]['h1']; ?></h1>	
						<h3 class="text-left"><?php echo $Language['about'][0]['h3']; ?></h3>
						<p class="text-left"><?php echo $Language['about'][0]['p']; ?></p>
						<br><br>
						<p class="text-left"><?php echo $Language['about'][0]['p-rotate']; ?></p>
						<hr>
						<div id="contactIcons">
							<a href="http://www.facebook.com/felix.koschmidder" target="_blank"><img src="./img/icons/facebook.png" name="facebook" alt="facebook"></a>
							<a href="mailto:felix.koschi@gmail.com" target="_blank"><img src="./img/icons/mail.png" name="email" alt="email"></a>
							<a href="http://fkoschi-nas.quickconnect.to/photo" target="_blank"><img src="./img/icons/photo.png" name="phone" alt="phone" target="_blank"></a>
						</div>
					</div>
					<div id="portrait" class="col-md-4 col-md-offset-1">
						<img src="./img/me.png" class="img" name="portrait">
					</div>
				</div>				
			</div>
		</div>
		<!-- Page 2 -->
		<div id="page2" class="section">
			<div id="anchor">
				<i class="fa fa-arrow-circle-up fa-2x"></i>
			</div>
			<nav class="navbar navbar-fixed-top cl-effect">
				<div class="container">
					<h3 class="text-center"><?php echo $Language['nav'][0]['secondPage']; ?></h3>								
				</div>
			</nav>
			<!-- Slide 1 -->
			<div id="slide1" class="slide">
				<div class="container-fluid">
					<div class="row">
						
					</div>
					<div id="content" class="row">
						<div class="col-md-2 col-md-offset-1">
							<p class="text-center">2001 -</p>
							<hr>
						</div>
						<div class="col-md-3">
							<img src="./img/education/MLS.jpg" class="img-thumbnail">
						</div>
						<div id="tags" class="col-md-4">
							<h1 class="text-left"><?php echo $Language['education'][0]['school']; ?></h1>
							<h3 class="text-left"><?php echo $Language['education'][0]['degree']; ?></h3>
							<p id="tags-description" class="text-left"><?php echo $Language['education'][0]['description']; ?></p>
							<p class="text-left emphases"><?php echo $Language['general'][0]['emphases']; ?>:</p>
							<button class="btn btn-default"><i class="fa fa-book"></i> English</button>
							<button class="btn btn-default"><i class="fa fa-book"></i> German</button>
							<button class="btn btn-default"><i class="fa fa-book"></i> Math</button>
							<button class="btn btn-default"><i class="fa fa-futbol-o"></i> Sports</button>
							<button class="btn btn-default"><i class="fa fa-heartbeat"></i> Biology</button>
							<button class="btn btn-default"><i class="fa fa-book"></i> History</button>						
						</div>
						<div class="col-md-1">	
							<p class="text-center">2009</p>
							<hr>
						</div>
					</div>
				</div>
			</div>
			<!-- Slide 2 -->
			<div id="slide2" class="slide">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-md-offset-1">
							<p class="text-center">2009 -</p>
							<hr>
						</div>
						<div class="col-md-3">
							<img src="./img/education/UCB.jpg" class="img-thumbnail">
						</div>
						<div id="tags" class="col-md-4">
							<h1 class="text-left"><?php echo $Language['education'][1]['school']; ?></h1>
							<h3 class="text-left"><?php echo $Language['education'][1]['degree']; ?></h3>
							<p id="tags-description" class="text-left"><?php echo $Language['education'][1]['description']; ?></p>
							<p class="text-left emphases"><?php echo $Language['general'][0]['emphases']; ?>:</p>
							<button class="btn btn-default"><i class="fa fa-video-camera"></i> Film</button>
							<button class="btn btn-default"><i class="fa fa-code"></i> Programming</button>
							<button class="btn btn-default"><i class="fa fa-calculator"></i> Math</button>
							<button class="btn btn-default"><i class="fa fa-flask"></i> Algorithm</button>
							<button class="btn btn-default"><i class="fa fa-magic"></i> Design</button>
							<button class="btn btn-default"><i class="fa fa-pie-chart"></i> Econimcs</button>
						</div>
						<div class="col-md-1">	
							<p class="text-center">2014</p>
							<hr>
						</div>
					</div>
				</div>
			</div>
			<!-- Slide 3 -->
			<div id="slide3" class="slide">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						
						</div>
					</div>
					<div class="col-md-2 col-md-offset-1">
						<p class="text-center">2013 -</p>
						<hr>
					</div>
					<div class="col-md-3">
						<img src="./img/education/DKIT.png" class="img-thumbnail">
					</div>
					<div id="tags" class="col-md-4">
						<h1 class="text-left"><?php echo $Language['education'][2]['school']; ?></h1>
						<h3 class="text-left"><?php echo $Language['education'][2]['degree']; ?></h3>
						<p id="tags-description" class="text-left"><?php echo $Language['education'][2]['description']; ?></p>
						<p class="text-left emphases"><?php echo $Language['general'][0]['emphases']; ?>:</p>
						<button class="btn btn-default"><i class="fa fa-picture-o"></i> Adobe Photoshop</button>
						<button class="btn btn-default"><i class="fa fa-video-camera"></i> Film</button>
						<button class="btn btn-default"><i class="fa fa-codepen"></i> 3D</button>
						<button class="btn btn-default"><i class="fa fa-magic"></i> Adobe InDesign</button>
						<button class="btn btn-default"><i class="fa fa-leanpub"></i> English</button>
						<button class="btn btn-default"><i class="fa fa-magic"></i> Creative Arts</button>
					</div>
					<div class="col-md-1">	
						<p class="text-center">2014</p>
						<hr>
					</div>
				</div>
			</div>
			<!-- Slide 4 -->
			<div id="slide4" class="slide">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-md-offset-1">
							<p class="text-center">2014 -</p>
							<hr>
						</div>
						<div class="col-md-3">
							<img src="./img/education/LMU.jpg" class="img-thumbnail">
						</div>
						<div id="tags" class="col-md-4">
							<h1 class="text-left"><?php echo $Language['education'][3]['school']; ?></h1>
							<h3 class="text-left"><?php echo $Language['education'][3]['degree']; ?></h3>
							<p id="tags-description" class="text-left"><?php echo $Language['education'][3]['description']; ?></p>
							<p class="text-left emphases"><?php echo $Language['general'][0]['emphases']; ?>:</p>
							<button class="btn btn-default"><i class="fa fa-lock"></i> it-security</button>
							<button class="btn btn-default"><i class="fa fa-mobile"></i> mobile communication</button>
							<button class="btn btn-default"><i class="fa fa-music"></i> multimedia</button>
							<button class="btn btn-default"><i class="fa fa-pencil"></i> art</button>							
						</div>
						<div class="col-md-1">	
							<p class="text-center">now</p>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Page 3 -->
		<div id="page3" class="section">
			<!-- Anchor -->
			<div id="anchor">
				<i class="fa fa-arrow-circle-up fa-2x"></i>
			</div>
			<!-- Navbar -->
			<nav class="navbar navbar-fixed-top cl-effect">
				<div class="container">
					<h3 class="text-center"><?php echo $Language['nav'][0]['thirdPage']; ?></h3>	
				</div>						
			</nav>
			<!-- SLide 1 -->
			<div id="slide1" class="slide">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 col-lg-1 col-lg-offset-0">
							<canvas id="mySkillsChart" width="700" height="500"></canvas>
						</div>
						<div id="skills-description" class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-4">
							<h3>Skills</h3>
							<ol>
								<li><span class="one"></span>Webentwicklung</li>
								<li class="info"><span class="info"></span>PHP, HTHML5, Javascript, CSS</li>
								
								<li><span class="two"></span>Database</li>
								<li class="info"><span class="info"></span>MySQL, MSSQL, MongoDB, PostgreSQL</li>

								<li><span class="three"></span>Intrexx</li>
								<li class="info"><span class="info"></span>Groovy, Prozesse, Applikationsentwicklung</li>

								<li><span class="four"></span>e-commerce</li>
								<li class="info"><span class="info"></span>Oxid eShop, Template Enignes, MVC, Newsletter Kampagnen</li>

								<li><span class="five"></span>App-Entwicklung</li>
								<li class="info"><span class="info"></span>Apple iOS, Microsoft Phone</li>

								<li><span class="six"></span>Gestaltung</li>
								<li class="info"><span class="info"></span>Photoshop, InDesign</li>

								<li><span class="seven"></span>Filmproduktion</li>
								<li class="info"><span class="info"></span>Dreh, Storyboard, post-production, After Effects</li>

								<li><span class="eight"></span>3D-Modellierung</li>
								<li class="info"><span class="info"></span>Autodesk 3ds Max, Cinema 4d</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- Slide 2 -->
			<div id="slide2" class="slide">
				<div class="container-fluid">
					<div class="row">
					
				</div>
				<div class="row">
					<div class="col-md-4 col-lg-3 col-lg-offset-1">
						<div class="thumbnail">
							<img src="./img/work/SD_256_128.png" class="img-thumbnail">
							<div class="caption">
								<h3><?php echo $Language['work'][0]['title']; ?></h3>
								<p class="job_title"><?php echo $Language['work'][0]['job title']; ?></p>
								<p><i class="fa fa-calendar-o"></i> <?php echo $Language['work'][0]['duration']; ?></p>
								<p class="description"><?php echo $Language['work'][0]['description']; ?></p>
								<p class="text-center link"><a href="http://www.aikme.de" class="text-center">www.aikme.de</a></p>
								<span class="label label-default">Oxid eShop</span>
								<span class="label label-default">Jira</span>
								<span class="label label-default">Google Analytics</span>
								<span class="label label-default">Trello</span>
								<span class="label label-default">Email Marketing</span>
								<span class="label label-default">Linux</span>
								<span class="label label-default">Pixi</span>
								<span class="label label-default">SEO</span>
							</div>
						</div>						
					</div>
					<div class="col-md-4 col-lg-4">
						<div class="thumbnail">
							<img src="./img/work/lindorff_256_128.png" class="img-thumbnail">
							<div class="caption"> 
								<h3><?php echo $Language['work'][1]['title']; ?></h3>
								<p class="job_title"><?php echo $Language['work'][1]['job title']; ?></p>
								<p><i class="fa fa-calendar-o"></i> <?php echo $Language['work'][1]['duration']; ?></p>
								<p class="description"><?php echo $Language['work'][1]['description']; ?></p>
								<p class="text-center link"><a href="http://www.lindorff.de" class="text-center">www.lindorff.de</a></p>
								<span class="label label-default">Batch</span>
								<span class="label label-default">Shell</span>
								<span class="label label-default">Webdevelopment</span>
								<span class="label label-default">Back End</span>
								<span class="label label-default">VBScript</span>
								<span class="label label-default">Bachelor Thesis</span>
							</div>
						</div>						
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="thumbnail">
							<img src="./img/work/Aikme_256_128.png" class="img-thumbnail">
							<div class="caption">
								<h3><?php echo $Language['work'][2]['title']; ?></h3>
								<p class="job_title"><?php echo $Language['work'][2]['job title']; ?></p>
								<p><i class="fa fa-calendar-o"></i> <?php echo $Language['work'][2]['duration']; ?></p>
								<p class="description"><?php echo $Language['work'][2]['description']; ?></p>
								<p class="text-center link"><a href="https://www.sd-consultants.de" class="text-center">www.sd-consultants.de</a></p>
								<span class="label label-default">Intrexx</span>
								<span class="label label-default">Jira</span>
								<span class="label label-default">CMS</span>
								<span class="label label-default">Contao</span>
							</div>
						</div>						
					</div>
				</div>
				</div>
			</div>			
				
		</div>		
		<!-- Page 4 -->
		<div id="page4" class="section">

			<div class="container-fluid">
				<div class="row">
					<div id="map" class="col-md-12"></div>
				</div>
    	  	 	<div id="contact" class="row">
   
    	  	 		<div class="row">
    	  	 			<h1 class="contactMe">Contact me</h1>
    	  	 		</div>
    	  	 		<div class="row">
    	  	 			<div id="contactFormLeft" class="col-md-4 col-sm-4 col-sm-offset-1 col-md-offset-1">
							<div id="name" class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
								<input class="form-control" type="text" name="contactInputName" placeholder="Name">
							</div>
							<div id="email" class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
								<input class="form-control" type="text" name="contactInputEmail" placeholder="Email">
							</div>		

    	    			</div>    	    			
    	    			<div id="contactFormRight" class="col-md-4 col-sm-4 col-md-offset-1 col-sm-offset-1">    	    			
	    	    			<div class="row">
	    	    				<textarea class="form-control" rows="5" name="contactMessage" placeholder="Leave your message here..."></textarea>
	    	    				<a id="send_feeback" class="btn btn-primary" href="#">
  									Abschicken	
  								</a>
	    	    			</div>	    	    			
    	    			</div>
						<!--     	    			
    	    			<div id="contactInfo" class="col-md-3">
    	    				<p>Oder so:</p>
    	    				<p><i class="fa fa-phone-square"></i> +49 152 02834262</p>    				
    	    				<p><i class="fa fa-envelope-o"></i><a href="mailto:felix.koschi@gmail.com"> felix.koschi@gmail.com</a></p>
    	    				<a href="http://www.facebook.com/felix.koschmidder"><img src="./img/icons/facebook.png" alt="facebook"></a>
    	    				<img src="./img/icons/flickr.png" alt="flickr">
    	    				<img src="./img/icons/pinterest.png" alt="pinterest">
    	    			</div>
    	    			 -->
    	    		</div>
    	    		<div id="copyright" class="row">
    	    			<div class="col-md-12">
    	    				<!-- Copyright -->
							<!-- <p class="text-center copy">&copy; Felix Koschmidder 2015</p> -->
    	    			</div>
    	    		</div>
    	   		</div>      	   		  	   		
    	   	</div>
		</div>
	</div>
	<div id="popup-email">
		<i class="fa fa-times-circle-o fa-2x"></i>
		<h1 class="text-center"><?php echo $Language['email-response']['header']; ?></h1>
	</div>
    <script type="text/javascript" src="./js/googleMaps.js"></script>
</body>

</html>
