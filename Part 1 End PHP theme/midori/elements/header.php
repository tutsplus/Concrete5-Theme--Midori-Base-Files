<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en-US"> <!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="<?php echo $this->getStyleSheet('css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen" type="text/css" />
	<link href="<?php echo $this->getStyleSheet('css/bootstrap-responsive.min.css'); ?>" rel="stylesheet" media="screen" type="text/css" />
	<link href="<?php echo $this->getStyleSheet('main.css'); ?>" rel="stylesheet" media="screen" type="text/css" />
	<link href="<?php echo $this->getStyleSheet('css/responsive.css'); ?>" rel="stylesheet" media="screen" type="text/css" />
	<?php Loader::element('header_required'); ?>

	<!-- IE9 & IE8 Specific Styles
    ================================================== -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <!-- Styles & Faux Font Fixing IE8 -->
    <!--[if IE 8]>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" media="screen" type="text/css" href="css/ie8.css" />
    <![endif]-->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,700,700italic" rel="stylesheet" type="text/css">
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/js/ddsmoothmenu.js"></script>
	
	<script type="text/javascript">
		/* Menu */
		ddsmoothmenu.init({
			mainmenuid: "mainmenu", //menu DIV id
			orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
			classname: 'span8 ddsmoothmenu', //class added to menu's outer DIV
			contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
		});	
	</script>
</head>	
<body>
	<div class="headertopwrap wide">
		<div class="headertop">
			<div class="row">
				<div class="span4 logo"><a href="#"><img src="<?php echo $this->getThemePath(); ?>/images/logo.png" alt="" /></a>&nbsp;</div>
				<div class="span8" id="mainmenu">
					<ul id="menu-navigation" class="menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">Pages</a>
							<ul class="sub-menu">
								<img src="<?php echo $this->getThemePath(); ?>/images/top.png" class="toparrowclass" />
								<li><a href="#">About</a></li>
								<li><a href="#">Pricing</a></li>
								<li><a href="#">Clients</a></li>
								<li><a href="#">Full-Width Page</a></li>
								<li><a href="#">Sidebar Left Page</a></li>
								<li><a href="#">Sidebar Right Page</a></li>
								<li><a href="#">Page With Slider</a>
									<ul class="sub-menu">
										<li><a href="#">Page Link</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="row mobilemenu">
					<form id="responsive-menu" action="#" method="post">
						<select>
							<option value="">Navigation</option>
							<option value="#">Home</option>
							<option value="#">Pages</option>
							<option value="#">&nbsp;&nbsp;&nbsp;About</option>
							<option value="#">&nbsp;&nbsp;&nbsp;Pricing</option>
							<option value="#">&nbsp;&nbsp;&nbsp;Clients</option>
							<option value="#">&nbsp;&nbsp;&nbsp;Full-Width Page</option>
							<option value="#">&nbsp;&nbsp;&nbsp;Sidebar Left Page</option>
							<option value="#">&nbsp;&nbsp;&nbsp;Sidebar Right Page</option>
							<option value="#">&nbsp;&nbsp;&nbsp;Page With Slider</option>
							<option value="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Page Link</option>
							<option value="#">Blog</option>
							<option value="#">Contact</option>
						</select>
					</form>
				</div>
			</div>
		</div>
	</div>