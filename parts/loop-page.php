<article id="post-<?php the_ID(); ?>" <?php post_class('styleguide_style_block'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<section class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">

	</footer> <!-- end article footer -->

</article> <!-- end article --