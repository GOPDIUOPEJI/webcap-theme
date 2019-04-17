<?php get_header(); ?>

<section id="primary" class="content-area">
	<div class="container">
		<div class="row">
			<main id="main" class="col-12 col-lg-9 site-main">

				<?php while ( have_posts() ) :
						the_post();

						// get_template_part( 'template-parts/content/content', 'page' );
						?>
						<div class="title"><h1><?php the_title(); ?></h1></div>
						<div class="content"><?php the_content(); ?></div> 

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}

					endwhile; // End of the loop.
				?>

			</main><!-- .site-main -->
			<?php get_sidebar('right_sidebar'); ?>
		</div>
	</div>
	
</section><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); 