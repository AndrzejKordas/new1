<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		<?php
        //tytul
        wp_title('|', true, 'right');
        //Dodanie nazy bloga
        bloginfo('name');
        ?>
    </title>
    <link rel="pingback" href="<?php wp_enqueue_style ('simple_v1',get_template_directory_uri() . '/style.css'); ?>">
	<?php	wp_head(); 	?>
  </head>
  <body>
  	<?php
	
	  $scieszka = get_template_directory_uri();
	?>
  	<div class="row top">
		<div class="container">	
			        
		<nav class="navbar navbar-expand-lg navbar-light">
		<a href="<?php echo home_url();?>"><img src="<?php echo $scieszka; ?>/images/logo.png" class="logo"></a>
		  
			<button class="navbar-toggler" style="background:#777" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
		<div class="collapse navbar-collapse" id="navbarNav">
			  <?php
              wp_nav_menu(array(
                  'theme-location'=>'TopMenu',	
                  'menu_class' => 'navbar-nav'
                  )
              );
              ?>
		  </div>
		</nav>
		</div>
	</div>