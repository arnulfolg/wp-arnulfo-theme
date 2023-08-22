<?php
/**
 * Hero Image
 *
 * This pattern is used only for translation
 * and to reference a dynamic image URL. It does
 * not appear in the inserter.
 */
return array(
	'title'    => __( 'Hero Image', 'arnulfotheme' ),
	'inserter' => false,
	'content'  => '
				<picture class="hero_image">
					<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/blog_hero_image.jpg" alt="">
				</picture>',
);

