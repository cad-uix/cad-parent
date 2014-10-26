<?php get_header(); ?>
	
	<main class="container">
	
	<?php cad_breadcrumb(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="page-header">
  				<?php the_title( '<h1>', '</h1>' ); ?>
			</div>
			
			<div class="entry">

				<?php the_content(); ?>

			</div>

		</article>

		<?php endwhile; endif; ?>
	
	</main>

<?php get_footer(); ?>
