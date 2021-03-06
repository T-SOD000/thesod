<div id="top-area" class="top-area top-area-style-2 top-area-alignment-<?php echo esc_attr(thesod_get_option('top_area_alignment', 'left')); ?>">
	<div class="container">
		<div class="top-area-items inline-inside">
			<?php if(thesod_get_option('top_area_button_text')) : ?>
				<div class="top-area-block top-area-button"><?php thesod_button(array('href' => thesod_get_option('top_area_button_link'), 'text' => thesod_get_option('top_area_button_text'), 'size' => 'tiny', 'no-uppercase' => true), true); ?></div>
			<?php endif; ?>
			<?php if(has_nav_menu('top_area')) : ?>
				<div class="top-area-block top-area-menu">
					<nav id="top-area-menu">
						<?php wp_nav_menu(array('theme_location' => 'top_area', 'menu_id' => 'top-area-navigation', 'menu_class' => 'nav-menu styled inline-inside', 'container' => false, 'walker' => new thesod_walker_footer_nav_menu)); ?>
					</nav>
				</div>
			<?php endif; ?>
			<?php if(thesod_get_option('top_area_socials')) : ?>
				<div class="top-area-block top-area-socials<?php echo esc_attr(thesod_get_option('top_area_style') == 1 ? ' socials-colored-hover' : ''); ?>"><?php thesod_print_socials(); ?></div>
			<?php endif; ?>
			<?php if(thesod_get_option('top_area_contacts')) : ?>
				<div class="top-area-block top-area-contacts"><?php echo thesod_top_area_contacts(); ?></div>
			<?php endif; ?>
		</div>
	</div>
</div>