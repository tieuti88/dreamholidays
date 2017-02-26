<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?=get_site_url()?>" type="text/css" media="all">
</head>
<body <?php body_class('template-homepage'); ?> >
<div class="container-fluid main-header">
	<header class="container">
		<div id="brand-header" class="row">
			<div id="logo" class="col-md-3 text-left">
				<div class="logo-container">
					<a href="/">
						<img class="image-logo" src="<?=get_site_url()?>/wp-content/uploads/2017/01/logo.png">
					</a>	
				</div>
			</div>
			<div id="utility" class="col-md-6 text-center">
				<div class="utility-container">
				</div>
			</div>
			<div id="user" class="col-md-3 text-right">
			<div class="user-container">
				<div id="brand-bar">
					<div class="container-fluid">
						<div class="row brand-bar-logos">
								<div class="col-md-12 no-padding">
									<a href="#"><img class="sheraton" src="<?=get_site_url()?>/wp-content/uploads/2017/01/logo-sheraton-gray.png"></a>
									<a href="#"><img class="westin" src="<?=get_site_url()?>/wp-content/uploads/2017/01/logo-westin-gray.png"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- menu -->
		 <nav class="menu" role="navigation">
		   	<?php ubermenu( 'main' , array( 'theme_location' => 'primary' ) ); ?>
		   	<div class="brand-navigation-info hidden-sm hidden-xs">
                  <a href="#" class="nav-logres">Login</a>
               </div>
		</nav>

	</header>
</div> 
