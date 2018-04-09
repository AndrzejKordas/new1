<?php get_header(); ?>  
<div class="container">
    <div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php
		/* Jeśli to strona kontakt */
		if ( is_page('kontakt') ) {
        echo "<h1>Formularz kontaktowy</h1>";
        }
        
		/* Jeśli to pojedyńcza treść czyli wpis albo strona */
		if( is_singular()){
        ?>
			<div class='col-md-12 text-center'>
            <h3><?php the_title(); ?></h3>
        	<?php the_post_thumbnail('thumbnail'); ?>
       		<?php  the_content(); ?>
        
        </div>
        <?php
		}
		else// w innym wypadku to przegląd wszystkich treści
		{
	    ?>    	
		<div class='col-md-4 text-center'>	
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
       	<a href="<?php the_permalink(); ?>"> <?php  the_excerpt(); ?></a>
        </div>
		<?php
			}
		?>
        

        <?php endwhile; else: ?>
        <h1>Nie znaleziono treści</h1>
        <?php endif; ?>
    </div><!--/row-->
</div><!--/container-->

<?php get_footer(); ?>    
    
