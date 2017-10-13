<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/carousel.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/owl.carousel.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				
				var owl = $("#owl-demo");
				
				owl.owlCarousel({
					
					items :4, //10 items above 1000px browser width
					itemsDesktop : [1000,4], //5 items between 1000px and 901px
					itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
					itemsTablet: [600,2], //2 items between 600 and 0;
					itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
					
				});
				
				// Custom Navigation Events
				$(".next").click(function(){
					owl.trigger('owl.next');
				})
				$(".prev").click(function(){
					owl.trigger('owl.prev');
				})
				
			});
		</script>
		<script type="text/javascript">
			// Login Form
			$(function() {
				var button = $('#loginButton');
				var box = $('#loginBox');
				var form = $('#loginForm');
				button.removeAttr('href');
				button.mouseup(function(login) {
					box.toggle();
					button.toggleClass('active');
				});
				form.mouseup(function() { 
					return false;
				});
				$(this).mouseup(function(login) {
					if(!($(login.target).parent('#loginButton').length > 0)) {
						button.removeClass('active');
						box.hide();
					}
				});
			});
		</script>
	</head>
	<body>
		<!-- Start Header -->
		<div class="header">	
   	 	    <div class="header-top">
				<div class="wrap"> 
					<div class="header-top-left">
						<p>Support: +0123456789</p>
					</div>
					<div class="header-top-right">
				        <ul>
				            <li><a href"#"><i class="fa fa-comments"></i>Sales Chat</a></li>
				            <li  class="login">
								<div id="loginContainer">
									<a href="#" id="loginButton"><span><i class="fa fa-lock"></i>Login</span></a>
									<div id="loginBox" class="login-form">    
										<h3>Login into Your Account</h3>            
										<form id="loginForm">
											<span>
												<i><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/user.png" alt="" /></i>
												<input type="text" value="yourname@mail.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yourname@mail.com';}">
											</span>
											<span>
												<i><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/lock.png" alt="" /></i>
												<input type="password" value="........." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '.........';}">
											</span>
											<input type="submit" value="Login">
										</form>
									</div>
								</div>
							</li>
							<li><a href="#" ><i class="fa fa-sign-in"></i>Sign Up</a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div> 
			</div>
			<div class="header-logo-nav">
				<div class="navbar navbar-inverse navbar-static-top nav-bg" role="navigation">
					<div class="container">
				        <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="logo"> <a class="navbar-brand" href="<?php echo Yii::app()->baseUrl;?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" alt="" /></a></div>
							<div class="clear"></div>
						</div>
				        <div class="collapse navbar-collapse">
							<?php $this->widget('zii.widgets.CMenu',array(
								'items'=>array(
								array('label'=>'Home', 'url'=>array('/site/index')),
								array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
								array('label'=>'Contact', 'url'=>array('/site/contact')),
								array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
								array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
								),
								'htmlOptions'=>array('class'=>'menu nav navbar-nav')
							)); ?>
						</div><!--/.nav-collapse -->
					</div>
				</div>
				<div class="clear"></div>
			</div>
			
			<?php 
				if((Yii::app()->controller->id =='site') && Yii::app()->controller->action->id =='index'){
				?>
				<div class="header-banner">
					
					<!-- Carousel ================================================== -->
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<div class="wrap">
							<div class="carousel-inner">
								<div class="item active">
									<div class="row">
										<div class="col-md-6">
											<div class="banner-desc">
												<h2>Download the Original HTML Template from W3Layouts</h2>
												<ul>
													<li><span><i class="fa fa-chevron-right"></i>Responsive</span></li>
													<li><span><i class="fa fa-chevron-right"></i>For Free !!</span></li>
												</ul>
												<div class="see-features"><a href="https://w3layouts.com/open-cloud-web-hosting-flat-bootstrap-responsive-web-template/">DOWNLOAD</a></div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="banner-img">
												<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/devices.png" alt="First slide" />
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									
									<div class="row">
										<div class="col-md-6">
											<div class="banner-img">
												<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/devices.png" alt="First slide" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="banner-desc">
												<h2>Get the right cloud for you app.</h2>
												<ul>
													<li><span><i class="fa fa-chevron-right"></i>more than 12,3456 clients trust us</span></li>
													<li><span><i class="fa fa-chevron-right"></i>24/7 support</span></li>
													<li><span><i class="fa fa-chevron-right"></i>performance, reliability, security</span></li>
													<li><span><i class="fa fa-chevron-right"></i>Flexible contracts</span></li>
												</ul>
												<div class="see-features"><a href="#">See Features</a></div>
											</div>
										</div>
									</div>
								</div>
								</div>
								</div>
								<a class="left carousel-control left-arrow" href="#myCarousel" data-slide="prev"><span><i class="fa fa-chevron-left"></i></span></a>
								<a class="right carousel-control right-arrow" href="#myCarousel" data-slide="next"><span><i class="fa fa-chevron-right"></i></span></a>
								</div><!-- /.carousel -->
			</div>
			<span class="big-arrow"></span>
		<?php  } ?>
	</div>
	<!-- End Header -->
	
	<!-- Start Main Content -->
	<?php echo $content; ?>
	<!-- End Main Content -->
	
	<!-- Start Footer -->
	<span class="footer-arrow"></span>
	<div class="footer">	  
		<div class="wrap">	      
			<div class="row">
				<div class="col-lg-6">
					<h2>About Open Cloud</h2>
					<p>Vivamus non elementum enim. Vestibulum fringilla placerat vestibulum. Donec consequat scelerisque lorem, quis laoreet tortor dapibus nec. Duis sodales quis odio quis pretium. Etiam auctor sollicitudin enim. Duis tempus semper sodales. </p>
					<?php $this->widget('zii.widgets.CMenu',array(
						'items'=>array(
								array('label'=>'Home', 'url'=>array('/site/index')),
								array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
								array('label'=>'Contact', 'url'=>array('/site/contact')),
								array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
								array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
								),
								'htmlOptions'=>array('class'=>'links')
							)); ?>
				</div>
				<div class="col-lg-6">
					<h2>Products</h2>
					<div class="products-list">
						<ul>
							<li><a href="#"><i class="fa fa-chevron-right"></i> Private cloud  </a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i>  DEDICATED SERVER    </a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i>  Hybrid cloud</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i> support </a></li>
						</ul>
						<ul>	                         
							<li><a href="#"><i class="fa fa-chevron-right"></i> dedicated hosting</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i> email hosting </a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i> solutions</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i> Knowledge Center</a></li>
						</ul>
						<div class="clear"></div>
					</div>
					<div class="subscribe">
						<form>
							<input type="text" placeholder="youremail@domain.com" />
							<input type="submit" value="Subscribe" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="wrap">
			<div class="copy-right">
				<p>Open cloud Copyright 2017 all right reserved. |  Template by  <a href="http://w3layouts.com" target="_blank">w3layouts</a> | Developed by  <a href="http://techdefeat.com" target="_blank">Fareed</a></p>
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-rss"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<!-- End Footer -->
</body>
</html>