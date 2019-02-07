<?php
/**
 *  Displays archive entries with just featured image, title, category/tag, 
 * date posted and then the link
 */
 ?>



<article id="post-<?php the_ID(); ?>" <?php post_class( 'grid-layout-archive-item' ); ?> role="article">

	<header class="archive-item-header featured-image" itemprop="articleBody">
		<a href="<?php the_permalink() ?>" rel="bookmark"> <?php the_post_thumbnail( 'full' ); ?></a>
	</header> <!-- end article section -->

	<main class="archive-item-main">
		<div class="text-container">
			<h3 class="archive-item-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h3>
			<section class="component component-intro">
				<?php the_field( 'intro' ); ?>
			</section>
		</div>
	</main> <!-- end article header -->

	<footer class="archive-item-footer">
		<a href="<?php the_permalink() ?>" rel="bookmark"><span class="screen-reader-text"><?php the_title(); ?></span> <i class="fal fa-arrow-right"></i></i></a>
	</footer>
</article> <!-- end article -->

	