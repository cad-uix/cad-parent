<?php get_header(); ?>

<div class="container">

	<?php cad_breadcrumb(); ?>

	<div class="row">
		
		<main class="col-sm-8">

	     <?php get_template_part( 'inc/content', 'page' ); ?>

		</main>
		
		<aside class="col-sm-4">

			<?php get_sidebar(); ?>

		</aside>

	</div>

</div>

<?php get_footer(); ?>