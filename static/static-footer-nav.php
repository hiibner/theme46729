<?php /* Static Name: Footer navigation */ ?>
<div>
	
		<?php if (has_nav_menu('footer_menu')) {
			if ( of_get_option('footer_menu') == 'true') { ?>  
			<h4>Navigation</h4>
			<nav class="nav footer-nav">
				<?php wp_nav_menu( array(
					'container'       => 'ul',
					'depth'           => 0,
					'theme_location' => 'footer_menu' 
					)); 
				?>
			</nav>
		<?php }
		}
	?>
</div>