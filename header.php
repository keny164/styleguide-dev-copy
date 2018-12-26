<!doctype html>
<html class="no-js styleguide" <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>

</head>

<body <?php body_class( 'styleguide_specific' ); ?>>
<div id="preloader">
	<div class="loader loader--style1" title="0">
		<svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
  <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
    s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
    c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/>
			<path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
    C22.32,8.481,24.301,9.057,26.013,10.047z">
				<animateTransform attributeType="xml"
								  attributeName="transform"
								  type="rotate"
								  from="0 20 20"
								  to="360 20 20"
								  dur="0.5s"
								  repeatCount="indefinite"/>
			</path>
  </svg>
	</div>
</div>
<script>
	jQuery(document).ready(function($) {

		$(window).load(function(){
			$('#preloader').fadeOut('slow',function(){$(this).remove();});
		});

	});
</script>

<?php if ( is_page_template( 'template-full-width.php' ) ) { ?>

	<header class="page-header" role="menubar">

		<nav class="documentation-sections">
			<ul>
				<?php start_top_nav(); ?>
			</ul>
		</nav>

	</header>

<?php } else{ ?>

	<header class="page-header" role="menubar">

		<nav class="documentation-sections">
			<ul>
				<?php start_top_nav(); ?>
			</ul>
		</nav>

	</header>

	<?php
	if ( 'api_doc' == get_post_type() ) {
		get_template_part( 'parts/template', 'documentation-sidenav-tree' );
	} else {
		get_template_part( 'parts/template', 'sidenav' );
	}
	 ?>

<?php } // end if is not template full width ?>
<main class="site-content">
