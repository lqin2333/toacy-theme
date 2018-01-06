<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php wp_head(); ?>
	</head>
	<body class="box-bg">
		<div class="boxed-layout">
			<header id="header" class="header">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<!-- Logo -->
							<div class="logo">
								<a href="/home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"></a>
							</div>
						</div>	<!--/ End Logo -->
						
						<div class="col-md-9 col-sm-9 col-xs-12">
							<!-- Header Widget -->
							<div class="header-widget">
								<!-- Single Widget -->
								<div class="single-widget">
									<?php dynamic_sidebar( 'header-widget-1' ); ?>
								</div>
								<!--/ End Single Widget -->
								<!-- Single Widget -->
								<div class="single-widget">
									<?php dynamic_sidebar( 'header-widget-2' ); ?>
								</div>
								<!--/ End Single Widget -->
								<!-- Single Widget -->
								<div class="single-widget">
									<?php dynamic_sidebar( 'header-widget-3' ); ?>
								</div>
								<!--/ End Single Widget -->
							</div>
							<!--/ End Header Widget -->
						</div>
					</div>
				</div>	

								<!-- Header Inner -->
				<div class="header-inner">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="nav-area">
									<!-- Main Menu -->
									<nav class="mainmenu">
										<div class="collapse navbar-collapse">	
											<?php 
												wp_nav_menu(array("menu_class" => "nav navbar-nav"));
											?>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>


