<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

			<main id="main" class="main" role="main">

				<header>
					<?php start_the_archive_title( '<h1 class="page-title">', '</h1>', 'smaller'); ?>

				</header>

				<?php if ( have_posts() ) :
					echo '<section class="archive-grid">';
					while ( have_posts() ) : the_post(); ?>

						<?php 
							get_template_part( 'parts/loop', 'archive-full' );

							// get_template_part( 'parts/loop', 'archive-grid' ); // temp fix for ACF not showing all data
					
						?>

				<?php endwhile; ?>

					</section>

					<?php start_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

			</main> <!-- end #main -->
			

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>